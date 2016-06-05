@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if(Auth::user()->hasRole('Admin'))
                        <div class="">AdminQAQ</div>
                    @elseif(Auth::user()->hasRole('Author'))
                        <div class="">AuthorXDD</div>
                    @elseif(Auth::user()->hasRole('User'))
                        <div class="">User0.0.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
