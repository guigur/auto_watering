<?php

namespace App\Models;

use App\TEPModel;
use App\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plant extends TEPModel
{

    use SoftDeletes;

    protected $fillable = [
        'name',
        'latin_name',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
