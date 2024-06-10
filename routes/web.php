<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AIController;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\PDF;

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

Route::get('/',function(){
    return view('home.index');
})->name('home');;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//pages
route::get('/printgen',[HomeController::class,'index'])->name('printgen');
Route::get('/product/printgen', [ProductController::class,'index'])->name('home.product');


//Admin Routes
//Admin Category Routes
route::get('/view_category',[AdminController::class,'view_category']);
route::post('/add_category',[AdminController::class,'add_category']);
route::get('/delete_category/{id}',[AdminController::class,'delete_category']);

//Admin Product Routes
route::get('/view_product',[AdminController::class,'view_product']);
route::post('/add_product',[AdminController::class,'add_product']);
route::get('/show_product',[AdminController::class,'show_product']);
route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
route::get('/update_product/{id}',[AdminController::class,'update_product']);
route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);

//Order detials Route





//Supplier Orders Routes
 Route::get('/supplierorders', [SupplierController::class, 'showOrders'])->name('supplier.orders.index');
    Route::get('/supplierorders/{id}/edit', [SupplierController::class, 'editOrder'])->name('supplier.orders.edit');
    Route::put('/supplierorders/{id}', [SupplierController::class, 'updateOrder'])->name('supplier.orders.update');
    Route::delete('/supplierorders/{id}', [SupplierController::class, 'destroyOrder'])->name('supplier.orders.destroy');

//Supplier AI Orders Routes
Route::get('/supplier/ai_orders', [SupplierController::class, 'showAIOrders'])->name('supplier.ai_orders.index');
Route::get('/supplier/ai_orders/{id}/edit', [SupplierController::class, 'editAIOrder'])->name('supplier.ai_orders.edit');
Route::put('/supplier/ai_orders/{id}', [SupplierController::class, 'updateAIOrder'])->name('supplier.ai_orders.update');
Route::delete('/supplier/ai_orders/{id}', [SupplierController::class, 'destroyAIOrder'])->name('supplier.ai_orders.destroy');

//Admin Department Routes
route::get('/view_department',[AdminController::class,'view_department']);
route::post('/add_department',[AdminController::class,'add_department']);
route::get('/delete_department/{id}',[AdminController::class,'delete_department']);


//Admin Employee Routes
route::get('/add_new_employee',[AdminController::class,'add_new_employee']);
route::post('/add_employee',[AdminController::class,'add_employee']);
route::get('/show_employee',[AdminController::class,'show_employee']);
route::get('/delete_employee/{id}',[AdminController::class,'delete_employee']);
route::get('/update_employee/{id}',[AdminController::class,'update_employee']);
route::post('/update_employee_confirm/{id}',[AdminController::class,'update_employee_confirm']);

//Admin Orders Routes

// Routes for Orders
Route::get('/orders', [AdminController::class, 'showOrders'])->name('admin.orders.index');
Route::get('/orders/{id}/edit', [AdminController::class, 'editOrder'])->name('admin.orders.edit');
Route::put('/admin/orders/{id}', [AdminController::class, 'updateOrder'])->name('admin.orders.update');
Route::delete('/admin/orders/{id}', [AdminController::class, 'destroyOrder'])->name('admin.orders.destroy');

// Routes for AI Orders
Route::get('/admin/ai_orders', [AdminController::class, 'showAIOrders'])->name('admin.ai_orders.index');
Route::get('/admin/ai_orders/{id}/edit', [AdminController::class, 'editAIOrder'])->name('admin.ai_orders.edit');
Route::put('/admin/ai_orders/{id}', [AdminController::class, 'updateAIOrder'])->name('admin.ai_orders.update');
Route::delete('/admin/ai_orders/{id}', [AdminController::class, 'destroyAIOrder'])->name('admin.ai_orders.destroy');


//See all Messages in Dashboard
Route::get('/all_messages',[AdminController::class,'all_messages']);

//Home Routes


//Home Product Routes
route::get('/product_details/{id}',[ProductController::class,'product_details']);
//Add To Cart Route
route::post('/add_cart/{id}',[ProductController::class,'add_cart']);
//Search the Product
Route::get('/search', [ProductController::class, 'search'])->name('product.search');

//Show Cart Route
route::get('/show_cart',[HomeController::class,'show_cart']);
//Actions of Cart
route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);

// Route to show the checkout page
Route::get('/check_out', [HomeController::class, 'showCheckout'])->name('show.order');

// Route to process the order
Route::post('/checkout/add_order', [HomeController::class, 'add_order'])->name('checkout.add_order');


// Route for showing the form for AI Image Generator and Editor
Route::get('/aiimage', [AIController::class, 'showForm'])->name('aiimage');
Route::post('/generate-image', [AIController::class, 'generateImage'])->name('generate.image');
Route::post('/edit-image', [AIController::class, 'editImage'])->name('edit.image');
Route::get('/process-order/{id}', [AIController::class, 'showProcessOrderForm'])->name('process.order.form');
Route::post('/process-order/{id}', [AIController::class, 'processOrder'])->name('process.order');

Route::get('/products', [ProductController::class, 'index'])->name('product.index');

Route::get('/about-us', [HomeController::class, 'about']);
Route::get('/service', [HomeController::class, 'service']);
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy']);
Route::get('/contact-us', [HomeController::class, 'contact']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/pricing', [HomeController::class, 'pricing']);
Route::get('/questions_answers', [HomeController::class, 'QandA']);
//Send Message by Contact
Route::post('/sendmessage',[HomeController::class,'sendmessage']);


Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'ar'])) {
        abort(400);
    }

    session(['locale' => $locale]);

    return redirect()->back();
})->name('lang.switch');
