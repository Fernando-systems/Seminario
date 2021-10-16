$('#tbInsumoKardex').DataTable( {


    "oSearch": {"bSmart": false,
        "bRegex": true,
        "sSearch": ""  },//busca un dato exacto
    dom: 'Blfrtip',
    buttons: [
        'print', 'pdf'
    ],
    "ajax": "./api/v1/Insumo_kardex.php",
    "columns": [

        { "data": "AlmacNumRenglon" },
        { "data": "AlmacNumCodInsumo" },
        { "data": "AlmacStrNomInsumo" },
        { "data": "AlmacStrCaractInsu" },
        { "data": "AlmacStrPresentInsu" },
        { "data": "AlmacStrCantYUnidInsu" },
        { "data": "AlmacNumCodPresentInsu" },
        { "data": "AlmacNumIdKardex" }

    ]

} );