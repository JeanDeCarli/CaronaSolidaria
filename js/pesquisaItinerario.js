
function getEndereco() {
    var descricao = event.srcElement.innerText;
    var od = event.target.id;

    $.post("./controle/pesquisaItinerarioControle.php",
            {
                getEndereco: descricao,
                getEnderecoOD: od
            },
    function(data) {
        if (od == "origemBtn")
            $('#origemTxt').val(data);
        else
            $('#destinoTxt').val(data);
    }
    );
}

