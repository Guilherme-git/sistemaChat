$(document).ready(function(){

    setInterval(selecionaBanco,1000);

    function selecionaBanco(){
        $.ajax({
            url: '../pages/chat.php',
            type: 'POST',
            dataType: 'json',
            success:function(resposta){
                $('#dados-chat').empty();
                $.each(resposta,function(key,valor){
                    $('#dados-chat').append("<span style='color: #1C62C4;''>"+valor.apelido+' - '+"</span><span style='color: #848484;'>"+valor.mensagem+"</span><br><br>");
                });
            }
        });   
    }

    
    $('#formMsg').on('submit',function(e){
        e.preventDefault();
        var dados = $(this).serialize();

        $.ajax({
            url: '../pages/salvaMensagem.php',
            type: 'POST',
            data: dados,
            success:function(){
                $('#mensagem').val("");
            }
        });
    });
    
});