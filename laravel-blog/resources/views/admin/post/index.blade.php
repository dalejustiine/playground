@extends('layouts.admin')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('/datatables-bs/css/dataTables.bootstrap.css') }}"/>
@endsection

@section('scripts')
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.15/datatables.min.js"></script>
	<script type="text/javascript" src="{{ asset('/datatables-bs/js/dataTables.bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/moment/min/moment.min.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function() {
	        var table = $('#dataTable').DataTable({
	            "responsive": true,
	            "order": [],
	            "processing": true,
	            "serverSide": true,
	            "ajax": '{{ url('/admin/api/post') }}',
	            "columns": [
	                {
	                    "width": "30%",
	                    "render": function( data ){
	                        return data.replace(/(<([^>]+)>)/ig,"");
	                    }
	                },
	                { "width": "10%" },
	                {
	                    "width": "15%",
	                    "render": function( data ){
	                        var date = moment(data).format("ddd, MMM DD, YYYY hh:mm A");
	                        return date;
	                    }
	                },
	                {
	                    "width": "16%",
	                    "sortable": false,
	                    "render": function( data ){
	                        var url = "{{ url('/admin/post') }}/" + data;
	                        return "<a href='"+ url +"' class='btn btn-warning btn-xs'><i class='fa fa-eye fa-fw'></i> View</a> " +
	                        "<a href='"+ url +"/edit' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o fa-fw'></i> Edit</a> " +
	                        "<a href='"+ url +"/delete' class='btn btn-danger btn-xs'><i class='fa fa-trash-o fa-fw'></i> Delete</a>";
	                    }
	                }
	            ]
	        });
	    });
	</script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Posts</div>

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
                    
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTable">
	                    <thead>
	                        <tr>
	                            <th>Title</th>
	                            <th>Status</th>
	                            <th>Date Created</th>
	                            <th>Actions</th>
	                        </tr>
	                    </thead>
	                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection