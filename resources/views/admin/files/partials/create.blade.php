<div class="card">
    <div class="card-header">
        Create New File ID
        @include('admin.files.partials.button')
    </div>

    <div class="card-body">
        <form id="frm">
            @csrf
            <div class="row">

                <div class="form-group col-md-3" id="type_content">
                    <label class="required" for="type_of_content">{{ trans('cruds.file.fields.type_of_content') }}</label>
                    <select name="series_id" id="series_id" class="form-control form-control-sm">
                        <option value="">Please select</option>
                        @foreach ($series as $value => $key)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    <span class="invalid-feedback" id="type_of_content_error">
                    </span>
                </div>

                <div class="form-group col-md-3" id="segments">
                    <label
                        for="title_of_content">{{ trans('cruds.file.fields.segment') }}</label>
                    <div class="input-group">
                        <input class="form-control form-control-sm" type="number" name="segment" id="segment">
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('segments', 'segment')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>
                
                <div class="form-group col-md-3" id="channels">
                    <label for="channel">{{ trans('cruds.file.fields.channel') }}</label>
                    <div class="input-group">
                        <select name="channel" id="channel" class="form-control form-control-sm">
                            <option value="">Please select</option>
                            <option value="CTN">CTN</option>
                            <option value="MYTV">MYTV</option>
                            <option value="CNC">CNC</option>
                        </select>
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('channels', 'channel')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>
                
                <div class="form-group col-md-3" id="title_content">
                    <label
                        for="title_of_content">{{ trans('cruds.file.fields.title_of_content') }}</label>
                    <div class="input-group">
                        <input class="form-control form-control-sm" type="text" name="title_of_content" id="title_of_content">
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('title_content', 'title_of_content')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-3 hidden" id="type_file">
                    <label for="type_of_file">{{ trans('cruds.file.fields.type_of_file') }}</label>
                    <div class="input-group">
                        <select name="type_of_file" id="type_of_file" class="form-control form-control-sm">
                            <option value="">Please select</option>
                            <option value="Master Clean">Master Clean</option>
                            <option value="Played">Played</option>
                            <option value="Other">Other</option>
                        </select>
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('type_file', 'type_of_file')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-3 hidden" id="eps">
                    <label for="episode">{{ trans('cruds.file.fields.episode') }}</label>
                    <div class="input-group">
                        <input class="form-control form-control-sm" type="number"
                            name="episode" id="episode">
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('eps', 'episode')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-3 hidden" id="dur">
                    <label for="duration">{{ trans('cruds.file.fields.duration') }}</label>
                    <div class="input-group">
                        <input class="form-control form-control-sm timepicker" type="text" name="duration" id="duration" value="{{ old('duration') }}">
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('dur', 'duration')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>
            <!-- </div> -->
            
            <!-- <div class="row"> -->
                <div class="form-group col-md-3 hidden" id="file_ext">
                    <label for="file_extension">{{ trans('cruds.file.fields.file_extension') }}</label>
                    <div class="input-group">
                        <select name="file_extension" id="file_extension" class="form-control form-control-sm">
                            <option value="">Please select</option>
                            <option value="MXF">MXF</option>
                            <option value="MP3">MP3</option>
                            <option value="MPEG">MPEG</option>
                            <option value="AVI">AVI</option>
                            <option value="OTHER">Other</option>
                        </select>
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('file_ext', 'file_extension')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-3 hidden" id="res">
                    <label for="resolution">{{ trans('cruds.file.fields.resolution') }}</label>
                    <div class="input-group">
                        <select name="resolution" id="resolution" class="form-control form-control-sm">
                            <option value="">Please select</option>
                            <option value="HD">HD</option>
                            <option value="SD">SD</option>
                            <option value="OTHER">Other</option>
                        </select>
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('res', 'resolution')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-3 hidden" id="m_e">
                    <label for="me">{{ trans('cruds.file.fields.me') }}</label>
                    <div class="input-group">
                        <select name="me" id="me" class="form-control form-control-sm">
                            <option value="">Please select</option>
                            <option value="YES">Yes</option>
                            <option value="NO">No</option>
                        </select>
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('m_e', 'me')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-3 hidden" id="dub">
                    <label for="khmer_dub">{{ trans('cruds.file.fields.khmer_dub') }}</label>
                    <div class="input-group">
                        <select name="khmer_dub" id="khmer_dub" class="form-control form-control-sm">
                            <option value="">Please select</option>
                            <option value="YES">Yes</option>
                            <option value="NO">No</option>
                        </select>
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('dub', 'khmer_dub')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-3 hidden" id="file_path">
                    <label for="path">{{ trans('cruds.file.fields.path') }}</label>
                    <div class="input-group">
                        <input class="form-control form-control-sm" type="text" name="path" id="path">
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('file_path', 'path')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-3 hidden" id="file_storage">
                    <label for="storage">{{ trans('cruds.file.fields.storage') }}</label>
                    <div class="input-group">
                        <select name="storage" id="storage" class="form-control form-control-sm">
                            <option value="">Please select</option>
                            <option value="LACIE">Lacie</option>
                            <option value="IBM">IBM</option>
                            <option value="LTO">LTO</option>
                            <option value="TAPE">Tape</option>
                        </select>
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('file_storage', 'storage')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>
            <!-- </div> -->
            
            <!-- <div class="row"> -->
                <div class="form-group col-md-3 hidden" id="recieved">
                    <label for="date_received">{{ trans('cruds.file.fields.date_received') }} (m-d-Y)</label>
                    <div class="input-group">
                        <input class="form-control date form-control-sm" type="text" name="date_received" id="date_received" value="{{ old('date_received') }}">
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('recieved', 'date_recieved')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-3 hidden" id="air_dates">
                    <label for="date_received">{{ trans('cruds.file.fields.air_date') }} (m-d-Y)</label>
                    <div class="input-group">
                        <input class="form-control date form-control-sm" type="text" name="air_date" id="air_date" value="{{ old('date_received') }}">
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('air_dates', 'air_date')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-3 hidden" id="file_year">
                    <label for="year">{{ trans('cruds.file.fields.year') }}</label>
                    <div class="input-group">
                        <input class="form-control form-control-sm yearpicker" type="text" name="year" id="year">
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('file_year', 'year')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-3 hidden" id="file_poster">
                    <label for="poster">{{ trans('cruds.file.fields.poster') }}</label>
                    <div class="input-group">
                        <select name="poster" id="poster" class="form-control form-control-sm">
                            <option value="">Please select</option>
                            <option value="YES">Yes</option>
                            <option value="NO">No</option>
                        </select>
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('file_poster', 'poster')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-3 hidden" id="promo">
                    <label for="trailer_promo">{{ trans('cruds.file.fields.trailer_promo') }}</label>
                    <div class="input-group">
                        <select name="trailer_promo" id="trailer_promo" class="form-control form-control-sm">
                            <option value="">Please select</option>
                            <option value="YES">Yes</option>
                            <option value="NO">No</option>
                        </select>
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('promo', 'trailer_and_promo')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-3 hidden" id="sys">
                    <label for="synopsis">{{ trans('cruds.file.fields.synopsis') }}</label>
                    <div class="input-group">
                        <select name="synopsis" id="synopsis" class="form-control form-control-sm">
                            <option value="">Please select</option>
                            <option value="YES">Yes</option>
                            <option value="NO">No</option>
                        </select>
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('sys', 'synopsis')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>
                
                <div class="form-group col-md-3 hidden" id="size">
                    <label for="file_size">{{ trans('cruds.file.fields.file_size') }}</label>
                    <div class="input-group">
                        <select class="form-control form-control-sm col-md-3" name="series_size" id="series_size" style="padding-left: 0px !important;padding-right: 5px !important;">
                            <option value="">Please select</option>
                            <option value="TB">TB</option>
                            <option value="GB">GB</option>
                            <option value="MB">MB</option>
                            <option value="KB">KB</option>
                        </select>
                        <input class="form-control form-control-sm col-md-9" type="number"name="file_size" id="file_size">
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('size', 'file_size')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>
            <!-- </div> -->
            
            <!-- <div class="row"> -->
                <div class="form-group col-md-3 hidden" id="start">
                    <label for="start_date">{{ trans('cruds.file.fields.start_date') }} (m-d-Y)</label>
                    <div class="input-group">
                        <input class="form-control date form-control-sm" type="text" name="start_date" id="start_date">
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('start', 'start_date')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-3 hidden" id="end">
                    <label for="end_date">{{ trans('cruds.file.fields.end_date') }} (m-d-Y)</label>
                    <div class="input-group">
                        <input class="form-control date form-control-sm" type="text" name="end_date" id="end_date">
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('end', 'end_date')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-3 hidden" id="time">
                    <label for="period_of_time">{{ trans('cruds.file.fields.period_of_time') }}</label>
                    <div class="input-group">
                        <input class="form-control form-control-sm" type="text"
                        name="period_of_time" id="period_of_time">
                        <span class="input-group-append">
                            <button class="btn btn-danger form-control-sm" type="button" onclick="hideInputBySelect('time', 'period_of_time')"><i class="fa fa-trash"></i></button>
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-12" id="remark">
                    <label for="remark">{{ trans('cruds.file.fields.remark') }}</label>
                    <input class="form-control form-control-sm " type="text" name="remark" id="input_remark" />
                </div>

                <div class="form-group col-md-12">
                    <div class="form-check form-check-inline mr-1">
                        <input class="form-check-input reminderCheckbox" type="checkbox" value="reminder">
                        <label class="form-check-label" for="inline-checkbox1">Have Reminder</label>
                    </div>
                </div>

                <div class="form-group col-md-3 hidden" id="s_time">
                    <label for="start_time">{{ trans('cruds.file.fields.start_time') }}</label>
                    <input class="form-control datetime form-control-sm" type="text" name="start_time" id="start_time">
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