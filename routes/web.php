<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*---- Frontend routes ----- */
include(base_path('routes/frontend.php'));

/*---- Backend routes ----- */
include(base_path('routes/backend.php'));