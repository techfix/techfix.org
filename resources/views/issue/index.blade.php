@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header clearfix">
                    <h5 class="float-left m-0 pt-2">Issues</h5>
                    <a href="{{ route('issues.create') }}" class="btn btn-primary float-right">+ New Issue</a>
            </div>

                <div class="card-body p-0">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if($issues->count())
                        <table class="table table-hover">
                            <tbody class="">
                                @foreach($issues as $issue)
                                    <tr class="">
                                        <td class="p-0">
                                            <a class="d-block p-4" href="{{ route('issues.show', $issue->uuid) }}">
                                                {{ $issue->title }}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <center class="p-4">There are no issues.</center>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Tags</div>
                <div class="card-body">
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
