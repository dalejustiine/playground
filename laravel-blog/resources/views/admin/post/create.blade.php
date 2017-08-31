@extends('layouts.admin')

@section('scripts')
	<script src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
    	var options = {
		    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
		    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{ csrf_token() }}',
		    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
		    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{ csrf_token() }}'
		};
        CKEDITOR.replace( 'content-editor', options );
        CKEDITOR.config.extraPlugins = 'autogrow';
    </script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Post</div>

                <div class="panel-body">
                	@if (count($errors) > 0)
					    <div class="alert alert-danger alert-dismissable">
					        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					        <strong>Whoops! Something went wrong!</strong>
					        <br><br>
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
                    {!! Form::open(['route' => ['post.store']]) !!}
                    	<div class="fom-group">
                    		{{ Form::label('title', 'Title') }}
                    		{{ Form::text('title', Input::old('title'), ['class' => 'form-control']) }}
                    	</div>
                    	<div class="fom-group">
                    		{{ Form::label('content', 'Content') }}
                    		{{ Form::textarea('content', Input::old('content'), array('class' => 'form-control', 'rows' => '10', 'id' => 'content-editor')) }}
                    	</div>
                    	<div class="form-group">
                            {!! Form::label('status', 'Status') !!}
                            {!! Form::select('status', ['1' => 'PUBLISH', '2' => 'DRAFT'], null, array('class' => 'form-control')) !!}
                        </div>
                    	<br>
                    	<div class="fom-group">                    		
                    		{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                    	</div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection