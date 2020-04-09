<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CompanyRequest as StoreRequest;
use App\Http\Requests\CompanyRequest as UpdateRequest;

/**
 * Class CompanyCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class CompanyCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Company');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/company');
        $this->crud->setEntityNameStrings('company', 'companies');
        $this->crud->setCreateView('root.create.Company.new-company-root');
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        //$this->crud->setFromDb();

        //Columns
        $this->crud->addColumn(['name' =>'companyID','type'=>'text','label'=>'Company ID']);
        $this->crud->addColumn(['name' =>'companyname','type'=>'text','label'=>'Company-Name']);
        $this->crud->addColumn(['name' =>'email','type'=>'text','label'=>'Email']);
        $this->crud->addColumn(['name' =>'emplID','type'=>'text','label'=>'Employee ID']);
        $this->crud->addColumn(['name' =>'password','type'=>'text','label'=>'Pswd']);
        $this->crud->addColumn(['name' =>'brpic','type'=>'picture','label'=>'Backround picture']);
        $this->crud->addColumn(['name' =>'prevtxt','type'=>'text','label'=>'Preview Text']);
        $this->crud->addColumn(['name' =>'activated','type'=>'text','label'=>'Activated']);
        $this->crud->addColumn(['name' =>'last_ip_address','type'=>'text','label'=>'Email']);

        //Fields
        $this->crud->addField(['name' =>'companyID','type'=>'text','label'=>'Employee ID']);
        $this->crud->addField(['name' =>'companyname','type'=>'text','label'=>'Title']);
        $this->crud->addField(['name' =>'email','type'=>'text','label'=>'Job-name']);
        $this->crud->addField(['name' =>'emplID','type'=>'text','label'=>'Firstname']);
        $this->crud->addField(['name' =>'password','type'=>'text','label'=>'Lastname']);
        $this->crud->addField(['name' =>'brpic','type'=>'picture','label'=>'Phonenumber']);
        $this->crud->addField(['name' =>'prevtxt','type'=>'text','label'=>'Company ID']);
        $this->crud->addField(['name' =>'activated','type'=>'text','label'=>'RoleID']);
        $this->crud->addField(['name' =>'last_ip_address','type'=>'text','label'=>'Email']);



        // add asterisk for fields that are required in CompanyRequest
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
