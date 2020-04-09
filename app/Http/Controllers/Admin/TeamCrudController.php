<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TeamRequest as StoreRequest;
use App\Http\Requests\TeamRequest as UpdateRequest;

/**
 * Class TeamCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class TeamCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Team');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/team');
        $this->crud->setEntityNameStrings('team', 'teams');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
       // $this->crud->setFromDb();

        //Columns
        $this->crud->addColumn(['name' =>'teamID','type'=>'text','label'=>'Team ID']);
        $this->crud->addColumn(['name' =>'tname','type'=>'text','label'=>'Team-Name']);
        $this->crud->addColumn(['name' =>'sID','type'=>'text','label'=>'Student/Leader ID']);
        $this->crud->addColumn(['name' =>'memberc','type'=>'text','label'=>'Amount of members']);
        $this->crud->addColumn(['name' =>'teachID','type'=>'text','label'=>'Main TeacherID']);
        $this->crud->addColumn(['name' =>'remember_token','type'=>'text','label'=>'rembtkn']);
        $this->crud->addColumn(['name' =>'created_at','type'=>'text','label'=>'Created at']);
        $this->crud->addColumn(['name' =>'updated_at','type'=>'text','label'=>'Updated last:']);
        $this->crud->addColumn(['name' =>'deleted_at','type'=>'text','label'=>'Deleted']);

        //Fields
        $this->crud->addField(['name' =>'teamID','type'=>'text','label'=>'Team ID']);
        $this->crud->addField(['name' =>'tname','type'=>'text','label'=>'Team-Name']);
        $this->crud->addField(['name' =>'sID','type'=>'text','label'=>'Student/Leader ID']);
        $this->crud->addField(['name' =>'memberc','type'=>'text','label'=>'Amount of members']);
        $this->crud->addField(['name' =>'teachID','type'=>'text','label'=>'Main TeacherID']);
        $this->crud->addField(['name' =>'remember_token','type'=>'text','label'=>'rembtkn']);



        // add asterisk for fields that are required in TeamRequest
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
