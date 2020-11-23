<?php


namespace App\Models;


use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use CrudTrait;
    protected $table = 'schedule';
    protected $fillable = [
        'name',
        'teacher_id',
        'discipline_id',
        'group_id',
        'time',
        'classroom',
    ];
    protected $appends = [
        'group_name',
        'discipline_name',
        'teacher_name'
    ];

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
    public function discipline()
    {
        return $this->belongsTo(Discipline::class, 'discipline_id', 'id');
    }
    public function getGroupNameAttribute() {
        return $this->group()->first()->name ?? "-";
    }
    public function getDisciplineNameAttribute() {
        return $this->discipline()->first()->name ?? "-";
    }
    public function getTeacherNameAttribute() {
        return $this->teacher()->first()->name ?? "-";
    }

}
