<div class="btn-group">
    <button class="btn btn-primary btn-sm ml-3 dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add input</button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin: 0px;">
        <div class="btn-group col-md-12" role="group" aria-label="Basic example">
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('title_content')">Title of content</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('type_file')">Type of file</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('eps')">Episode</button>
        </div>
        <div class="btn-group col-md-12" role="group" aria-label="Basic example">
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('dur')">Duration</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('file_ext')">Extension</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('res')">Resolution</button>
        </div>
        <div class="btn-group col-md-12" role="group" aria-label="Basic example">
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('m_e')">M/E</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('dub')">Khmer Dubbing</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('file_year')">Year</button>
        </div>
        <div class="btn-group col-md-12" role="group" aria-label="Basic example">
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('file_poster')">Poster</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('promo')">Trailer & Promo</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('file_path')">Path</button>
        </div>
        <div class="btn-group col-md-12" role="group" aria-label="Basic example">
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('file_storage')">Storage</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('recieved')">Date Received</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('sys')">Synopsis</button>
        </div>
        <div class="btn-group col-md-12" role="group" aria-label="Basic example">
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('size')">File size</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('start')">Start Date</button>
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('end')">End Date</button>
        </div>
        <div class="btn-group col-md-12" role="group" aria-label="Basic example">
            <button class="dropdown-item col-md-4 btn-sm" type="button" onclick="showInputBySelect('time')">Period of Time</button>
        </div>

        <div class="dropdown-divider"></div>
        <button class="dropdown-item" type="button" onclick="showInput()">Show all</button>
        <button class="dropdown-item" type="button" onclick="hideInput()">Hide unnecessary</button>
    </div>
</div>