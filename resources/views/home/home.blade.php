@extends('layout.app')

@section('content')
<div class="content_conf">
	<div class="left_side_wrapper custom_side">
		<div class="stream_wrapper customstream mr-3">
            <iframe id="button_iframe" src="https://www.mkelights.com/cam1.html" width="453" height="339" scrolling="no" frameborder="0" style="border: 0px none transparent;"></iframe>
            <span style="color:white">Camera 1</span> 
		</div>
		<div class="stream_wrapper customstream">
            <iframe id="button_iframe" src="https://www.mkelights.com/cam2.html" width="453" height="339" scrolling="no" frameborder="0" style="border: 0px none transparent;"></iframe>
			<span style="color:white">Camera 2</span>
		</div>
        <div class="buttons-wrapper">
	        <div class="control-status">
		        Ready...
	        </div>
	        <div class="control-button-holder custom_holder">
		        <div class="control-button-row">
			        <div class="control-button-wrapper">
				        <div class="control-button-inner-wrapper">
					        <div class="control-button control-button-on">
						        <a href="#" id="cb1_on" data-command-name="B2" data-command-value="1" onclick="handleLight('01', 'on')">On</a>
					        </div>
					        <div class="control-button-title">Upper Icicle</div>
					        <div class="control-button control-button-off">
						        <a href="#" id="cb1_off" data-command-name="B2" data-command-value="0" onclick="handleLight('01', 'off')">Off</a>
					        </div>
					        <div class="clearfix"></div>
				        </div>
			        </div>

			        <div class="control-button-wrapper">
				        <div class="control-button-inner-wrapper">
					        <div class="control-button control-button-on">
						        <a href="#" id="cb2_on" data-command-name="B10" data-command-value="1" onclick="handleLight('02', 'on')">On</a>
					        </div>
					        <div class="control-button-title">Lower Icicle</div>
					        <div class="control-button control-button-off">
						        <a href="#" id="cb2_off" data-command-name="B10" data-command-value="0" onclick="handleLight('02', 'off')">Off</a>
					        </div>
					        <div class="clearfix"></div>
				        </div>
			        </div>

			        <div class="control-button-wrapper ">
				        <div class="control-button-inner-wrapper">
					        <div class="control-button control-button-on">
						        <a href="#" id="cb3_on" data-command-name="B5" data-command-value="1" onclick="handleLight('03', 'on')">On</a>
					        </div>
					        <div class="control-button-title">Snowman</div>
					        <div class="control-button control-button-off">
						        <a href="#" id="cb3_off" data-command-name="B5" data-command-value="0" onclick="handleLight('03', 'off')">Off</a>
					        </div>
					        <div class="clearfix"></div>
				        </div>
			        </div>
			        
                    <div class="control-button-wrapper last-element">
				        <div class="control-button-inner-wrapper">
					    <div class="control-button control-button-on">
						    <a href="#" id="cb4_on" data-command-name="B4" data-command-value="1" onclick="handleLight('04', 'on')">On</a>
					    </div>
					    <div class="control-button-title">Left Tree</div>
					    <div class="control-button control-button-off">
						    <a href="#" id="cb4_off" data-command-name="B4" data-command-value="0" onclick="handleLight('04', 'off')">Off</a>
					    </div>
					    <div class="clearfix"></div>
				    </div>
			    </div>
			    <div class="clearfix"></div>
		    </div>

    		<div class="control-button-row">
	    		<div class="control-button-wrapper">
		    		<div class="control-button-inner-wrapper">
			    		<div class="control-button control-button-on">
				    		<a href="#" id="cb5_on" data-command-name="B6" data-command-value="1" onclick="handleLight('05', 'on')">On</a>
					    </div>
					    <div class="control-button-title">Deer Duo</div>
					    <div class="control-button control-button-off">
						    <a href="#" id="cb5_off" data-command-name="B6" data-command-value="0" onclick="handleLight('05', 'off')">Off</a>
    					</div>
	    				<div class="clearfix"></div>
		    		</div>
			    </div>

			    <div class="control-button-wrapper">
				    <div class="control-button-inner-wrapper">
					    <div class="control-button control-button-on">
						    <a href="#" id="cb6_on" data-command-name="B7" data-command-value="1" onclick="handleLight('06', 'on')">On</a>
					    </div>
					    <div class="control-button-title">Door Garland</div>
					    <div class="control-button control-button-off">
						    <a href="#" id="cb6_off" data-command-name="B7" data-command-value="0" onclick="handleLight('06', 'off')">Off</a>
					    </div>
					    <div class="clearfix"></div>
				    </div>
			    </div>

			    <div class="control-button-wrapper">
				    <div class="control-button-inner-wrapper">
    					<div class="control-button control-button-on">
	    					<a href="#" id="cb4_on" data-command-name="B11" data-command-value="1" onclick="handleLight('07', 'on')">On</a>
		    			</div>
			    		<div class="control-button-title">Big Bulbs</div>
				    	<div class="control-button control-button-off">
					    	<a href="#" id="cb4_off" data-command-name="B11" data-command-value="0" onclick="handleLight('07', 'off')">Off</a>
					    </div>
					    <div class="clearfix"></div>
				    </div>
			    </div>

			    <div class="control-button-wrapper last-element">
				    <div class="control-button-inner-wrapper">
    					<div class="control-button control-button-on">
	    					<a href="#" id="cb5_on" data-command-name="B12" data-command-value="1" onclick="handleLight('08', 'on')">On</a>
					    </div>
					    <div class="control-button-title">Spiral Tree</div>
					    <div class="control-button control-button-off">
						    <a href="#" id="cb5_off" data-command-name="B12" data-command-value="0" onclick="handleLight('08', 'off')">Off</a>
    					</div>
	    				<div class="clearfix"></div>
		    		</div>
    			</div>
	    		<div class="clearfix"></div>
    		</div>


	    	<div class="control-button-row">
		    	<div class="control-button-wrapper">
			    	<div class="control-button-inner-wrapper">
				    	<div class="control-button control-button-on">
					    	<a href="#" id="cb5_on" data-command-name="B13" data-command-value="1" onclick="handleLight('09', 'on')">On</a>
					    </div>
					    <div class="control-button-title">Christmas Tree</div>
					    <div class="control-button control-button-off">
    						<a href="#" id="cb5_off" data-command-name="B13" data-command-value="0" onclick="handleLight('09', 'off')">Off</a>
					    </div>
					    <div class="clearfix"></div>
				    </div>
			    </div>

    			<div class="control-button-wrapper">
	    			<div class="control-button-inner-wrapper">
		    			<div class="control-button control-button-on">
			    			<a href="#" id="cb6_on" data-command-name="B3" data-command-value="1" onclick="handleLight('10', 'on')">On</a>
				    	</div>
    					<div class="control-button-title">Front Bushes</div>
	    				<div class="control-button control-button-off">
                            <a href="#" id="cb6_off" data-command-name="B3" data-command-value="0" onclick="handleLight('10', 'off')">Off</a>
		    			</div>
			    		<div class="clearfix"></div>
    				</div>
	    		</div>

		    	<div class="control-button-wrapper">
			    	<div class="control-button-inner-wrapper">
				    	<div class="control-button control-button-on">
					    	<a href="#" id="cb4_on" data-command-name="B14" data-command-value="1" onclick="handleLight('11', 'on')">On</a>
					    </div>
					    <div class="control-button-title">Lil' Penguin</div>
					    <div class="control-button control-button-off">
						    <a href="#" id="cb4_off" data-command-name="B14" data-command-value="0" onclick="handleLight('11', 'off')">Off</a>
					    </div>
					    <div class="clearfix"></div>
				    </div>
			    </div>

			    <div class="control-button-wrapper last-element">
				    <div class="control-button-inner-wrapper">
					    <div class="control-button control-button-on">
						    <a href="#" id="cb5_on" data-command-name="B8" data-command-value="1" onclick="handleLight('12', 'on')">On</a>
					    </div>
					    <div class="control-button-title">Door Trees</div>
					    <div class="control-button control-button-off">
						    <a href="#" id="cb5_off" data-command-name="B8" data-command-value="0" onclick="handleLight('12', 'off')">Off</a>
    					</div>
	    				<div class="clearfix"></div>
		    		</div>
    			</div>
	    		<div class="clearfix"></div>
    		</div>

	    	<div class="control-button-row">
		    	<div class="control-button-wrapper">
			    	<div class="control-button-inner-wrapper">
				    	<div class="control-button control-button-on">
					    	<a href="#" id="cb6_on" data-command-name="B16" data-command-value="1" onclick="handleLight('13', 'on')">On</a>
					    </div>
					    <div class="control-button-title">Little Snowman</div>
					    <div class="control-button control-button-off">
    						<a href="#" id="cb6_off" data-command-name="B16" data-command-value="0" onclick="handleLight('13', 'off')">Off</a>
					    </div>
					    <div class="clearfix"></div>
				    </div>
			    </div>

			    <div class="control-button-wrapper">
				    <div class="control-button-inner-wrapper">
					    <div class="control-button control-button-on">
						    <a href="#" id="cb4_on" data-command-name="B15" data-command-value="1" onclick="handleLight('14', 'on')">On</a>
					    </div>
					    <div class="control-button-title">Santa Claus</div>
					    <div class="control-button control-button-off">
						    <a href="#" id="cb4_off" data-command-name="B15" data-command-value="0" onclick="handleLight('14', 'off')">Off</a>
					    </div>
					    <div class="clearfix"></div>
				    </div>
			    </div>

			    <div class="control-button-wrapper">
				    <div class="control-button-inner-wrapper">
					    <div class="control-button control-button-on">
						    <a href="#" id="cb5_on" data-command-name="B9" data-command-value="1" onclick="handleLight('15', 'on')">On</a>
					    </div>
					    <div class="control-button-title">Candycane Tree</div>
					    <div class="control-button control-button-off">
						    <a href="#" id="cb5_off" data-command-name="B9" data-command-value="0" onclick="handleLight('15', 'off')">Off</a>
					    </div>
					    <div class="clearfix"></div>
				    </div>
			    </div>

			    <div class="control-button-wrapper last-element">
				    <div class="control-button-inner-wrapper">
					    <div class="control-button control-button-on">
						    <a href="#" id="cb5_on" data-command-name="B1" data-command-value="1" onclick="handleLight('16', 'on')">On</a>
					    </div>
					    <div class="control-button-title">Rudolph</div>
					    <div class="control-button control-button-off">
						    <a href="#" id="cb5_off" data-command-name="B1" data-command-value="0" onclick="handleLight('16', 'off')">Off</a>
					    </div>
					    <div class="clearfix"></div>
				    </div>
			    </div>
			    <div class="clearfix"></div>
		    </div>

		    <div class="clearfix"></div>
	    </div>
    </div>

    <div class="clearfix"></div>

	<div class="wrapper">
		<div class="content_conf">
			<div class="right_side_wrapper custom_side">
				<div class="half_content">
					<div class="left_content mr-3">
                        <div class="message-wrapper">
	                        <div class="message-wrapper-inner">
		                        <div class="message-wrapper-text">
			                        <span id="">
                                        <div class="time_wrapper">
                                            <div class="controls-on-time">
                                                Controls ON at $display_start_hour and OFF at $display_end_hour
                                            </div>
                                            <div class="current-time">
                                                Current Time: $m_dt CST
                                            </div>
                                        </div>
                                    </span>
		                        </div>
	                        </div>
                        </div>
                        <div class="audio_panel">
                            <audio controls autoplay loop preload="metadata" style=" width:337px;">
	                        <source src="{{ url('media/WeWishYou.mp3') }}" type="audio/mpeg">
	                            Your browser does not support the audio element.
                            </audio><br/>
                        </div>
					</div>
					<div class="left_content rigt_content">
                        <div class="send-message-wrapper">
	                        <div class="send-message-title">
		                        LATEST UPDATES
	                        </div>
	                        <div class="listings">
		                        <ul>			  
		                            <li><u>12/31/19</u> - Tonight is the last night that you can control our lights. Thank you all SO much for celebrating the season with us. Have a very happy new year! See you next year! ;) </li>	   
		                            <li><u>12/23/19</u> - Merry Christmas! Our lights will be online from 5pm-7AM for the next few days. Be sure to shows your family/friends how cool we are at your Christmas parties! </li>
		                            <li><u>12/10/19</u> - Given all the recent news coverage, our system is handling 3-4x more concurrent users than normal. I'm tweaking some things in the coding, but given the amount of ON/OFF requests being sent at one time, the system occassionaly gets bogged down. </li>
                        		    <li><u>12/7/19</u> - We had a 30 minute delay tonight. The remote server disconnected while I was at work so I had to reconnect. All better now!</li>
                        		    <li><u>12/5/19</u> - Knock on wood, things have been working pretty well the last few nights. Please continue to tell us about any "bugs" that you might encounter. :)</li>
                        		    <li><u>11/27/19</u> - We've added a second camera this year, but of course it has added some bugs to the system. Don't fret, we will get them squashed as soon as we can.</li>
			                        <li><u>11/25/19</u> - Everyting is out of the attic and we will start setting up soon.</li>
		                        </ul>
	                        </div>
                        </div>
					</div>
				</div>				
			</div>
		</div>
	</div>
	
</div> <!-- end #content -->

@endsection

<!-- <script src="/node_modules/socket.io-client/dist/socket.io.js"></script>
<script>
	var socket = io.connect( 'https://mkelights.com:8080/' );
	var controlStatusElement = $('.control-status');

	socket.on('connect', function(data) {
		socket.emit('joined', 'Hello client from site');
	});

    socket.on('acknowledge', function(data) {
		controlStatusElement.html(data);
    });

	function handleLight(channel, handle) {
		console.log("test light button", channel, 'light_' + handle);
		socket.emit('light_' + handle, channel);
		controlStatusElement.html("Wait...");
	}

	socket.on('response ready', function(msg) {
		controlStatusElement.html(msg);
	});

</script> -->
