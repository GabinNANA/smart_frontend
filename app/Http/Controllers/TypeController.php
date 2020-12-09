<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TypeController extends Controller
{
    public function index(){
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        $types = json_decode($client->request('GET', 'types')->getbody(),true);

        return view('type.home',compact('types'));
    }
    public function add(){
        return view('type.add');
    }

    public function edit($id){
        
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        
        $type = json_decode($client->request('GET', 'types/'.$id)->getbody(),true);

        return view('type.edit',compact('type'));
    }

    public function store(Request $request)
    {
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);

        $response = $client->request('POST', 'types', [
            'form_params' => [
                'label' => $request->intitule
            ],
        ]);

        return redirect()->back()->with('success', 'type créée avec succès!');
    }

    public function update(Request $request, $id)
    {
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);

        $response = $client->request('PUT', 'types/'.$id, [
            'form_params' => [
                'label' => $request->intitule
            ],
        ]);

        return redirect()->back()->with('success', 'type modifiée avec succès!');

    }
    public function destroy($id)
    {
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        
        $response = $client->request('DELETE', 'types/'.$id);

        return redirect()->back()->with('success', 'type supprimée avec succès!');
    }
}
