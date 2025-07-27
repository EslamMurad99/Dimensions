<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    public $fillable = [  // protected
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'service_id',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
