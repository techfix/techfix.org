@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a New Issue</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('issues.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label text-md-right">{{ __('Issue Title') }}</label>

                            <div class="col-md-10">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="issue" class="col-sm-2 col-form-label text-md-right">{{ __('Issue') }}</label>

                            <div class="col-md-10">
                                <textarea rows="10" id="issue" name="issue" class="form-control{{ $errors->has('issue') ? ' is-invalid' : '' }}" required>{{ old('issue') }}</textarea>

                                @if ($errors->has('issue'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('issue') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0 clearfix">
                            <div class="col-md-12 text-right">
                                <a href="{{ route('issues.index') }}" class="btn btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Issue') }}
                                </button>
                            </div>
                        </div>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
