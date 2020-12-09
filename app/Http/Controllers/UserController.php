<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class UserController extends Controller
{
    public function index(){
        $client = new Client(['base_uri' => 'http://localhost:8200/api/']);
        $users = json_decode($client->request('GET', 'users')->getbody(),true);

        return view('utilisateur.home',compact('users'));
    }
}
