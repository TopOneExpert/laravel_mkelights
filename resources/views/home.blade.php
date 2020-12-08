@extends('layouts.home')

@section('content')
<div class="content_conf">
	<div class="left_side_wrapper custom_side">
		<div class="stream_wrapper customstream mr-3">
			<iframe id="video1" src="{{ url('cam3.html') }}" width="453" height="339" scrolling="no" frameborder="0" style="border: 0px none transparent;"></iframe>
			<span style="color:white">Camera 1</span>
		</div>
		<div class="stream_wrapper customstream">
			<iframe id="video2" src="{{ url('cam2.html') }}" width="453" height="339" scrolling="no" frameborder="0" style="border: 0px none transparent;"></iframe>
			<span style="color:white">Camera 2</span>
		</div>

		<div class="innermenu"  style="height: 40px">
			<p id="countTime" class="cuss_text_style"></p>
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
													Controls ON at {{$data['display_start_hour']}} and OFF at {{$data['display_end_hour']}}
												</div>
												<div class="current-time">
													Current Time: {{$data['current_dt']}} CST
												</div>
											</div>
										</span>
									</div>
								</div>
							</div>
							<div class="audio_panel">
								<audio controls loop preload="metadata" style=" width:337px;">
									<source src="{{ url('media/WeWishYou.mp3') }}" type="audio/mpeg">
									Your browser does not support the audio element.
								</audio><br />
							</div>
						</div>
						<div class="left_content rigt_content">
							<div class="send-message-wrapper">
								<div class="send-message-title">
									LATEST UPDATES
								</div>
								<div class="listings">
									<ul>
										<li><u>11/11/20</u> - We are adding some new features this year. You may catch us testing some things out! :)</li>
										<li><u>11/02/20</u> - Everyting is out of the attic! Starting to do some light repairs.</li>
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

	@push('script')
	<!-- <script src="{{ url('node_modules/socket.io-client/dist/socket.io.js') }}"></script> -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js"></script>
	<script>
		
		var socket = io.connect('https://mkelights.com:8080/');
		var controlStatusElement = $('.control-status');

		var sysStatus = @json($data['opened']);
		var isShowTime = @json($data['isShowTime']);
		var tillTime = @json($data['tillSecond']);
		var isTenSecondsBeforeShowing = 0;

		if (isShowTime === -1) {
			$('#countTime').html("");
		}
		else if (isShowTime === 1) {
			$('#countTime').html("Now playing");
			setTimeout(() => {
				window.location.reload();
			}, tillTime * 1000);
			
			controlStatusElement.html("Paused until end of the snow");
		}
		else (isShowTime === 0) {
			controlStatusElement.html("Ready");

			var timer = setInterval(countDownTime, 1000);

			function countDownTime() {
				// show count down timer
				var hours = parseInt(tillTime / 3600);
				var minutes = parseInt((tillTime % 3600) / 60);
				var seconds =  tillTime % 60;

				if (hours === 0 && minutes === 0) {
					$('#countTime').html("NEXT CHRISTMAS SHOW:  " + seconds + " seconds");
				} else if (hours === 0) {
					$('#countTime').html("NEXT CHRISTMAS SHOW:  " + minutes + " minutes" + "  " + seconds + " seconds");
				} else {
					$('#countTime').html("NEXT CHRISTMAS SHOW:  " + hours + " hours" + "  " + minutes + " minutes" + "  " + seconds + " seconds");
				}

				if (tillTime <= 10) {
					isTenSecondsBeforeShowing = 1;
					controlStatusElement.html("Paused during Christmas show");
				} else {
					isTenSecondsBeforeShowing = 0;
				}

				if (tillTime == 3) {
					socket.emit('all_light_off', "All light OFF before show starts");
				}
				
				tillTime --;
				if (tillTime < 0) stopCountDown();
			}

			function stopCountDown() {
				clearInterval(timer);
				window.location.reload();
			}
		}

		socket.on('connect', function(data) {
			socket.emit('joined', 'Hello client from site');
		});

		socket.on('acknowledge', function(data) {
			if (sysStatus === 1) {
				if (isShowTime === 1) {
					controlStatusElement.html("Paused until end of the snow");

				} else {
					controlStatusElement.html(data);
				}

			} else {
				controlStatusElement.html("Offline - Check back later!");
			}
			
		});

		function handleLight(channel, handle) {
			if (sysStatus === 1) {

				if (isShowTime === 0 && isTenSecondsBeforeShowing === 0) {
					console.log("test light button", channel, 'light_' + handle);
					socket.emit('light_' + handle, channel);
					controlStatusElement.html("Wait...");

					$.ajax({
						type: 'POST',
						url: "{{ url('/save-command') }}",
						data: {
							channel: channel,
							handle: handle,
							_token: "{{csrf_token()}}",
						},
						success: function(result) {
							console.log(result);
						}
					})

				} else {
					if (isTenSecondsBeforeShowing === 1) {
						controlStatusElement.html("Paused during Christmas show");
					}
					if (isShowTime === 1) {
						isTenSecondsBeforeShowing === 0;
						controlStatusElement.html("Paused until end of the snow");
					}
				}
				
			} else { 
				controlStatusElement.html("Offline - Check back later!");
			}			
		}

		socket.on('response ready', function(msg) {
			controlStatusElement.html(msg);
		});

		socket.on('response wait', function(msg) {
			controlStatusElement.html(msg);
		});
		
	</script>
	@endpush
