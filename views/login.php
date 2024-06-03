<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="post" action="index.php?action=login">
            <div>
                <label for="email">Correo Electrónico:</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" required>
            </div>
            <div>
                <button type="submit">Login</button>

                <a href="index.php?action=register">registrate</a>
                
            </div>
        </form>
    </div>
</body>
</html>
