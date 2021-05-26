@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Create New File ID
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.files.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-12">
                <label class="required" for="content_id">{{ trans('cruds.user.fields.content_id') }}</label>
                <input class="form-control {{ $errors->has('content_id') ? 'is-invalid' : '' }}" type="text" name="content_id" id="content_id" value="{{ old('content_id', '') }}">
                @if($errors->has('content_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('content_id') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.content_id_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="title_of_content">{{ trans('cruds.user.fields.title_of_content') }}</label>
                <input class="form-control {{ $errors->has('title_of_content') ? 'is-invalid' : '' }}" type="text" name="title_of_content" id="title_of_content" value="{{ old('title_of_content') }}">
                @if($errors->has('title_of_content'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title_of_content') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.title_of_content_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="type_of_content">{{ trans('cruds.user.fields.type_of_content') }}</label>
                <input class="form-control {{ $errors->has('type_of_content') ? 'is-invalid' : '' }}" type="text" name="type_of_content" id="type_of_content">
                @if($errors->has('type_of_content'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type_of_content') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.type_of_content_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="type_of_file">{{ trans('cruds.user.fields.type_of_file') }}</label>
                <input class="form-control {{ $errors->has('type_of_file') ? 'is-invalid' : '' }}" type="text" name="type_of_file" id="type_of_file">
                @if($errors->has('type_of_file'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type_of_file') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.type_of_file_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="episode">{{ trans('cruds.user.fields.episode') }}</label>
                <input class="form-control {{ $errors->has('episode') ? 'is-invalid' : '' }}" type="text" name="episode" id="episode">
                @if($errors->has('episode'))
                    <div class="invalid-feedback">
                        {{ $errors->first('episode') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.episode_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="duration">{{ trans('cruds.user.fields.duration') }}</label>
                <input class="form-control {{ $errors->has('duration') ? 'is-invalid' : '' }}" type="text" name="duration" id="duration">
                @if($errors->has('duration'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.duration_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="file_extension">{{ trans('cruds.user.fields.file_extension') }}</label>
                <input class="form-control {{ $errors->has('file_extension') ? 'is-invalid' : '' }}" type="text" name="file_extension" id="file_extension">
                @if($errors->has('file_extension'))
                    <div class="invalid-feedback">
                        {{ $errors->first('file_extension') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.file_extension_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="resolution">{{ trans('cruds.user.fields.resolution') }}</label>
                <input class="form-control {{ $errors->has('resolution') ? 'is-invalid' : '' }}" type="text" name="resolution" id="resolution">
                @if($errors->has('resolution'))
                    <div class="invalid-feedback">
                        {{ $errors->first('resolution') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.resolution_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="m-e">{{ trans('cruds.user.fields.m-e') }}</label>
                <input class="form-control {{ $errors->has('m-e') ? 'is-invalid' : '' }}" type="text" name="m-e" id="m-e">
                @if($errors->has('m-e'))
                    <div class="invalid-feedback">
                        {{ $errors->first('m-e') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.m-e_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="khmer_dub">{{ trans('cruds.user.fields.khmer_dub') }}</label>
                <input class="form-control {{ $errors->has('khmer_dub') ? 'is-invalid' : '' }}" type="text" name="khmer_dub" id="khmer_dub">
                @if($errors->has('khmer_dub'))
                    <div class="invalid-feedback">
                        {{ $errors->first('khmer_dub') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.khmer_dub_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="path">{{ trans('cruds.user.fields.path') }}</label>
                <input class="form-control {{ $errors->has('path') ? 'is-invalid' : '' }}" type="text" name="path" id="path">
                @if($errors->has('path'))
                    <div class="invalid-feedback">
                        {{ $errors->first('path') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.path_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="storage">{{ trans('cruds.user.fields.storage') }}</label>
                <input class="form-control {{ $errors->has('storage') ? 'is-invalid' : '' }}" type="text" name="storage" id="storage">
                @if($errors->has('storage'))
                    <div class="invalid-feedback">
                        {{ $errors->first('storage') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.storage_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="date_received">{{ trans('cruds.user.fields.date_received') }}</label>
                <input class="form-control {{ $errors->has('date_received') ? 'is-invalid' : '' }}" type="date" name="date_received" id="date_received">
                @if($errors->has('date_received'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_received') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.date_received_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="year">{{ trans('cruds.user.fields.year') }}</label>
                <input class="form-control {{ $errors->has('year') ? 'is-invalid' : '' }}" type="text" name="year" id="year">
                @if($errors->has('year'))
                    <div class="invalid-feedback">
                        {{ $errors->first('year') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.year_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="poster">{{ trans('cruds.user.fields.poster') }}</label>
                <input class="form-control {{ $errors->has('poster') ? 'is-invalid' : '' }}" type="text" name="poster" id="poster">
                @if($errors->has('poster'))
                    <div class="invalid-feedback">
                        {{ $errors->first('poster') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.poster_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="trailer_promo">{{ trans('cruds.user.fields.trailer_promo') }}</label>
                <input class="form-control {{ $errors->has('trailer_promo') ? 'is-invalid' : '' }}" type="text" name="trailer_promo" id="trailer_promo">
                @if($errors->has('trailer_promo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('trailer_promo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.trailer_promo_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="synopsis">{{ trans('cruds.user.fields.synopsis') }}</label>
                <textarea class="form-control {{ $errors->has('synopsis') ? 'is-invalid' : '' }}" type="text" name="synopsis" id="synopsis" cols="30" rows="5"></textarea>
                @if($errors->has('synopsis'))
                    <div class="invalid-feedback">
                        {{ $errors->first('synopsis') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.synopsis_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="file_size">{{ trans('cruds.user.fields.file_size') }}</label>
                <input class="form-control {{ $errors->has('file_size') ? 'is-invalid' : '' }}" type="text" name="file_size" id="file_size">
                @if($errors->has('file_size'))
                    <div class="invalid-feedback">
                        {{ $errors->first('file_size') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.file_size_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="start_date">{{ trans('cruds.user.fields.start_date') }}</label>
                <input class="form-control {{ $errors->has('start_date') ? 'is-invalid' : '' }}" type="date" name="start_date" id="start_date">
                @if($errors->has('start_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('start_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.start_date_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="end_date">{{ trans('cruds.user.fields.end_date') }}</label>
                <input class="form-control {{ $errors->has('end_date') ? 'is-invalid' : '' }}" type="date" name="end_date" id="end_date">
                @if($errors->has('end_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('end_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.end_date_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="period_of_time">{{ trans('cruds.user.fields.period_of_time') }}</label>
                <input class="form-control {{ $errors->has('period_of_time') ? 'is-invalid' : '' }}" type="text" name="period_of_time" id="period_of_time">
                @if($errors->has('period_of_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('period_of_time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.period_of_time_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <label class="required" for="remark">{{ trans('cruds.user.fields.remark') }}</label>
                <textarea class="form-control {{ $errors->has('remark') ? 'is-invalid' : '' }}" type="text" name="remark" id="remark" col="30" row="3"></textarea>
                @if($errors->has('remark'))
                    <div class="invalid-feedback">
                        {{ $errors->first('remark') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.remark_helper') }}</span>
            </div>
            <div class="form-group col-md-12">
                <button class="btn btn-danger" type="submit">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>



@endsection