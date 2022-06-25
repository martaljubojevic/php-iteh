$(function () {
    funkcija();
});


function funkcija(){

    $(document).on('click', '#dodajbutton', function(){

        let imeprezime = $('#imeprezime').val();
        let brojtelefona = $('#brojtelefona').val();
        let brojrezervacije = $('#brojrezervacije').val();
        let putovanje_id = $('#putovanje_id').val();
        let bus_id = $('#bus_id').val();
        let vodic_id = $('#vodic_id').val();

        
        $.ajax({
            url: 'dbfunctions/dodajputnika.php',
            method: 'post',
            data: {IMEPREZIME: imeprezime, BROJTELEFONA: brojtelefona, BROJREZERVACIJE: brojrezervacije, PUTOVANJE_ID: putovanje_id,
            BUS_ID: bus_id, VODIC_ID:vodic_id
            },
        })

    })

}
