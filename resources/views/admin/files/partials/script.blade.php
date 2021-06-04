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
            targets: [0, 2, 3, 4, 5, 6, 17, 27],
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
            pageLength: 25,
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
<script>
    $(document).ready(function () {
        $('#frm').submit(function (e) { 
            e.preventDefault();
            let series_size             = $('#series_size').val();
            let series_id               = $('#series_id').val();
            let channel                 = $('#channel').val();
            let air_date                = $('#air_date').val();
            let segment                 = $('#segment').val();
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
            let remark                  = $('#input_remark').val();
            let start_time              = $('#start_time').val();
            let _token                  = $('input[name="_token"]').val();

            console.log(remark);
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
                    channel:    channel,
                    air_date:    air_date,
                    segment:    segment,
                    series_id:    series_id,
                    title_of_content:    title_of_content,
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
                    start_time:   start_time,
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
                    $('#type_of_content_error').text('The type of content are required. Please select!');
                    console.log(response);
                    if(response.responseJSON.errors.series_id) {$('#series_id').addClass('is-invalid')};
                }
            });
        })  
    });
</script>
<script>
    $(function () {
        $('#datepicker').datetimepicker();
    });
    function showInput() {
        $('#title_content').removeClass('hidden');
        $('#channels').removeClass('hidden');
        $('#air_dates').removeClass('hidden');
        $('#segments').removeClass('hidden');
        $('#type_content').removeClass('hidden');
        $('#type_file').removeClass('hidden');
        $('#eps').removeClass('hidden');
        $('#dur').removeClass('hidden');
        $('#file_ext').removeClass('hidden');
        $('#res').removeClass('hidden');
        $('#m_e').removeClass('hidden');
        $('#dub').removeClass('hidden');
        $('#file_path').removeClass('hidden');
        $('#file_storage').removeClass('hidden');
        $('#recieved').removeClass('hidden');
        $('#file_year').removeClass('hidden');
        $('#file_poster').removeClass('hidden');
        $('#promo').removeClass('hidden');
        $('#sys').removeClass('hidden');
        $('#size').removeClass('hidden');
        $('#start').removeClass('hidden');
        $('#end').removeClass('hidden');
        $('#time').removeClass('hidden');
        $('#remark').removeClass('hidden');
    }
    function showInputBySelect(id) {
        $('#'+id+'').removeClass('hidden');
    }
    function hideInput() {
        $('#title_content').addClass('hidden');
        $('#channels').addClass('hidden');
        $('#air_dates').addClass('hidden');
        $('#segments').addClass('hidden');
        $('#type_file').addClass('hidden');
        $('#eps').addClass('hidden');
        $('#dur').addClass('hidden');
        $('#file_ext').addClass('hidden');
        $('#res').addClass('hidden');
        $('#m_e').addClass('hidden');
        $('#dub').addClass('hidden');
        $('#file_path').addClass('hidden');
        $('#file_storage').addClass('hidden');
        $('#recieved').addClass('hidden');
        $('#file_year').addClass('hidden');
        $('#file_poster').addClass('hidden');
        $('#promo').addClass('hidden');
        $('#sys').addClass('hidden');
        $('#size').addClass('hidden');
        $('#start').addClass('hidden');
        $('#end').addClass('hidden');
        $('#time').addClass('hidden');

        //reset field to null
        $('#series_size').val('');
        $('#channel').val('');
        $('#air_date').val('');
        $('#segment').val('');
        $('#series_id').val('');
        $('#content_id').val('');
        $('#title_of_content').val('');
        $('#type_of_content').val('');
        $('#type_of_file').val('');
        $('#episode').val('');
        $('#duration').val('');
        $('#file_extension').val('');
        $('#resolution').val('');
        $('#me').val('');
        $('#khmer_dub').val('');
        $('#path').val('');
        $('#storage').val('');
        $('#date_received').val('');
        $('#year').val('');
        $('#poster').val('');
        $('#trailer_promo').val('');
        $('#synopsis').val('');
        $('#file_size').val('');
        $('#start_date').val('');
        $('#end_date').val('');
        $('#period_of_time').val('');
        $('#input_remark').val('');
    }
    function hideInputBySelect(id, input) {
        $('#'+id+'').addClass('hidden');
        //reset field to null
        $('#'+input+'').val('');
    }
    function show(id) {
        $.get('files/' + id +'/show', function (file) {
            $('#frmShowModal').modal('toggle');
            $('#show_file_size').html((file.file_size && file.series_size) ? file.file_size + ' ' + file.series_size : '');
            $('#show_file_id').html(file.file_id);
            $('#show_channel').html(file.channel);
            $('#show_air_date').html(file.air_date);
            $('#show_segment').html(file.segment);
            $('#show_type_of_content').html(file.series.name);
            $('#show_type_of_file').html(file.type_of_file);
            $('#show_espisode').html(file.episode);
            $('#show_duration').html(file.duration);
            $('#show_file_extension').html(file.file_extension);
            $('#show_resolution').html(file.resolution);
            $('#show_me').html(file.me);
            $('#show_khmer_dub').html(file.khmer_dub);
            $('#show_path').html(file.path);
            $('#show_storage').html(file.storage);
            $('#show_date_received').html(file.date_received);
            $('#show_year').html(file.year);
            $('#show_poster').html(file.poster);
            $('#show_trailer_promo').html(file.trailer_promo);
            $('#show_synopsis').html(file.synopsis);
            $('#show_start_date').html(file.start_date);
            $('#show_end_date').html(file.end_date);
            $('#show_period_of_time').html(file.period_of_time);
            $('#show_remark').html(file.remark);
        });
    }

    function edit(id) {
        $.get('files/' + id +'/edit', function (file) {
            $('#fid').val(file[0].id);
            $('#edit_file_id').val(file[0].file_id);
            $('#edit_series_size').val(file[0].series_size);
            $('#edit_series_id').val(file[0].series_id);
            $('#edit_channel').val(file[0].channel);
            $('#edit_air_date').val(file[0].air_date);
            $('#edit_segment').val(file[0].segment);
            $('#edit_content_id').val(file[0].content_id);
            $('#edit_title_of_content').val(file[0].title_of_content);
            $('#edit_type_of_content').val(file[0].type_of_content);
            $('#edit_type_of_file').val(file[0].type_of_file);
            $('#edit_episode').val(file[0].episode);
            $('#edit_duration').val(file[0].duration);
            $('#edit_file_extension').val(file[0].file_extension);
            $('#edit_resolution').val(file[0].resolution);
            $('#edit_me').val(file[0].me);
            $('#edit_khmer_dub').val(file[0].khmer_dub);
            $('#edit_path').val(file[0].path);
            $('#edit_storage').val(file[0].storage);
            $('#edit_date_received').val(file[0].date_received);
            $('#edit_year').val(file[0].year);
            $('#edit_poster').val(file[0].poster);
            $('#edit_trailer_promo').val(file[0].trailer_promo);
            $('#edit_synopsis').val(file[0].synopsis);
            $('#edit_file_size').val(file[0].file_size);
            $('#edit_start_date').val(file[0].start_date);
            $('#edit_end_date').val(file[0].end_date);
            $('#edit_period_of_time').val(file[0].period_of_time);
            $('#edit_remark').val(file[0].remark);
            $('#frmEditModal').modal('toggle');
        });

        $('#frmEdit').submit(function(e) {
            e.preventDefault();
            let fid                     = $('#fid').val()
            let series_size             = $('#edit_series_size').val();
            let series_id               = $('#edit_series_id').val();
            let channel                 = $('#edit_channel').val();
            let air_date                = $('#edit_air_date').val();
            let segment                 = $('#edit_segment').val();
            let content_id              = $('#edit_content_id').val();
            let title_of_content        = $('#edit_title_of_content').val();
            let type_of_content         = $('#edit_type_of_content').val();
            let type_of_file            = $('#edit_type_of_file').val();
            let episode                 = $('#edit_episode').val();
            let duration                = $('#edit_duration').val();
            let file_extension          = $('#edit_file_extension').val();
            let resolution              = $('#edit_resolution').val();
            let me                      = $('#edit_me').val();
            let khmer_dub               = $('#edit_khmer_dub').val();
            let path                    = $('#edit_path').val();
            let storage                 = $('#edit_storage').val();
            let date_received           = $('#edit_date_received').val();
            let year                    = $('#edit_year').val();
            let poster                  = $('#edit_poster').val();
            let trailer_promo           = $('#edit_trailer_promo').val();
            let synopsis                = $('#edit_synopsis').val();
            let file_size               = $('#edit_file_size').val();
            let start_date              = $('#edit_start_date').val();
            let end_date                = $('#edit_end_date').val();
            let period_of_time          = $('#edit_period_of_time').val();
            let remark                  = $('#edit_remark').val();
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
                url: "{{ route('admin.files.update') }}",
                data: {
                    id: fid,
                    _token:    _token,
                    series_size:    series_size,
                    channel:    channel,
                    air_date:    air_date,
                    segment:    segment,
                    series_id:    series_id,
                    title_of_content:    title_of_content,
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
                        $('#frmEditModal').modal('toggle');
                        Toast.fire({
                            icon: 'info',
                            title: 'File ID is Updated!'
                        })
                        setTimeout(function () {
                            location.reload(); //Refresh page
                        }, 1500);
                    }
                },
                error: function (response) {
                    $('#type_of_content_error').text('The type of content are required. Please select!');
                    if(response.responseJSON.errors.series_id) {$('#series_id').addClass('is-invalid')};
                }
            });

        })

    }
</script>
<script>
    $(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                $("#s_time").removeClass("hidden");
            }
            else if($(this).prop("checked") == false){
                $("#start_time").val('');
                $("#s_time").addClass("hidden");
            }
        });
    });
</script>