<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function method1(){
        return "Method 1 executed successfully!";
    }

    public function accueil(){
        $userName = 'John Doe';
        $numeros = ['1','2','3'];
        return view('accueil', [
            'name'=>$userName,
            'nums'=>$numeros
        ]);
    }

    public function UserName($id){
        return "Bonjour, $id";
    }
}
