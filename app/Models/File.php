<?php

namespace App\Models;

use Carbon\Carbon;
use \DateTimeInterface;
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
        'date_received',
        'start_date',
        'end_date',
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

    public function getDateReceivedAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateReceivedAttribute($value)
    {
        $this->attributes['date_received'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getStartDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getEndDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d-m-Y H:i:s');
    }

    public function schedules()
    {
        return $this->beLongsToMany(Schedule::class, 'file_schedules');
    }

    public function series(){
        return $this->beLongsTo(Series::class);
    }

    
}
