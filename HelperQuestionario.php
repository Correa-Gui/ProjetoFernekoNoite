<?php
include_once "connect.php";

$query = ("SELECT * from questoes where pergunta is not null ORDER BY RAND() 
LIMIT 10 ");
$HelperQuestionarioGetQuestoes =  mysqli_query($conexao, $query);


?>