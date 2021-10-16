var table = $('#tbInventarioMostrar').DataTable( {


        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        dom: 'Blfrtip',
        buttons: [
            'copy', 'excel', 'pdf'
        ],
        "ajax": "./api/v1/ControlDeInventarioFarmacia.php",
        "columns": [

            { "data": "AlmacNumRenglon" },
            { "data": "AlmacNumCodInsumo" },
            { "data": "AlmacStrNomInsumo" },
            { "data": "AlmacStrCaractInsu" },
            { "data": "FarmNumIdKardexFarm" },
            { "data": "FarmStrLote" },
            { "data": "FarmDateVencimiento" },
            { "data": "FarmNumPreUnExist" },
            { "data": "FarmNumCantidad" }
     
        ]
        
    } );

  /*  table.buttons().container()
    .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );

    //boton para general excel
    $('#generarExcel').on('click',requestgenerarExcel);*/
    
    function requestgenerarExcel() {
    tableToExcel('tbInventarioMostrar', 'Requisicion Medicamentos y Productos Afines');
}