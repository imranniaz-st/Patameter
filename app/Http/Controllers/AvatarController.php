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
    $closedCall = new AvatarLead;
    $closedCall->agent_id = $request->agent_id;
    $closedCall->lead_id = $request->lead_id;
    $closedCall->dailer_no = $request->dailer_no;
    $closedCall->age = $request->AGE;
    
    // Convert 'No' to 0 (false) and 'Yes' to 1 (true) for the smoker field
    $closedCall->smoker = $request->Smoker === 'Yes' ? 1 : 0;
    
    $closedCall->verifier_name = $request->verifier_name;
    $closedCall->center = $request->center;

    // Assuming you have a User model with 'name' field
    // You can fetch the agent name from the User model using agent_id
    $agent = User::find($request->agent_id);
    if ($agent) {
        $closedCall->agent_name = $agent->name;
    } else {
        // If agent_id is not valid, you may handle this case accordingly
        // For example, you may set a default agent name or throw an error
        $closedCall->agent_name = 'Unknown Agent';
    }

    $closedCall->save();

    // Redirect to a success page or route
    return redirect()->route('welcome')->with('success', 'Avatar lead created successfully.');
}

    

    

    // Other methods for showing, editing, updating, and deleting resources
}

 