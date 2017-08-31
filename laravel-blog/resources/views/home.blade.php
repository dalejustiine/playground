@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
            </div> <!-- end .flash-message -->

            <div class="panel panel-default">              
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>You are logged in!</p>
                    <p>Click the create post button to start creating your post.</p>
                    <hr>
                    <a href="{{ route('post.create') }}" class="btn btn-success">Create Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
