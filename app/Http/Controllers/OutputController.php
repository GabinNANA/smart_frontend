<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class OutputController extends Controller
{
    public function index(){
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        $outputs = json_decode($client->request('GET', 'outputs')->getbody(),true);

        return view('output.home',compact('outputs'));
    }
    
    public function add(){
        return view('output.add');
    }
    public function edit($id){
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);

        $output = json_decode($client->request('GET', 'outputs/'.$id)->getbody(),true);

        return view('output.edit',compact('output'));
    }
    public function store(Request $request)
    {
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);

        $response = $client->request('POST', 'outputs', [
            'form_params' => [
                'titre' => $request->idcategorie,
                'classement' => $request->classement,
                'standard' => $request->standard,
                'livrable' => $request->livrable,
                'validite' => $request->validite,
                'delai' => $request->delai,
                'cout_etude' => $request->cout_etude,
                'frais_admin' => $request->frais_admin,
                'penalite' => $request->penalite
            ],
        ]);
        return redirect()->back()->with('success', 'Output créé avec succès!');
    }
}
