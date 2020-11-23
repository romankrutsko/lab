<?php


namespace App\Http\Controllers\Admin;

use App\Models\Student;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class StudentCrudController extends CrudController
{

    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel(Student::class);
        $this->crud->setRoute(backpack_url('student'));
        $this->crud->setEntityNameStrings('student', 'Students');
    }

    public function setupListOperation()
    {

        $this->crud->addColumn([
            'name' => 'group_id',
            'label' => trans('admin.group'),
            'type' => 'select',
            'entity' => 'group',
            'attributes' => [
                'required' => true,
            ],
            'attribute' => 'name',
        ]);

        $this->crud->addColumn([
            'name' => 'name',
            'type' => 'text',
            'label' => "Name"
        ]);

        $this->crud->addColumn([
            'name' => 'email',
            'type' => 'text',
            'label' => "Email"
        ]);

        $this->crud->addColumn([
            'name' => 'phone',
            'type' => 'text',
            'label' => "Phone"
        ]);


    }

    public function setupCreateOperation()
    {
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
        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "Name"
        ]);
        $this->crud->addField([
            'name' => 'email',
            'type' => 'text',
            'label' => "Email"
        ]);

        $this->crud->addField([
            'name' => 'phone',
            'type' => 'text',
            'label' => "Phone"
        ]);

    }

    public function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
