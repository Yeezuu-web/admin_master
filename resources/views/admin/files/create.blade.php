<div class="card">
    <div class="card-header">
        Create New File ID
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.files.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-md-3">
                    <label class="required" for="content_id">{{ trans('cruds.file.fields.content_id') }}</label>
                    <div class="input-group">
                        <select class="form-control form-control-sm col-4" name="series_id">
                            @foreach ($series as $value => $key)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                        <input class="form-control form-control-sm {{ $errors->has('content_id') ? 'is-invalid' : '' }} col-8" type="text"
                        name="content_id" id="content_id">
                        @if($errors->has('content_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('content_id') }}
                        </div>
                        @endif
                    </div>
                    <span class="help-block">{{ trans('cruds.file.fields.content_id_helper') }}</span>
                </div>
                
                <div class="form-group col-md-3">
                    <label class="required"
                        for="title_of_content">{{ trans('cruds.file.fields.title_of_content') }}</label>
                    <input class="form-control form-control-sm {{ $errors->has('title_of_content') ? 'is-invalid' : '' }}" type="text"
                        name="title_of_content" id="title_of_content">
                    @if($errors->has('title_of_content'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title_of_content') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.title_of_content_helper') }}</span>
                </div>

                <div class="form-group col-md-3">
                    <label class="required" for="type_of_content">{{ trans('cruds.file.fields.type_of_content') }}</label>
                    <select name="type_of_content" class="form-control form-control-sm {{ $errors->has('type_of_content') ? 'is-invalid' : '' }}">
                        <option value="">Please select</option>
                        <option value="DRAMA">Drama</option>
                        <option value="PROMO">Promo</option>
                        <option value="TVC">TVC</option>
                        <option value="E-LOGO">E-Logo</option>
                        <option value="OTHER">Other</option>
                    </select>
                    @if($errors->has('type_of_content'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type_of_content') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.type_of_content_helper') }}</span>
                </div>

                <div class="form-group col-md-3">
                    <label class="required" for="type_of_file">{{ trans('cruds.file.fields.type_of_file') }}</label>
                    <select name="type_of_file" class="form-control form-control-sm {{ $errors->has('type_of_file') ? 'is-invalid' : '' }}">
                        <option value="">Please select</option>
                        <option value="Master Clean">Master Clean</option>
                        <option value="Played">Played</option>
                        <option value="Other">Other</option>
                    </select>
                    @if($errors->has('type_of_file'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type_of_file') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.type_of_file_helper') }}</span>
                </div>

                <div class="form-group col-md-3">
                    <label class="required" for="episode">{{ trans('cruds.file.fields.episode') }}</label>
                    <input class="form-control form-control-sm {{ $errors->has('episode') ? 'is-invalid' : '' }}" type="text"
                        name="episode" id="episode">
                    @if($errors->has('episode'))
                    <div class="invalid-feedback">
                        {{ $errors->first('episode') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.episode_helper') }}</span>
                </div>

                <div class="form-group col-md-3">
                    <label class="required" for="duration">{{ trans('cruds.file.fields.duration') }}</label>
                    <input class="form-control form-control-sm timepicker {{ $errors->has('duration') ? 'is-invalid' : '' }}" type="text" name="duration" id="duration" value="{{ old('duration') }}">
                    @if($errors->has('duration'))
                        <div class="invalid-feedback">
                            {{ $errors->first('duration') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.duration_helper') }}</span>
                </div>
            <!-- </div> -->
            
            <!-- <div class="row"> -->
                <div class="form-group col-md-3">
                    <label class="required" for="file_extension">{{ trans('cruds.file.fields.file_extension') }}</label>
                    <select name="file_extension" id="file_extension" class="form-control form-control-sm {{ $errors->has('file_extension') ? 'is-invalid' : '' }}">
                        <option value="">Please select</option>
                        <option value="MXF">MXF</option>
                        <option value="MP3">MP3</option>
                        <option value="MPEG">MPEG</option>
                        <option value="AVI">AVI</option>
                        <option value="OTHER">Other</option>
                    </select>
                    @if($errors->has('file_extension'))
                    <div class="invalid-feedback">
                        {{ $errors->first('file_extension') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.file_extension_helper') }}</span>
                </div>

                <div class="form-group col-md-3">
                    <label class="required" for="resolution">{{ trans('cruds.file.fields.resolution') }}</label>
                    <select name="resolution" id="resolution" class="form-control form-control-sm {{ $errors->has('resolution') ? 'is-invalid' : '' }}">
                        <option value="">Please select</option>
                        <option value="HD">HD</option>
                        <option value="SD">SD</option>
                        <option value="OTHER">Other</option>
                    </select>
                    @if($errors->has('resolution'))
                    <div class="invalid-feedback">
                        {{ $errors->first('resolution') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.resolution_helper') }}</span>
                </div>

                <div class="form-group col-md-3">
                    <label for="me">{{ trans('cruds.file.fields.me') }}</label>
                    <select name="me" id="me" class="form-control form-control-sm {{ $errors->has('me') ? 'is-invalid' : '' }}">
                        <option value="">Please select</option>
                        <option value="YES">Yes</option>
                        <option value="NO">No</option>
                    </select>
                    @if($errors->has('me'))
                    <div class="invalid-feedback">
                        {{ $errors->first('me') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.me_helper') }}</span>
                </div>

                <div class="form-group col-md-3">
                    <label for="khmer_dub">{{ trans('cruds.file.fields.khmer_dub') }}</label>
                    <select name="khmer_dub" id="khmer_dub" class="form-control form-control-sm {{ $errors->has('khmer_dub') ? 'is-invalid' : '' }}">
                        <option value="">Please select</option>
                        <option value="YES">Yes</option>
                        <option value="NO">No</option>
                    </select>
                    @if($errors->has('khmer_dub'))
                    <div class="invalid-feedback">
                        {{ $errors->first('khmer_dub') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.khmer_dub_helper') }}</span>
                </div>

                <div class="form-group col-md-3">
                    <label class="required" for="path">{{ trans('cruds.file.fields.path') }}</label>
                    <input class="form-control form-control-sm {{ $errors->has('path') ? 'is-invalid' : '' }}" type="text" name="path"
                        id="path">
                    @if($errors->has('path'))
                    <div class="invalid-feedback">
                        {{ $errors->first('path') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.path_helper') }}</span>
                </div>

                <div class="form-group col-md-3">
                    <label class="required" for="storage">{{ trans('cruds.file.fields.storage') }}</label>
                    <select name="storage" id="storage" class="form-control form-control-sm {{ $errors->has('storage') ? 'is-invalid' : '' }}">
                        <option value="">Please select</option>
                        <option value="LACIE">Lacie</option>
                        <option value="IBM">IBM</option>
                        <option value="LTO">LTO</option>
                        <option value="TAPE">Tape</option>
                    </select>
                    @if($errors->has('storage'))
                    <div class="invalid-feedback">
                        {{ $errors->first('storage') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.storage_helper') }}</span>
                </div>
            <!-- </div> -->
            
            <!-- <div class="row"> -->
                <div class="form-group col-md-3">
                    <label class="required" for="date_received">{{ trans('cruds.file.fields.date_received') }} (m-d-Y)</label>
                    <input class="form-control date form-control-sm {{ $errors->has('date_received') ? 'is-invalid' : '' }}" type="text" name="date_received" id="date_received" value="{{ old('date_received') }}">
                @if($errors->has('date_received'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_received') }}
                    </div>
                @endif
                    <span class="help-block">{{ trans('cruds.file.fields.date_received_helper') }}</span>
                </div>

                <div class="form-group col-md-3">
                    <label class="required" for="year">{{ trans('cruds.file.fields.year') }}</label>
                    <input class="form-control form-control-sm {{ $errors->has('year') ? 'is-invalid' : '' }}" type="text" name="year"
                        id="year">
                    @if($errors->has('year'))
                    <div class="invalid-feedback">
                        {{ $errors->first('year') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.year_helper') }}</span>
                </div>

                <div class="form-group col-md-3">
                    <label for="poster">{{ trans('cruds.file.fields.poster') }}</label>
                    <select name="poster" id="poster" class="form-control form-control-sm {{ $errors->has('poster') ? 'is-invalid' : '' }}">
                        <option value="">Please select</option>
                        <option value="YES">Yes</option>
                        <option value="NO">No</option>
                    </select>
                    @if($errors->has('poster'))
                    <div class="invalid-feedback">
                        {{ $errors->first('poster') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.poster_helper') }}</span>
                </div>

                <div class="form-group col-md-3">
                    <label for="trailer_promo">{{ trans('cruds.file.fields.trailer_promo') }}</label>
                    <select name="trailer_promo" id="trailer_promo" class="form-control form-control-sm {{ $errors->has('trailer_promo') ? 'is-invalid' : '' }}">
                        <option value="">Please select</option>
                        <option value="YES">Yes</option>
                        <option value="NO">No</option>
                    </select>
                    @if($errors->has('trailer_promo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('trailer_promo') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.trailer_promo_helper') }}</span>
                </div>

                <div class="form-group col-md-3">
                    <label for="synopsis">{{ trans('cruds.file.fields.synopsis') }}</label>
                    <select name="synopsis" id="synopsis" class="form-control form-control-sm {{ $errors->has('synopsis') ? 'is-invalid' : '' }}">
                        <option value="">Please select</option>
                        <option value="YES">Yes</option>
                        <option value="NO">No</option>
                    </select>
                    @if($errors->has('synopsis'))
                    <div class="invalid-feedback">
                        {{ $errors->first('synopsis') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.synopsis_helper') }}</span>
                </div>
                
                <div class="form-group col-md-3">
                    <label class="required" for="file_size">{{ trans('cruds.file.fields.file_size') }}</label>
                    <input class="form-control form-control-sm {{ $errors->has('file_size') ? 'is-invalid' : '' }}" type="text"
                        name="file_size" id="file_size">
                    @if($errors->has('file_size'))
                    <div class="invalid-feedback">
                        {{ $errors->first('file_size') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.file_size_helper') }}</span>
                </div>
            <!-- </div> -->
            
            <!-- <div class="row"> -->
                <div class="form-group col-md-3">
                    <label for="start_date">{{ trans('cruds.file.fields.start_date') }} (m-d-Y)</label>
                    <input class="form-control date form-control-sm {{ $errors->has('start_date') ? 'is-invalid' : '' }}" type="text" name="start_date" id="start_date" value="{{ old('start_date') }}">
                    @if($errors->has('start_date'))
                        <div class="invalid-feedback">
                            {{ $errors->first('start_date') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.start_date_helper') }}</span>
                </div>

                <div class="form-group col-md-3">
                    <label for="end_date">{{ trans('cruds.file.fields.end_date') }} (m-d-Y)</label>
                    <input class="form-control date form-control-sm {{ $errors->has('end_date') ? 'is-invalid' : '' }}" type="text" name="end_date" id="end_date" value="{{ old('end_date') }}">
                    @if($errors->has('end_date'))
                        <div class="invalid-feedback">
                            {{ $errors->first('end_date') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.end_date_helper') }}</span>
                </div>

                <div class="form-group col-md-6">
                    <label for="period_of_time">{{ trans('cruds.file.fields.period_of_time') }}</label>
                    <input class="form-control form-control-sm {{ $errors->has('period_of_time') ? 'is-invalid' : '' }}" type="text"
                        name="period_of_time" id="period_of_time">
                    @if($errors->has('period_of_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('period_of_time') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.period_of_time_helper') }}</span>
                </div>
                <div class="form-group col-md-6">
                    <label for="remark">{{ trans('cruds.file.fields.remark') }}</label>
                    <input class="form-control form-control-sm {{ $errors->has('remark') ? 'is-invalid' : '' }}" type="text"
                        name="remark" id="remark">
                    @if($errors->has('remark'))
                    <div class="invalid-feedback">
                        {{ $errors->first('remark') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.remark_helper') }}</span>
                </div>
                <div class="form-group col-md-12">
                    <button class="btn btn-primary" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>