@extends('layouts.app')
@section('content')
<div class="box-header with-border" style="background-color: #222d32; color: #b8c7ce">
	<h3 class="box-title"><i class="fa fa-users"></i> <span>Users</span></h3>

	<div class="box-tools pull-right">
		<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
				title="Collapse">
		  <i class="fa fa-minus"></i></button>
		<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
		<i class="fa fa-times"></i></button>
	</div>
</div>
<div class="box-body" style="border:1px solid #b8c7ce;">
	<div class="row">
		<div class="col-xs-12">
			 <div class="box">
			<div class="box-header">
			  <h3 class="box-title">Data Table With Full Features</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div id="body-content">
				
				 	<table id="example" class="display" width="100%" cellspacing="0">
				        <thead>
				            <tr>
				            	<th>ID</th>
				                <th>Name</th>
					  			<th>Email</th>
					  			<th>Actions</th>
				            </tr>
				        </thead>
					</table>
					
				</div>			  
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->
		</div>
	</div>
</div>
<!-- /.box-body -->
<div class="box-footer" style="background-color: #222d32; color: #b8c7ce;">
  Users
</div>
<!-- /.box-footer-->
@endsection
