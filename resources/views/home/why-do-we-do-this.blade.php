@extends('layout.app')

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
			<span style="font-weight:bold">Why Do We Do This?</span>
			<p></p>
			Because we LOVE Christmas!
			<p></p>
			No really, our family does this every year because we genuinely love Christmas. Rather than only celebrate our love of the season with those we know, MKELights allows us to celebrate the holiday with thousands of people from around the world!    
			<p></p>
      There's a lot of people that may not have the time, location or money to do Christmas lights. If you are one of those people, please know that our display is for YOU. Please enjoy and be sure to come back and see us soon!
      <p></p>
      Eventually, we would love MKELights to be part of something bigger that actually benefits those who are less fortunate. 
		</div>
	</div>
</div>
@endsection