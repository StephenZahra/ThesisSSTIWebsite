<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlindPos extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'log'
    ];

    protected $table = 'blindpos';
}
