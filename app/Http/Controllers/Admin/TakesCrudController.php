<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TakesRequest as StoreRequest;
use App\Http\Requests\TakesRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class TakesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class TakesCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Takes');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/takes');
        $this->crud->setEntityNameStrings('Data', 'Data Lengkap');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */
        $this->crud->addColumn([
            // 1-n relationship
            'label' => "Kode BPS", // Table column heading
            'type' => "select",
            'name' => 'villages_id', // the column that contains the ID of that connected entity;
            'entity' => 'villages', // the method that defines the relationship in your Model
            'attribute' => "kode_bps", // foreign key attribute that is shown to user
            'model' => "App\Models\Villages", // foreign key model
        ]);

        $this->crud->addColumn([
            'name' => 'nama_kota',
            'label' => "Kota",
            'type' => 'text',
        ]);
        // $this->crud->addColumn([
        //     // 1-n relationship
        //     'label' => "Kota", // Table column heading
        //     'type' => "select",
        //     'name' => 'villages_id', // the column that contains the ID of that connected entity;
        //     'entity' => 'villages', // the method that defines the relationship in your Model
        //     'attribute' => "nama_kota", // foreign key attribute that is shown to user
        //     'model' => "App\Models\Villages", // foreign key model
        // ]);
        
        $this->crud->addColumn([
            // 1-n relationship
            'label' => "Kecamatan", // Table column heading
            'type' => "select",
            'name' => 'kecamatan_id', // the column that contains the ID of that connected entity;
            'entity' => 'kecamatan', // the method that defines the relationship in your Model
            'attribute' => "nama_kecamatan", // foreign key attribute that is shown to user
            'model' => "App\Models\Kecamatan", // foreign key model
        ]);
        $this->crud->addColumn([
            // 1-n relationship
            'label' => "Kelurahan", // Table column heading
            'type' => "select",
            'name' => 'kelurahan_id', // the column that contains the ID of that connected entity;
            'entity' => 'kelurahan', // the method that defines the relationship in your Model
            'attribute' => "nama_kelurahan", // foreign key attribute that is shown to user
            'model' => "App\Models\Kelurahan", // foreign key model
        ]);

        $this->crud->addField([
            // 1-n relationship
            'label' => "Kode BPS", // Table column heading
            'type' => "select2",
            'name' => 'villages_id', // the column that contains the ID of that connected entity;
            'entity' => 'villages', // the method that defines the relationship in your Model
            'attribute' => "kode_bps", // foreign key attribute that is shown to user
            'model' => "App\Models\Villages", // foreign key model
        ]);

        $this->crud->addField([
            'name' => 'nama_kota',
            'label' => "Kota",
            'type' => 'text',
        ]);
        // $this->crud->addField([
        //     // 1-n relationship
        //     'label' => "Kota", // Table column heading
        //     'type' => "select2",
        //     'name' => 'villages_id', // the column that contains the ID of that connected entity;
        //     'entity' => 'villages', // the method that defines the relationship in your Model
        //     'attribute' => "nama_kota", // foreign key attribute that is shown to user
        //     'model' => "App\Models\Villages", // foreign key model
        // ]);

        $this->crud->addField([
            // 1-n relationship
            'label' => "Kecamatan", // Table column heading
            'type' => "select2",
            'name' => 'kecamatan_id', // the column that contains the ID of that connected entity;
            'entity' => 'kecamatan', // the method that defines the relationship in your Model
            'attribute' => "nama_kecamatan", // foreign key attribute that is shown to user
            'model' => "App\Models\Kecamatan", // foreign key model
        ]);
        
        $this->crud->addField([
            // 1-n relationship
            'label' => "Kelurahan", // Table column heading
            'type' => "select2",
            'name' => 'kelurahan_id', // the column that contains the ID of that connected entity;
            'entity' => 'kelurahan', // the method that defines the relationship in your Model
            'attribute' => "nama_kelurahan", // foreign key attribute that is shown to user
            'model' => "App\Models\Kelurahan", // foreign key model
        ]);



        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();

        // add asterisk for fields that are required in TakesRequest
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
