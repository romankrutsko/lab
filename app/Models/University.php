<?php


namespace App\Models;


use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use CrudTrait;
    protected $table = 'university';
    protected $fillable = [
        'name',
        'short_name',
        'address',
        'phone',
        'site',
    ];

}
