<?php

namespace App\Http\Controllers\Admin;

use App\Models\Day;
use App\Models\File;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchedulesController extends Controller
{
    public function index()
    {
        $schedules = Schedule::with(['day', 'files'])->get(); 

        return view('admin.schedules.index', compact('schedules'));
    }

    public function create()
    {
        $days = Day::all();

        $files = File::all();

        return view('admin.schedules.create', compact('days', 'files'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'note' => 'required',
            'date' => 'required',
            'day_id' => 'required',
        ]);

        $schedule = Schedule::create($validated);

        $schedule->files()->attach($request->file_id);
        
        return $schedule;
    }

    public function edit(Schedule $schedule)
    {
        $days = Day::all();

        $files = File::all();

        return view('admin.schedules.edit', compact('days', 'files', 'schedule'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $validated = $request->validate([
            'note' => 'required',
            'date' => 'required',
            'day_id' => 'required',
        ]);

        $schedule->update($validated);

        $schedule->files()->attach($request->file_id);
    }

    public function destroy()
    {

    }

    public function massDestroy()
    {

    }

    public function sort()
    {
        return view('admin.schedules.sort');
    }

    public function show()
    {
        //
    }
}
