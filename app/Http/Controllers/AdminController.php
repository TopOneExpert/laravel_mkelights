<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeConfigure;
use App\Models\Commands;
use DataTables;

class AdminController extends Controller
{
    //

    public function index(Request $request)
    {
        return view('admin.index');
    }

    public function commands()
    {
        $data = Commands::latest();
        return DataTables::of($data)
            ->addColumn('command', function ($row) {
                $command = $row->device_state ? "On" : "Off";
                return $command;
            })
            ->rawColumns(['command'])
            ->make(true);
    }

    public function system_on_off_time()
    {
        $start_time_conf = TimeConfigure::where('config_type', '=', 'start_time')->first();
        $start_time = $start_time_conf['config_value'];

        $end_time_conf = TimeConfigure::where('config_type', '=', 'end_time')->first();
        $end_time = $end_time_conf['config_value'];

        return view('admin.system-on-off-time', ['start_time' => $start_time, 'end_time' => $end_time]);
    }

    public function setting_time_schedule()
    {
        $schedule_on_times = TimeConfigure::where('config_type', '=', 'schedule_on_time')->get();
        //$schedule_on_times = $time_conf['config_value'];

        $schedule_off_times = TimeConfigure::where('config_type', '=', 'schedule_off_time')->get();
        //$schedule_off_times = $time_conf['config_value'];

        return view('admin.setting-time-schedule', ['schedule_on_times' => $schedule_on_times, 'schedule_off_times' => $schedule_off_times]);
    }

    public function set_system_onoff_time(Request $request)
    {
        $on_dt = $request->on_dt;
        $off_dt = $request->off_dt;

        if ($on_dt != null) {
            TimeConfigure::where('config_type', '=', 'start_time')
                ->update(['config_value' => $on_dt]);
        }

        if ($off_dt != null) {
            TimeConfigure::where('config_type', '=', 'end_time')
                ->update(['config_value' => $off_dt]);
        }
    }

    public function set_schedule_onoff_time(Request $request)
    {
        $on_dt = $request->on_dt;
        $off_dt = $request->off_dt;

        if ($on_dt != null) {
            TimeConfigure::where('config_type', '=', 'schedule_on_time')
                ->update(['config_value' => $on_dt]);
        }

        if ($off_dt != null) {
            TimeConfigure::where('config_type', '=', 'schedule_off_time')
                ->update(['config_value' => $off_dt]);
        }
    }

    public function set_schedule_on_time(Request $request)
    {
        $id = $request->id;
        $on_dt = $request->on_dt;

        if ($on_dt != null) {
            TimeConfigure::where('id', '=', $id)
                ->update(['config_value' => $on_dt]);
        }
    }

    public function set_schedule_off_time(Request $request)
    {
        $id = $request->id;
        $off_dt = $request->off_dt;

        if ($off_dt != null) {
            TimeConfigure::where('id', '=', $id)
                ->update(['config_value' => $off_dt]);
        }
    }
}
