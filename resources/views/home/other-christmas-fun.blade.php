@extends('layout.app')

@section('content')
<div class="left_side_wrapper--narrow">
    <div class="time-header">
        <img src="{{ url('images/time_header.png') }}" alt="">
    </div>
    <div class="time_wrapper">
        <div class="controls-on-time">
            Controls ON at $display_start_hour ?>  and OFF at  $display_end_hour ?>
        </div>
        <div class="current-time">
            Current Time: $m_dt ?> CST
        </div>
    </div>
    <div class="stream_wrapper">
    <script type="text/javascript" src="https://cdn.sender.net/webforms/7661/a319c844.js?v=6"></script> 
    </div>
</div>
<div class="right_side_wrapper--wide">
	<div class="page-text-wrapper">
		<div class="page-text-inner-wrapper">
		<span style="font-weight:bold">Other Christmas Fun</span>
			<p></p>
		<center>
		    -2019 Milwaukee Holiday Lights Festival-
		    <a href="http://www.milwaukeedowntown.com/about-us/special-events/milwaukee-holiday-lights-festival" target="blank"><img src="https://www.milwaukeedowntown.com/sites/default/files/bid-events/participants/HLF-%20Logo%204.jpg" alt="Milwaukee Holiday Lights Festival" height="200" width="400"></a>
		    <p>
		        -Kid Friendly Christmas Website-
		        <a href="http://www.thesantatracker.com"><img src="http://www.thesantatracker.com/banners/site/TST-468x60.png" width="468" height="60" alt="Santa Tracker"/></a>
		        <p></p>
		        <a href="https://www.thesantatracker.com/trackingcenter">Santa Tracker</a>
		    </center>
		</div>
	</div>
</div>
@endsection