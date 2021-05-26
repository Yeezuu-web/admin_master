<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $table = "files";

    protected $fillable = [
        'content_id',
        'title_of_content',
        'type_of_content',
        'type_of_file',
        'episode',
        'duration',
        'file_extension',
        'resolution',
        'm-e',
        'khmer_dub',
        'path',
        'storage',
        'date_received',
        'year',
        'poster',
        'trailer_promo',
        'synopsis',
        'file_size',
        'start_date',
        'end_date',
        'period_of_time',
        'remark'
    ];
}
