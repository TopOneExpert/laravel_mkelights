<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use App\Models\TimeConfigure;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\OnAllLights::class,
        Commands\OffAllLights::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $time_conf = TimeConfigure::where('config_type', '=', 'schedule_on_time')->first();
        $schedule_on_time = $time_conf['config_value'];

        $on_cron_month = date("m", $schedule_on_time);
        $on_cron_day = date("d", $schedule_on_time);
        $on_cron_hour = date("h", $schedule_on_time);
        $on_cron_min = date("i", $schedule_on_time);

        $on_cron = $on_cron_min.' '.$on_cron_hour.' '.$on_cron_day.' '.$on_cron_month.' *';
        $schedule->command('on:lights')->cron($on_cron);

        $time_conf = TimeConfigure::where('config_type', '=', 'schedule_off_time')->first();
        $schedule_off_time = $time_conf['config_value'];

        $off_cron_month = date("m", $schedule_off_time);
        $off_cron_day = date("d", $schedule_off_time);
        $off_cron_hour = date("h", $schedule_off_time);
        $off_cron_min = date("i", $schedule_off_time);

        $off_cron = $off_cron_min.' '.$off_cron_hour.' '.$off_cron_day.' '.$off_cron_month.' *';
        $schedule->command('off:lights')->cron($off_cron);
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

    protected function scheduleTimezone()
    {
        return 'America/Chicago';
    }
}
