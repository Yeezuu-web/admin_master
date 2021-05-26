@extends('layouts.admin')
@section('content')
@can('file_create')
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route('admin.files.create') }}">
            Add File
        </a>
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
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.email_verified_at') }}
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
                            {{ $file->content_id ?? '' }}
                        </td>
                        <td>
                            {{ $file->title_of_content ?? '' }}
                        </td>
                        <td>
                            {{ $file->type_of_content ?? '' }}
                        </td>
                        <td>
                            {{ $file->created_at ?? '' }}
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
                    alert('{{ trans('global.datatables.zero_selected ') }}')

                    return
                }

                if (confirm('{{ trans('global.areYouSure ') }}')) {
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