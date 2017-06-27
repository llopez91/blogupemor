<?php




/*
|--------------------------------------------------------------------------
| Ruta principal
|--------------------------------------------------------------------------
| Esta ruta solo sirve para mostrar el index principal de la pagina de upemor
ruta => controller
modelo => migracion
|
*/


/*
|--------------------------------------------------------------------------
| Rutas para el administrador
|-------------------------------------------------------------------------- 
*/

Route::get('/admin/dashboard', 'AdminController@index');
Route::get('/admin/dashboard/nota/nueva', 'NotasController@index');
Route::resource('/admin/dashboard/nota/','NotasController',
['names' => [	
    'store' => 'notas.store',
    'create' => 'notas.create',
    'show' => 'notas.show',
    'update' => 'notas.update',
    'destroy' => 'notas.destroy',
    'edit' => 'notas.edit'   
], 'except' => [
    'index'
]
]);
Route::get('/', 'NotasController@mosaicoNotas');

//Route::get('img-upload','ImageController@imgUpload');
Route::get('/noticiaimagen/{filename}',[
    'uses'=>'NotasController@getImagen',
    'as'=>'nota.imagen'
]);



Route::get('/{slug}',['as'=>'noticias.single','uses'=>'NotasController@getSingle']);

//Route::post('noticias', ['as'=>'noticias','uses'=>'ItemController@create']);





/*
|--------------------------------------------------------------------------
| Rutas de Noticias
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::resource('noticias', 'NoticiasController');



/*
|--------------------------------------------------------------------------
| Rutas de Eventos
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::resource('eventos', 'EventosController');
