$(document).ready( function () {
    var table = $('#dataTable').DataTable( {
       "processing":true,
        "serverSide":true,
        "order":[],
        "ajax":{
           url:"<?php echo base_url(). 'catalog/ajax'?>",
            type:"POST"
        },
        "columnDefs":[{
           "target":[0,3,4],
           "orderable":false

        }]
    } );

    setInterval( function () {
        table.ajax.reload( null, false ); // user paging is not reset on reload
    }, 30000 );
} );