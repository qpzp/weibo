<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    public function model()
    {
        return $this->belongsTo(User::class);
    }
}
