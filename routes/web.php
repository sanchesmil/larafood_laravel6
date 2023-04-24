<?php


Route::prefix('admin')->namespace('Admin')->group(function(){

    // Routes Details Plan
    Route::put('plans/{url}/details/{idDetail}','DetailPlanController@update')->name('plan.details.update');
    Route::get('plans/{url}/details/{idDetail}/edit', 'DetailPlanController@edit')->name('plan.details.edit');
    Route::post('plans/{url}/details', 'DetailPlanController@store')->name('plan.details.store');
    Route::get('plans/{url}/details/create', 'DetailPlanController@create')->name('plan.details.create');
    Route::get('plans/{url}/details/{idDetail}','DetailPlanController@show')->name('plan.details.show');
    Route::get('plans/{url}/details', 'DetailPlanController@index')->name('plan.details.index');
    Route::delete('plans/{url}/details/{id}','DetailPlanController@destroy')->name('plan.details.destroy');


    // Routes Plans
    Route::put('plans/{url}', 'PlanController@update')->name('plans.update');
    Route::get('plans/{url}/edit', 'PlanController@edit')->name('plans.edit');
    Route::any('plans/search', 'PlanController@search')->name('plans.search');
    Route::get('plans', 'PlanController@index')->name('plans.index');
    Route::get('plans/create','PlanController@create')->name('plans.create');
    Route::post('plans', 'PlanController@store')->name('plans.store');
    Route::get('plans/{url}','PlanController@show')->name('plans.show');
    Route::delete('plans/{url}','PlanController@destroy')->name('plans.destroy');

    // Home Dashboard
    Route::get('/', 'PlanController@index')->name('admin.index');
});




Route::get('/', function () {
    return view('welcome');
});
