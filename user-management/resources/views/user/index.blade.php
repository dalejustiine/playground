@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/datatables-bs/css/dataTables.bootstrap.css') }}"/>
@endsection

@section('js')
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
	            "ajax": '{{ route('user.getall') }}',
	            "columns": [	                
	                { "width": "20%" },
	                { "width": "20%" },
	                {
	                    "width": "16%",
	                    "sortable": false,
	                    "render": function( data ){
	                        var url = "{{ url('/user') }}/" + data;
	                        return "<a href='"+ url +"/delete' class='btn btn-danger btn-xs'><i class='fa fa-trash-o fa-fw'></i> Delete</a>";
                            //"<a href='"+ url +"' class='btn btn-warning btn-xs'><i class='fa fa-eye fa-fw'></i> View</a> " +
	                        //"<a href='"+ url +"/edit' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o fa-fw'></i> Edit</a> " +
	                        
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
                <div class="panel-heading">Users</div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTable">
	                    <thead>
	                        <tr>
	                            <th>Name</th>
	                            <th>Email</th>
	                            <th>Status</th>
	                        </tr>
	                    </thead>
	                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
