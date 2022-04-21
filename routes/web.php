<?php

use App\Http\Controllers\RestaurantController;
use App\Models\{
    Menu,
    Restaurant
};
use App\View\Components\RestaurantList;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // throw new \Exception('Quero ver a nova página de erro do Laravel...');
    // return Restaurant::all();
    return view('welcome');
});

// Route::get('/restaurants', [RestaurantController::class, 'index'])->name('restaurants.index');
// Route::get('/restaurants/create', [RestaurantController::class, 'create'])->name('restaurants.create');

Route::controller(RestaurantController::class)
    ->name('restaurants.')
    ->prefix('restaurants')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');    
});

Route::get('/restaurants/{restaurant}/menus/{menu}', function (Restaurant $restaurant, Menu $menu) {
    dd($menu);
})->scopeBindings(); // o método scopebidings() faz com que haja uma correspondência necessária entre o id do restaurante e o id do menu. Sem esse método, a busca retorna o valor do menu, independentemente dele corresponder ao restaurante. Nas versões 8.x pra baixo do Laravel, isso poderia ser feito informando o parânetro na rota. Ex: {menu:id} ao invés de {menu}

Route::get('/blade', fn () => Blade::render('Olá, {{ $name }}', ['name' => 'Hudson Andrade Viana']));


Route::get('/blade-component', fn () => Blade::renderComponent(new RestaurantList(new Restaurant()))); 
