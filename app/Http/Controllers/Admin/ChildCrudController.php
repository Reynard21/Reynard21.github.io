<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\ChildController;
use App\Http\Requests\ChildRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ChildCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ChildCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Child::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/child');
        CRUD::setEntityNameStrings('child', 'children');

    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::denyAccess('create');
        CRUD::denyAccess('show');
        CRUD::denyAccess('update');
        CRUD::setFromDb();
        CRUD::column('foto')->type('image')->label('Foto Anak')->prefix('storage/');
        CRUD::column('akte_lahir')->type('image')->label('Akte Lahir')->prefix('storage/');
        CRUD::column('imunisasi_lengkap')->type('image')->label('Imunisasi Lengkap')->prefix('storage/');
        CRUD::column('ktp_ayah')->type('image')->label('KTP Ayah')->prefix('storage/');
        CRUD::column('ktp_ibu')->type('image')->label('KTP Ibu')->prefix('storage/');
        CRUD::column('foto_kopi_kartu_keluarga')->type('image')->label('Fotokopi Kartu Keluarga')->prefix('storage/');




        // set columns from db columns.

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    // protected function setupCreateOperation()
    // {
    //     CRUD::setValidation(ChildRequest::class);
    //     CRUD::setFromDb();

    // }

        // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */


    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        // $this->setupCreateOperation();
    }
}
