<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();


        
        $schedule->call(function () {
            $reservations = DB::table('reservations')->get(); 
            foreach($reservations as $res) { 
                if (time() > ((strtotime($res->res_date) - 10800) + 900)) { 
                    echo "Reservation with id: $res->id has been deleted \n "; 
                    DB::table('reservations')->where('id', $res->id)->delete(); 
                }
            }
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void 
     * 
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}