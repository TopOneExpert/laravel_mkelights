<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TimeConfigure;
use App\Models\Commands;

use DateTime;
use DateTimeZone;

use Agent;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->layout = Agent::isMobile() ? 'layouts.mobileHome' : 'layouts.home';
    }
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
        $startDate = strtotime($startTime_config['config_value']);
        $start_time = date('H:i:s', strtotime($startTime_config['config_value']));
        $start_hour = date('H', strtotime($startTime_config['config_value']));
        $start_minute = date('i', strtotime($startTime_config['config_value']));
        $start_timestamp = $start_hour*3600 + $start_minute*60;

        if ($start_hour > 12) {
            $display_start_hour = ($start_hour - 12) . ':00 PM';
        } else {
            $display_start_hour = $start_hour . ':00 AM';
        }            

        $data['display_start_hour'] = $display_start_hour;

        $endTime_config = TimeConfigure::where('config_type', 'end_time')->first();
        $endDate = strtotime($endTime_config['config_value']);
        $end_time = date('H:i:s', strtotime($endTime_config['config_value']));
        $end_hour = date('H', strtotime($endTime_config['config_value']));
        $end_minute = date('i', strtotime($endTime_config['config_value']));
        $end_timestamp = $end_hour*3600 + $end_minute*60;

        if ($end_hour > 12) {
            $display_end_hour = ($end_hour - 12) . ':00 PM';
        } else {
            $display_end_hour = $end_hour . ':00 AM';
        }

        $data['display_end_hour'] = $display_end_hour;

        date_default_timezone_set('US/Central');

        $currentDate = $date = date_create();
        $currentTimestamp = date_timestamp_get($currentDate) + date_offset_get($date);

        $todayStartTimestamp = strtotime(date('Y-m-d'));
        $tomorrowStartTimestamp = strtotime(date('Y-m-d', strtotime('+1 day', time())));

        $hour = intval(date("H"));
        $currentHourAndMinute = intval(date("H")) * 3600 + intval(date("i")) * 60;

        $startTimestamp = $todayStartTimestamp + $start_timestamp + date_offset_get($date);

        if ($start_timestamp < $end_timestamp)
        	$endTimestamp = $todayStartTimestamp + $end_timestamp + date_offset_get($date);
        elseif ($currentTimestamp > $startTimestamp)
        	$endTimestamp = $tomorrowStartTimestamp + date_offset_get($date);
        elseif ($currentTimestamp < $startTimestamp)
        	$endTimestamp = $todayStartTimestamp + $end_timestamp + date_offset_get($date);

        $offlineText = '';

        if ($currentTimestamp >= $startDate && $currentTimestamp < $endDate)
        {
            // to check marathon: ($currentTimestamp >= $marathonStart && $currentTimestamp < $marathonEnd)
            if (($start_timestamp < $end_timestamp && $currentTimestamp >= $startTimestamp && $currentTimestamp < $endTimestamp) || ($start_timestamp > $end_timestamp && ($currentTimestamp >= $startTimestamp || $currentTimestamp < $endTimestamp)))
            {
                $opened = 1;

                $stateChangeCountdown = $endTimestamp - $currentTimestamp;
            }
            else
            {
                $opened = 0;
                $offlineText = "Offline"; // - Check back at $display_start_hour CST!";

                if ($startTimestamp < $endTimestamp && $currentTimestamp < $startTimestamp)
                    $stateChangeCountdown = $startTimestamp - $currentTimestamp;
                elseif ($startTimestamp < $endTimestamp && $currentTimestamp > $endTimestamp)
                    $stateChangeCountdown = $tomorrowStartTimestamp + $start_timestamp + date_offset_get($date) - $currentTimestamp;
                else
                    $stateChangeCountdown = $startTimestamp - $currentTimestamp;
            }
        }
        else
        {
            $opened = 0;

            if ($currentTimestamp < $startDate)
                $offlineText = "Offline"; // - Check back on ". date("Y-m-d", $startDate) ;
            elseif ($currentTimestamp > $startDate)
                $offlineText = "Offline"; // - Check back next year!" ;
        }

        $data['opened'] = $opened;
        $data['current_dt'] = date('g:ia');
        $data['offlineText'] = $offlineText;

        return $data;
    }

    public function index() {
        $data = $this->get_time_settings();

        if ( Agent::isMobile() ) {
            return view('home.mobile-home', ['data' => $data]);
        } else {
            return view('home.home', ['data' => $data]);
        }
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
        $yourname = $request->yourname;
        $address = $request->address;
        $comments = $request->comments;

        $mail = new PHPMailer(true);                            // Passing `true` enables exceptions

        try {
            // Server settings
            $mail->SMTPDebug = 0;                                	// Enable verbose debug output
            $mail->isSMTP();                                     	// Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';							// Specify main and backup SMTP servers
            $mail->Username = 'dmbdev800@gmail.com';                            // SMTP username
            $mail->SMTPSecure = 'tls';                              // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                      // TCP port to connect to

            //Recipients
            $mail->setFrom($address, $yourname);

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Contact';
            $mail->Body    = $comments;

            $mail->send();

            return ['msg' => 'Send mail success!'];
        } catch (Exception $e) {
            return ['msg' => $e->getMessage()];
        }
    }

    public function save_command(Request $request)
    {
        $channel = $request->channel;
        $handle = $request->handle;

        $command = new Commands;
        
        $command->device_id = $channel;
        if ($handle == "on") {
            $command->device_state = 1;    
        } else {
            $command->device_state = 0;    
        }
        
        $command->entry_date = date("Y-m-d h:i:s");

        $command->save();
    }
}
