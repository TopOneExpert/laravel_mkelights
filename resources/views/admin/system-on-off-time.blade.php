@extends('layout.admin')

@section('content')
<div class="left_side_wrapper--narrow">

</div>
<div class="right_side_wrapper--wide">
	<div class="page-text-wrapper">
		<div class="page-text-inner-wrapper">
      <span style="font-weight:bold">Setting System On/Off Time</span>
      <p>The system status will be online from on date time to off date time.</p>
        <form action="contact" method="post">
          <p>
            <b>On Date/Time:</b> <input type="text" name="on_dt" /><br />
            <b>Off Date/Time:</b> <input type="text" name="off_dt" /><br />
          </p>
          <input type="submit" name='submit' value="Submit">
        </form>
    </div>
	</div>
</div>
@endsection