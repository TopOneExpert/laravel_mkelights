@extends('layouts.mobile-admin')

@section('content')
<div class="stream_wrapper">
	<div class="page-text-wrapper">
        <div class="page-text-inner-wrapper">
            <span style="font-weight:bold">Setting All lights On Time</span>
            <p>The all lights will be turned on at following times.</p>
            <table style="width:100%;">
                <thead>
                    <tr>
                        <th style="width:10%; text-align:center;">No</th>
                        <th style="width:70%; text-align:center;">On Time</th>
                        <th style="width:20%; text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($schedule_on_times as $key => $schedule_on_time)
                    <tr>
                        <td style="width:10%; text-align:center;">{{$key+1}}</td>
                        <td style="width:70%; text-align:center;"><input type="text" id="{{ 'on_dt_'.$schedule_on_time->id }}" value="{{ $schedule_on_time->config_value }}" /></td>
                        <td style="width:20%; text-align:center;"><button id='submit' onClick="setOnTime({{$schedule_on_time->id}});">Submit</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
	</div>
	<div class="page-text-wrapper">
        <div class="page-text-inner-wrapper">
            <span style="font-weight:bold">Setting All lights Off Time</span>
            <p>The all lights will be turned off at following times.</p>
            <table style="width:100%;">
                <thead>
                    <tr>
                        <th style="width:10%; text-align:center;">No</th>
                        <th style="width:70%; text-align:center;">Off Time</th>
                        <th style="width:20%; text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($schedule_off_times as $key => $schedule_off_time)
                    <tr>
                        <td style="width:10%; text-align:center;">{{$key+1}}</td>
                        <td style="width:70%; text-align:center;"><input type="text" id="{{ 'off_dt_'.$schedule_off_time->id }}" value="{{ $schedule_off_time->config_value }}" /></td>
                        <td style="width:20%; text-align:center;"><button id='submit' onClick="setOffTime({{$schedule_off_time->id}});">Submit</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>

function setOnTime(id) {
    var inputId = "#on_dt_" + id;
    var on_dt = $(inputId).val();
    $.ajax({
        type: 'POST',
        url: "{{ url('/admin/set-schedule-on-time') }}",
        data: {
            id: id,
            on_dt: on_dt,
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
}

function setOffTime(id) {
    var inputId = "#off_dt_" + id;
    var off_dt = $(inputId).val();
    $.ajax({
        type: 'POST',
        url: "{{ url('/admin/set-schedule-off-time') }}",
        data: {
            id: id,
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
}
</script>
@endpush
