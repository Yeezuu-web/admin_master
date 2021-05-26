@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.permission.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.files.update", [$file->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group col-md-12">
                <label class="required" for="content_id">{{ trans('cruds.file.fields.content_id') }}</label>
                <input class="form-control {{ $errors->has('content_id') ? 'is-invalid' : '' }}" type="text" name="content_id" id="content_id" value="{{ old('content_id', $file->content_id) }}">
                @if($errors->has('content_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('content_id') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.content_id_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="title_of_content">{{ trans('cruds.file.fields.title_of_content') }}</label>
                <input class="form-control {{ $errors->has('title_of_content') ? 'is-invalid' : '' }}" type="text" name="title_of_content" id="title_of_content" value="{{ old('title_of_content', $file->title_of_content) }}">
                @if($errors->has('title_of_content'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title_of_content') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.title_of_content_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="type_of_content">{{ trans('cruds.file.fields.type_of_content') }}</label>
                <input class="form-control {{ $errors->has('type_of_content') ? 'is-invalid' : '' }}" type="text" name="type_of_content" id="type_of_content" value="{{ old('type_of_content', $file->type_of_content) }}">
                @if($errors->has('type_of_content'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type_of_content') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.type_of_content_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="type_of_file">{{ trans('cruds.file.fields.type_of_file') }}</label>
                <input class="form-control {{ $errors->has('type_of_file') ? 'is-invalid' : '' }}" type="text" name="type_of_file" id="type_of_file" value="{{ old('type_of_file', $file->type_of_file) }}">
                @if($errors->has('type_of_file'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type_of_file') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.type_of_file_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="episode">{{ trans('cruds.file.fields.episode') }}</label>
                <input class="form-control {{ $errors->has('episode') ? 'is-invalid' : '' }}" type="text" name="episode" id="episode" value="{{ old('episode', $file->episode) }}">
                @if($errors->has('episode'))
                    <div class="invalid-feedback">
                        {{ $errors->first('episode') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.episode_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="duration">{{ trans('cruds.file.fields.duration') }}</label>
                <input class="form-control {{ $errors->has('duration') ? 'is-invalid' : '' }}" type="text" name="duration" id="duration" value="{{ old('duration', $file->duration) }}">
                @if($errors->has('duration'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.duration_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="file_extension">{{ trans('cruds.file.fields.file_extension') }}</label>
                <input class="form-control {{ $errors->has('file_extension') ? 'is-invalid' : '' }}" type="text" name="file_extension" id="file_extension" value="{{ old('file_extension', $file->file_extension) }}">
                @if($errors->has('file_extension'))
                    <div class="invalid-feedback">
                        {{ $errors->first('file_extension') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.file_extension_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="resolution">{{ trans('cruds.file.fields.resolution') }}</label>
                <input class="form-control {{ $errors->has('resolution') ? 'is-invalid' : '' }}" type="text" name="resolution" id="resolution" value="{{ old('resolution', $file->resolution) }}">
                @if($errors->has('resolution'))
                    <div class="invalid-feedback">
                        {{ $errors->first('resolution') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.resolution_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="me">{{ trans('cruds.file.fields.me') }}</label>
                <input class="form-control {{ $errors->has('me') ? 'is-invalid' : '' }}" type="text" name="me" id="me" value="{{ old('me', $file->me) }}">
                @if($errors->has('me'))
                    <div class="invalid-feedback">
                        {{ $errors->first('me') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.me_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="khmer_dub">{{ trans('cruds.file.fields.khmer_dub') }}</label>
                <input class="form-control {{ $errors->has('khmer_dub') ? 'is-invalid' : '' }}" type="text" name="khmer_dub" id="khmer_dub" value="{{ old('khmer_dub', $file->khmer_dub) }}">
                @if($errors->has('khmer_dub'))
                    <div class="invalid-feedback">
                        {{ $errors->first('khmer_dub') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.khmer_dub_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="path">{{ trans('cruds.file.fields.path') }}</label>
                <input class="form-control {{ $errors->has('path') ? 'is-invalid' : '' }}" type="text" name="path" id="path" value="{{ old('path', $file->path) }}">
                @if($errors->has('path'))
                    <div class="invalid-feedback">
                        {{ $errors->first('path') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.path_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="storage">{{ trans('cruds.file.fields.storage') }}</label>
                <input class="form-control {{ $errors->has('storage') ? 'is-invalid' : '' }}" type="text" name="storage" id="storage" value="{{ old('storage', $file->storage) }}">
                @if($errors->has('storage'))
                    <div class="invalid-feedback">
                        {{ $errors->first('storage') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.storage_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="date_received">{{ trans('cruds.file.fields.date_received') }}</label>
                <input class="form-control {{ $errors->has('date_received') ? 'is-invalid' : '' }}" type="date" name="date_received" id="date_received" value="{{ old('date_received', $file->date_received) }}">
                @if($errors->has('date_received'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_received') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.date_received_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="year">{{ trans('cruds.file.fields.year') }}</label>
                <input class="form-control {{ $errors->has('year') ? 'is-invalid' : '' }}" type="text" name="year" id="year" value="{{ old('year', $file->year) }}">
                @if($errors->has('year'))
                    <div class="invalid-feedback">
                        {{ $errors->first('year') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.year_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="poster">{{ trans('cruds.file.fields.poster') }}</label>
                <input class="form-control {{ $errors->has('poster') ? 'is-invalid' : '' }}" type="text" name="poster" id="poster" value="{{ old('poster', $file->poster) }}">
                @if($errors->has('poster'))
                    <div class="invalid-feedback">
                        {{ $errors->first('poster') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.poster_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="trailer_promo">{{ trans('cruds.file.fields.trailer_promo') }}</label>
                <input class="form-control {{ $errors->has('trailer_promo') ? 'is-invalid' : '' }}" type="text" name="trailer_promo" id="trailer_promo" value="{{ old('trailer_promo', $file->trailer_promo) }}">
                @if($errors->has('trailer_promo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('trailer_promo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.trailer_promo_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="synopsis">{{ trans('cruds.file.fields.synopsis') }}</label>
                <textarea class="form-control {{ $errors->has('synopsis') ? 'is-invalid' : '' }}" type="text" name="synopsis" id="synopsis" cols="30" rows="5">{{ old('synopsis', $file->synopsis) }}</textarea>
                @if($errors->has('synopsis'))
                    <div class="invalid-feedback">
                        {{ $errors->first('synopsis') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.synopsis_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="file_size">{{ trans('cruds.file.fields.file_size') }}</label>
                <input class="form-control {{ $errors->has('file_size') ? 'is-invalid' : '' }}" type="text" name="file_size" id="file_size" value="{{ old('file_size', $file->file_size) }}">
                @if($errors->has('file_size'))
                    <div class="invalid-feedback">
                        {{ $errors->first('file_size') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.file_size_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="start_date">{{ trans('cruds.file.fields.start_date') }}</label>
                <input class="form-control {{ $errors->has('start_date') ? 'is-invalid' : '' }}" type="date" name="start_date" id="start_date" value="{{ old('start_date', $file->start_date) }}">
                @if($errors->has('start_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('start_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.start_date_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="end_date">{{ trans('cruds.file.fields.end_date') }}</label>
                <input class="form-control {{ $errors->has('end_date') ? 'is-invalid' : '' }}" type="date" name="end_date" id="end_date" value="{{ old('end_date', $file->end_date) }}">
                @if($errors->has('end_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('end_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.end_date_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="period_of_time">{{ trans('cruds.file.fields.period_of_time') }}</label>
                <input class="form-control {{ $errors->has('period_of_time') ? 'is-invalid' : '' }}" type="text" name="period_of_time" id="period_of_time" value="{{ old('period_of_time', $file->period_of_time) }}">
                @if($errors->has('period_of_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('period_of_time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.period_of_time_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="remark">{{ trans('cruds.file.fields.remark') }}</label>
                <textarea class="form-control {{ $errors->has('remark') ? 'is-invalid' : '' }}" type="text" name="remark" id="remark" col="30" row="3">{{ old('remark', $file->remark) }}</textarea>
                @if($errors->has('remark'))
                    <div class="invalid-feedback">
                        {{ $errors->first('remark') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.file.fields.remark_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection