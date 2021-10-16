$('#tbInventarioMostrar').DataTable({

    destroy: true,
    "oSearch": {"bSmart": false,
        "bRegex": true,
        "sSerach": ""
    },
    dom: 'Blfrtip',
    buttons: ['excel',
        {   extend: 'pdfHtml5',
            orientation: 'landscape',
            text : '<i class="fa fa-file-pdf-o"> PDF</i>',
            pageSize: 'LEGAL',
            messageTop: 'Message Text',
            exportOptions: {
            columnsCenter: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]}
            },

    ],
    "ajax":{
        "method": "GET",
        "url": "./api/v1/controlDeInventario.php"
    },
    columnDefs: [
        {className: "dt-center", targets: [0, 1, 2, 4, 5, 6, 7, 8, 9, 10, 11, 12],},
    ],
    'columns': [
        { "data": "AlmacNumRenglon" },
        { "data": "AlmacNumCodInsumo"},
        { "data": "AlmacStrNomInsumo"},
        { "data": "AlmacStrCaractInsu" },
        { "data": "AlmacStrPresentInsu"},
        { "data": "AlmacStrCantYUnidInsu" },
        { "data": "AlmacNumIdKardex" },
        { "data": "Almacén" },
        { "data": "Nomen" },
        { "data": "AlmacStrLote" },
        { "data": "AlmacDateVenci" },
        { "data": "AlmacNumPreUnExist" },
        { "data": "AlmacNumCantidad" },
        { "data": "ConteoFecha"/*,"visible":false */},

    ],
        fnRowCallback: function(row, data,) {

            //var conteo = {columna_id:13,number:data.ConteoFecha};
            //console.log(conteo)
            // var entradaalmuerzo = {columna_id:5,texto:data.EntradaAlmuerzo};
           // $.each( conteo, function() {
var resultado;
console.log(data.ConteoFecha)
if(data.ConteoFecha < -61){
    resultado=1;
    data.ConteoFecha = 'N/A'
}
else if(data.ConteoFecha < 0 && data.ConteoFecha > -60){
    resultado=2;
}
else if (data.ConteoFecha >= 0 && data.ConteoFecha <= 6){
    resultado = 3;
}
else if (data.ConteoFecha >6 && data.ConteoFecha <=12){
    resultado = 4;
}
else if (data.ConteoFecha > 12 && data.ConteoFecha <= 24){
    resultado= 5;
}
else if (data.ConteoFecha >24){
    resultado=6;
}
else { resultado = 7}
console.log(resultado)
                switch (resultado) {
                    //si es normal
                    case 1:
                        //cambia color y fondo
                        //reemplazo el valor de eq por i
                        //i al ser una variable se concatena dentro, no solo se coloca
                        console.log(resultado + 'case 1')
                        console.log(row)
                        $(row).find('td:eq(10)', row).css("color", "white");
                        $(row).find('td:eq(10)', row).css("background-color", "#16cadc");
                        $(row).find('td:eq(13)', row).text('N/A');

                        break;
                    case 2:
                        //valor seteado previamente
                        $(row).find('td:eq(10)', row).css("color", "white");
                        $(row).find('td:eq(10)', row).css("background-color", "#f80cb8");
                        break;
                    case 3:
                        //valor seteado previamente
                        $(row).find('td:eq(10)', row).css("color", "white");
                        $(row).find('td:eq(10)', row).css("background-color", "#e6001b");
                        break;
                    case 4:
                        //valor seteado previamente
                        $(row).find('td:eq(10)', row).css("color", "white");
                        $(row).find('td:eq(10)', row).css("background-color", "#efe122");
                        break;
                    case 5:
                        //valor seteado previamente
                        $(row).find('td:eq(10)', row).css("color", "white");
                        $(row).find('td:eq(10)', row).css("background-color", "#59FF47");
                        break;
                    case 6:
                        //valor seteado previamente
                        $(row).find('td:eq(10)', row).css("color", "white");
                        $(row).find('td:eq(10)', row).css("background-color", "#1a2fb8");
                        break;


                    default:
                        //valor por default
                        $(row).find('td:eq(10)', row).css("color", "white");
                        $(row).find('td:eq(10)', row).css("background-color", "#16cadc");
                        break;
                }




/*
            $('a.toggle-vis').on( 'click', function (e) {
                e.preventDefault();

                // Get the column API object
                var column = table.column( $(this).attr('data-column') );

                // Toggle the visibility
                column.visible( ! column.visible() );
            } );
*/
        }



}

)





