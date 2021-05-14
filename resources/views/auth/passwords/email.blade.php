@extends('layouts.app')

@section('content')
<div class="card-body">
    <h1 class="col-md-6 mb-4">Reset Password</h1>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="input-group mb-3">
            <div class="col-md-12">
                <input id="email" type="email" placeholder="Emain address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="input-group mb-3">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
            
        </div>
    </form>
</div>
@endsection
