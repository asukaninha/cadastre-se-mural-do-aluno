<?php

include_once('config.php');

$nome = $_POST['nome'];
$ra = $_POST['nome'];
$digito = $_POST['nome'];
$data = $_POST['nome'];
$uf = $_POST['nome'];  
$cidade= $_POST['nome']; 
$escola = $_POST['nome']; 
$email = $_POST['nome'];
$senha = $_POST['nome'];

$result = mysqli_query($conexao, 'INSERT INTO usuarios(Nome, RA, Digito RA, Data Nacs, UF, Cidade, Escola, Email, Senha') 
VALUES ($nome, $ra, $digito, $data, $uf, $cidade, $escola, $emial, $senha)'';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Mural do Aluno</h1>
    <div class="box">
    <div id="formulario">
        <h2>Cadastro</h2>
        <form action=""></form>
        <form action="cadastro.php" method="post"></form>
        <br>
        <input type="text" placeholder="Nome Completo" name="nome" id="name" class="inputuser">
        <br><br>
        <input type="text" placeholder="RA" name="ra" id="ra" class="inputuser" required>
        <br><br>
        <label class="labelinput" name="digito">Digito RA</label>
        <select>
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
        </select>
        <br><br>
        <input type="date"  placeholder="Data de Nascimento" name="data" id="date" class="date" required>    
        <br><br>
        <label class="labelinput" name="uf">UF</label>
        <select>
            <option>RP</option>
            <option>AC</option>
            <option>AM</option>
            <option>PR</option>
            <option>PA</option>
            <option>AP</option>
            <option>TO</option>
            <option>MA</option>
            <option>PI</option>
            <option>CE</option>
            <option>RN</option>
            <option>PB</option>
            <option>PE</option>
            <option>AL</option>
            <option>SE</option>
            <option>BA</option>
            <option>MG</option>
            <option>ES</option>
            <option>RJ</option>
            <option>SP</option>
            <option>PR</option>
            <option>SC</option>
            <option>RS</option>
            <option>MS</option>
            <option>MT</option>
            <option>GO</option>
            <option>DF</option>
        </select>
        <br><br>
        <input type="text" placeholder="Cidade" name="cidade" id="city" class="inputuser" required>
        <br><br>
        <input type="text" placeholder="Escola" id="school" name="escola" class="inputuser" required>
        <br><br>
        <input type="text" placeholder="Email" name="email" id="email" class="inputuser">
        <br><br>
        <input type="text" placeholder="Crie uma senha" name="senha" id="senha" class="inputuser">
        <br><br>
        <button class="cadastrar">Cadastrar-se</button>
    </div>
</body>
<head>
   <style>
    body{
        background-image: linear-gradient(to right, #9bbaff #ffffff);
    }
    .box{
        font-family:Arial, Helvetica, sans-serif;
        color: white;
        float: right;
        position: absolute;
        left: 50%;
        top: 12.5%;
        transform: translate(-50%, -50-);
        padding: 15px;
        width: 20%;
        background-color: rgba(109, 108, 108, 0.438);
        border-radius: 15px;
    }
    h2{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        color: #5d81cf;
        text-align: center;
    }
    h1{
        position: absolute;
        padding: 100px;
        right: 50%;
        top: 25%;
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;
        font-size: 50px;
        color: #5d81cf;
    }
    .inputuser{
        background: none;
        border: none;
        color: white;
        font-size: 15px;
        width: 100%;
        border-bottom: 1px solid white ;
    } 
    .cadastro{
        background-color: rgba(109, 108, 108, 0);
        color: #5d81cf;
        border: none;
        cursor: pointer;
    }
    .login{
        background-color: #5d81cf;
        color: #ffffff;
        border: #ffffff;
        border-radius: 15px;
        width: 100%;
        padding: 15px;
        cursor: pointer;
    }
    .labelinput{
        background: none;
        border: none;
        color: gray;
        font-size: 15px;
        width: 100%;
    }
    .date{
        background: none;
        border: none;
        color: gray;
        font-size: 15px;
        width: 100%;
    }
    .cadastrar{
        background-color: #5d81cf;
        color: #ffffff;
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 10px;
        font-size: 15px;
    }
    </style>
</html>
