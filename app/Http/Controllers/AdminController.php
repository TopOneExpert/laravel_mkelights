<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeConfigure;
use App\Models\Commands;
use App\Models\Schedule;
use DataTables;
use Agent;

class AdminController extends Controller
{
    //

    public function index(Request $request)
    {
        if ( Agent::isMobile() ) {
            return view('admin.mobile-index');
        } else {
            return view('admin.index');
        }
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

        $start_time = date("H:i:s", strtotime($start_time_conf['config_value']));
        $start_date = date("Y-m-d", strtotime($start_time_conf['config_value']));

        $end_time_conf = TimeConfigure::where('config_type', '=', 'end_time')->first();

        $end_time = date("H:i:s", strtotime($end_time_conf['config_value']));
        $end_date = date("Y-m-d", strtotime($end_time_conf['config_value']));

        if ( Agent::isMobile() ) {
            return view('admin.mobile-system-on-off-time', ['start_time' => $start_time, 'start_date' => $start_date, 'end_time' => $end_time, 'end_date' => $end_date]);
        } else {
            return view('admin.system-on-off-time', ['start_time' => $start_time, 'start_date' => $start_date, 'end_time' => $end_time, 'end_date' => $end_date]);
        }
    }

    public function setting_time_schedule()
    {
        $schedule_on_times = TimeConfigure::where('config_type', '=', 'schedule_on_time')->get();
        //$schedule_on_times = $time_conf['config_value'];

        $schedule_off_times = TimeConfigure::where('config_type', '=', 'schedule_off_time')->get();
        //$schedule_off_times = $time_conf['config_value'];

        if ( Agent::isMobile() ) {
            return view('admin.mobile-setting-time-schedule', ['schedule_on_times' => $schedule_on_times, 'schedule_off_times' => $schedule_off_times]);
        } else {
            return view('admin.setting-time-schedule', ['schedule_on_times' => $schedule_on_times, 'schedule_off_times' => $schedule_off_times]);
        }
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

    public function setting_schedule_index() {
        $time_ranges = Schedule::all();
        
        foreach($time_ranges as $time_range)
        {
            if ($time_range->from_time) {
                $from_time = $time_range->from_time;
                $from_time_arr = explode(":", $from_time);
                $time_range->from_hour = $from_time_arr[0];
                $time_range->from_min = $from_time_arr[1];
                $time_range->from_sec = $from_time_arr[2];

                $to_time = $time_range->to_time;
                $to_time_arr = explode(":", $to_time);
                $time_range->to_hour = $to_time_arr[0];
                $time_range->to_min = $to_time_arr[1];
                $time_range->to_sec = $to_time_arr[2];
            }
        }

        if ( Agent::isMobile() ) {
            return view('admin.mobile-schedule', compact('time_ranges'));
        } else {
            return view('admin.schedule', compact('time_ranges'));
        }
    }

    public function set_schedule(Request $request)
    {
        $data_lists = $request->data;
        
        foreach($data_lists as $data) {
            Schedule::where('id', '=', $data['id'])
            ->update(['from_time' => $data['from_time'], 'to_time' => $data['to_time']]);
        }

        return "true";
    }
}
