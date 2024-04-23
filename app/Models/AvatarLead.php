<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvatarLead extends Model
{
    protected $fillable = [
        'agent_id',
        'agent_name',
        'smoker',
        'age',
        'verifier_name',
        'dailer_no',
        'center',
        'lead_id',
        'list_id',
        'recording_filename',
        'phone_number',
        'campaign',
        'closer',
        'group_a',
        'server_ip',
        'dispo',
        'recording_id',
        'entry_list_id',
        'user_group',
        'list_name',
        'list_description',
        'entry_date',
        'closer_name',
        'dialername',
        'centername',
        'xferSubmission',
        // Add the new fields below
        'id',
        'agent_id',
        'agent_name',
        'smoker',
        'age',
        'verifier_name',
        'dailer_no',
        'center',
        'lead_id',
        'list_id',
        'recording_filename',
        'phone_number',
        'campaign',
        'closer',
        'group_a',
        'server_ip',
        'dispo',
        'recording_id',
        'recording_link',
        'entry_list_id',
        'user_group',
        'list_name',
        'list_description',
        'entry_date',
        'closer_name',
        'dialername',
        'centername',
        'xferSubmission',
    ];
    

}