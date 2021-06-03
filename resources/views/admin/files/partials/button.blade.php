<div class="btn-group">
    <button class="btn btn-primary btn-sm ml-3 dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add input</button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin: 0px;">
        <div class="btn-group col-md-12" role="group" aria-label="Basic example">
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('segments')">{{ trans('cruds.file.fields.segment') }}</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('channel')">{{ trans('cruds.file.fields.channel') }}</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('air_dates')">{{ trans('cruds.file.fields.air_date') }}</button>
        </div>
        <div class="btn-group col-md-12" role="group" aria-label="Basic example">
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('title_content')">{{ trans('cruds.file.fields.title_of_content') }}</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('type_file')">{{ trans('cruds.file.fields.type_of_file') }}</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('eps')">{{ trans('cruds.file.fields.episode') }}</button>
        </div>
        <div class="btn-group col-md-12" role="group" aria-label="Basic example">
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('dur')">{{ trans('cruds.file.fields.duration') }}</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('file_ext')">{{ trans('cruds.file.fields.file_extension') }}</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('res')">{{ trans('cruds.file.fields.resolution') }}</button>
        </div>
        <div class="btn-group col-md-12" role="group" aria-label="Basic example">
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('m_e')">{{ trans('cruds.file.fields.me') }}</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('dub')">{{ trans('cruds.file.fields.khmer_dub') }}</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('file_year')">Year</button>
        </div>
        <div class="btn-group col-md-12" role="group" aria-label="Basic example">
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('file_poster')">{{ trans('cruds.file.fields.poster') }}</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('promo')">{{ trans('cruds.file.fields.trailer_promo') }}</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('file_path')">{{ trans('cruds.file.fields.path') }}</button>
        </div>
        <div class="btn-group col-md-12" role="group" aria-label="Basic example">
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('file_storage')">{{ trans('cruds.file.fields.storage') }}</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('recieved')">{{ trans('cruds.file.fields.date_received') }}</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('sys')">{{ trans('cruds.file.fields.synopsis') }}</button>
        </div>
        <div class="btn-group col-md-12" role="group" aria-label="Basic example">
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('size')">{{ trans('cruds.file.fields.file_size') }}</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('start')">{{ trans('cruds.file.fields.start_date') }}</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('end')">{{ trans('cruds.file.fields.end_date') }}</button>
        </div>
        <div class="btn-group col-md-12" role="group" aria-label="Basic example">
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('time')">{{ trans('cruds.file.fields.period_of_time') }}</button>
        </div>

        <div class="dropdown-divider"></div>
        <button class="dropdown-item" type="button" onclick="showInput()">Show all</button>
        <button class="dropdown-item" type="button" onclick="hideInput()">Hide unnecessary</button>
    </div>
</div>