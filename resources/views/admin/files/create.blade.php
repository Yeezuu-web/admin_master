<div class="card">
    <div class="card-header">
        Create New File ID
        <div class="btn-group">
            <button class="btn btn-primary btn-sm ml-3 dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More input</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin: 0px;">
                <button class="dropdown-item" type="button" onclick="showInputBySelect('title_content')">Title of content</button>
                <button class="dropdown-item" type="button" onclick="showInputBySelect('type_content')">Type of content</button>
                <div class="dropdown-divider"></div>
                <button class="dropdown-item" type="button" onclick="showInput()">Show all</button>
                <button class="dropdown-item" type="button" onclick="hideInput()">Hide unnecessary</button>
            </div>
        </div>
    </div>

    <div class="card-body">
        <form id="frm">
            @csrf
            <div class="row">
                <div class="form-group col-md-3">
                    <label class="required" for="content_id">{{ trans('cruds.file.fields.content_id') }}</label>
                    <div class="input-group">
                        <select class="form-control form-control-sm col-4" name="series_id" id="series_id" style="padding-left: 0px !important; padding-right: 5px !important">
                            @foreach ($series as $value => $key)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                        <input class="form-control form-control-sm col-8" type="number"
                        name="content_id" id="content_id">
                        <span class="invalid-feedback" id="content_id_error">
                        </span>
                    </div>
                    <span class="help-block">{{ trans('cruds.file.fields.content_id_helper') }}</span>
                </div>
                
                <div class="form-group col-md-3 hidden" id="title_content">
                    <label
                        for="title_of_content">{{ trans('cruds.file.fields.title_of_content') }}</label>
                    <input class="form-control form-control-sm" type="text"
                        name="data.title_of_content" id="title_of_content">
                    <span class="invalid-feedback" id="title_of_content_error">
                    </span>
                </div>

                <div class="form-group col-md-3 hidden" id="type_content">
                    <label class="required" for="type_of_content">{{ trans('cruds.file.fields.type_of_content') }}</label>
                    <select name="type_of_content" id="type_of_content" class="form-control form-control-sm">
                        <option value="">Please select</option>
                        <option value="DRAMA">Drama</option>
                        <option value="PROMO">Promo</option>
                        <option value="TVC">TVC</option>
                        <option value="E-LOGO">E-Logo</option>
                        <option value="OTHER">Other</option>
                    </select>
                    <span class="invalid-feedback" id="type_of_content_error">
                    </span>
                    <span class="help-block">{{ trans('cruds.file.fields.type_of_content_helper') }}</span>
                </div>

                <div class="form-group col-md-3 hidden" id="type_file">
                    <label for="type_of_file">{{ trans('cruds.file.fields.type_of_file') }}</label>
                    <select name="type_of_file" id="type_of_file" class="form-control form-control-sm">
                        <option value="">Please select</option>
                        <option value="Master Clean">Master Clean</option>
                        <option value="Played">Played</option>
                        <option value="Other">Other</option>
                    </select>
                    <span class="invalid-feedback" id="type_of_file_error">
                    </span>
                </div>

                <div class="form-group col-md-3 hidden" id="eps">
                    <label for="episode">{{ trans('cruds.file.fields.episode') }}</label>
                    <input class="form-control form-control-sm" type="number"
                        name="episode" id="episode">
                    <span class="invalid-feedback" id="episode_error">
                    </span>
                </div>

                <div class="form-group col-md-3 hidden" id="dur">
                    <label for="duration">{{ trans('cruds.file.fields.duration') }}</label>
                    <input class="form-control form-control-sm timepicker" type="text" name="duration" id="duration" value="{{ old('duration') }}">
                    <span class="invalid-feedback" id="duration_error">
                    </span>
                </div>
            <!-- </div> -->
            
            <!-- <div class="row"> -->
                <div class="form-group col-md-3 hidden" id="file_ext">
                    <label for="file_extension">{{ trans('cruds.file.fields.file_extension') }}</label>
                    <select name="file_extension" id="file_extension" class="form-control form-control-sm">
                        <option value="">Please select</option>
                        <option value="MXF">MXF</option>
                        <option value="MP3">MP3</option>
                        <option value="MPEG">MPEG</option>
                        <option value="AVI">AVI</option>
                        <option value="OTHER">Other</option>
                    </select>
                    <span class="invalid-feedback" id="file_extension_error">
                    </span>
                </div>

                <div class="form-group col-md-3 hidden" id="res">
                    <label for="resolution">{{ trans('cruds.file.fields.resolution') }}</label>
                    <select name="resolution" id="resolution" class="form-control form-control-sm">
                        <option value="">Please select</option>
                        <option value="HD">HD</option>
                        <option value="SD">SD</option>
                        <option value="OTHER">Other</option>
                    </select>
                    <span class="invalid-feedback" id="resolution_error">
                    </span>
                </div>

                <div class="form-group col-md-3 hidden" id="m_e">
                    <label for="me">{{ trans('cruds.file.fields.me') }}</label>
                    <select name="me" id="me" class="form-control form-control-sm">
                        <option value="">Please select</option>
                        <option value="YES">Yes</option>
                        <option value="NO">No</option>
                    </select>
                    <span class="invalid-feedback" id="me_error">
                    </span>
                </div>

                <div class="form-group col-md-3 hidden" id="dub">
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

                <div class="form-group col-md-3 hidden" id="file_path">
                    <label for="path">{{ trans('cruds.file.fields.path') }}</label>
                    <input class="form-control form-control-sm" type="text" name="path" id="path">
                    <span class="invalid-feedback" id="path_error">
                    </span>
                </div>

                <div class="form-group col-md-3 hidden" id="file_storage">
                    <label for="storage">{{ trans('cruds.file.fields.storage') }}</label>
                    <select name="storage" id="storage" class="form-control form-control-sm">
                        <option value="">Please select</option>
                        <option value="LACIE">Lacie</option>
                        <option value="IBM">IBM</option>
                        <option value="LTO">LTO</option>
                        <option value="TAPE">Tape</option>
                    </select>
                    <span class="invalid-feedback" id="storage_error">
                    </span>
                </div>
            <!-- </div> -->
            
            <!-- <div class="row"> -->
                <div class="form-group col-md-3 hidden" id="recieved">
                    <label for="date_received">{{ trans('cruds.file.fields.date_received') }} (m-d-Y)</label>
                    <input class="form-control date form-control-sm" type="text" name="date_received" id="date_received" value="{{ old('date_received') }}">
                    <span class="invalid-feedback" id="date_received_error">
                    </span>
                </div>

                <div class="form-group col-md-3 hidden" id="file_year">
                    <label for="year">{{ trans('cruds.file.fields.year') }}</label>
                    <input class="form-control form-control-sm" type="text" name="year"
                        id="year">
                    <span class="invalid-feedback" id="year_error">
                    </span>
                </div>

                <div class="form-group col-md-3 hidden" id="file_poster">
                    <label for="poster">{{ trans('cruds.file.fields.poster') }}</label>
                    <select name="poster" id="poster" class="form-control form-control-sm {{ $errors->has('poster') ? 'is-invalid' : '' }}">
                        <option value="">Please select</option>
                        <option value="YES">Yes</option>
                        <option value="NO">No</option>
                    </select>
                </div>

                <div class="form-group col-md-3 hidden" id="promo">
                    <label for="trailer_promo">{{ trans('cruds.file.fields.trailer_promo') }}</label>
                    <select name="trailer_promo" id="trailer_promo" class="form-control form-control-sm">
                        <option value="">Please select</option>
                        <option value="YES">Yes</option>
                        <option value="NO">No</option>
                    </select>
                </div>

                <div class="form-group col-md-3 hidden" id="sys">
                    <label for="synopsis">{{ trans('cruds.file.fields.synopsis') }}</label>
                    <select name="synopsis" id="synopsis" class="form-control form-control-sm">
                        <option value="">Please select</option>
                        <option value="YES">Yes</option>
                        <option value="NO">No</option>
                    </select>
                </div>
                
                <div class="form-group col-md-3 hidden" id="size">
                    <label for="file_size">{{ trans('cruds.file.fields.file_size') }}</label>
                    <div class="input-group">
                        <select class="form-control form-control-sm col-md-3" name="series_size" id="series_size" style="padding-left: 0px !important;padding-right: 5px !important;">
                            <option value="TB">TB</option>
                            <option value="GB">GB</option>
                            <option value="MB">MB</option>
                            <option value="KB">KB</option>
                        </select>
                        <input class="form-control form-control-sm col-md-9" type="number"
                        name="file_size" id="file_size">
                        <span class="invalid-feedback" id="file_size_error">
                        </span>
                    </div>
                </div>
            <!-- </div> -->
            
            <!-- <div class="row"> -->
                <div class="form-group col-md-3 hidden" id="start">
                    <label for="start_date">{{ trans('cruds.file.fields.start_date') }} (m-d-Y)</label>
                    <input class="form-control date form-control-sm" type="text" name="start_date" id="start_date" value="{{ old('start_date') }}">
                    <span class="invalid-feedback" id="start_date_error">
                    </span>
                </div>

                <div class="form-group col-md-3 hidden" id="end">
                    <label for="end_date">{{ trans('cruds.file.fields.end_date') }} (m-d-Y)</label>
                    <input class="form-control date form-control-sm" type="text" name="end_date" id="end_date" value="{{ old('end_date') }}">
                    <span class="invalid-feedback" id="end_date_error">
                    </span>
                </div>

                <div class="form-group col-md-6 hidden" id="time">
                    <label for="period_of_time">{{ trans('cruds.file.fields.period_of_time') }}</label>
                    <input class="form-control form-control-sm {{ $errors->has('period_of_time') ? 'is-invalid' : '' }}" type="text"
                        name="period_of_time" id="period_of_time">
                    <span class="help-block">{{ trans('cruds.file.fields.period_of_time_helper') }}</span>
                </div>
                <div class="form-group col-md-6 hidden" id="remark">
                    <label for="remark">{{ trans('cruds.file.fields.remark') }}</label>
                    <textarea class="form-control form-control-sm {{ $errors->has('remark') ? 'is-invalid' : '' }}" type="text"
                        name="remark" id="remark"></textarea>
                    <span class="help-block">{{ trans('cruds.file.fields.remark_helper') }}</span>
                </div>
                <div class="form-group col-md-12">
                    <button class="btn btn-primary btn-sm" type="submit">
                        {{ trans('global.create') }}
                    </button>
                    <button class="btn btn-danger btn-sm ml-1" onclick=" $(document).ready(function () { location.reload(); });">
                        {{ trans('global.clear') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>