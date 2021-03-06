<?php namespace App\Models;

use Eloquent;

class Country extends Eloquent
{
    public $timestamps = false;

    protected $visible = ['id', 'name'];

    public function getName() 
    {
        return $this->name;
    }
}
