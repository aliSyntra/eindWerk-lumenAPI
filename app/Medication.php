<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'startDate', 'endDate', 'amount', 'description', 'userAnimal_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}