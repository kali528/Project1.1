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
              			<h3 class="box-title">Edit User</h3>
            		</div>
            		<!-- /.box-header -->
            		<div class="box-body">
              			<div class="col-md-8" style="margin: 30px;">
							<!-- Horizontal Form -->
							<div class="box box-info">
								<div class="box-header with-border">
									<h3 class="box-title">User ID: {{$user[0]->id}}</h3>
								</div>
								<!-- /.box-header -->
								<!-- form start -->
								{{ Form::open(array('class'=>'form-horizontal', 'metod'=>'post', 'url' => 'users/'.$user[0]->id)) }}
								<div class="box-body">
									<div class="form-group">
										{{ Form::label('name', 'name', array('class'=>'col-sm-2 control-label')) }}
										<div class="col-sm-10">
											{{ Form::text('name', $user[0]->name, array('class'=>'form-control', 'id'=>'name', 	'name'=>'name', 'placeholder'=>'name')) }}
										</div>
									</div>

									<div class="form-group">
										{{ Form::label('email', 'email', array('class'=>'col-sm-2 control-label')) }}
										<div class="col-sm-10">
											{{ Form::text('email', $user[0]->email, array('class'=>'form-control', 'id'=>'email', 	'email'=>'email', 'placeholder'=>'email')) }}
										</div>
									</div>
									<div class="form-group">
										{{ Form::submit('Edit', array('class' => 'btn btn-md btn btn-primary pull-right', 'id' => 'edit-user')) }}
									</div>
								</div>
								<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
								{{ Form::close() }}
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