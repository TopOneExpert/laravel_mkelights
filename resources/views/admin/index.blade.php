@extends('layout.admin')

@section('content')
<div class="left_side_wrapper--narrow">

</div>
<div class="right_side_wrapper--wide">
	<div class="page-text-wrapper">
		<div class="page-text-inner-wrapper">
      <table class="table table-bordered yajra-datatable" id="command_tbl">
        <thead>
          <tr>
            <th>ID</th>
            <th style="width:15%">Channel</th>
            <th style="width:15%">Command</th>
            <th style="width:50%">Date</th>
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
    
    var table = $('#command_tbl').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('command-list') !!}',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'device_id', name: 'device_id'},
            {data: 'command', name: 'command'},
            {data: 'entry_date', name: 'entry_date'},
        ]
    });
    
  });
</script>
@endpush