<?phpnamespace App\Providers;
use Illuminate\Support\ServiceProvider;
//TAMBAHKAN USE STATEMENT
use App\Invoice_detail;
use App\Observers\Invoice_detailObserver;
class AppServiceProvider extends ServiceProvider
{
/**
* Bootstrap any application services.
*
* @return void
*/
public function boot()
{
//DEFINE OBSERVER YANG TELAH DIBUAT
//Invoce_detail adalah nama class dari model
//Invoice_detailObserver adalah nama class dari observer itu sendiri
Invoice_detail::observe(Invoice_detailObserver::class);
}
/**
* Register any application services.
*
* @return void
*/
public function register()
{
//
}
}