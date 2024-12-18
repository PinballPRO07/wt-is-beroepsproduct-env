<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestelling details</title>
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
        <section class="verkoopformulier">
            <h3>Inkooporder</h3>
            <article class="klant-informatie-card">
                <p class="klant-informatie">Naam:</p>
                <p class="klant-informatie">Sjakie Sjaak</p>
                <p class="klant-informatie">Adres:</p>
                <p class="klant-informatie">Ruitenberglaan 26</p>
                <p class="klant-informatie">Datum:</p>
                <p class="klant-informatie">2024-11-23</p>
                <p class="klant-informatie">Mobiel:</p>
                <p class="klant-informatie">00-00000000</p>
            </article>
            <article class="ordertabel">
                <table class="tabel-personeel-bestelling">
                    <thead>
                        <tr>
                            <th>product</th>
                            <th>Datum</th>
                            <th>Totaalposities</th>
                            <th>Totaalprijs</th>
                            <th>Details</th>
                            <th>Aantal</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>margaritha</td>
                            <td>2024-22-11</td>
                            <td>€9,99</td>
                            <td>€18,98</td>
                            <td>noten</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
            </article>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Pizzeria Sole Machina. Alle rechten voorbehouden.</p>
    </footer>
</body>

</html>