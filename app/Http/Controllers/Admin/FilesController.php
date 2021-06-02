<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Models\File;
use App\Models\Series;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFileRequest;
use App\Http\Requests\UpdateFileRequest;
use App\Http\Requests\MassDestroyFileRequest;
use Symfony\Component\HttpFoundation\Response;

class FilesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('file_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
 
        $files = File::with('series')->get();

        $series = Series::all()->pluck('prefix', 'name');

        return view('admin.files.index', compact('files', 'series'));
    }

    public function store(StoreFileRequest $request)
    {
        return $file = File::create($request->all());;
    }

    public function edit(File $file)
    {
        abort_if(Gate::denies('file_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $series = Series::all()->pluck('prefix', 'name');

        return response()->json([
            $file, $series
        ]);
    }

    public function update(UpdateFileRequest $request)
    {
        abort_if(Gate::denies('file_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $file = File::with('series')->findOrfail($request->id);
        
        return $file->update($request->all());
    }

    public function show($id)
    {
        abort_if(Gate::denies('file_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $file = File::with('series')->findOrfail($id);

        return response()->json($file);
    }

    public function destroy(File $file)
    {
        abort_if(Gate::denies('file_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $file->delete();

        return back();
    }

    public function massDestroy(MassDestroyFileRequest $request)
    {
        File::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
