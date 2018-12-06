<?php
require_once 'helpers/init_session.php';
require_once 'db/Db_Conn.php';
require_once 'db/DbFunc.php';

require_once 'phplot/phplot.php';

$plot = new PHPlot();

$tabela = $_GET['tabela'];

$resultados = DbFunc::grafico_dados($conexao,$tabela);

$data = array();

while($linha = mysqli_fetch_assoc($resultados)){
    $data[] = array($linha['user_sexo'],$linha['total']);
}

$plot->SetTextColor('blue');
$plot->SetTitleColor('blue');
$plot->SetDataValueLabelColor('red');

$plot->SetImageBorderType('plain');
$plot->SetPlotType('bars');

$plot->SetDataType('text-data');
$plot->SetDataValues($data);

$plot->SetTitle("Quantidade entre homens e mulheres presentes na tabela");

$plot->SetXTickPos('none');

$plot->SetPlotAreaWorld(null, 0);

$plot->SetYTickIncrement(100);

$plot->SetYDataLabelPos('plotin');

$plot->DrawGraph();

?>