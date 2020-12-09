<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HabitationController extends Controller{

    public function index(){
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        $habitations = json_decode($client->request('GET', 'habitations')->getbody(),true);

        return view('habitation.home',compact('habitations'));
    }

    public function add(){
        return view('habitation.add');
    }

    public function edit($id){
        
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        $habitations = json_decode($client->request('GET', 'habitations/'.$id)->getbody(),true);

        return view('habitation.edit',compact('habitations'));
    }

    public function store(Request $request)
    {
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);

        $response = $client->request('POST', 'habitations', [
            'form_params' => [
                'intitule' => $request->intitule
            ],
        ]);

        return redirect()->back()->with('success', 'Habitation créée avec succès!');
    }

    public function update(Request $request, $id)
    {
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);

        $response = $client->request('PUT', 'habitations/'.$id, [
            'form_params' => [
                'intitule' => $request->intitule,
            ],
        ]);

        return redirect()->back()->with('success', 'Habitation modifiée avec succès!');

    }
    public function destroy($id)
    {
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        
        $response = $client->request('DELETE', 'habitations/'.$id);

        return redirect()->back()->with('success', 'Habitation supprimée avec succès!');
    }
}