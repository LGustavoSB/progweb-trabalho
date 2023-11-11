<head>
    <link rel="icon" href="../images/icon.svg">
    <title>Elephant | Login</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>

<?php
session_start();
?>

<body>
    <div id="login" align="center">
        <div id="box">
            <div id="title_login">
                <img src="../images/elephant.gif" alt="">
                <h1 align="center">Elephant - Login</h1>
            </div>
            <form method=POST action="valida_login.php">
                <div id="usuario_input" class="login_input">
                    <input name="dados_usuario" type="text" placeholder="Usuario" class="button_login" required>
                </div>
                <div id="usuario_input" class="login_input">
                    <input name="dados_senha" type="password" placeholder="Senha" class="button_login" required>
                </div>
                <div id="usuario_input" class="login_input">
                    <button type="submit" id="submit_login">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

<script>

</script>