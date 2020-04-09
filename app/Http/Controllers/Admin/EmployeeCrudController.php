<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\EmployeeRequest as StoreRequest;
use App\Http\Requests\EmployeeRequest as UpdateRequest;

/**
 * Class EmployeeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class EmployeeCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Employee');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/employee');
        $this->crud->setEntityNameStrings('employee', 'employees');
        $this->crud->setCreateView('root.create.Employee.create-employee-root');
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        //$this->crud->setFromDb();

        //Columns
        $this->crud->addColumn(['name' =>'emplID','type'=>'text','label'=>'Employee ID']);
        $this->crud->addColumn(['name' =>'title','type'=>'text','label'=>'Title']);
        $this->crud->addColumn(['name' =>'job','type'=>'text','label'=>'Job-name']);
        $this->crud->addColumn(['name' =>'firstname','type'=>'text','label'=>'Firstname']);
        $this->crud->addColumn(['name' =>'lastname','type'=>'text','label'=>'Lastname']);
        $this->crud->addColumn(['name' =>'phonenumber','type'=>'text','label'=>'Phonenumber']);
        $this->crud->addColumn(['name' =>'companyID','type'=>'text','label'=>'Company ID']);
        $this->crud->addColumn(['name' =>'roleID','type'=>'text','label'=>'RoleID']);
        $this->crud->addColumn(['name' =>'email','type'=>'text','label'=>'Email']);
        $this->crud->addColumn(['name' =>'created_at','type'=>'text','label'=>'Created at']);
        $this->crud->addColumn(['name' =>'updated_at','type'=>'text','label'=>'Updated last:']);
        $this->crud->addColumn(['name' =>'deleted_at','type'=>'text','label'=>'Deleted']);

        //Fields
        $this->crud->addField(['name' =>'emplID','type'=>'text','label'=>'Employee ID']);
        $this->crud->addField(['name' =>'title','type'=>'text','label'=>'Title']);
        $this->crud->addField(['name' =>'job','type'=>'text','label'=>'Job-name']);
        $this->crud->addField(['name' =>'firstname','type'=>'text','label'=>'Firstname']);
        $this->crud->addField(['name' =>'lastname','type'=>'text','label'=>'Lastname']);
        $this->crud->addField(['name' =>'phonenumber','type'=>'text','label'=>'Phonenumber']);
        $this->crud->addField(['name' =>'companyID','type'=>'text','label'=>'Company ID']);
        $this->crud->addField(['name' =>'roleID','type'=>'text','label'=>'RoleID']);
        $this->crud->addField(['name' =>'email','type'=>'text','label'=>'Email']);




        // add asterisk for fields that are required in EmployeeRequest
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
