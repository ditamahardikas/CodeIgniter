$( function() {
    $( '#tabs' ).tabs({
        fx: { height: 'toggle', opacity: 'toggle' }
    });

    $.ajax({
        url: 'index.php/crud/panelAjax/readMahasiswa',
        dataType: 'json',
        success: function( response ) {
            $( '#readTemp' ).render( response ).appendTo( "#tabel" );
        }
    });

	$.ajax({
        url: 'index.php/crud/panelAjax/readMapel',
        dataType: 'json',
        success: function( response ) {
            $( '#readTemp2' ).render( response ).appendTo( "#tabel2" );
        }
    });

});