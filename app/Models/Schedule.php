<?php

namespace App\Models;

use App\Models\Day;
use App\Models\File;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'schedules';

    protected $fillable = [
        'note', 'day', 'order', 'date', 'file_id'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function day()
    {
        return $this->beLongsTo(Day::class);
    }

    public function files()
    {
        return $this->beLongsToMany(File::class, 'file_schedules')->withPivot(['file_id','schedule_id', 'order']);;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d');
    }
}
