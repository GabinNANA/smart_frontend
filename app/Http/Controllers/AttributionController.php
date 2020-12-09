<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AttributionController extends Controller
{
    public function index(){
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        $habitations = json_decode($client->request('GET', 'habitations')->getbody(),true);
        $questions = json_decode($client->request('GET', 'attributions')->getbody(),true);

        return view('attribution.home',compact('habitations','questions'));
    }

    public function store(Request $request)
    {
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);

        $response = $client->request('POST', 'attributions', [
            'form_params' => [
                'idquestion' => $request->idquestion,
                'idhabitation' => $request->idhabitation,
                'etat' => $request->etat,
            ],
        ]);
        return redirect()->back()->with('success', 'question créée avec succès!');
    }
    public function destroy($id)
    {
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        
        $response = $client->request('DELETE', 'attributions/'.$id);

        return redirect()->back()->with('success', 'attribution supprimée avec succès!');
    }
}
