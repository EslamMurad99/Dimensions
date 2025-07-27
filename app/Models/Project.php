<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $fillable = [  // protected
        'title',
        'decription', // this column must be === in migration
        'image',
        'timeline',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
