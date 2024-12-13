<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dados Recebidos</title>
</head>
<body>
   <h1>Dados doformulário</h1>
   <section>
      <h2>1. Dados Pessoais:</h2>
      <p><b>Nome Completo:</b> <?= htmlspecialchars($_POST['complet-name'] ?? '') ?></p>
      <p><b>Sexo:</b> <?= htmlspecialchars($_POST['sexo'] ?? '') ?></p>
      <p><b>Data de Nascimento:</b> <?= htmlspecialchars($_POST['date'] ?? '') ?></p>
      <p><b>CPF:</b> <?= htmlspecialchars($_POST['cpf'] ?? '') ?></p>
      <p><b>Estado Civil:</b> <?= htmlspecialchars($_POST['estadocivil'] ?? '') ?></p>
   </section>
   <br>
   <section>
      <h2>2. Dados de Contato:</h2>
      <p><b>Telefone:</b> <?= htmlspecialchars($_POST['number'] ?? '') ?></p>
      <p><b>E-mail Profissional:</b> <?= htmlspecialchars($_POST['emailprofissional'] ?? '') ?></p>
      <p><b>LinkedIn:</b> <?= htmlspecialchars($_POST['linkedin'] ?? '') ?></p>
   </section>
   <br>
   <section>
      <h2>3. Endereço:</h2>
      <p><b>CEP:</b> <?= htmlspecialchars($_POST['cep'] ?? '') ?></p>
      <p><b>Estado:</b> <?= htmlspecialchars($_POST['estado'] ?? '') ?></p>
      <p><b>Cidade:</b> <?= htmlspecialchars($_POST['cidade'] ?? '') ?></p>
      <p><b>Bairro:</b> <?= htmlspecialchars($_POST['bairro'] ?? '') ?></p>
      <p><b>Tipo de Endereço:</b> <?= htmlspecialchars($_POST['tipodeendereco'] ?? '') ?></p>
      <p><b>Endereço:</b> <?= htmlspecialchars($_POST['endereco'] ?? '') ?></p>
      <p><b>Número:</b> <?= htmlspecialchars($_POST['numberofhouse'] ?? '') ?></p>
      <p><b>Complemento:</b> <?= htmlspecialchars($_POST['complement'] ?? '') ?></p>
      <p><b>Ponto de Referência:</b> <?= htmlspecialchars($_POST['pontodereferencia'] ?? '') ?></p>
   </section>
   <br>
   <section>
      <h2>4. Sobre a Conta:</h2>
      <p><b>E-mail:</b> <?= htmlspecialchars($_POST['email'] ?? '') ?></p>
      <p><b>Senha:</b> <?= htmlspecialchars($_POST['senha'] ?? '') ?></p>
   </section>
</body>
</html>
