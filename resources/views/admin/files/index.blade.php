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
</style>
@endsection

@section('content')
@can('file_create')
<!-- <div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route('admin.files.create') }}">
            Add File
        </a>
    </div>
</div> -->
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
                    <input class="form-control form-control-sm {{ $errors->has('content_id') ? 'is-invalid' : '' }}" type="text"
                        name="content_id" id="content_id" value="{{ old('content_id', '') }}">
                    @if($errors->has('content_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('content_id') }}
                    </div>
                    @endif
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
                        <option>Please select</option>
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
                        <option>Please select</option>
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
                    <input class="form-control form-control-sm {{ $errors->has('duration') ? 'is-invalid' : '' }}" type="text"
                        name="duration" id="duration">
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
                        <option value="0">Please select</option>
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
                        <option value="0">Please select</option>
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
                    <label class="required" for="me">{{ trans('cruds.file.fields.me') }}</label>
                    <select name="me" id="me" class="form-control form-control-sm {{ $errors->has('me') ? 'is-invalid' : '' }}">
                        <option value="0">Please select</option>
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
                    <label class="required" for="khmer_dub">{{ trans('cruds.file.fields.khmer_dub') }}</label>
                    <select name="khmer_dub" id="khmer_dub" class="form-control form-control-sm {{ $errors->has('khmer_dub') ? 'is-invalid' : '' }}">
                        <option value="0">Please select</option>
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
                        <option value="0">Please select</option>
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
                    <label class="required" for="date_received">{{ trans('cruds.file.fields.date_received') }}</label>
                    <input class="form-control form-control-sm {{ $errors->has('date_received') ? 'is-invalid' : '' }}" type="date"
                        name="date_received" id="date_received">
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
                    <label class="required" for="poster">{{ trans('cruds.file.fields.poster') }}</label>
                    <select name="poster" id="poster" class="form-control form-control-sm {{ $errors->has('poster') ? 'is-invalid' : '' }}">
                        <option value="0">Please select</option>
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
                    <label class="required" for="trailer_promo">{{ trans('cruds.file.fields.trailer_promo') }}</label>
                    <select name="trailer_promo" id="trailer_promo" class="form-control form-control-sm {{ $errors->has('trailer_promo') ? 'is-invalid' : '' }}">
                        <option value="0">Please select</option>
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
                    <label class="required" for="synopsis">{{ trans('cruds.file.fields.synopsis') }}</label>
                    <select name="synopsis" id="synopsis" class="form-control form-control-sm {{ $errors->has('synopsis') ? 'is-invalid' : '' }}">
                        <option value="0">Please select</option>
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
                    <label class="required" for="start_date">{{ trans('cruds.file.fields.start_date') }}</label>
                    <input class="form-control form-control-sm {{ $errors->has('start_date') ? 'is-invalid' : '' }}" type="date"
                        name="start_date" id="start_date">
                    @if($errors->has('start_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('start_date') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.start_date_helper') }}</span>
                </div>
                <div class="form-group col-md-3">
                    <label class="required" for="end_date">{{ trans('cruds.file.fields.end_date') }}</label>
                    <input class="form-control form-control-sm {{ $errors->has('end_date') ? 'is-invalid' : '' }}" type="date"
                        name="end_date" id="end_date">
                    @if($errors->has('end_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('end_date') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.file.fields.end_date_helper') }}</span>
                </div>
                <div class="form-group col-md-6">
                    <label class="required" for="period_of_time">{{ trans('cruds.file.fields.period_of_time') }}</label>
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
                    <label class="required" for="remark">{{ trans('cruds.file.fields.remark') }}</label>
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
                    <button class="btn btn-danger" type="submit">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
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
                            {{ trans('cruds.file.fields.date_received') }}
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
                            {{ trans('cruds.file.fields.start_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.file.fields.end_date') }}
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
                            {{ $file->content_id ?? '' }}
                        </td>
                        <td>
                            {{ $file->title_of_content ?? '' }}
                        </td>
                        <td>
                            {{ $file->type_of_content ?? '' }}
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
                            {{ $file->file_size ?? '' }}
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
                            <a class="btn btn-xs btn-primary" href="{{ route('admin.files.show', $file->id) }}">
                                {{ trans('global.view') }}
                            </a>
                            @endcan

                            @can('file_edit')
                            <a class="btn btn-xs btn-info" href="{{ route('admin.files.edit', $file->id) }}">
                                {{ trans('global.edit') }}
                            </a>
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
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function() {
  let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
  let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
  let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
  let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
  let printButtonTrans = '{{ trans('global.datatables.print') }}'
  let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'
  let selectAllButtonTrans = '{{ trans('global.select_all') }}'
  let selectNoneButtonTrans = '{{ trans('global.deselect_all') }}'

  let languages = {
    'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
  };

  $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
  $.extend(true, $.fn.dataTable.defaults, {
    language: {
      url: languages['{{ app()->getLocale() }}']
    },
    columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
    }, {
        orderable: false,
        searchable: false,
        targets: -1
    }, {
      targets: [0, 1, 2, 3, 3, 5, 8, 19, 23],
      visible: true,
    }, { 
      targets: '_all',
      visible: false
    }],
    select: {
      style:    'multi+shift',
      selector: 'td:first-child'
    },
    order: [],
    scrollX: true,
    pageLength: 100,
    dom: 'lBfrtip<"actions">',
    buttons: [
      {
        extend: 'selectAll',
        className: 'btn-primary',
        text: selectAllButtonTrans,
        exportOptions: {
          columns: ':visible'
        },
        action: function(e, dt) {
          e.preventDefault()
          dt.rows().deselect();
          dt.rows({ search: 'applied' }).select();
        }
      },
      {
        extend: 'selectNone',
        className: 'btn-primary',
        text: selectNoneButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'copy',
        className: 'btn-default',
        text: copyButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'csv',
        className: 'btn-default',
        text: csvButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'excel',
        className: 'btn-default',
        text: excelButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'pdf',
        className: 'btn-default',
        text: pdfButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'print',
        className: 'btn-default',
        text: printButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'colvis',
        className: 'btn-default',
        text: colvisButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      }
    ]
  });

  $.fn.dataTable.ext.classes.sPageButton = '';
});

</script>
<script>
    $(function () {
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
        @can('file_delete')
        let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
        let deleteButton = {
            text: deleteButtonTrans,
            url: "{{ route('admin.files.massDestroy') }}",
            className: 'btn-danger',
            action: function (e, dt, node, config) {
                var ids = $.map(dt.rows({
                    selected: true
                }).nodes(), function (entry) {
                    return $(entry).data('entry-id')
                });

                if (ids.length === 0) {
                    alert('{{ trans('global.datatables.zero_selected') }}')

                    return
                }

                if (confirm('{{ trans('global.areYouSure') }}')) {
                    $.ajax({
                            headers: {
                                'x-csrf-token': _token
                            },
                            method: 'POST',
                            url: config.url,
                            data: {
                                ids: ids,
                                _method: 'DELETE'
                            }
                        })
                        .done(function () {
                            location.reload()
                        })
                }
            }
        }
        dtButtons.push(deleteButton)
        @endcan

        $.extend(true, $.fn.dataTable.defaults, {
            orderCellsTop: true,
            order: [
                [1, 'desc']
            ],
            pageLength: 100,
        });
        let table = $('.datatable-File:not(.ajaxTable)').DataTable({
            buttons: dtButtons
        })
        $('a[data-toggle="tab"]').on('shown.bs.tab click', function (e) {
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });
        $('div#sidebar').on('transitionend', function (e) {
            $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
        })

    })

</script>
@endsection
