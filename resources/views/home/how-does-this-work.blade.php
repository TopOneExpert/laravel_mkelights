@extends('layouts.home')

@section('content')
<div class="left_side_wrapper--narrow">
	<div class="time-header">
		<img src="{{ url('images/time_header.png') }}" alt="">
	</div>
	<div class="time_wrapper">
		<div class="controls-on-time">
			Controls ON at {{ $data['display_start_hour'] }} and OFF at  {{ $data['display_end_hour'] }}
		</div>
		<div class="current-time">
			Current Time: {{ $data['current_dt'] }} CST
		</div>
	</div>
	<div class="stream_wrapper">
		<script type="text/javascript" src="https://cdn.sender.net/webforms/7661/a319c844.js?v=6"></script> 
	</div>
</div>
<div class="right_side_wrapper--wide">
	<div class="page-text-wrapper">
		<div class="page-text-inner-wrapper">
			<span style="font-weight:bold">How Does This Work?</span>
			<p></p>
				It's actually relatively complex system and it's custom made. 
			<p></p>
				When you click the button to turn a light ON or OFF, the system stores that request on the server. Here in Milwaukee, we have a computer at home that talks to our server and sends a wireless signal to the appropriate light and tells it to turn either ON or OFF. Basically, there's a number of machines talking to each other in less than a second.
			<p></p>
				For those who aren't able to control the lights in person, we have a camera system that broadcasts the display via the internet. The only bummer with broadcasting the live feed is the delay that comes with it.
			<p></p>
				We hope you enjoy our Christmas lights! Perhaps you could even help us out by telling your friends! If you have any other questions, please 
				<a href="http://www.mkelights.com/send-us-an-email">send us an email</a>.
			<p></p>
				<b>*Sometimes you might notice that your on/off command doesn't immediately work.... generally if this happens for one of two reasons: 1) we are getting swamped with users and our database log has a ton of pending requests to execute or 2) someone else clicked the opposite button which cancelled your action out. For example, if you turn light "A" on at the same time someone turns light "A" off, then those actions will cancel each other out.*</b>
		</div>
	</div>
</div>
@endsection