<?php


namespace App\Models;


use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use CrudTrait;
    protected $table = 'discipline';
    protected $fillable = [
        'name',
    ];

}
