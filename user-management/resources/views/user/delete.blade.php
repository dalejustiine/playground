@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-danger">
                <div class="panel-heading">Delete User</div>

                <div class="panel-body">
                	<ul class="list-group">
                        <p>Are you sure you want to delete user '{{ $user->name }}'?</p>
                         {!! Form::open(array('url' => '/user/' . $user->id, 'onsubmit' => 'return confirm("Are you sure?")')) !!}
                            {!! Form::hidden('_method', 'DELETE') !!}
                            {!! Form::submit('Yes I\'m sure. Delete', array('class' => 'btn btn-danger')) !!}
                            <a href="{{ route('user.index') }}" class="btn btn-primary">Cancel</a>
                        {!! Form::close() !!}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection