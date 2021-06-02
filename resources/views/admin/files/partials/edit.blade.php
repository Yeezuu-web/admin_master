
<div class="modal fade" id="frmEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="frmEdit" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <input type="hidden" id="fid" name="id">
            <div class="modal-body">
                <div class="row">
            
                    <div class="form-group col-md-4">
                        <label class="required" for="type_of_content">{{ trans('cruds.file.fields.content_id') }}</label>
                        <input type="text" class="form-control form-control-sm" value="{{ old('file_id', $file->file_id) }}" disabled>
                    </div>
            
                    <div class="form-group col-md-4">
                        <label class="required" for="content_id">{{ trans('cruds.file.fields.type_of_content') }}</label>
                        <select class="form-control form-control-sm" name="series_id" id="edit_series_id" disabled>
                            @foreach ($series as $value => $key)
                                <option value="{{ $key }}" {{ $key == old('series_id', $file->series_id) ? 'selected' : '' }}>{{ $value }}</option>
                            @endforeach
                        </select>
                        <span class="help-block">{{ trans('cruds.file.fields.content_id_helper') }}</span>
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label
                            for="title_of_content">{{ trans('cruds.file.fields.title_of_content') }}</label>
                        <input class="form-control form-control-sm" type="text" name="title_of_content" id="edit_title_of_content" >
                        
                        <span class="help-block">{{ trans('cruds.file.fields.title_of_content_helper') }}</span>
                    </div>
            
                    <div class="form-group col-md-4">
                        <label for="type_of_file">{{ trans('cruds.file.fields.type_of_file') }}</label>
                        <select name="type_of_file" class="form-control form-control-sm">
                            <option value="">Please select</option>
                            <option value="Master Clean">Master Clean</option>
                            <option value="Played">Played</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
            
                    <div class="form-group col-md-4">
                        <label for="episode">{{ trans('cruds.file.fields.episode') }}</label>
                        <input class="form-control form-control-sm" type="text"
                            name="episode" id="edit_episode">
                    </div>
            
                    <div class="form-group col-md-4">
                        <label for="duration">{{ trans('cruds.file.fields.duration') }}</label>
                        <input class="form-control timepicker form-control-sm" type="text" name="duration" id="edit_duration">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="file_extension">{{ trans('cruds.file.fields.file_extension') }}</label>
                        <select name="file_extension" id="edit_file_extension" class="form-control form-control-sm">
                            <option value="">Please select</option>
                            <option value="MXF">MXF</option>
                            <option value="MP4">MP4</option>
                            <option value="MPEG">MPEG</option>
                            <option value="AVI">AVI</option>
                            <option value="OTHER">Other</option>
                        </select>
                    </div>
            
                    <div class="form-group col-md-4">
                        <label for="resolution">{{ trans('cruds.file.fields.resolution') }}</label>
                        <select name="resolution" id="edit_resolution" class="form-control form-control-sm">
                            <option value="">Please select</option>
                            <option value="HD">HD</option>
                            <option value="SD">SD</option>
                            <option value="OTHER">Other</option>
                        </select>
                    </div>
            
                    <div class="form-group col-md-4">
                        <label for="me">{{ trans('cruds.file.fields.me') }}</label>
                        <select name="me" id="edit_me" class="form-control form-control-sm">
                            <option value="">Please select</option>
                            <option value="YES">Yes</option>
                            <option value="NO">No</option>
                        </select>
                    </div>
            
                    <div class="form-group col-md-4">
                        <label for="khmer_dub">{{ trans('cruds.file.fields.khmer_dub') }}</label>
                        <select name="khmer_dub" id="edit_khmer_dub" class="form-control form-control-sm">
                            <option value="">Please select</option>
                            <option value="YES">Yes</option>
                            <option value="NO">No</option>
                        </select>
                    </div>
            
                    <div class="form-group col-md-4">
                        <label for="path">{{ trans('cruds.file.fields.path') }}</label>
                        <input class="form-control form-control-sm" type="text" name="path"
                            id="edit_path" value="{{ old('path', $file->path) }}">
                    </div>
            
                    <div class="form-group col-md-4">
                        <label for="storage">{{ trans('cruds.file.fields.storage') }}</label>
                        <select name="storage" id="edit_storage" class="form-control form-control-sm">
                            <option value="">Please select</option>
                            <option value="LACIE">Lacie</option>
                            <option value="IBM">IBM</option>
                            <option value="LTO">LTO</option>
                            <option value="TAPE">Tape</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="date_received">{{ trans('cruds.file.fields.date_received') }}</label>
                        <input class="form-control date form-control-sm" type="text" name="date_received" id="edit_date_received">
                    </div>
            
                    <div class="form-group col-md-4">
                        <label for="year">{{ trans('cruds.file.fields.year') }}</label>
                        <input class="form-control form-control-sm yearpicker" type="text" name="year"
                            id="edit_year"">
                    </div>
            
                    <div class="form-group col-md-4">
                        <label for="poster">{{ trans('cruds.file.fields.poster') }}</label>
                        <select name="poster" id="edit_poster" class="form-control form-control-sm">
                            <option value="">Please select</option>
                            <option value="YES">Yes</option>
                            <option value="NO">No</option>
                        </select>
                    </div>
            
                    <div class="form-group col-md-4">
                        <label for="trailer_promo">{{ trans('cruds.file.fields.trailer_promo') }}</label>
                        <select id="edit_trailer_promo" name="trailer_promo" class="form-control form-control-sm">
                            <option value="">Please select</option>
                            <option value="YES">Yes</option>
                            <option value="NO">No</option>
                        </select>
                    </div>
            
                    <div class="form-group col-md-4">
                        <label for="synopsis">{{ trans('cruds.file.fields.synopsis') }}</label>
                        <select name="synopsis" id="edit_synopsis" class="form-control form-control-sm}">
                            <option value="">Please select</option>
                            <option value="YES">Yes</option>
                            <option value="NO">No</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="file_size">{{ trans('cruds.file.fields.file_size') }}</label>
                        <div class="input-group">
                            <select class="form-control form-control-sm col-md-3" name="series_size" id="edit_series_size" style="padding-left: 0px !important;padding-right: 5px !important;">
                                <option value=""></option>
                                <option value="TB">TB</option>
                                <option value="GB">GB</option>
                                <option value="MB">MB</option>
                                <option value="KB">KB</option>
                            </select>
                            <input class="form-control form-control-sm col-md-9" type="number""
                            name="file_size" id="edit_file_size">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="start_date">{{ trans('cruds.file.fields.start_date') }}</label>
                        <input class="form-control date form-control-sm" type="text" name="start_date" id="edit_start_date"">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="end_date">{{ trans('cruds.file.fields.end_date') }}</label>
                        <input class="form-control date form-control-sm" type="text" name="end_date" id="edit_end_date"">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="period_of_time">{{ trans('cruds.file.fields.period_of_time') }}</label>
                        <input class="form-control form-control-sm" type="text"
                            name="period_of_time" id="edit_period_of_time"">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="remark">{{ trans('cruds.file.fields.remark') }}</label>
                        <input class="form-control form-control-sm" type="text"
                            name="remark" id="edit_remark"">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('global.close') }}</button>
                <button type="submit" class="btn btn-primary">{{ trans('global.save') }}</button>
            </div>
        </form>
      </div>
    </div>
  </div>