@extends('layouts.mobile-admin')

@section('content')
<div class="stream_wrapper">
    <div class="page-text-wrapper">
        <div class="page-text-inner-wrapper">
            <span style="font-weight:bold">Setting System On/Off Time Daily</span>
            <p>The system status will be online from on time to off time daily.</p>
            @csrf
            <p>
                <b>On Time:</b> <input type="text" id="on_time" value="{{$start_time}}" /><br />
                <b>Off Time:</b> <input type="text" id="off_time" value="{{$end_time}}" /><br />
            </p>
            <button id='submit_time'>Submit</button>
        </div>
	</div>
	<div class="page-text-wrapper">
        <div class="page-text-inner-wrapper">
            <span style="font-weight:bold">Setting System On/Off Date</span>
            <p>The system status will be online from on date time to off date time.</p>
            @csrf
            <p>
                <b>On Date:</b> <input type="text" id="on_date" value="{{$start_date}}" /><br />
                <b>Off Date:</b> <input type="text" id="off_date" value="{{$end_date}}" /><br />
            </p>
            <button id='submit_date'>Submit</button>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
  $(document).ready(function(){
    $('#submit_time').click(function(e){
      var on_dt = $('#on_date').val() + " " + $('#on_time').val();
      var off_dt = $('#off_date').val() + " " + $('#off_time').val();
      $.ajax({
        type: 'POST',
        url: "{{ url('/admin/set-system-onoff-time') }}",
        data: {
          on_dt: on_dt,
          off_dt: off_dt,
          _token: "{{csrf_token()}}",
        },
        success: function(result) {
          toastr.success('Success settings!');
          console.log(result);
        },
        error: function(result) {
          toastr.error('Failed settings!');
        }
      })
    });

    $('#submit_date').click(function(e){
      var on_dt = $('#on_date').val() + " " + $('#on_time').val();
      var off_dt = $('#off_date').val() + " " + $('#off_time').val();
      $.ajax({
        type: 'POST',
        url: "{{ url('/admin/set-system-onoff-time') }}",
        data: {
          on_dt: on_dt,
          off_dt: off_dt,
          _token: "{{csrf_token()}}",
        },
        success: function(result) {
          toastr.success('Success settings!');
          console.log(result);
        },
        error: function(result) {
          toastr.error('Failed settings!');
        }
      })
    });
  })
</script>
@endpush
