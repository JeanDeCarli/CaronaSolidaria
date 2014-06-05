
function getEndereco() {
    var descricao = event.srcElement.innerText;
    var od = event.target.id;

    $.post("./controle/pesquisaItinerarioControle.php",
            {
                getEndereco: descricao,
                getEnderecoOD: od
            },
    function(data) {
        if (od == "origemBtn"){
                if (descricao == 'Faculdade'){
                    $('#origemTxt').val(data);
                    $("#btnDestino").removeAttr("disabled");
                }else{
                    $('#origemTxt').val(data);
                    
                    $.post("./controle/pesquisaItinerarioControle.php",
                        {
                            getEndereco: "Faculdade",
                            getEnderecoOD: od
                        },
                        function(data2){
                            $('#destinoTxt').val(data2);
                            $("#btnDestino").attr("disabled", "disabled");
                        }
                    )
                }
        }
        else{
            var origemTxt = $('#origemTxt').val();
            if(data == origemTxt){
                alert("Selecione outro Destino para efetuar a pesquisa.")
                $('#destinoTxt').val(null);
            }else{
                $('#destinoTxt').val(data);
            }
        }
    }
    );
}

function getTurno(){
    var descricao = event.srcElement.innerText;
    
    $('#turnoTxt').val(descricao);
}

