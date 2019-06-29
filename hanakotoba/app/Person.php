<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\ScopePerson;

class Person extends Model
{

    public function boards()
    {
        return $this->hasMany('App\Board');
    }

    public function getData()
    {
        return $this->id . ':' . $this->name . '(' . $this->age . ')';
    }

    protected $guarded = array('id');
    public $timestamps = false;
    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150',
    );
}
