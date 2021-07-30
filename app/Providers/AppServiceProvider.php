<?php

namespace App\Providers;
use App\Models\FAQ;
use App\Models\pengumuman;
use App\Models\test;
use App\Models\alur;
use App\Models\pesan;
use Illuminate\Support\ServiceProvider;
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
    {
        View::share('FAQ', FAQ::get());
        View::share('alur', alur::orderBy('urutan','asc')->get());
        View::share('pesan', pesan::get());
        View::share('pengumuman', pengumuman::get());
        View::share('carouselpengumuman', pengumuman::latest()->paginate(3));
        View::share('test', test::get());
    }
}
