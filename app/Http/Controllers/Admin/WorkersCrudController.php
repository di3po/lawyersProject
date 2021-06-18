<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\WorkersRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class WorkersCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class WorkersCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Workers::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/workers');
        CRUD::setEntityNameStrings('workers', 'workers');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name');
        CRUD::column('job');
        CRUD::column('quote');
        CRUD::column('image')
            ->name('image')
            ->label('Фото')
            ->type('image')
            ->crop(true)
            ->aspect_ratio(0.5);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
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
        CRUD::setValidation(WorkersRequest::class);

        /*CRUD::field('name');
        CRUD::field('job');
        CRUD::field('quote');
        CRUD::field('image');*/

        CRUD::addFields([
            [
                'name' => 'name',
                'type' => 'text',
                'label' => 'ФИО',
            ],

            [

                'name' => 'job',
                'type' => 'text',
                'label' => 'Должность',

            ],

            [

                'name' => 'quote',
                'type' => 'text',
                'label' => 'Лозунг',

            ],

            [
                'name' => 'image',
                'type' => 'image',
                'label' => 'Фото',
                'crop' => true,
                'aspect_ratio' => 0.5,
                // 'disk' => 'public',
                // 'prefix'  => 'uploads/images/profile_pictures/'
            ],
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

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
