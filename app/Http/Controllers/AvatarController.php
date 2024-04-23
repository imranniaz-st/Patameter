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
    $server_ip = $request->input('server_ip');
    $agent_name = $request->input('agent_name');
    $smoker = $request->input('smoker');
    $age = $request->input('age');
    $verifier_name = $request->input('verifier_name');
    $dailer_no = $request->input('dailer_no');
    $list_id = $request->input('list_id');
    $recording_filename = $request->input('recording_filename');
    $phone_number = $request->input('phone_number');
    $campaign = $request->input('campaign');
    $closer = $request->input('closer');
    $group_a = $request->input('group_a');
    $dispo = $request->input('dispo');
    $recording_id = $request->input('recording_id');
    $entry_list_id = $request->input('entry_list_id');
    $user_group = $request->input('user_group');
    $list_name = $request->input('list_name');
    $list_description = $request->input('list_description');
    $entry_date = $request->input('entry_date');
    $closer_name = $request->input('closer_name');
    $dialername = $request->input('dialername');
    $centername = $request->input('centername');
    $recording_link = $request->input('recording_link');

    // Return the view with the form and the pre-filled data
    return view('display', compact('agents', 'verifiers', 'agent_id', 'lead_id', 'center', 'server_ip', 'agent_name', 'smoker', 'age', 'verifier_name', 'dailer_no', 'list_id', 'recording_filename', 'phone_number', 'campaign', 'closer', 'group_a', 'dispo', 'recording_id', 'entry_list_id', 'user_group', 'list_name', 'list_description', 'entry_date', 'closer_name', 'dialername', 'centername'));
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
        // dd($request->all());
        // Create a new AvatarLead instance
        $avatarLead = new AvatarLead;
        $avatarLead->agent_id = $request->agent_id;
        $avatarLead->agent_name = $request->agent_name;
        $avatarLead->smoker = $request->smoker;
        $avatarLead->age = $request->age;
        $avatarLead->verifier_name = $request->verifier_name;
        $avatarLead->dailer_no = $request->dailer_no;
        $avatarLead->center = $request->center;
        $avatarLead->lead_id = $request->lead_id;
        $avatarLead->list_id = $request->list_id;
        $avatarLead->recording_filename = $request->recording_filename;
        $avatarLead->phone_number = $request->phone_number;
        $avatarLead->campaign = $request->campaign;
        $avatarLead->closer = $request->closer;
        $avatarLead->group_a = $request->group_a;
        $avatarLead->server_ip = $request->server_ip;
        $avatarLead->dispo = $request->dispo;
        $avatarLead->recording_id = $request->recording_id;
        $avatarLead->entry_list_id = $request->entry_list_id;
        $avatarLead->user_group = $request->user_group;
        $avatarLead->list_name = $request->list_name;
        $avatarLead->list_description = $request->list_description;
        $avatarLead->entry_date = $request->entry_date;
        $avatarLead->closer_name = $request->closer_name;
        $avatarLead->dialername = $request->dialername;
        $avatarLead->centername = $request->centername;
        $avatarLead->xferSubmission = $request->xferSubmission;
        $avatarLead->recording_link = $request->recording_link;
    
        // Construct and save the recording link
        
      
    
        // Save the AvatarLead instance to the database
        $avatarLead->save();
    
        // Redirect back to the form with a success message
        return redirect()->route('display', ['lead_id' => $request->lead_id])->with('success', 'Avatar lead created successfully.');
    }
    

    // Other methods...

    

    

    // Other methods for showing, editing, updating, and deleting resources
}

 