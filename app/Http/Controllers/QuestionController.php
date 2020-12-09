<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class QuestionController extends Controller
{
    public function index(){
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        
        $questions = json_decode($client->request('GET', 'questions')->getbody(),true);

        return view('question.home',compact('questions'));
    }
    public function add(){
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        
        $types = json_decode($client->request('GET', 'types')->getbody(),true);

        return view('question.add',compact('types'));
    }

    public function edit($id){
        
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        
        $types = json_decode($client->request('GET', 'types')->getbody(),true);

        $question = json_decode($client->request('GET', 'questions/'.$id)->getbody(),true);

        return view('question.edit',compact('question','types'));
    }

    public function store(Request $request)
    {
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);

        $response = $client->request('POST', 'questions', [
            'form_params' => [
                'idtype' => $request->idtype,
                'intitule' => $request->intitule,
                'type' => $request->type,
                'obligatoire' => $request->obligatoire,
            ],
        ]);
        $question = json_decode($response->getBody(), true);
        
        if($request->tailleTab!=0){
            for ($i=1; $i <=$request->tailleTab ; $i++) { 
                $responses = $client->request('POST', 'propositions', [
                    'form_params' => [
                        'idquestion' => $question['question']['id'],
                        'choix' => $request['choix'.$i]
                    ],
                ]);
            }
        }

        return redirect()->back()->with('success', 'question créée avec succès!');
    }

    public function update(Request $request, $id)
    {
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);

        $response = $client->request('PUT', 'questions/'.$id, [
            'form_params' => [
                'idtype' => $request->idtype,
                'intitule' => $request->intitule,
                'type' => $request->type,
                'obligatoire' => $request->obligatoire,
            ],
        ]);
        $response = $client->request('DELETE', 'questionsprop/'.$id);

        if($request->tailleTab!=0){
            for ($i=1; $i <=$request->tailleTab ; $i++) { 
                $responses = $client->request('POST', 'propositions', [
                    'form_params' => [
                        'idquestion' => $id,
                        'choix' => $request['choix'.$i]
                    ],
                ]);
            }
        }
        return redirect()->back()->with('success', 'question modifiée avec succès!');

    }
    public function destroy($id)
    {
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        
        $response = $client->request('DELETE', 'questions/'.$id);

        return redirect()->back()->with('success', 'question supprimée avec succès!');
    }
}
