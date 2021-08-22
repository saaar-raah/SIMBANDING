<?php

namespace App\Providers;
use App\Models\FAQ;
use App\Models\pengumuman;
use App\Models\alur;
use App\Models\pesan;
use App\Models\berkas;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    // {
    //     Paginator::useBootstrap();
    //     View::share('FAQ', FAQ::get());
    //     View::share('alur', alur::orderBy('urutan','asc')->get());
    //     View::share('pesan', pesan::get());
    //     View::share('berkas', berkas::get());
    //     View::share('pengumuman', pengumuman::paginate(6));
    //     View::share('carouselpengumuman', pengumuman::latest()->paginate(3));
    //     View::share('newspengumuman', pengumuman::latest()->paginate(5));
    // }
}
