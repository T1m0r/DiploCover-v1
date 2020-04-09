<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TeacherRequest as StoreRequest;
use App\Http\Requests\TeacherRequest as UpdateRequest;

/**
 * Class TeacherCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class TeacherCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Teacher');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/teacher');
        $this->crud->setEntityNameStrings('teacher', 'teachers');
        $this->crud->setCreateView('create.teacher.create-teacher-root');
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        //$this->crud->setFromDb();

        //Columns
        $this->crud->addColumn(['name' =>'teachID','type'=>'text','label'=>'Teacher ID']);
        $this->crud->addColumn(['name' =>'sregistercode','type'=>'text','label'=>'Regcode']);
        $this->crud->addColumn(['name' =>'title','type'=>'text','label'=>'title']);
        $this->crud->addColumn(['name' =>'name','type'=>'text','label'=>'Name']);
        $this->crud->addColumn(['name' =>'firstname','type'=>'text','label'=>'Firstname']);
        $this->crud->addColumn(['name' =>'lastname','type'=>'text','label'=>'Lastname']);
        $this->crud->addColumn(['name' =>'phonenumber','type'=>'text','label'=>'Phonenumber']);
        $this->crud->addColumn(['name' =>'schoolID','type'=>'text','label'=>'School ID']);
        $this->crud->addColumn(['name' =>'gradeID','type'=>'text','label'=>'Grade ID']);
        $this->crud->addColumn(['name' =>'email','type'=>'text','label'=>'Email']);
        $this->crud->addColumn(['name' =>'abme','type'=>'text','label'=>'Aboutme']);
        $this->crud->addColumn(['name' =>'roleID','type'=>'text','label'=>'RoleID']);
        $this->crud->addColumn(['name' =>'status','type'=>'text','label'=>'Status']);
        $this->crud->addColumn(['name' =>'activated','type'=>'text','label'=>'Activated']);
        $this->crud->addColumn(['name' =>'created_at','type'=>'text','label'=>'Created at']);
        $this->crud->addColumn(['name' =>'updated_at','type'=>'text','label'=>'Updated last:']);
        $this->crud->addColumn(['name' =>'deleted_at','type'=>'text','label'=>'Deleted']);

        //Fields
        $this->crud->addField(['name' =>'teachID','type'=>'text','label'=>'Teacher ID']);
        $this->crud->addField(['name' =>'sregistercode','type'=>'text','label'=>'Regcode']);
        $this->crud->addField(['name' =>'title','type'=>'text','label'=>'title']);
        $this->crud->addField(['name' =>'name','type'=>'text','label'=>'Name']);
        $this->crud->addField(['name' =>'firstname','type'=>'text','label'=>'Firstname']);
        $this->crud->addField(['name' =>'lastname','type'=>'text','label'=>'Lastname']);
        $this->crud->addField(['name' =>'phonenumber','type'=>'text','label'=>'Phonenumber']);
        $this->crud->addField(['name' =>'schoolID','type'=>'text','label'=>'School ID']);
        $this->crud->addField(['name' =>'gradeID','type'=>'text','label'=>'Grade ID']);
        $this->crud->addField(['name' =>'email','type'=>'text','label'=>'Email']);
        $this->crud->addField(['name' =>'abme','type'=>'text','label'=>'Aboutme']);
        $this->crud->addField(['name' =>'roleID','type'=>'text','label'=>'RoleID']);
        $this->crud->addField(['name' =>'status','type'=>'text','label'=>'Status']);
        $this->crud->addField(['name' =>'activated','type'=>'text','label'=>'Activated']);

        // add asterisk for fields that are required in TeacherRequest
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
