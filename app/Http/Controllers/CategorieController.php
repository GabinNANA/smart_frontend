<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CategorieController extends Controller
{
    public function index(){
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        $categories = json_decode($client->request('GET', 'categories')->getbody(),true);

        return view('categorie.home',compact('categories'));
    }
    public function add(){

        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        $categories = json_decode($client->request('GET', 'categories')->getbody(),true);
        return view('categorie.add',compact('categories'));
    }

    public function edit($id){
        
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);

        $categories = json_decode($client->request('GET', 'categories')->getbody(),true);
        $cat = json_decode($client->request('GET', 'categories/'.$id)->getbody(),true);

        return view('categorie.edit',compact('categories','cat'));
    }

    public function store(Request $request)
    {
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);

        $response = $client->request('POST', 'categories', [
            'form_params' => [
                'idparent' => $request->idparent,
                'intitule' => $request->intitule
            ],
        ]);

        return redirect()->back()->with('success', 'categorie créée avec succès!');
    }

    public function update(Request $request, $id)
    {
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);

        $response = $client->request('PUT', 'categories/'.$id, [
            'form_params' => [
                'idparent' => $request->idparent,
                'intitule' => $request->intitule
            ],
        ]);

        return redirect()->back()->with('success', 'categorie modifiée avec succès!');

    }
    public function destroy($id)
    {
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        
        $response = $client->request('DELETE', 'categories/'.$id);

        return redirect()->back()->with('success', 'categorie supprimée avec succès!');
    }
}
