@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        Create New Schedule
    </div>

    <div class="card-body">
        <form id="form">
            @csrf
            <div class="form-group col-md-12">
                <label class="required" for="note">{{ trans('cruds.schedule.fields.note') }}</label>
                <input class="form-control" type="text" name="note" id="note">
                
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="day_id">{{ trans('cruds.schedule.fields.day_id') }}</label>
                <select name="day_id" class="form-control">
                    @foreach ($days as $day)
                    <option value="{{$day->id}}">{{ $day->day }}</option>
                    @endforeach
                </select>
                
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="date">{{ trans('cruds.schedule.fields.date') }}</label>
                <input class="form-control" type="date" name="date" id="date">
                
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="file_id">{{ trans('cruds.schedule.fields.file_id') }}</label>
                <select multiple name="file_id" id="bootstrap4_duallistbox">
                    @foreach ($files as $file)
                    <option value="{{$file->id}}">ID: {{ $file->content_id }} || Title: {{ $file->title_of_content }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <button class="btn btn-primary" type="submit">Crreate Schedule</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
@parent
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script>
    $('#bootstrap4_duallistbox').bootstrapDualListbox();

    $('#form').submit(function (e) { 
        e.preventDefault();
        let note = $('input[name="note"]').val();
        let day_id = $('select[name="day_id"]').val();
        let date = $('input[name="date"]').val();
        let files = $('select[name="file_id"]').val();
        let _token = $('input[name="_token"]').val();
        
        console.log(date);
        $.ajax({
            type: "POST",
            url: "{{route('admin.schedules.store')}}",
            data: {
                _token: _token,
                note: note,
                date: date,
                day_id: day_id,
                file_id: files
            },
            success: function (response) {
                console.log(response);
            }
        });
    });
</script>
@endsection