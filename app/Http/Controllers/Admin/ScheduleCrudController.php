<?php


namespace App\Http\Controllers\Admin;


use App\Models\Schedule;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class ScheduleCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel(Schedule::class);
        $this->crud->setRoute(backpack_url('schedule'));
        $this->crud->setEntityNameStrings('schedule', 'Schedules');
    }

    public function setupListOperation()
    {


        $this->crud->addColumn([
            'name' => 'name',
            'type' => 'text',
            'label' => "Name"
        ]);
        $this->crud->addColumn([
            'name' => 'time',
            'type' => 'text',
            'label' => "Time"
        ]);
        $this->crud->addColumn([
            'name' => 'classroom',
            'type' => 'text',
            'label' => "Classroom"
        ]);

        $this->crud->addColumn(
            [
                'name' => 'group_id',
                'label' => trans('admin.group'),
                'type' => 'select',
                'entity' => 'group',
                'attributes' => [
                    'required' => true,
                ],
                'attribute' => 'name',
            ]);

        $this->crud->addColumn(
            [
                'name' => 'teacher_id',
                'label' => trans('admin.teacher'),
                'type' => 'select',
                'entity' => 'teacher',
                'attributes' => [
                    'required' => true,
                ],
                'attribute' => 'name',
            ]);

        $this->crud->addColumn(
            [
                'name' => 'discipline_id',
                'label' => trans('admin.discipline'),
                'type' => 'select',
                'entity' => 'discipline',
                'attributes' => [
                    'required' => true,
                ],
                'attribute' => 'name',
            ]);

    }

    public function setupCreateOperation()
    {

        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "Name"
        ]);
        $this->crud->addField([
            'name' => 'time',
            'type' => 'text',
            'label' => "Time"
        ]);
        $this->crud->addField([
            'name' => 'classroom',
            'type' => 'text',
            'label' => "Classroom"
        ]);

        $this->crud->addField(
            [
                'name' => 'group_id',
                'label' => trans('admin.group'),
                'type' => 'select',
                'entity' => 'group',
                'attributes' => [
                    'required' => true,
                ],
                'attribute' => 'name',
            ]);

        $this->crud->addField(
            [
                'name' => 'teacher_id',
                'label' => trans('admin.teacher'),
                'type' => 'select',
                'entity' => 'teacher',
                'attributes' => [
                    'required' => true,
                ],
                'attribute' => 'name',
            ]);

        $this->crud->addField(
            [
                'name' => 'discipline_id',
                'label' => trans('admin.discipline'),
                'type' => 'select',
                'entity' => 'discipline',
                'attributes' => [
                    'required' => true,
                ],
                'attribute' => 'name',
            ]);

    }

    public function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

}
