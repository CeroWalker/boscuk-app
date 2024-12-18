<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CultureRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CultureCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CultureCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Culture::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/culture');
        CRUD::setEntityNameStrings('culture', 'cultures');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.

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
        CRUD::setValidation(CultureRequest::class);

        $this->crud->addField([
            'name' => 'title',
            'label' => 'Başlık',
            'type' => 'text',
            'attributes' => [
                'required' => true,
                'onblur' => "generateSlug(this)", // onBlur özelliği
            ],
        ]);

        CRUD::field('title_id')->type('text')->label('Başlık ID')->prefix('beyonofseen.com.tr/genel-kultur/');

        CRUD::field('content')->type('textarea')->label('İçerik');

        CRUD::addfield([
            'name' => 'content_image',
            'label' => 'İçerik Fotoğrafı',
            'type' => 'upload',
            'withFiles' => true,
            'disk' => 'public',
        ]);

        CRUD::addfield([
            'name' => 'content_audio',
            'label' => 'İçerik Sesi',
            'type' => 'upload',
            'withFiles' => true,
            'disk' => 'public',
        ]);

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
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
