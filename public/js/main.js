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
                	return '<button class="btn btn-sm btn btn-primary" data-id='+data+' style="margin:1px">View</button><button class="btn btn-sm btn-success btn-primary" data-id='+data+' style="margin:1px">Edit</button><button class="btn btn-sm btn-danger btn-primary" data-id='+data+' style="margin:1px">Delete</button>';
                }
            }
        ],
    });	
});

$(document).ready(function() {
    var table = $('#example').DataTable();
     
    $('#example tbody').on('click', '.btn-danger', function () {
        var data = table.row( $(this).parents('tr') ).data();
 		var $modal = $("#modal-danger");
 		$modal.find('.modal-title').html('Remove User');
 		$modal.find('.modal-body').children().html('If choose "APPLY" the user '+data.name+' will be deleted!');
 		$modal.find('.modal-footer').children('button:nth-child(2)').attr('id', 'delete-user');
 		$modal.find('.modal-footer').children('button:nth-child(2)').text('Applay');
 		$modal.modal('show');
 		$('#delete-user').on('click', function(){
 			alert('Deleted');
 			$modal.modal('hide');
 		});
    });
} );

