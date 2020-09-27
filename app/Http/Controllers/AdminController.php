<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeConfigure;

class AdminController extends Controller
{
    //

    public function index() {
        return view('admin.manager');
    }

    public function system_on_off_time() {
        $start_time_conf = TimeConfigure::where('config_type', '=', 'start_time')->first();
        $start_time = $start_time_conf['config_value'];

        $end_time_conf = TimeConfigure::where('config_type', '=', 'end_time')->first();
        $end_time = $end_time_conf['config_value'];

        return view('admin.system-on-off-time', ['start_time' => $start_time, 'end_time' => $end_time]);
    }

    public function setting_time_schedule() {
        $time_conf = TimeConfigure::where('config_type', '=', 'schedule_on_time')->first();
        $schedule_on_time = $time_conf['config_value'];

        $time_conf = TimeConfigure::where('config_type', '=', 'schedule_off_time')->first();
        $schedule_off_time = $time_conf['config_value'];

        return view('admin.setting-time-schedule', ['schedule_on_time'=>$schedule_on_time, 'schedule_off_time'=>$schedule_off_time]);
    }

    public function view_all_commands() {
        return view('admin.view-all-commands');
    }

    public function set_system_onoff_time(Request $request) {
        $on_dt = $request->on_dt;
        $off_dt = $request->off_dt;

        if ($on_dt != null) {
            TimeConfigure::where('config_type', '=', 'start_time')
                    ->update(['config_value'=>$on_dt]);
        }

        if ($off_dt != null) {
            TimeConfigure::where('config_type', '=', 'end_time')
                    ->update(['config_value'=>$off_dt]);
        }
    }

    public function set_schedule_onoff_time(Request $request) {
        $on_dt = $request->on_dt;
        $off_dt = $request->off_dt;

        die($on_dt);

        if ($on_dt != null) {
            TimeConfigure::where('config_type', '=', 'schedule_on_time')
                    ->update(['config_value'=>$on_dt]);
        }

        if ($off_dt != null) {
            TimeConfigure::where('config_type', '=', 'schedule_off_time')
                    ->update(['config_value'=>$off_dt]);
        }        
    }
}
