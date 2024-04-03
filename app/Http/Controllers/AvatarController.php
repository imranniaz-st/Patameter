<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Assuming you have a User model
use App\Models\AvatarLead; // Assuming you have an AvatarLead model

class AvatarController extends Controller  
{ 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }
    /**
 * Show the form for creating a new resource.
 */
public function create(Request $request)
{
    // Fetch necessary data for the form, such as agents and verifiers
    $agents = User::where('type', 'avatar')->pluck('name', 'id');
    $verifiers = User::where('type', 'Closer')->pluck('name', 'id');

    // You can check if the parameters exist in the request
    // If they exist, you can pre-fill the form fields
    $agent_id = $request->input('agent_id');
    $lead_id = $request->input('lead_id');
    $center = $request->input('center');

    // Return the view with the form and the pre-filled data
    return view('avatar.create', compact('agents', 'verifiers', 'agent_id', 'lead_id', 'center'));
}


    /**
     * Show the form for creating a new resource.
     */
    // Remove the duplicate method declaration
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        // $validatedData = $request->validate([
        //     'agent_id' => 'required',
        //     'lead_id' => 'required',
        //     'dialer_id' => 'required',
        //     'AGE' => 'required',
        //     'Smoker' => 'required',
        //     'verifier' => 'required',
        //     'center' => 'required',
        //     'phone_number' => 'required',
        //     'link' => 'required',
        // ]);

        // Logic for storing the newly created resource
        // For example:
        // AvatarLead::create($validatedData);
        $closedCall = new AvatarLead;
        $closedCall->agent_id = $request->agent_id;
        $closedCall->lead_id = $request->lead_id;
        $closedCall->dialer_id = $request->dialer_id;
        $closedCall->AGE = $request->AGE;
        $closedCall->Smoker = $request->Smoker;
        $closedCall->verifier = $request->verifier;
        $closedCall->center = $request->center;
        $closedCall->phone_number = $request->phone_number;
        $closedCall->link = $request->link;
        $closedCall->save();

        // Redirect to a success page or route
        return redirect()->route('welcome')->with('success', 'Avatar lead created successfully.');
    }

    

    // Other methods for showing, editing, updating, and deleting resources
}
