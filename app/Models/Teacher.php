<?php


namespace App\Models;


use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    use CrudTrait;
    protected $table = 'teacher';
    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
    ];
}
