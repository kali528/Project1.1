@extends('layouts.app')
@section('content')
    <div class="box-header with-border" style="background-color: #222d32; color: #b8c7ce">
		<h3 class="box-title"><i class="fa fa-briefcase"></i> <span>Customers</span></h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fa fa-times"></i>
			</button>
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
              			<div class="col-md-8" style="margin: 30px;">
							<!-- Horizontal Form -->
							<div class="box box-info">
								<div class="box-header with-border">
									<h3 class="box-title">Horizontal Form</h3>
								</div>
								<!-- /.box-header -->
								<!-- form start -->
								<form class="form-horizontal" method="post" action="{{ action('UserController@store') }}" accept-charset="UTF-8">
									<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
							  		<div class="box-body">
							  			<div class="form-group">
									    	<label for="name" class="col-sm-3 control-label">name</label>
									    	<div class="col-sm-9">
									        	<input type="9" class="form-control" id="name" name="name" placeholder="Name">
									      	</div>
							    		</div>
							    		<div class="form-group">
									    	<label for="email" class="col-sm-3 control-label">email</label>
									    	<div class="col-sm-9">
									        	<input type="text" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off">
									      	</div>
							    		</div>
							    		<div class="form-group">
									    	<label for="password" class="col-sm-3 control-label">password</label>
									    	<div class="col-sm-9">
									        	<input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
									      	</div>
							    		</div>
							    		<div class="form-group">
									    	<label for="password_confirm" class="col-sm-3 control-label">confirm password</label>
									    	<div class="col-sm-9">
									        	<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Password confirm" autocomplete="off">
									      	</div>
							    		</div>
							  		</div>
							  		<!-- /.box-body -->
							  		<div class="box-footer">
							    		<button type="submit" class="btn btn-default">Cancel</button>
							    		<button type="submit" class="btn btn-info pull-right">Create</button>
							  		</div>
							  		<!-- /.box-footer -->
								</form>
							</div>
							<!-- /.box -->    
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
  		Customers
	</div>
@endsection