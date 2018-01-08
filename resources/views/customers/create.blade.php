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
								<form class="form-horizontal" method="post" action="{{ action('CustomerController@store') }}" accept-charset="UTF-8">
									<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
							  		<div class="box-body">
							    		<div class="form-group">
									    	<label for="name" class="col-sm-2 control-label">Company name*</label>
									    	<div class="col-sm-10">
									        	<input type="text" class="form-control" id="name" name="name" placeholder="Name">
									      	</div>
							    		</div>
							    		<div class="form-group">
									    	<label for="eik" class="col-sm-2 control-label">EIK*</label>
									    	<div class="col-sm-10">
									        	<input type="text" class="form-control" id="eik" placeholder="EIK">
									      	</div>
							    		</div>
							    		<div class="form-group">
									    	<label for="bulstad" class="col-sm-2 control-label">Bulstad</label>

									    	<div class="col-sm-10">
									        	<input type="text" class="form-control" id="bulstad" name="bulstad" placeholder="bulstad">
									      	</div>
							    		</div>
							    		<div class="form-group">
									    	<label for="owner" class="col-sm-2 control-label">Owner</label>
									    	<div class="col-sm-10">
									        	<input type="text" class="form-control" id="owner" name="owner" placeholder="Owner">
									      	</div>
							    		</div>
							    		<div class="form-group">
									    	<label for="country" class="col-sm-2 control-label">Country</label>
									    	<div class="col-sm-10">
									        	<input type="text" class="form-control" id="country" name="country" placeholder="Country">
									      	</div>
							    		</div>
							    		<div class="form-group">
									    	<label for="state" class="col-sm-2 control-label">State</label>
									    	<div class="col-sm-10">
									        	<input type="text" class="form-control" id="state" name="state" placeholder="State">
									      	</div>
							    		</div>
							    		<div class="form-group">
									    	<label for="region" class="col-sm-2 control-label">Region</label>
									    	<div class="col-sm-10">
									        	<input type="text" class="form-control" id="region" name="region" placeholder="Region">
									      	</div>
							    		</div>
							    		<div class="form-group">
									    	<label for="city" class="col-sm-2 control-label">City</label>
									    	<div class="col-sm-10">
									        	<input type="text" class="form-control" id="city" name="city" placeholder="City">
									      	</div>
							    		</div>
							    		<div class="form-group">
									    	<label for="pk" class="col-sm-2 control-label">Poste Code</label>
									    	<div class="col-sm-10">
									        	<input type="text" class="form-control" id="pk" name="pk" placeholder="Poste code">
									      	</div>
							    		</div>
							    		<div class="form-group">
									    	<label for="phone" class="col-sm-2 control-label">Phone</label>
									    	<div class="col-sm-10">
									        	<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
									      	</div>
							    		</div>
							    		<div class="form-group">
									    	<label for="phone" class="col-sm-2 control-label">email</label>
									    	<div class="col-sm-10">
									        	<input type="text" class="form-control" id="email" name="email" placeholder="Email">
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