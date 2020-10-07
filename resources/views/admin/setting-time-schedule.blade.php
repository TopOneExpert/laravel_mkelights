@extends('layout.admin')

@section('content')
<div class="left_side_wrapper--narrow">

</div>
<div class="right_side_wrapper--wide">
	<div class="page-text-wrapper">
		<div class="page-text-inner-wrapper">
      <span style="font-weight:bold">Setting All lights On/Off Schedule Time</span>
      <p>The all lights will be turned on or off schedule time.</p>
      <p>
        <b>On Date/Time:</b> <input type="text" id="on_dt" value="{{ $schedule_on_time }}" /><br />
        <b>Off Date/Time:</b> <input type="text" id="off_dt" value="{{ $schedule_off_time }}" /><br />
      </p>
      <button id='submit'>Submit</button>
    </div>
	</div>
</div>
@endsection

@push('script')
<script>
  $(document).ready(function(){
    $('#submit').click(function(e){
      $.ajax({
        type: 'POST',
        url: "{{ url('/admin/set-schedule-onoff-time') }}",
        data: {
          on_dt: $('#on_dt').val(),
          off_dt: $('#off_dt').val(),
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