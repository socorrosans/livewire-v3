<?php

use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));
