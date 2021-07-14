<?php

use Illuminate\Support\Facades\Route;
use Kadraliev\RobotTxtEditor\RobotController;

Route::resource('/edit-form', RobotController::class);
