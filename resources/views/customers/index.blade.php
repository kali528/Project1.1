@extends('layouts.app')
@section('content')
<div class="box-header with-border" style="background-color: #222d32; color: #b8c7ce">
	<h3 class="box-title"><i class="fa fa-briefcase"></i> <span>Customers</span></h3>

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
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>EIK</th>
                  <th>Name</th>
                  <th>First Name</th>
                  <th>Second Name</th>
                  <th>Last Name</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                	<tr>
                		<td>" $user->name"</td>
                		<td>" $user->email"</td>
                    <td>" $user->name"</td>
                    <td>" $user->email"</td>
                    <td>" $user->name"</td>
                    <td>" $user->email"</td>
                    <td>" $user->name"</td>
                    <td>" $user->email"</td>
                    <td>" $user->name"</td>
                		<td>
                			<button class="btn btn-success btn-primary">edit</button>
                			<button class="btn btn-danger btn-primary">delete</button>
                		</td>
                	</tr>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                </tr>
                </tfoot>
              </table>
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
<!-- /.box-footer-->
@endsection
