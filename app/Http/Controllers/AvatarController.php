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
    $agent_id = $request->input('fullname');
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
    // Create a new AvatarLead instance
    $avatarLead = new AvatarLead;
    $avatarLead->agent_id = $request->agent_id;
    $avatarLead->agent_name = $request->agent_name;
    // $avatarLead->fullname = $request->fullname;
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
    
    // Add missing parameters
    $avatarLead->vendor_id = $request->vendor_id;
    $avatarLead->gmt_offset_now = $request->gmt_offset_now;
    $avatarLead->phone_code = $request->phone_code;
    $avatarLead->title = $request->title;
    $avatarLead->first_name = $request->first_name;
    $avatarLead->middle_initial = $request->middle_initial;
    $avatarLead->last_name = $request->last_name;
    $avatarLead->address1 = $request->address1;
    $avatarLead->address2 = $request->address2;
    $avatarLead->address3 = $request->address3;
    $avatarLead->city = $request->city;
    $avatarLead->state = $request->state;
    $avatarLead->province = $request->province;
    $avatarLead->postal_code = $request->postal_code;
    $avatarLead->country_code = $request->country_code;
    $avatarLead->gender = $request->gender;
    $avatarLead->date_of_birth = $request->date_of_birth;
    $avatarLead->alt_phone = $request->alt_phone;
    $avatarLead->email = $request->email;
    $avatarLead->security_phrase = $request->security_phrase;
    $avatarLead->comments = $request->comments;
    $avatarLead->user = $request->user;
    $avatarLead->pass = $request->pass;
    $avatarLead->orig_pass = $request->orig_pass;
    $avatarLead->phone_login = $request->phone_login;
    $avatarLead->original_phone_login = $request->original_phone_login;
    $avatarLead->phone_pass = $request->phone_pass;
    $avatarLead->fronter = $request->fronter;
    $avatarLead->channel_group = $request->channel_group;
    $avatarLead->SQLdate = $request->SQLdate;
    $avatarLead->epoch = $request->epoch;
    $avatarLead->uniqueid = $request->uniqueid;
    $avatarLead->customer_zap_channel = $request->customer_zap_channel;
    $avatarLead->customer_server_ip = $request->customer_server_ip;
    $avatarLead->SIPexten = $request->SIPexten;
    $avatarLead->session_id = $request->session_id;
    $avatarLead->dialed_number = $request->dialed_number;
    $avatarLead->dialed_label = $request->dialed_label;
    $avatarLead->source_id = $request->source_id;
    $avatarLead->rank = $request->rank;
    $avatarLead->owner = $request->owner;
    $avatarLead->camp_script = $request->camp_script;
    $avatarLead->in_script = $request->in_script;
    $avatarLead->in_script_two = $request->in_script_two;
    $avatarLead->script_width = $request->script_width;
    $avatarLead->script_height = $request->script_height;
    $avatarLead->agent_email = $request->agent_email;
    $avatarLead->recording_filename = $request->recording_filename;
    $avatarLead->recording_id = $request->recording_id;
    $avatarLead->user_custom_one = $request->user_custom_one;
    $avatarLead->user_custom_two = $request->user_custom_two;
    $avatarLead->user_custom_three = $request->user_custom_three;
    $avatarLead->user_custom_four = $request->user_custom_four;
    $avatarLead->user_custom_five = $request->user_custom_five;
    $avatarLead->preset_number_a = $request->preset_number_a;
    $avatarLead->preset_number_b = $request->preset_number_b;
    $avatarLead->preset_number_c = $request->preset_number_c;
    $avatarLead->preset_number_d = $request->preset_number_d;
    $avatarLead->preset_number_e = $request->preset_number_e;
    $avatarLead->preset_dtmf_a = $request->preset_dtmf_a;
    $avatarLead->preset_dtmf_b = $request->preset_dtmf_b;
    $avatarLead->did_id = $request->did_id;
    $avatarLead->did_extension = $request->did_extension;
    $avatarLead->did_pattern = $request->did_pattern;
    $avatarLead->did_description = $request->did_description;
    $avatarLead->closecallid = $request->closecallid;
    $avatarLead->xfercallid = $request->xfercallid;
    $avatarLead->agent_log_id = $request->agent_log_id;
    $avatarLead->called_count = $request->called_count;
    $avatarLead->email_row_id = $request->email_row_id;
    $avatarLead->inOUT = $request->inOUT;
    $avatarLead->LOGINvarONE = $request->LOGINvarONE;
    $avatarLead->LOGINvarTWO = $request->LOGINvarTWO;
    $avatarLead->LOGINvarTHREE = $request->LOGINvarTHREE;
    $avatarLead->LOGINvarFOUR = $request->LOGINvarFOUR;
    $avatarLead->LOGINvarFIVE = $request->LOGINvarFIVE;
    $avatarLead->hide_relogin_fields = $request->hide_relogin_fields;
    $avatarLead->web_vars = $request->web_vars;
    $avatarLead->session_name = $request->session_name;

    // Save the AvatarLead instance to the database
    $avatarLead->save();

    // Redirect back to the form with a success message
    return redirect()->route('display', ['lead_id' => $request->lead_id])->with('success', 'Avatar lead created successfully.');
}

    

    // Other methods...

    

    

    // Other methods for showing, editing, updating, and deleting resources
}

 