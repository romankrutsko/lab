<?php


namespace App\Http\Controllers\Admin;


use App\Models\Faculty;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class FacultyCrudController extends CrudController
{

    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel(Faculty::class);
        $this->crud->setRoute(backpack_url('faculty'));
        $this->crud->setEntityNameStrings('faculty', 'Faculties');
    }

    public function setupListOperation()
    {

        $this->crud->addColumn([
            'name' => 'name',
            'type' => 'text',
            'label' => "Name"
        ]);

        $this->crud->addColumn([
            'name' => 'short_name',
            'type' => 'text',
            'label' => "Short name"
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
            'name' => 'short_name',
            'type' => 'text',
            'label' => "Short name"
        ]);
    }

    public function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}

