<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LessonsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Hamcrest\Core\Set;
use Psy\Util\Str;

/**
 * Class LessonsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class LessonsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Lessons::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/lessons');
        CRUD::setEntityNameStrings('lesson', 'lessons');
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
        $this->crud->addField([
            'name' => 'title',
            'label' => 'Başlık',
            'type' => 'text',
            'attributes' => [
                'required' => true,
                'onblur' => "generateSlug(this)", // onBlur özelliği
            ],
        ]);

        CRUD::field('title_id')->type('text')->label('Başlık ID')->prefix('beyonofseen.com.tr/dersler/');

        CRUD::field('lesson_id')->label('Sınıf')->type('select_from_array')->options([
            '9' => '9.Sınıf',
            '10' => '10.Sınıf',
            '11' => '11.Sınıf',
            '12' => '12.Sınıf'
        ]);
        CRUD::field('lesson_group')->label('Ders')->type('select_from_array')->options([
                'matematik' => 'Matematik',
                'edebiyat' => 'Türk Dili ve Edebiyatı',
                'fizik' => 'Fizik',
                'kimya' => 'Kimya',
                'biyoloji' => 'Biyoloji',
                'tarih' => 'Tarih',
                'cografya' => 'Coğrafya',
                'din' => 'Din Kültürü Ve Ahlak Bilgisi',
                'ingilizce' => 'İngilizce',
                'almanca' => 'Almanca',
            ]);
        CRUD::field('content')->type('textarea')->label('İçerik');
        CRUD::addfield([
            'name' => 'content_audio',
            'label' => 'Ders Sesi',
            'type' => 'upload',
            'withFiles' => true,
            'disk' => 'public',
        ]);
        CRUD::addfield([
            'name' => 'text_file',
            'label' => 'Ders Yazı Dosyası',
            'type' => 'upload',
            'withFiles' => true,
            'disk' => 'public',
        ]);
        CRUD::addfield([
            'name' => 'audio_file',
            'label' => 'Ders Ses Dosyası',
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
