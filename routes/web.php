<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Chart\ChartController;
use App\Http\Controllers\Extras\ExtrasController;
use App\Http\Controllers\Form\FormController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Invoice\InvoiceController;
use App\Http\Controllers\License\LicenseController;
use App\Http\Controllers\Mail\MailController;
use App\Http\Controllers\Other\CalendarController;
use App\Http\Controllers\Other\GalleryController;
use App\Http\Controllers\Other\KanbanController;
use App\Http\Controllers\Other\WidgetController;
use App\Http\Controllers\Page\PageController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Search\SearchController;
use App\Http\Controllers\Setting\SettingController;
use App\Http\Controllers\SubCategory\SubCategoryController;
use App\Http\Controllers\SupportTicket\SupportTicketController;
use App\Http\Controllers\Table\TableController;
use App\Http\Controllers\UI\UILayoutController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

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

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('index');
// Category Route
Route::prefix('category')->group(function () {
    Route::get('/all', [CategoryController::class, 'all'])->name('category.all');
    Route::get('/add', [CategoryController::class, 'add'])->name('category.add');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::get('/delete', [CategoryController::class, 'delete'])->name('category.delete');
    Route::post('/update', [CategoryController::class, 'update'])->name('category.update');
});
// Sub Category Route
Route::prefix('sub-category')->group(function () {
    Route::get('/all', [SubCategoryController::class, 'all'])->name('sub-category.all');
    Route::get('/add', [SubCategoryController::class, 'add'])->name('sub-category.add');
    Route::get('/edit/{id}', [SubCategoryController::class, 'edit'])->name('sub-category.edit');
    Route::post('/update', [SubCategoryController::class, 'update'])->name('sub-category.update');
    Route::post('/delete', [SubCategoryController::class, 'delete'])->name('sub-category.delete');
});
// Product Route
Route::prefix('product')->group(function () {
    Route::get('/all', [ProductController::class, 'all'])->name('product.all');
    Route::get('/add', [ProductController::class, 'add'])->name('product.add');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update', [ProductController::class, 'update'])->name('product.update');
    Route::post('/delete', [ProductController::class, 'delete'])->name('product.delete');
});
// License Route
Route::prefix('license')->group(function () {
    Route::get('/all', [LicenseController::class, 'all'])->name('license.all');
    Route::get('/pending', [LicenseController::class, 'pending'])->name('license.pending');
    Route::get('/active', [LicenseController::class, 'active'])->name('license.active');
    Route::get('/suspended', [LicenseController::class, 'suspended'])->name('license.suspended');
    Route::get('/create', [LicenseController::class, 'create'])->name('license.create');
    Route::get('/edit/{id}', [LicenseController::class, 'edit'])->name('license.edit');
    Route::get('/view/{id}', [LicenseController::class, 'view'])->name('license.view');
    Route::post('/update', [LicenseController::class, 'update'])->name('license.update');
});
// User Route
Route::prefix('user')->group(function () {
    Route::get('/all', [UserController::class, 'all'])->name('user.all');
    Route::get('/pending', [UserController::class, 'pending'])->name('user.pending');
    Route::get('/active', [UserController::class, 'active'])->name('user.active');
    Route::get('/suspended', [UserController::class, 'suspended'])->name('user.suspended');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::get('/view/{id}', [UserController::class, 'view'])->name('user.view');
    Route::post('/update', [UserController::class, 'update'])->name('user.update');
});
// Invoice Route
Route::prefix('invoice')->group(function () {
    Route::get('/all', [InvoiceController::class, 'all'])->name('invoice.all');
    Route::get('/paid', [InvoiceController::class, 'paid'])->name('invoice.paid');
    Route::get('/pending', [InvoiceController::class, 'pending'])->name('invoice.pending');
    Route::get('/view/{id}', [InvoiceController::class, 'view'])->name('invoice.view');
});
// Support ticket Route
Route::prefix('ticket')->group(function () {
    Route::get('/all', [SupportTicketController::class, 'all'])->name('ticket.all');
    Route::get('/answered', [SupportTicketController::class, 'paid'])->name('ticket.answered');
    Route::get('/pending', [SupportTicketController::class, 'pending'])->name('ticket.pending');
    Route::get('/closed', [SupportTicketController::class, 'pending'])->name('ticket.closed');
    Route::get('/view/{id}', [SupportTicketController::class, 'ticketDetails'])->name('ticket.view');
    Route::post('/answer', [SupportTicketController::class, 'answerTicket'])->name('ticket.answer');
    Route::post('/update-ticket-status', [SupportTicketController::class, 'updateTicketStatus'])->name('ticket.update-status');
});
// Settings Route
Route::prefix('setting')->group(function () {
    Route::get('/company', [SettingController::class, 'company'])->name('setting.company');
    Route::post('/update-company', [SettingController::class, 'updateCompany'])->name('setting.update-company');
    Route::get('/logo-fav', [SettingController::class, 'logoFav'])->name('setting.logo-fav');
    Route::post('/update-logo-fav', [SettingController::class, 'UpdateLogoFav'])->name('setting.update-logo-fav');
    Route::get('/seo', [SettingController::class, 'seo'])->name('setting.seo');
    Route::post('/update-seo', [SettingController::class, 'updateSeo'])->name('setting.update-seo');
    Route::get('/change-password', [SettingController::class, 'changePassword'])->name('setting.change-password');
    Route::post('/update-password', [SettingController::class, 'updatePassword'])->name('setting.update-password');
});
// Logout Route
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// Widget Route
Route::get('/widget', [WidgetController::class, 'index'])->name('widget');

// Forms Route
Route::prefix('forms')->group(function () {
    Route::get('/general', [FormController::class, 'general'])->name('forms.general');
    Route::get('/advanced', [FormController::class, 'advanced'])->name('forms.advanced');
    Route::get('/editor', [FormController::class, 'editor'])->name('forms.editor');
    Route::get('/validation', [FormController::class, 'validation'])->name('forms.validation');
});
