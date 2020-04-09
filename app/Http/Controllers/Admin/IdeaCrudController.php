<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\IdeaRequest as StoreRequest;
use App\Http\Requests\IdeaRequest as UpdateRequest;

/**
 * Class IdeaCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class IdeaCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Idea');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/idea');
        $this->crud->setEntityNameStrings('idea', 'ideas');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        //$this->crud->setFromDb();


        //Columns
        $this->crud->addColumn(['name' =>'iID','type'=>'text','label'=>'Idea ID']);
        $this->crud->addColumn(['name' =>'iname','type'=>'text','label'=>'Idea name']);
        $this->crud->addColumn(['name' =>'ititle','type'=>'text','label'=>'Idea title']);
        $this->crud->addColumn(['name' =>'idesc','type'=>'text','label'=>'Idea description']);
        $this->crud->addColumn(['name' =>'teamID','type'=>'text','label'=>'Team ID']);
        $this->crud->addColumn(['name' =>'sID','type'=>'text','label'=>'Student ID']);
        $this->crud->addColumn(['name' =>'created_at','type'=>'text','label'=>'Created at:']);
        $this->crud->addColumn(['name' =>'updated_at','type'=>'text','label'=>'Updated last:']);
        $this->crud->addColumn(['name' =>'deleted_at','type'=>'text','label'=>'Deleted']);

        //Fields
        $this->crud->addField(['name' =>'iID','type'=>'text','label'=>'Idea ID']);
        $this->crud->addField(['name' =>'iname','type'=>'text','label'=>'Idea name']);
        $this->crud->addField(['name' =>'ititle','type'=>'text','label'=>'Idea title']);
        $this->crud->addField(['name' =>'idesc','type'=>'text','label'=>'Idea description']);
        $this->crud->addField(['name' =>'teamID','type'=>'text','label'=>'Team ID']);
        $this->crud->addField(['name' =>'sID','type'=>'text','label'=>'Student ID']);


        // add asterisk for fields that are required in IdeaRequest
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
