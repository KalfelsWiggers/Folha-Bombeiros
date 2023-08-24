<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Ocorrência</title>
    <script src="../scripts/jquery-1.8.2.min.js"></script>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <header>
        <img src="../sources/logo_pequena.png">
        <ul>
            <li><a href="Home.php">Retornar</a></li>
            <li><a href="#">Suporte</a></li>
            <li><a href="#">Fazer login</a></li>
        </ul>
    </header>
    <main>
        <section>
            <div class="txt">
                <h2>Folha de Atendimento</h2>
                <h3>Preencha todos os campos adequadamente</h3>
            </div>

            <form action="" method="post" id="form1">

                    <div class="row">
                        <label for="date">Data:</label>
                        <input type="date" id="date">

                        <label>Sexo:</label>
                        <input type="radio" id="M" name="sexo" value="masculino">
                        <label for="M">M</label>
                        <input type="radio" id="F" name="sexo" value="feminino">
                        <label for="F">F</label>
                    </div>

                    <div class="row">
                        <label for="nomeHospital">Nome do hospital:</label>
                        <input type="text" id="nomeHospital">
                    </div>

                    <div class="row">
                        <label for="nomePaciente">Nome:</label>
                        <input type="text" id="nomePaciente">

                        <label for="idadePaciente">Idade:</label>
                        <input type="number" id="idadePaciente">
                    </div>

                    <div class="row">
                        <label for="DadoPaciente">RG/CPF Paciente:</label>
                        <input type="text" id="DadoPaciente">

                        <label for="fonePaciente">Fone:</label>
                        <input type="tel" id="fonePaciente">
                    </div>

                    <div class="row">
                        <label for="nomeAcompanhante">Acompanhante:</label>
                        <input type="text" id="nomeAcompanhante">

                        <label for="idadeAcompanhante">Idade:</label>
                        <input type="number" id="idadeAcompanahante">
                    </div>

                    <div class="row">
                        <label for="localOcorrencia">Local da ocorrência:</label>
                        <input type="text" id="localOcorrencia">
                    </div>

                    <div class="row">
                        <label for="numeroUsb">Nº USB.:</label>
                        <input type="number" id="numeroUsb">

                        <label for="codigoIr">CÓD. IR </label>
                        <input type="text" id="codigoIr">
                    </div>

                    <div class="row">
                        <label for="numeroOcorrencia">Nº OCORR.:</label>
                        <input type="number" id="numeroOcorrencia">

                        <label for="codigoPs">CÓD. PS</label>
                        <input type="text" id="codigoPs">
                    </div>

                    <div class="row">
                        <input type="button" name="limpar" value="Limpar" onclick="Limpar();">

                        <input type="button" name="avancar" value="Salvar e Avançar" onclick="Executar();">
                    </div>

            </form>
        </section>
    </main>
</body>
</html>