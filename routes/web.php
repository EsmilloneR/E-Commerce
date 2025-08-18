<?php

use App\Livewire\Auth\ForgotPasswordPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\ResetPasswordPage;
use App\Livewire\CancelPage;
use App\Livewire\CartPage;
use App\Livewire\CategoriesPage;
use App\Livewire\CheckoutPage;
use App\Livewire\HomePage;
use App\Livewire\MyOrdersDetailPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\ProductDetailPage;
use App\Livewire\ProductsPage;
use App\Livewire\SuccessPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/categories', CategoriesPage::class);
Route::get('/products', ProductsPage::class);
Route::get('/products/{slug}', ProductDetailPage::class);
Route::get('/cart', CartPage::class);
Route::get('/checkout', CheckoutPage::class);
Route::get('/my-orders', MyOrdersPage::class);
Route::get('/my-orders/{order}', MyOrdersDetailPage::class);


Route::get('/login-page', LoginPage::class);
Route::get('/register-page', RegisterPage::class);
Route::get('/forgot', ForgotPasswordPage::class);
Route::get('/reset', ResetPasswordPage::class);


Route::get('/success', SuccessPage::class);
Route::get('/cancel', CancelPage::class);


require __DIR__ . '/auth.php';
