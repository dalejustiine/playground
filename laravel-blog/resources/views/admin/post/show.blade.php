@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Show Post</div>

                <div class="panel-body">
                	<ul class="list-group">
                        <li class="list-group-item">
                            <strong>Title:</strong> 
                            {{ $post->title }}
                        </li>
                        <li class="list-group-item">
                            <p><strong>Content:</strong></p>
                            {!! $post->content !!}
                        </li>
                    </ul>
                    <a href="{{ route('post.index') }}" class="btn btn-info" >Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection