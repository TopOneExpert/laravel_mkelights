<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TimeConfigure;

class HomeController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function get_time_settings() {
        $startTime_config = TimeConfigure::where('config_type', 'start_time')->first();
        $start_time = $startTime_config['config_value'];
        $start_hour = date('H', strtotime($start_time));

        if ($start_hour > 12) {
            $display_start_hour = ($start_hour - 12) . ' PM';
        } else {
            $display_start_hour = $start_hour . ' AM';
        }            

        $data['display_start_hour'] = $display_start_hour;

        $endTime_config = TimeConfigure::where('config_type', 'end_time')->first();
        $end_time = $endTime_config['config_value'];
        $end_hour = date('H', strtotime($end_time));

        if ($end_hour > 12) {
            $display_end_hour = ($end_hour - 12) . ' PM';
        } else {
            $display_end_hour = $end_hour . ' AM';
        }

        $data['display_end_hour'] = $display_end_hour;

        $opened = 0;

        $data['opened'] = $opened;

        $current_dt = date('g:ia');

        $data['current_dt'] = $current_dt;

        return $data;
    }

    public function index() {
        $data = $this->get_time_settings();

        return view('home.home', ['data' => $data]);
    }

    public function how_does_this_work () {
        $data = $this->get_time_settings();

        return view('home.how-does-this-work', ['data' => $data]);
    }

    public function why_do_we_de_this () {
        $data = $this->get_time_settings();

        return view('home.why-do-we-do-this', ['data' => $data]);
    }

    public function other_christmas_fun () {
        $data = $this->get_time_settings();

        return view('home.other-christmas-fun', ['data' => $data]);
    }

    public function send_us_an_email () {
        $data = $this->get_time_settings();

        return view('home.send-us-an-email', ['data' => $data]);
    }

    public function send_email(Request $request)
    {
        $myemail  = "dmbdev800@gmail.com";

        /* Check all form inputs using check_input function */
        $yourname = $request->yourname;
        $email = $request->email;
        $comments = $request->comments;

        /* If e-mail is not valid show error message */
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
        {
            return ['msg' => "E-mail address not valid"];
        }

        /* If URL is not valid set $website to empty */
        // if (!preg_match("/^(https?:\/\/+[\w\-]+\.[\w\-]+)/i", $website))
        // {
        //     $website = '';
        // }

        /* Let's prepare the message for the e-mail */
        $subject = "You've Received Fan Mail!";

        $message = "You have fanmail!

        Your contact form has been submitted by:

        Name: $yourname
        E-mail: $email

        Comments:
        $comments

        End of message
        ";

        /* Send the message using mail() function */
        mail($myemail, $subject, $message);
        return ['msg' => 'Send mail success!'];
    }
}
