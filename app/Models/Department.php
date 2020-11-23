<?php


namespace App\Models;


use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use CrudTrait;
    protected $table = 'department';
    protected $fillable = [
        'faculty_id',
        'name',
        'short_name',
        'password',
    ];

    protected $appends = [
        'faculty_name'
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id', 'id');
    }

    public function getFacultyNameAttribute() {
        return $this->faculty()->first()->short_name ?? "-";
    }
}
