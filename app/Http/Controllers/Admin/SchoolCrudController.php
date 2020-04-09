<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\SchoolRequest as StoreRequest;
use App\Http\Requests\SchoolRequest as UpdateRequest;

/**
 * Class SchoolCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class SchoolCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\School');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/school');
        $this->crud->setEntityNameStrings('school', 'schools');
        $this->crud->setCreateview('root.create.School.create-school-root');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        //$this->crud->setFromDb();


        //Columns
        $this->crud->addColumn(['name' =>'schoolID','type'=>'text','label'=>'School ID']);
        $this->crud->addColumn(['name' =>'schoolname','type'=>'text','label'=>'School-Name']);
        $this->crud->addColumn(['name' =>'teachID','type'=>'text','label'=>'Teach/Operator ID']);
        $this->crud->addColumn(['name' =>'pswd','type'=>'text','label'=>'Pswd']);
        $this->crud->addColumn(['name' =>'schregistercode','type'=>'text','label'=>'Regcode']);
        $this->crud->addColumn(['name' =>'remember_token','type'=>'text','label'=>'Remtk']);
        $this->crud->addColumn(['name' =>'created_at','type'=>'text','label'=>'Created at']);
        $this->crud->addColumn(['name' =>'updated_at','type'=>'text','label'=>'Updated last:']);
        $this->crud->addColumn(['name' =>'deleted_at','type'=>'text','label'=>'Deleted']);

        //Fields
        $this->crud->addField(['name' =>'schoolID','type'=>'text','label'=>'School ID']);
        $this->crud->addField(['name' =>'schoolname','type'=>'text','label'=>'School-Name']);
        $this->crud->addField(['name' =>'teachID','type'=>'text','label'=>'Teach/Operator ID']);
        $this->crud->addField(['name' =>'pswd','type'=>'text','label'=>'Pswd']);
        $this->crud->addField(['name' =>'schregistercode','type'=>'text','label'=>'Regcode']);
        $this->crud->addField(['name' =>'remember_token','type'=>'text','label'=>'Remtk']);

        // add asterisk for fields that are required in SchoolRequest
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
