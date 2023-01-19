<?php
include_once "../../controller/function.php";
$nomePaciente = $_POST['paciente'];
$periodo =  $_POST['periodo'];
$tipo = $_POST['tipo'];


// Validação dos dados
if(empty($nomePaciente)){
    echo "Por favor, preencha o nome do paciente.".$tipo.$periodo.$nomePaciente;;
    exit;
}

if($periodo != "Matutino" && $periodo != "Vespertino"){
    echo "Período inválido.".$tipo.$periodo.$nomePaciente;;
    exit;
}

if($tipo != "Consulta" && $tipo != "Acompanhamento Familiar"){
    echo "Tipo de acompanhamento inválido.".$tipo.$periodo.$nomePaciente;
    exit;
}
else{
    $tabela = "pacientes";
    $nomes = array("nomePaciente", "periodo", "tipo", "data");
    $dados = array($nomePaciente, $periodo, $tipo, date('Y-m-d'));
    $id = IncluirDados($tabela, $dados, $nomes);


    $iconeMark1 = "";
    $iconeMark2 = "";
    $paciente = $nomePaciente;
    $icone = "<i class='fas fa-check'></i>";
    if($tipo == "Consulta"){
        $iconeMark1 = $icone;
    }
    else if($tipo == "Acompanhamento Familiar"){
        $iconeMark2 = $icone;
    }

}

// Continuação do código para gerar o atestado

include_once "modelo1/header.php";
include_once "modelo1/body.php";
include_once "modelo1/footer.php";
?>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    window.print();
    setTimeout(function(){
        window.location.href = "../../index.php";
    }, 3000);
});

</script>
