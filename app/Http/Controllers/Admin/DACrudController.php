<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\DARequest as StoreRequest;
use App\Http\Requests\DARequest as UpdateRequest;

/**
 * Class DACrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class DACrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\DA');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/da');
        $this->crud->setEntityNameStrings('da', 'd_as');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        //$this->crud->setFromDb();

        //Columns
        $this->crud->addColumn(['name' =>'DAid','type'=>'text','label'=>'DA ID']);
        $this->crud->addColumn(['name' =>'DAname','type'=>'text','label'=>'Da Name']);
        $this->crud->addColumn(['name' =>'Dadesc','type'=>'text','label'=>'Da description']);
        $this->crud->addColumn(['name' =>'companyID','type'=>'text','label'=>'Company ID']);
        $this->crud->addColumn(['name' =>'teamID','type'=>'text','label'=>'Team ID']);
        $this->crud->addColumn(['name' =>'sID','type'=>'text','label'=>'studentID']);
        $this->crud->addColumn(['name' =>'tchID','type'=>'text','label'=>'Teacher ID']);
        $this->crud->addColumn(['name' =>'emplID','type'=>'text','label'=>'Employee ID']);
        $this->crud->addColumn(['name' =>'prog','type'=>'text','label'=>'Progress']);
        $this->crud->addColumn(['name' =>'status','type'=>'text','label'=>'Status']);

        //Fields
        $this->crud->addField(['name' =>'DAid','type'=>'text','label'=>'DA ID']);
        $this->crud->addField(['name' =>'DAname','type'=>'text','label'=>'Da Name']);
        $this->crud->addField(['name' =>'Dadesc','type'=>'text','label'=>'Da description']);
        $this->crud->addField(['name' =>'companyID','type'=>'text','label'=>'Company ID']);
        $this->crud->addField(['name' =>'teamID','type'=>'text','label'=>'Team ID']);
        $this->crud->addField(['name' =>'sID','type'=>'text','label'=>'studentID']);
        $this->crud->addField(['name' =>'tchID','type'=>'text','label'=>'Teacher ID']);
        $this->crud->addField(['name' =>'emplID','type'=>'text','label'=>'Employee ID']);
        $this->crud->addField(['name' =>'prog','type'=>'text','label'=>'Progress']);
        $this->crud->addField(['name' =>'status','type'=>'text','label'=>'Status']);

        // add asterisk for fields that are required in DARequest
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
