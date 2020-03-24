<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owl extends Model
{
    protected $fillable = ['name', 'is_resit', 'version_nr', 'comments'];

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
