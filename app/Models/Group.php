<?php


namespace App\Models;


use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    use CrudTrait;
    protected $table = 'group';
    protected $fillable = [
        'department_id',
        'name',
        'course',
        'password',
    ];
    protected $appends = [
        'department_name'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
    public function getDepartmentNameAttribute() {
        return $this->department()->first()->short_name ?? "-";
    }
}
