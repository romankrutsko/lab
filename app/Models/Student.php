<?php


namespace App\Models;


use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use CrudTrait;
    protected $table = 'student';
    protected $fillable = [
        'group_id',
        'name',
        'email',
        'phone',
    ];
    protected $appends = [
        'group_name'
    ];

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }

    public function getGroupNameAttribute() {
        return $this->group()->first()->name ?? "-";
    }

}
