<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setCompanyNameAttribute($value)
    {
        $this->attributes['company_name'] = ucfirst($value);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName() {
        return 'uuid';
    }

    public function projects() {
        return $this->hasMany(Project::class);
    }
}
