<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <script src="https://kit.fontawesome.com/a39639353a.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="../public/images/logos/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/register.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <?php if (isset($_GET['error'])) {
                echo '<div class="error">'.print_r($_GET['error']).'</div>';
            }
            ?>
            <form action="../app/registerLogic.php" method="POST">
                <div class="top">
                    <h2>Cadastro</h2>

                    <a href="../index.html">
                        <i class="fas fa-arrow-alt-circle-left"></i>
                    </a>
                </div>

                <label for="name">Nome</label>
                <input type="text" name="name" id="name">

                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf">

                <label for="email">Email</label>
                <input type="email" name="email" id="email">

                <label for="password">Senha</label>
                <input type="password" name="password" id="password">

                <label for="confirm-password">Confirmar Senha</label>
                <input type="password" name="confirm-password" id="confirm-password">
            
                <input type="submit" value="Enviar">
            </form>

            <a href="login.php">
                Já possui um cadastro? Faça login!
            </a>
        </div>
    </div>
</body>
</html>