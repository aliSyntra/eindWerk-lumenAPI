<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'api'], function () use ($router) {
    /*routers for users table*/
    $router->get('users',  ['uses' => 'UserController@showAllUsers']);
  
    $router->get('users/{id}', ['uses' => 'UserController@showOneUser']);
  
    $router->post('users', ['uses' => 'UserController@create']);
  
    $router->delete('users/{id}', ['uses' => 'UserController@delete']);
  
    $router->put('users/{id}', ['uses' => 'UserController@update']);

    //router for user login
    $router->get('users/login/{email}', ['uses' => 'UserController@userLogin']);


    /*routers for animals table*/
    $router->get('animals',  ['uses' => 'AnimalController@showAllAnimals']);
  
    $router->get('animals/{id}', ['uses' => 'AnimalController@showOneAnimal']);
  
    $router->post('animals', ['uses' => 'AnimalController@create']);
  
    $router->delete('animals/{id}', ['uses' => 'AnimalController@delete']);
  
    $router->put('animals/{id}', ['uses' => 'AnimalController@update']);


    /*routers for breeds table*/
    $router->get('breeds',  ['uses' => 'BreedController@showAllBreeds']);
  
    $router->get('breeds/{id}', ['uses' => 'BreedController@showOneBreed']);
  
    $router->post('breeds', ['uses' => 'BreedController@create']);
  
    $router->delete('breeds/{id}', ['uses' => 'BreedController@delete']);
  
    $router->put('breeds/{id}', ['uses' => 'BreedController@update']);

    $router->get('breedbox', ['uses' => 'BreedController@getBreedsBox']);


    /*routers for medications table*/
    $router->get('medications',  ['uses' => 'MedicationController@showAllMedications']);
  
    $router->get('medications/{id}', ['uses' => 'MedicationController@showOneMedication']);
  
    $router->post('medications', ['uses' => 'MedicationController@create']);
  
    $router->delete('medications/{id}', ['uses' => 'MedicationController@delete']);
  
    $router->put('medications/{id}', ['uses' => 'MedicationController@update']);

    $router->get('medications/animal/{id}', ['uses' => 'MedicationController@getAnimalMedication']);


    /*routers for useranimals table*/
    $router->get('useranimals',  ['uses' => 'UserAnimalController@showAllUserAnimals']);
  
    $router->get('useranimals/{id}', ['uses' => 'UserAnimalController@showOneUserAnimal']);
  
    $router->post('useranimals', ['uses' => 'UserAnimalController@create']);
  
    $router->delete('useranimals/{id}', ['uses' => 'UserAnimalController@delete']);
  
    $router->put('useranimals/{id}', ['uses' => 'UserAnimalController@update']);
  });