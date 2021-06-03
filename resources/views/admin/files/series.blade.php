@extends('layouts.admin')

@section('content')
@can($serie == null ? 'series_create' : 'series_edit')
<div class="card">
    <div class="card-header">
        {{ $serie == null ? 'Create new series' : 'Update existed series' }}
    </div>

    <div class="card-body">
        <form action="{{ $serie == null ? route('admin.series.store') : route('admin.series.update', $serie->id) }}" method="POST">
            @csrf
            @if (isset($serie->id))
                @method('PATCH')
            @endif
            <div class="form-group">
                <label for="name" required>Name</label>
                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                    name="name" value="{{ $serie != null ? old('name', $serie->name) : '' }}"/>
                @if($errors->has('name'))
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-sm" type="submit">{{ $serie == null ? 'Create' : 'Save and Change' }}</button>
            </div>
        </form>
    </div>
</div>
@endcan

<div class="card">
    <div class="card-header">
        Seires ID
    </div>

    <div class="card-body">
        <ul class="list-group">
            @foreach ($series as $serie)
                <li class="list-group-item col-md-8">Name: {{ $serie->name }} - Prefix: {{ $serie->id }}
                    @can('series_edit')
                        <a class="btn btn-info btn-sm float-right" href="{{ route('admin.series.edit', $serie->id) }}">Edit</a>
                    @endcan
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
