@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Library File ID
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.files.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th style="width:20%;">
                            {{ trans('cruds.file.fields.id') }}
                        </th>
                        <td>
                            {{ $file->id ?? '' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.content_id') }}
                        </th>
                        <td>
                            {{  $file->series->prefix ?? ''}}{{ str_pad($file->content_id, 5, '0', STR_PAD_LEFT) ?? ''}}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.title_of_content') }}
                        </th>
                        <td>
                            {{ $file->title_of_content ?? '' }}
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.type_of_content') }}
                        </th>
                        <td>
                            {{ $file->type_of_content ?? '' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.type_of_file') }}
                        </th>
                        <td>
                            {{ $file->type_of_file ?? '' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.episode') }}
                        </th>
                        <td>
                            {{ $file->episode ?? '' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.duration') }}
                        </th>
                        <td>
                            {{ $file->duration ?? '' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.file_extension') }}
                        </th>
                        <td>
                            {{ $file->file_extension ?? '' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.resolution') }}
                        </th>
                        <td>
                            {{ $file->resolution ?? '' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.me') }}
                        </th>
                        <td>
                            {{ $file->me ?? '' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.khmer_dub') }}
                        </th>
                        <td>
                            {{ $file->khmer_dub ?? '' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.path') }}
                        </th>
                        <td>
                            {{ $file->path ?? '' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.storage') }}
                        </th>
                        <td>
                            {{ $file->storage ?? '' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.date_received') }} (m-d-Y)
                        </th>
                        <td>
                            {{ $file->date_received ?? '' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.year') }}
                        </th>
                        <td>
                            {{ $file->year ?? '' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.poster') }}
                        </th>
                        <td>
                            {{ $file->poster ?? '' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.trailer_promo') }}
                        </th>
                        <td>
                            {{ $file->trailer_promo ?? '' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.synopsis') }}
                        </th>
                        <td>
                            {{ $file->synopsis ?? '' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.file_size') }}
                        </th>
                        <td>
                            {{ $file->file_size ?? '' }}{{$file->series_size ?? ''}}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.start_date') }} (m-d-Y)
                        </th>
                        <td>
                            {{ $file->start_date ?? '' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.end_date') }} (m-d-Y)
                        </th>
                        <td>
                            {{ $file->end_date ?? '' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.period_of_time') }}
                        </th>
                        <td>
                            {{ $file->period_of_time ?? '' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.file.fields.remark') }}
                        </th>
                        <td>
                            {{ $file->remark ?? '' }}
                        </td>
                    </tr>
                        
                        <th>
                            &nbsp;
                        </th>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.files.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

@endsection