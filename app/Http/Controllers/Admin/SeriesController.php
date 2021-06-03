<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Models\Series;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class SeriesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('series_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $series = Series::all();
        $serie =  [];

        return view('admin.files.series', compact('series', 'serie'));
    }

    public function edit($id)
    {
        abort_if(Gate::denies('series_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $series = Series::all();

        $serie = Series::find($id);

        return view('admin.files.series', compact('series', 'serie'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required',
        ]);

        Series::create($validated);

        return back()->with('success', 'Series Created Successfully!');
    }

    public function update(Request $request, Series $series)
    {
        $validated = $request->validate([
            'name'      => 'required',
        ]);

        $series->update($validated);

        return redirect()->route('admin.series.index')->with('success', 'Series Update Successfully!');
    }
}
