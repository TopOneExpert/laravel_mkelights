<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index() {
        return view('admin.manager');
    }

    public function system_on_off_time() {
        return view('admin.system-on-off-time');
    }

    public function setting_time_schedule() {
        return view('admin.setting-time-schedule');
    }

    public function view_all_commands() {
        return view('admin.view-all-commands');
    }
}
