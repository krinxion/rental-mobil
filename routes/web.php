<?php


use App\Http\Controllers\MasterData\MobilController;
use App\Http\Controllers\MasterData\MerkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RentalMobilController;
use App\Http\Controllers\TransaksiMobilController;
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



// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    //mobil
    Route::get('/rental-mobil/index', [RentalMobilController::class, 'index'])->name('rental-mobil.index');

    //transaksi
    Route::get('/transaksi/index', [TransaksiMobilController::class, 'index'])->name('transaksi.index');
    Route::get('/transaksi/rental-mobil/{id}', [TransaksiMobilController::class, 'rental'])->name('rental');

    //master data
    //kategori

    //merkmobil
    Route::get('/master-data/merk-mobil/index', [MerkController::class, 'index'])->name('merk-mobil.index');
    Route::post('/master-data/merk-mobil/store', [MerkController::class, 'store'])->name('merk-mobil.store');
    Route::post('/master-data/merk-mobil/update/{id}', [MerkController::class, 'update'])->name('merk-mobil.update');
    Route::get('/master-data/merk-mobil/delete/{id}', [MerkController::class, 'delete'])->name('merk-mobil.delete');

    //list mobil
    Route::get('/master-data/mobil/index', [MobilController::class, 'index'])->name('mobil.index');
    Route::post('/master-data/mobil/store', [MobilController::class, 'store'])->name('mobil.store');
    Route::post('/master-data/mobil/update/{id}', [MobilController::class, 'update'])->name('mobil.update');
    Route::get('/master-data/mobil/delete/{id}', [MobilController::class, 'delete'])->name('mobil.delete');

    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
