<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'message',
        'service_id',
        'source_page',
        'form_type',
        'status',
        'assigned_to',
        'notes',
        'budget',
        'project_type',
        'contact_preference',
        'time_preference',
        'timezone',
    ];

    protected $casts = [
        'project_type' => 'array',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function assignee()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
