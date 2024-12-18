<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sole Machina Pizzeria</title>
    <link rel="stylesheet" href="content.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header class="header">
        <div class="logo"><a href="menu.php"><img class="Logo-Image" src="IMAGES/logo_transparent.png"
                    alt="Logo Sole Machina Pizzeria"></a></div>
        <nav class="navigatie-in-re-wi">
            <a href="loginpagina.php" class="header-button">Inloggen</a>
            <a href="registratiepagina.php" class="header-button">Registreren</a>
            <a href="profiel.php" class="header-button"><i class="fa fa-user"></i><span
                    class="sr-only">profiel</span></a>
            <a href="winkelmand.php" class="header-button"><i class="fa fa-shopping-basket"></i><span
                    class="sr-only">Winkelmand</span></a>
        </nav>
    </header>
    <main>
        <section class="login-box">
            <form action="loginpagina.php" method="post">
                <div class="login-box-grid">
                    <div class="login-item">
                        <label for="username">Gebruikersnaam:</label>
                        <input type="text" id="username" name="username" placeholder="Vul je gebruikersnaam in"
                            required>
                    </div>
                    <div class="login-item">
                        <label for="password">Wachtwoord:</label>
                        <input type="password" id="password" name="password" placeholder="Vul je wachtwoord in"
                            required>
                    </div>
                    <a class="login-pagina-switch" href="registratiepagina.php">Ik heb nog geen account</a>
                    <div class="login-item">
                        <button class="login-registratie-button">Inloggen</button>
                    </div>
                </div>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Pizzeria Sole Machina. Alle rechten voorbehouden.</p>
    </footer>
</body>

</html>