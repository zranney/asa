<?php

namespace App\Http\Controllers;
use App\Models\Calendrier_event;
use Illuminate\Http\Request;

class CalendrierController extends Controller
{
    //
    public function calendar(){
        $calendrier_event=Calendrier_event::all();
        return view('calendrier', compact('calendrier_event'));
    }
}
