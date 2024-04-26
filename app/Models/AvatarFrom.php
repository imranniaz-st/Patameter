<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvatarFrom extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'avatar_form';

    // Define the fillable columns
    protected $fillable = [
        'lead_id',
        'list_id',
        'phone_number',
        'campaign',
        'closer',
        'group_a',
        'server_ip',
        'dispo',
        'agent_name',
        'recording_filename',
        'recording_id',
        'recording_link',
        'entry_list_id',
        'user_group',
        'list_name',
        'list_description',
        'entry_date',
        'closer_name',
        'smoker',
        'age',
        'dialername',
        'centername',
        'xferSubmission',
        // Add more columns here if needed
    ];
}
