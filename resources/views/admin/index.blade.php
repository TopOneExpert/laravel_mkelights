@extends('layout.admin')

@section('content')
<div class="left_side_wrapper--narrow">

</div>
<div class="right_side_wrapper--wide">
	<div class="page-text-wrapper">
		<div class="page-text-inner-wrapper">
      <span style="font-weight:bold">Setting All lights On/Off Schedule Time</span>
      <p>The all lights will be turned on or off schedule time.</p>
      <table class="table table-bordered yajra-datatable">
        <thead>
          <tr>
            <th>No</th>
            <th>Channel</th>
            <th>Command</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    </div>
	</div>
</div>
@endsection

@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('command-list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'channel', name: 'device_id'},
            {data: 'command', name: 'device_state'},
            {data: 'date', name: 'entry_date'},
        ]
    });
    
  });
</script>
@endpush