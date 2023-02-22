<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public const STATUS = [
        'open' => 'open', 
        'in progress' => 'in progress', 
        'blocked' => 'blocked', 
        'cancelled' => 'cancelled', 
        'completed' => 'completed'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function tasks() {
        return $this->hasMany(Task::class);
    }

    public function getRouteKeyName() {
        return 'uuid';
    }
}
