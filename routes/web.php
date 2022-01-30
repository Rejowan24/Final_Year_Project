<?php

use Illuminate\Support\Facades\Route;

// import all component files...
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\BookitemsComponent;
use App\Http\Livewire\BookingComponent;
use App\Http\Livewire\RouteComponent;
use App\Http\Livewire\ScheduleComponent;
use App\Http\Livewire\DriverlistComponent;

use App\Http\Livewire\FoodcourtComponent;
use App\Http\Livewire\GreengardenComponent;
use App\Http\Livewire\CricketComponent;
use App\Http\Livewire\BasketballComponent;
use App\Http\Livewire\GolfComponent;
use App\Http\Livewire\BonomayaComponent;
use App\Http\Livewire\AnisulhaqComponent;
use App\Http\Livewire\AuditoriumComponent;
use App\Http\Livewire\ExplorelabComponent;
use App\Http\Livewire\VisitPermissionComponent;
use App\Http\Livewire\SlotBookingComponent;
use App\Http\Livewire\SlotListComponent;
use App\Http\Livewire\CheckBookingListComponent;
use App\Http\Livewire\user\UserDashboardComponent;
use App\Http\Livewire\admin\AdminDashboardComponent;
use App\Http\Livewire\admin\AdminAddCategoryComponent;
use App\Http\Livewire\admin\AdminEditCategoryComponent;
use App\Http\Livewire\admin\AdminAddProductComponent;
use App\Http\Livewire\admin\AdminEditProductComponent;
use App\Http\Livewire\admin\AdminInnovationLabComponent;
use App\Http\Livewire\admin\pages\AdminCricketComponent;
use App\Http\Livewire\admin\pages\AdminBooksItemsComponent;
use App\Http\Livewire\admin\pages\AdminDriverlistComponent;


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


// For layouts pages....

Route::get('/', HomeComponent::class);
Route::get('/about', AboutComponent::class);
Route::get('/contact', ContactComponent::class);
Route::get('/book/items', BookitemsComponent::class);
Route::get('/download/file/{id}', BookitemsComponent::class)->name('download.pdf');
Route::get('/route', RouteComponent::class);
Route::get('/schedule', ScheduleComponent::class);
Route::get('/driver/list', DriverlistComponent::class);
Route::get('/food/court', FoodcourtComponent::class);
Route::get('/green/garden', GreengardenComponent::class);
Route::get('/cricket/football', CricketComponent::class);
Route::get('/basketball', BasketballComponent::class);
Route::get('/golf', GolfComponent::class);
Route::get('/bonomaya', BonomayaComponent::class);
Route::get('/anisulhaq', AnisulhaqComponent::class);
Route::get('/auditorium', AuditoriumComponent::class);

Route::get('/explore/lab', ExplorelabComponent::class);
Route::get('/visiting/permission', VisitPermissionComponent::class);

Route::get('/slot/booking', SlotBookingComponent::class)->name('slot.booking');
Route::get('/slot/list/checking', SlotListComponent::class)->name('slot.list');
Route::get('/table/reserve', App\Http\livewire\TableReserveComponent::class)->name('table.reserve');
Route::get('/download/file/{id}',[BookingComponent::class, 'download'])->name('download.pdf');

// for user
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard', UserDashboardComponent::class )->name('user.dashboard');
    Route::get('/booking', BookingComponent::class);
    Route::get('/show/booking/list', CheckBookingListComponent::class)->name('show.list');
});


// for admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/add/category', AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/Innovationlab/permission', AdminInnovationLabComponent::class)->name('admin.innovationlab');
    Route::get('/admin/edit/category{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('admin/product/add', AdminAddProductComponent::class )->name('admin.addproduct');
    Route::get('admin/product/edit/{product_slug}', AdminEditProductComponent::class )->name('admin.editproduct');
    


    // all pages here...
    Route::get('admin/bookinglist', AdminCricketComponent::class);
    Route::get('admin/bookitems', AdminBooksItemsComponent::class);
    Route::get('admin/driverlist', AdminDriverlistComponent::class)->name('admin.driverlist');
    Route::get('admin/foodcourt', App\Http\livewire\admin\pages\AdminFoodcourtComponent::class)->name('admin.foodcourt');
    Route::get('admin/greengarden', App\Http\livewire\admin\pages\AdminGreenGardenComponent::class)->name('admin.greengarden');
    Route::get('/booking/pending', AdminCricketComponent::class)->name('booking.pending');
    Route::put('/booking/approve/{id}', AdminCricketComponent::class)->name('booking.approved');
    Route::put('/booking/cancle/{id}', AdminCricketComponent::class)->name('booking.Cancled');
});