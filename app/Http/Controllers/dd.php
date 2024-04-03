<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\AvatarLead;

class AvatarController extends \Illuminate\Routing\Controller
{
    public function store(Request $request)
    {
        $request->validate([
             
            'agent_id' =>'required',
            'lead_id' =>'required',
            'dialer_id' =>'required',
            'AGE' =>'required',
            'Smoker' =>'required',
           'verifier' =>'required',
            'center' =>'required',

        ]);
         
    }
}