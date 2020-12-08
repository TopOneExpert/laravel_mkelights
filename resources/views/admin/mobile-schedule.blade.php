@extends('layouts.mobile-admin')

@section('content')
  <div class="stream_wrapper">
    <div class="page-text-wrapper">
      <div class="page-text-inner-wrapper">
        <table class="table table-bordered yajra-datatable" id="tbl_schedule">
          <thead>
            <tr>
              <th>ID</th>
              <th style="width:45%">From Time</th>
              <th style="width:45%">To Time</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($time_ranges as $time_range)
              <tr>
                <td class="py-0"><label name="id">{{$time_range->id}}</label></td>

                <td class="px-0">
                  <div class="col">
                    <select class="form-control" name="from_hour" id="from_hour">
                      <option value="-1"></option>
                      @for($i=0; $i<24; $i++)
                        @if ($i < 10)
                          <option value="{{ '0'.$i }}" {{ $time_range->from_hour == '0'.$i ? 'selected' : ''}}>{{ '0'.$i }}</option>
                        @else
                          <option value="{{ $i }}" {{ $time_range->from_hour == $i ? 'selected' : ''}}>{{ $i }}</option>
                        @endif
                      @endfor
                    </select>
                        
                    <select class="form-control" name="from_min" id="from_min">
                      <option value="-1"></option>
                      @for($i=0; $i<60; $i++)
                        @if ($i < 10)
                          <option value="{{ '0'.$i }}" {{ $time_range->from_min == '0'.$i ? 'selected' : ''}}>{{ '0'.$i }}</option>
                        @else
                          <option value="{{ $i }}" {{ $time_range->from_min == $i ? 'selected' : ''}}>{{ $i }}</option>
                        @endif
                      @endfor
                    </select>
                    
                    <select class="form-control" name="from_sec" id="from_sec">
                      <option value="-1"></option>
                      @for($i=0; $i<60; $i++)
                        @if ($i < 10)
                          <option value="{{ '0'.$i }}" {{ $time_range->from_sec == '0'.$i ? 'selected' : ''}}>{{ '0'.$i }}</option>
                        @else
                          <option value="{{ $i }}" {{ $time_range->from_sec == $i ? 'selected' : ''}}>{{ $i }}</option>
                        @endif
                      @endfor
                    </select>
                  </div>
                </td>
  
                <td class="px-0">
                  <div class="col">
                    <select class="form-control" name="to_hour" id="to_hour">
                      <option value="-1"></option>
                      @for($i=0; $i<24; $i++)
                        @if ($i < 10)
                          <option value="{{ '0'.$i }}" {{ $time_range->to_hour == '0'.$i ? 'selected' : ''}}>{{ '0'.$i }}</option>
                        @else
                          <option value="{{ $i }}" {{ $time_range->to_hour == $i ? 'selected' : ''}}>{{ $i }}</option>
                        @endif
                      @endfor
                    </select>
                        
                    <select class="form-control" name="to_min" id="to_min">
                      <option value="-1"></option>
                      @for($i=0; $i<60; $i++)
                        @if ($i < 10)
                          <option value="{{ '0'.$i }}" {{ $time_range->to_min == '0'.$i ? 'selected' : ''}}>{{ '0'.$i }}</option>
                        @else
                          <option value="{{ $i }}" {{ $time_range->to_min == $i ? 'selected' : ''}}>{{ $i }}</option>
                        @endif
                      @endfor
                    </select>
                    
                    <select class="form-control" name="to_sec" id="to_sec">
                      <option value="-1"></option>
                      @for($i=0; $i<60; $i++)
                        @if ($i < 10)
                          <option value="{{ '0'.$i }}" {{ $time_range->to_sec == '0'.$i ? 'selected' : ''}}>{{ '0'.$i }}</option>
                        @else
                          <option value="{{ $i }}" {{ $time_range->to_sec == $i ? 'selected' : ''}}>{{ $i }}</option>
                        @endif
                      @endfor
                    </select>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
     
        <button id="btn_save" class="form-control btn-primary">Save</button>
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
  $(document).ready(function(){

    $('#btn_save').on('click', function() {
      var btn_save = $('#btn_save');
      btn_save.prop('disabled', true);

      var data = [];

      $('#tbl_schedule tbody tr').each(function() {
        var id = $(this).find("label[name='id']").text();
        var from_hour = $(this).find('#from_hour').val() === "-1" ? '' : $(this).find('#from_hour').val();
        var from_min = $(this).find('#from_min').val() === '-1' ? '' : $(this).find('#from_min').val();
        var from_sec = $(this).find('#from_sec').val() === '-1' ? '' : $(this).find('#from_sec').val();
        var to_hour = $(this).find('#to_hour').val() === '-1' ? '' : $(this).find('#to_hour').val();
        var to_min = $(this).find('#to_min').val() === '-1' ? '' : $(this).find('#to_min').val();
        var to_sec = $(this).find('#to_sec').val() === '-1' ? '' : $(this).find('#to_sec').val();

        if (from_hour === '' | from_min === '' | from_sec === '' | to_hour === '' | to_min === '' | to_sec === '') {
          data.push({id: id, from_time: '', to_time: ''});
        } else {
          data.push({id: id, from_time: from_hour + ":" + from_min + ":" + from_sec, to_time: to_hour + ":" + to_min + ":" + to_sec});
        }
        
      });

      $.ajax({
        method: 'post',
        url: "{{ url('/admin/setting-schedule-page/set_schedule') }}",
        data: {
          data: data,
          _token: "{{csrf_token()}}"
        },
        dataType : "json",
        success: function(result) {
          toastr.success('Success settings!');
          btn_save.prop('disabled', false);
        },
        error: function(result) {
          toastr.error('Failed settings!');
          btn_save.prop('disabled', false);
        }
      });
    })
  });
</script>
@endpush
