<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\IntresstRequest as StoreRequest;
use App\Http\Requests\IntresstRequest as UpdateRequest;

/**
 * Class IntresstCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class IntresstCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Intresst');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/intresst');
        $this->crud->setEntityNameStrings('intresst', 'intressts');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        //$this->crud->setFromDb();


        //Columns
        $this->crud->addColumn(['name' =>'id','type'=>'text','label'=>'Intresst ID']);
        $this->crud->addColumn(['name' =>'name','type'=>'text','label'=>'Intresst name']);
        $this->crud->addColumn(['name' =>'amount','type'=>'text','label'=>'Intresst user amount']);
        $this->crud->addColumn(['name' =>'created_at','type'=>'text','label'=>'Created at:']);
        $this->crud->addColumn(['name' =>'updated_at','type'=>'text','label'=>'Updated last:']);

        //Fields
        $this->crud->addField(['name' =>'id','type'=>'text','label'=>'Intresst ID']);
        $this->crud->addField(['name' =>'name','type'=>'text','label'=>'Intresst name']);
        $this->crud->addField(['name' =>'amount','type'=>'text','label'=>'Intresst user amount']);


        // add asterisk for fields that are required in IntresstRequest
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
