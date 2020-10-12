@extends('layouts.admin')

@section('content')
<div class="left_side_wrapper--narrow">

</div>
<div class="right_side_wrapper--wide">
    <div class="page-text-wrapper">
        <div class="page-text-inner-wrapper">
            <span style="font-weight:bold">Setting System On/Off Time</span>
            <p>The system status will be online from on date time to off date time.</p>
            @csrf
            <p>
                <b>On Date/Time:</b> <input type="text" id="on_dt" value="{{$start_time}}" /><br />
                <b>Off Date/Time:</b> <input type="text" id="off_dt" value="{{$end_time}}" /><br />
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
        url: "{{ url('/admin/set-system-onoff-time') }}",
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
