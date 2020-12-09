<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PropositionController extends Controller
{
    public function index(){
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        
        $questions = json_decode($client->request('GET', 'questionsprop')->getbody(),true);

        return view('proposition.home',compact('questions'));
    }

    public function add(){
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        
        $questions = json_decode($client->request('GET', 'questions')->getbody(),true);

        $categories = json_decode($client->request('GET', 'categories')->getbody(),true);

        return view('proposition.add',compact('questions','categories'));
    }

    public function edit($id){
        
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        
        $questions = json_decode($client->request('GET', 'questions')->getbody(),true);

        $proposition = json_decode($client->request('GET', 'propositions/'.$id)->getbody(),true);

        $categories = json_decode($client->request('GET', 'categories')->getbody(),true);

        return view('proposition.edit',compact('proposition','categories','questions'));
    }

    public function store(Request $request)
    {
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);

        $response = $client->request('POST', 'propositions', [
            'form_params' => [
                'idcategorie' => $request->idcategorie,
                'idquestion' => $request->idquestion,
                'choix' => $request->choix
            ],
        ]);
        return redirect()->back()->with('success', 'Proposition créée avec succès!');
    }

    public function update(Request $request, $id)
    {
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);

        $response = $client->request('PUT', 'propositions/'.$id, [
            'form_params' => [
                'idcategorie' => $request->idcategorie,
                'idquestion' => $request->idquestion,
                'choix' => $request->choix
            ],
        ]);

        return redirect()->back()->with('success', 'proposition modifiée avec succès!');

    }

    public function destroy($id)
    {
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        
        $response = $client->request('DELETE', 'propositions/'.$id);

        return redirect()->back()->with('success', 'proposition supprimée avec succès!');
    }
}
