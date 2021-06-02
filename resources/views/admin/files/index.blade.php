@extends('layouts.admin')

@section('styles')
<style>
label{
    font-size: .875em !important;
}
.card-header{
    font-size: 1em !important;
    font-weight: bold !important;
}
.hidden{
    display: none;
}
.dropdown-menu{
    min-width: 25rem !important;
}
.modal-dialog{
    max-width: 700px !important;
}
</style>
@endsection

@section('content')
@can('file_create')
    @include('admin.files.partials.create')
@endcan

<div class="card">
    <div class="card-header">
        Library File ID
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-File">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.file.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.content_id') }}
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.title_of_content') }}
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.type_of_content') }}
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.type_of_file') }}
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.episode') }}
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.duration') }}
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.file_extension') }}
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.resolution') }}
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.me') }}
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.khmer_dub') }}
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.path') }}
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.storage') }}
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.date_received') }} (m-d-Y)
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.year') }}
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.poster') }}
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.trailer_promo') }}
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.synopsis') }}
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.file_size') }}
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.start_date') }} (m-d-Y)
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.end_date') }} (m-d-Y)
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.period_of_time') }}
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.remark') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($files as $key => $file)
                    <tr data-entry-id="{{ $file->id }}">
                        <td>

                        </td>
                        <td>
                            {{ $file->id ?? '' }}
                        </td>
                        <td>
                            {{ $file->file_id ?? ''}}
                        </td>
                        <td>
                            {{ $file->title_of_content ?? '' }}
                        </td>
                        <td>
                            {{ $file->series->name ?? '' }}
                        </td>
                        <td>
                            {{ $file->type_of_file ?? '' }}
                        </td>
                        <td>
                            {{ $file->episode ?? '' }}
                        </td>
                        <td>
                            {{ $file->duration ?? '' }}
                        </td>
                        <td>
                            {{ $file->file_extension ?? '' }}
                        </td>
                        <td>
                            {{ $file->resolution ?? '' }}
                        </td>
                        <td>
                            {{ $file->me ?? '' }}
                        </td>
                        <td>
                            {{ $file->khmer_dub ?? '' }}
                        </td>
                        <td>
                            {{ $file->path ?? '' }}
                        </td>
                        <td>
                            {{ $file->storage ?? '' }}
                        </td>
                        <td>
                            {{ $file->date_received ?? '' }}
                        </td>
                        <td>
                            {{ $file->year ?? '' }}
                        </td>
                        <td>
                            {{ $file->poster ?? '' }}
                        </td>
                        <td>
                            {{ $file->trailer_promo ?? '' }}
                        </td>
                        <td>
                            {{ $file->synopsis ?? '' }}
                        </td>
                        <td>
                            {{ $file->file_size ?? '' }}{{$file->series_size ?? ''}} 
                        </td>
                        <td>
                            {{ $file->start_date ?? '' }}
                        </td>
                        <td>
                            {{ $file->end_date ?? '' }}
                        </td>
                        <td>
                            {{ $file->period_of_time ?? '' }}
                        </td>
                        <td>
                            {{ $file->remark ?? '' }}
                        </td>
                        <td>
                            @can('file_show')
                            <buttom class="btn btn-xs btn-primary" onclick="show({{ $file->id }})" type="button"​​​>
                                {{ trans('global.view') }}
                            </buttom>
                            @endcan

                            @can('file_edit')
                            <buttom class="btn btn-xs btn-info" onclick="edit({{ $file->id }})" type="button"​​​>
                                {{ trans('global.edit') }}
                            </buttom>
                            @endcan

                            @can('file_delete')
                            <form action="{{ route('admin.files.destroy', $file->id) }}" method="POST"
                                onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                            </form>
                            @endcan

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @can('file_edit')
        @include('admin.files.partials.edit')
    @endcan
    
    @can('file_show')
        @include('admin.files.partials.show')
    @endcan
</div>



@endsection
@section('scripts')
@parent
@include('admin.files.partials.script')
@endsection
