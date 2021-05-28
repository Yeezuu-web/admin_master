<?php

namespace App\Models;

use DateTimeInterface;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'files';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'content_id',
        'title_of_content',
        'type_of_content',
        'type_of_file',
        'episode',
        'duration',
        'file_extension',
        'resolution',
        'me',
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
        'remark',
        'series_id',
    ];

    public function schedules()
    {
        return $this->beLongsToMany(Schedule::class, 'file_schedules');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d');
    }

    public function series(){
        return $this->beLongsTo(Series::class);
    }
}
