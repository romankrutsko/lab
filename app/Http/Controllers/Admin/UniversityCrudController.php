<?php


namespace App\Http\Controllers\Admin;


use App\Models\University;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class UniversityCrudController extends  CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel(University::class);
        $this->crud->setRoute(backpack_url('university'));
        $this->crud->setEntityNameStrings('university', 'Universities');
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

        $this->crud->addColumn([
            'name' => 'address',
            'type' => 'text',
            'label' => "Address"
        ]);

        $this->crud->addColumn([
            'name' => 'phone',
            'type' => 'text',
            'label' => "Phone"
        ]);

        $this->crud->addColumn([
            'name' => 'site',
            'type' => 'text',
            'label' => "Site"
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

        $this->crud->addField([
            'name' => 'address',
            'type' => 'text',
            'label' => "Address"
        ]);

        $this->crud->addField([
            'name' => 'phone',
            'type' => 'text',
            'label' => "Phone"
        ]);

        $this->crud->addField([
            'name' => 'site',
            'type' => 'text',
            'label' => "Site"
        ]);
    }

    public function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

}
