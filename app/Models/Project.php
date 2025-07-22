<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
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
