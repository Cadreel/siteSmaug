<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Listagem de Dados - PHP</title>
        <link type="text/css" href="css/estilo.css" rel="stylesheet">
        <link type="text/css" href="font-awesome-4.6.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/jscript" scr="script/js"></script>
    </head>
    <body>
        <h1 class="titulo">Listagem de Dados - PHP</h1>
        <table width="100%" border="1" bordercolor="#EEE" cellspacing="0" cellpadding="10">
        <tr>
            <td><strong>NOME</strong></td>
            <td><strong>EMAIL</strong></td>
            <td><strong>PLATAFORMA</strong></td>
            <td><strong>MENSAGEM</strong></td>
        </tr>
        <?php
        include("conexao.php");
        $seleciona=mysqli_query($CONNECTION_STRING, "SELECT * FROM testebd order by id desc");
        while($campo=mysqli_fetch_array($seleciona)){?>
            <tr>
                <td><?=$campo["nome"]?></td>
                <td><?=$campo["email"]?></td>
                <td><?=$campo["plataforma"]?></td>
                <td><?=$campo["mensagem"]?></td>
            </tr>
        <?php   }?>
        </table>
    </body>
</html>