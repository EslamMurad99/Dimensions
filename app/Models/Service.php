<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    public $fillable = [  // protected
        'title',
        'description',
        'icon',
        'timeline',
    ];

    // the relation : every service has sevral communication messages
    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
