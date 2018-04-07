$(function () {
	$('#example1').DataTable({
	'paging'      : true,
	'lengthChange': true,
	'searching'   : true,
	'ordering'    : true,
	'info'        : true,
	'autoWidth'   : false
	});
});

$(document).ready(function() {
    $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "users/table",
         columns: [
         	{ "data": "id" },
            { "data": "name" },
            { "data": "email" },
        ],
        "columnDefs": [
            {
                "targets": [ 3 ],
                "data":"id", "render": function(data,type,full,meta)
                { 
                	return '<button class="btn btn-sm btn-success btn-primary" data-id='+data+'>Edit</button><button class="btn btn-sm btn-danger btn-primary" data-id='+data+'>Delete</button>';
                }
            }
        ],
    });	
});

