<?php

namespace App\Observers;

use App\Models\File;

class FileUpdateObserver
{
    public function creating(File $file)
    {
        $file->content_id = File::where('series_id', $file->series_id)->max('content_id') + 1;
        $file->file_id = $file->series_id .''. str_pad($file->content_id, 5, '0', STR_PAD_LEFT);
    }

    public function updating(File $file)
    {
        $content_id = File::where('series_id', $file->series_id)->max('content_id') + 1;
        $file->content_id = $content_id;
        $file_id = $file->series_id .''. str_pad($file->content_id, 5, '0', STR_PAD_LEFT);
        $file->file_id = $file_id;
    }
}
