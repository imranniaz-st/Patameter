<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvatarQa extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'avatar_qa';

    protected $fillable = [
        'xferSubmissionTime',
        'agent_name',
        'lead_id',
        'closer_name',
        'recording_link',
        'greetings',
        'pitch',
        'age',
        'smoker',
        'health',
        'beneficiary',
        'account',
        'plan',
        'transfer_details',
        'xfer_consent',
        'rebuttal',
        'total_rebuttal',
        'total_refusal',
        'qa_comment',
        'qa_person',
        'call_status',
        'total_duration',
        'played_duration',
        'qa_timestamp',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'xferSubmissionTime' => 'timestamp',
        'qa_timestamp' => 'timestamp',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'xferSubmissionTime',
        'qa_timestamp',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}