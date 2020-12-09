<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HabitationController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PropositionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AttributionController;
use App\Http\Controllers\OutputController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('layouts/partials/home');
});


/**
 * Habitation
 */
Route::get('/habitation', [HabitationController::class, 'index'])->name('habitation.index');

Route::get('/habitation/add', [HabitationController::class, 'add'])->name('habitation.add');

Route::post('/habitation/store', [HabitationController::class, 'store'])->name('habitation.store');

Route::get('/habitation/edit/{id}', [HabitationController::class, 'edit'])->name('habitation.edit');

Route::post('/habitation/update/{id}', [HabitationController::class, 'update'])->name('habitation.update');

Route::delete('/habitation/destroy/{id}', [HabitationController::class, 'destroy'])->name('habitation.destroy');

/**
 * Categorie
 */
Route::get('/categorie', [CategorieController::class, 'index'])->name('categorie.index');

Route::get('/categorie/add', [CategorieController::class, 'add'])->name('categorie.add');

Route::post('/categorie/store', [CategorieController::class, 'store'])->name('categorie.store');

Route::get('/categorie/edit/{id}', [CategorieController::class, 'edit'])->name('categorie.edit');

Route::post('/categorie/update/{id}', [CategorieController::class, 'update'])->name('categorie.update');

Route::delete('/categorie/destroy/{id}', [CategorieController::class, 'destroy'])->name('categorie.destroy');

/**
 * Type
 */
Route::get('/type', [TypeController::class, 'index'])->name('type.index');

Route::get('/type/add', [TypeController::class, 'add'])->name('type.add');

Route::post('/type/store', [TypeController::class, 'store'])->name('type.store');

Route::get('/type/edit/{id}', [TypeController::class, 'edit'])->name('type.edit');

Route::post('/type/update/{id}', [TypeController::class, 'update'])->name('type.update');

Route::delete('/type/destroy/{id}', [TypeController::class, 'destroy'])->name('type.destroy');

/**
 * Question
 */
Route::get('/question', [QuestionController::class, 'index'])->name('question.index');

Route::get('/question/add', [QuestionController::class, 'add'])->name('question.add');

Route::post('/question/store', [QuestionController::class, 'store'])->name('question.store');

Route::get('/question/edit/{id}', [QuestionController::class, 'edit'])->name('question.edit');

Route::post('/question/update/{id}', [QuestionController::class, 'update'])->name('question.update');

Route::delete('/question/destroy/{id}', [QuestionController::class, 'destroy'])->name('question.destroy');

/**
 * attribution
 */
Route::get('/attribution', [AttributionController::class, 'index'])->name('attribution.index');

Route::get('/attribution/add', [AttributionController::class, 'add'])->name('attribution.add');

Route::post('/attribution/store', [AttributionController::class, 'store'])->name('attribution.store');

Route::get('/attribution/edit/{id}', [AttributionController::class, 'edit'])->name('attribution.edit');

Route::post('/attribution/update/{id}', [AttributionController::class, 'update'])->name('attribution.update');

Route::delete('/attribution/destroy/{id}', [AttributionController::class, 'destroy'])->name('attribution.destroy');

/**
 * Proposition
 */
Route::get('/proposition', [PropositionController::class, 'index'])->name('proposition.index');

Route::get('/proposition/add', [PropositionController::class, 'add'])->name('proposition.add');

Route::post('/proposition/store', [PropositionController::class, 'store'])->name('proposition.store');

Route::get('/proposition/edit/{id}', [PropositionController::class, 'edit'])->name('proposition.edit');

Route::post('/proposition/update/{id}', [PropositionController::class, 'update'])->name('proposition.update');

Route::delete('/proposition/destroy/{id}', [PropositionController::class, 'destroy'])->name('proposition.destroy');

/**
 * Utilisateur
 */
Route::get('/utilisateur', [UserController::class, 'index'])->name('utilisateur.index');

/**
 * Output
 */
Route::get('/output', [OutputController::class, 'index'])->name('output.index');

Route::get('/output/add', [OutputController::class, 'add'])->name('output.add');

Route::post('/output/store', [OutputController::class, 'store'])->name('output.store');

Route::get('/output/edit/{id}', [OutputController::class, 'edit'])->name('output.edit');

Route::post('/output/update/{id}', [OutputController::class, 'update'])->name('output.update');

Route::delete('/output/destroy/{id}', [OutputController::class, 'destroy'])->name('output.destroy');

/**
 * Reponse
 */
Route::get('/reponse', [HabitationController::class, 'index'])->name('reponse.index');

