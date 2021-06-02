<div class="modal fade" id="frmShowModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Show File Detail</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            <div class="modal-body">
            <div class="form-group">
                <table class="table table-bordered table-striped">
                    <tbody>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.content_id') }}
                            </th>
                            <td id="show_file_id">
                                
                            </td>
                        </tr>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.title_of_content') }}
                            </th>
                            <td id="show_title_of_content">
                                
                            </td>
                        </tr>
                        
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.type_of_content') }}
                            </th>
                            <td id="show_type_of_content">

                            </td>
                        </tr>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.type_of_file') }}
                            </th>
                            <td id="show_type_of_file"> 
                            </td>
                        </tr>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.episode') }}
                            </th>
                            <td id="show_espisode">
                            </td>
                        </tr>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.duration') }}
                            </th>
                            <td id="show_duration">
                            </td>
                        </tr>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.file_extension') }}
                            </th>
                            <td id="show_file_extension">
                            </td>
                        </tr>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.resolution') }}
                            </th>
                            <td id="show_resolution">
                            </td>
                        </tr>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.me') }}
                            </th>
                            <td id="show_me">
                            </td>
                        </tr>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.khmer_dub') }}
                            </th>
                            <td id="show_khmer_dub">
                            </td>
                        </tr>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.path') }}
                            </th>
                            <td id="show_path">
                            </td>
                        </tr>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.storage') }}
                            </th>
                            <td id="show_storage">
                            </td>
                        </tr>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.date_received') }} (m-d-Y)
                            </th>
                            <td id="show_date_received">
                            </td>
                        </tr>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.year') }}
                            </th>
                            <td id="show_year">
                            </td>
                        </tr>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.poster') }}
                            </th>
                            <td id="show_poster">
                            </td>
                        </tr>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.trailer_promo') }}
                            </th>
                            <td id="show_trailer_promo">
                            </td>
                        </tr>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.synopsis') }}
                            </th>
                            <td id="show_synopsis">
                            </td>
                        </tr>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.file_size') }}
                            </th>
                            <td id="show_file_size">
                            </td>
                        </tr>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.start_date') }} (m-d-Y)
                            </th>
                            <td id="show_start_date">
                            </td>
                        </tr>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.end_date') }} (m-d-Y)
                            </th>
                            <td id="show_end_date"> 
                            </td>
                        </tr>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.period_of_time') }}
                            </th>
                            <td id="show_period_of_time">
                            </td>
                        </tr>
    
                        <tr>
                            <th width="180px">
                                {{ trans('cruds.file.fields.remark') }}
                            </th>
                            <td id="show_remark">
                            </td>
                        </tr>
                            
                            <th width="180px">
                                &nbsp;
                            </th>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('global.close') }}</button>
        </div>
      </div>
    </div>
  </div>