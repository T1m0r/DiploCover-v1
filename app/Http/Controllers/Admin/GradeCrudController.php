<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\GradeRequest as StoreRequest;
use App\Http\Requests\GradeRequest as UpdateRequest;

/**
 * Class GradeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class GradeCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Grade');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/grade');
        $this->crud->setEntityNameStrings('grade', 'grades');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        //$this->crud->setFromDb();

        //Columns
        $this->crud->addColumn(['name' =>'gradeID','type'=>'text','label'=>'Grade ID']);
        $this->crud->addColumn(['name' =>'schoolID','type'=>'text','label'=>'School ID']);
        $this->crud->addColumn(['name' =>'name','type'=>'text','label'=>'Gradename']);
        $this->crud->addColumn(['name' =>'teachID','type'=>'text','label'=>'Teacher ID']);
        $this->crud->addColumn(['name' =>'students','type'=>'text','label'=>'Amount of students']);

        //Fields
        $this->crud->addField(['name' =>'gradeID','type'=>'text','label'=>'Grade ID']);
        $this->crud->addField(['name' =>'schoolID','type'=>'text','label'=>'School ID']);
        $this->crud->addField(['name' =>'name','type'=>'text','label'=>'Gradename']);
        $this->crud->addField(['name' =>'teachID','type'=>'text','label'=>'Teacher ID']);
        $this->crud->addField(['name' =>'students','type'=>'text','label'=>'Amount of students']);

        // add asterisk for fields that are required in GradeRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
