<?php


namespace App\Http\Controllers\Admin;


use App\Models\Teacher;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class TeacherCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel(Teacher::class);
        $this->crud->setRoute(backpack_url('teacher'));
        $this->crud->setEntityNameStrings('teacher', 'Teachers');
    }

    public function setupListOperation()
    {


        $this->crud->addColumn([
            'name' => 'name',
            'type' => 'text',
            'label' => "Name"
        ]);
        $this->crud->addColumn([
            'name' => 'surname',
            'type' => 'text',
            'label' => "Surname"
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

        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "Name"
        ]);
        $this->crud->addField([
            'name' => 'surname',
            'type' => 'text',
            'label' => "Surname"
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
