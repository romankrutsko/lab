<?php


namespace App\Http\Controllers\Admin;


use App\Models\Discipline;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class DisciplineCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel(Discipline::class);
        $this->crud->setRoute(backpack_url('discipline'));
        $this->crud->setEntityNameStrings('discipline', 'Disciplines');
    }

    public function setupListOperation()
    {

        $this->crud->addColumn([
            'name' => 'name',
            'type' => 'text',
            'label' => "Name"
        ]);
    }

    public function setupCreateOperation()
    {
        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "Name"
        ]);
    }

    public function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

}
