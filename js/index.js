$(function () {
    funkcija();
    popuniTabelu();
    $('#azurirajbutton').hide();
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

            success: function (){
                popuniTabelu();     
            }
        })

    })




    $(document).on('click', '#obrisibutton', function(){

        $.ajax({
            url: 'dbfunctions/obrisiputnika.php',
            method: 'post',
            data: {
                ID: $(this).attr('value')
            },

            success: function (){
                popuniTabelu();     
            }
        })

    })



    $(document).on('click', '#izmenabutton', function(){

        $('#dodajbutton').hide();
        $('#azurirajbutton').show();

        $.ajax({
            url: 'dbfunctions/vratiPutnika.php',
            method: 'post',
            data: {
                ID: $(this).attr('value')
            },
            dataType: 'json',


            success: function (putnik){
                $('#imeprezime').val(putnik.imeprezime);
                $('#brojtelefona').val(putnik.brojtelefona);
                $('#brojrezervacije').val(putnik.brojrezervacije);
                $('#putovanje_id').val(putnik.putovanje_id);
                $('#bus_id').val(putnik.bus_id);
                $('#vodic_id').val(putnik.vodic_id);
                $('#putnikid').val(putnik.id)
            }
        })

    })



    $(document).on('click', '#azurirajbutton', function(){

        $.ajax({
            url: 'dbfunctions/azurirajPutnika.php',
            method: 'post',
            data: {
                IMEPREZIME: $('#imeprezime').val(),
                BROJTELEFONA: $('#brojtelefona').val(),
                BROJREZERVACIJE: $('#brojrezervacije').val(),
                PUTOVANJE_ID: $('#putovanje_id').val(),
                BUS_ID: $('#bus_id').val(),
                VODIC_ID: $('#vodic_id').val(),
                ID: $('#putnikid').val()

            },

            success: function (){
                $('#dodajbutton').show();
                $('#azurirajbutton').hide();
                popuniTabelu();
            }
        })

    })






























}


function popuniTabelu(){

    $.ajax({
        url: 'dbfunctions/vratiPutnike.php',
        
        success: function (rez){
            $('#tblbody').html(rez);
        }
    })
}