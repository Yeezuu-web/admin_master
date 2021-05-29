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
                            {{  $file->series->prefix ?? ''}}{{ str_pad($file->content_id, 5, '0', STR_PAD_LEFT) }}
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
@endsection
