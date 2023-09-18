<?php
//Arquivo vamos melhorar depois
//1. Incluindo o arquivo com os dados de conexao
include_once 'conexao.php';
//2. Usando o padrao de codificacao com acentos e ç
$conn->exec("set names utf8");
//3. Selecionando todos os alunos da tabela tb_alunos
$sql = "select * from tb_alunos";
//4. Montando uma tabela com o resultado
$result = $conn->query($sql);
$rows= $result->fetchAll(PDO::FETCH_ASSOC);
//5. exibindo os dados de todas as linhas (cada registro)
print_r($rows);
