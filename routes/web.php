<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\JobList;
use App\Livewire\About;
use App\Livewire\Contact;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Home::class);

Route::get('/job-list', JobList::class)->name('joblist');

Route::get('/about', About::class);

Route::get('/contact', Contact::class);