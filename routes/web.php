<?php

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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->get('/chartData',['middleware'=>'auth','uses'=>'ChartDataController@onAllSelect']);

$router->get('/clientReview',['middleware'=>'auth','uses'=>'ClientsReviewController@onAllSelect']);

$router->post('/contactSend',['middleware'=>'auth','uses'=>'ContactController@onContactSend']);


$router->get('/courseHome',['middleware'=>'auth','uses'=>'CourseController@onSelectFour']);
$router->get('/courseAll',['middleware'=>'auth','uses'=>'CourseController@onSelectAll']);
$router->get('/courseDetails/{id}',['middleware'=>'auth','uses'=>'CourseController@onSelectDetails']);

$router->get('/footer',['middleware'=>'auth','uses'=>'FooterController@onSelect']);

$router->get('/informationEtc',['middleware'=>'auth','uses'=>'InformationController@onSelect']);

$router->get('/service',['middleware'=>'auth','uses'=>'ServiceController@onSelect']);

$router->get('/project3',['middleware'=>'auth','uses'=>'ProjectController@onSelect3']);


$router->get('/allProjects',['middleware'=>'auth','uses'=>'ProjectController@allProjects']);


$router->get('/projectDetails/{id}',['middleware'=>'auth','uses'=>'ProjectController@onSelectDetails']);

$router->get('/videoHome',['middleware'=>'auth','uses'=>'HomeEtcController@onSelectVideo']);
$router->get('/clientProject',['middleware'=>'auth','uses'=>'HomeEtcController@clientProject']);
$router->get('/techDes',['middleware'=>'auth','uses'=>'HomeEtcController@techDes']);

$router->get('/homeTitle',['middleware'=>'auth','uses'=>'HomeEtcController@homeTitle']);
