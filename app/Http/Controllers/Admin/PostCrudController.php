<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
/**
 * Class PostCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PostCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Post::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/post');
        CRUD::setEntityNameStrings('post', 'posts');
    }
    // public function store(Request $request)
    // {
    //     $userPostCount = Post::count();

    //     if ($userPostCount >= 9) { // Set the limit here
    //         // Alert::error('You have reached the maximum number of posts you can create.')->flash();
    //         return back();
    //     }

    //     return $this->traitStore();
    // }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.
        CRUD::column('image')->type('image')->label('Image')->prefix('storage/');

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
    protected function setupCreateOperation()
    {
        CRUD::setValidation(PostRequest::class);
        CRUD::setFromDb();


         CRUD::field('image')
         ->type('upload')
         ->withFiles([
            'fileNamer' => function($file) { return $file->getClientOriginalName(); },
            'disk' => 'public',
            'path' => 'uploads',

        ]);
        CRUD::field([   // select_from_array
            'name'        => 'category',
            'label'       => "Category",
            'type'        => 'select_from_array',
            'options'     => ['Aktivitas Anak' => 'Aktivitas Anak', 'Kegiatan Guru' => 'Kegiatan Guru', 'Puncak Tema' => 'Puncak Tema', 'Kegiatan Pembelajaran' => 'Kegiatan Pembelajaran'],
            'allows_null' => false,
            'default'     => 'aktifitasanak',
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);
    }
//     CRUD::field('avatar')->type('upload')->withFiles([
//         'fileNamer' => \Backpack\CRUD\app\Library\Uploaders\Support\FileNameGenerator::class,
// ]);


// ->withFiles([
//     'fileNamer' => function($file, $uploader) { return 'the_file_name.png'; },
// ])
    //
    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}

