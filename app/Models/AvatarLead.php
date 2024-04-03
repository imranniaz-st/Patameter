<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvatarLead extends Model
{
    protected $fillable = [
        'agent_id',
        'lead_id',
        'dialer_id',
        'AGE',
        'Smoker',
        'verifier',
        'center',
        'phone_number',
        'link',
    ];


}