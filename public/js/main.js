// $(function () {
// 	$('#example1').DataTable({
// 	'paging'      : true,
// 	'lengthChange': true,
// 	'searching'   : true,
// 	'ordering'    : true,
// 	'info'        : true,
// 	'autoWidth'   : false
// 	});
// });

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
                	return '<button class="btn btn-sm btn btn-primary" data-id='+data+' style="margin:1px">View</button><a href="/users/'+data+'/edit" class="btn btn-sm btn-success btn-primary" data-id='+data+' style="margin:1px">Edit</a><button class="btn btn-sm btn-danger btn-primary" data-id='+data+' style="margin:1px">Delete</button>';
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
 		$modal.attr('class', 'modal modal-danger fade');
 		$modal.find('.modal-title').html('Remove User');
 		$modal.find('.modal-body').children().html('If choose "Confirm" the user '+data.name+' will be deleted!');
 		$modal.find('.modal-footer').children('button:nth-child(1)').text('Dismiss');
 		$modal.find('.modal-footer').children('button:nth-child(2)').text('Confirm');
 		$modal.modal('show');
    });

   //  $('#example tbody').on('click', '.btn-success', function () {
   //      var data = table.row( $(this).parents('tr') ).data();
 		// var $modal = $("#modal-danger");
 		// $modal.attr('class', 'modal modal-success fade');
 		// $modal.find('.modal-title').html('Remove User');
 		// $modal.find('.modal-body').children().html('If choose "Confirm" the user '+data.name+' will be deleted!');
 		// $modal.find('.modal-footer').children('button:nth-child(1)').text('Dismiss');
 		// $modal.find('.modal-footer').children('button:nth-child(2)').text('Confirm');
 		// $modal.modal('show');
   //  });

    $('#delete-user').on('click', function(){
 		alert('Deleted');
 		var $modal = $("#modal-danger");
 		$modal.modal('hide');
 	});

 	$('#edit-user').on('click', function(){
 		alert('asd');
 	});
} );

