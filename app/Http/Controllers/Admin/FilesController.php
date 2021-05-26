<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Models\File;
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

        $files = File::all();

        return view('admin.files.index', compact('files'));
    }

    public function create()
    {
        abort_if(Gate::denies('file_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.files.create');
    }

    public function store(StoreFileRequest $request)
    {
        $file = File::create($request->all());

        return redirect()->route('admin.files.index')->with('success', 'File created successfully...!');
    }

    public function edit(File $file)
    {
        abort_if(Gate::denies('file_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.files.edit', compact('file'));
    }

    public function update(UpdateFileRequest $request, File $file)
    {
        $file->update($request->all());

        return redirect()->route('admin.files.index')->with('success', 'File edited successfully...!');
    }

    public function show(File $file)
    {
        abort_if(Gate::denies('file_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.files.show', compact('file'));
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
