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
    @include('admin.files.create')
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
                            {{  $file->series->prefix ?? ''}}{{ str_pad($file->content_id, 5, '0', STR_PAD_LEFT) ?? ''}}
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
      targets: [0, 2, 3, 4, 7, 9, 19, 24],
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
<script type="text/javascript">
    $(function () {
        $('#datepicker').datetimepicker();
    });
</script>
<script>
    $(document).ready(function () {
        $('#frm').submit(function (e) { 
            e.preventDefault();
            let series_size               = $('#series_size').val();
            let series_id               = $('#series_id').val();
            let content_id              = $('#content_id').val();
            let title_of_content        = $('#title_of_content').val();
            let type_of_content         = $('#type_of_content').val();
            let type_of_file            = $('#type_of_file').val();
            let episode                 = $('#episode').val();
            let duration                = $('#duration').val();
            let file_extension          = $('#file_extension').val();
            let resolution              = $('#resolution').val();
            let me                      = $('#me').val();
            let khmer_dub               = $('#khmer_dub').val();
            let path                    = $('#path').val();
            let storage                 = $('#storage').val();
            let date_received           = $('#date_received').val();
            let year                    = $('#year').val();
            let poster                  = $('#poster').val();
            let trailer_promo           = $('#trailer_promo').val();
            let synopsis                = $('#synopsis').val();
            let file_size               = $('#file_size').val();
            let start_date              = $('#start_date').val();
            let end_date                = $('#end_date').val();
            let period_of_time          = $('#period_of_time').val();
            let remark                  = $('#remark').val();
            let _token                  = $('input[name="_token"]').val();

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            
            $.ajax({
                type: "POST",
                url: "{{route('admin.files.store')}}",
                data: {
                    _token:    _token,
                    series_size:    series_size,
                    series_id:    series_id,
                    content_id:    content_id,
                    title_of_content:    title_of_content,
                    type_of_content:   type_of_content,
                    type_of_file:   type_of_file,
                    episode:   episode,
                    duration:  duration,
                    file_extension:  file_extension,
                    resolution:   resolution,
                    me:    me,
                    khmer_dub:   khmer_dub,
                    path:  path,
                    storage:    storage,
                    date_received:   date_received,
                    year:    year,
                    poster:    poster,
                    trailer_promo:   trailer_promo,
                    synopsis:   synopsis,
                    file_size:   file_size,
                    start_date:    start_date,
                    end_date:   end_date,
                    period_of_time:   period_of_time,
                    remark:    remark 
                },
                success: function (response) {
                    if (response) {
                        Toast.fire({
                            icon: 'success',
                            title: 'File ID is created!'
                        })
                        setTimeout(function () {
                            location.reload(); //Refresh page
                        }, 1800);
                    }
                },
                error: function (response) {
                    $('#content_id_error').text(response.responseJSON.errors.content_id);
                    if(response.responseJSON.errors.content_id){$('#content_id').addClass('is-invalid')};
                    $('#title_of_content_error').text(response.responseJSON.errors.title_of_content);
                    if(response.responseJSON.errors.title_of_content){$('#title_of_content').addClass('is-invalid')};
                    $('#type_of_content_error').text(response.responseJSON.errors.type_of_content);
                    if(response.responseJSON.errors.type_of_content) {$('#type_of_content').addClass('is-invalid')};
                    $('#type_of_file_error').text(response.responseJSON.errors.type_of_file);
                    if(response.responseJSON.errors.type_of_file) {$('#type_of_file').addClass('is-invalid')};
                    $('#episode_error').text(response.responseJSON.errors.episode);
                    if(response.responseJSON.errors.episode) {$('#episode').addClass('is-invalid')};
                    $('#duration_error').text(response.responseJSON.errors.duration);
                    if(response.responseJSON.errors.duration) {$('#duration').addClass('is-invalid')};
                    $('#file_extension_error').text(response.responseJSON.errors.file_extension);
                    if(response.responseJSON.errors.file_extension) {$('#file_extension').addClass('is-invalid')};
                    $('#resolution_error').text(response.responseJSON.errors.resolution);
                    if(response.responseJSON.errors.resolution) {$('#resolution').addClass('is-invalid')};
                    $('#path_error').text(response.responseJSON.errors.path);
                    if(response.responseJSON.errors.path) {$('#path').addClass('is-invalid')};
                    $('#storage_error').text(response.responseJSON.errors.storage);
                    if(response.responseJSON.errors.storage) {$('#storage').addClass('is-invalid')};
                    $('#date_received_error').text(response.responseJSON.errors.date_received);
                    if(response.responseJSON.errors.date_received) {$('#date_received').addClass('is-invalid')};
                    $('#year_error').text(response.responseJSON.errors.year);
                    if(response.responseJSON.errors.year) {$('#year').addClass('is-invalid')};
                    $('#file_size_error').text(response.responseJSON.errors.file_size);
                    if(response.responseJSON.errors.file_size) {$('#file_size').addClass('is-invalid')};
                    $('#start_date_error').text(response.responseJSON.errors.start_date);
                    if(response.responseJSON.errors.start_date) {$('#start_date').addClass('is-invalid')};
                    $('#end_date_error').text(response.responseJSON.errors.end_date);
                    if(response.responseJSON.errors.end_date) {$('#end_date').addClass('is-invalid')};
                }
            });
        })  
    });
</script>
@endsection
