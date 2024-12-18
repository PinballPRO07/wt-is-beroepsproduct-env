<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiel Sole Machina Pizzeria</title>
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
        <section>
            <div class="profile-card">
                <div class="profile">
                    <img src="IMAGES/avatar.png" alt="profielfoto">
                    <div class="profiel-naam">
                        <h2>Hoi, Daan van Vliet</h2>
                    </div>
                    <div class="profiel-data">
                        <div>Lorem ipsum dolor sit amet.</div>
                        <div>Lorem ipsum dolor sit amet.</div>
                        <div>Lorem ipsum dolor sit amet.</div>
                        <div>Lorem ipsum dolor sit amet.</div>
                        <div>Lorem ipsum dolor sit amet.</div>
                        <div>Lorem ipsum dolor sit amet.</div>
                        <div>Lorem ipsum dolor sit amet.</div>
                        <div>Lorem ipsum dolor sit amet.</div>
                        <div>Lorem ipsum dolor sit amet.</div>
                        <div>Lorem ipsum dolor sit amet.</div>
                        <div>Lorem ipsum dolor sit amet.</div>
                        <div>Lorem ipsum dolor sit amet.</div>
                        <div>Lorem ipsum dolor sit amet.</div>
                        <div>Lorem ipsum dolor sit amet.</div>
                        <button class="uitloggen">Uitloggen</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="profile-card">
            <div class="profile">
                <h3>Mijn bestellingen</h3>
                <div class="bestelling-item">
                    <table class="bestelling-tabel">
                        <thead class="profiel-tabel">
                            <tr>
                                <th>Item</th>
                                <th>Aantal</th>
                                <th>Stukprijs</th>
                                <th>Status</th>
                                <th>Totaal</th>
                            </tr>
                        </thead>
                        <tbody class="profiel-tabel">
                            <tr>
                                <td>margarita</td>
                                <td>2</td>
                                <td>€9,99</td>
                                <td>Bereiding</td>
                                <td>€18,98</td>
                            </tr>
                            <tr>
                                <td>Fanta</td>
                                <td>2</td>
                                <td>€2,49</td>
                                <td>Klaar voor bezorging</td>
                                <td>€4,98</td>
                            </tr>
                            <tr>
                                <td>Cheesecake</td>
                                <td>5</td>
                                <td>€3,00</td>
                                <td>Klaar voor bezorging</td>
                                <td>€15,00</td>
                            </tr>
                            <tr>
                                <td>Drumsticks</td>
                                <td>10</td>
                                <td>€1,99</td>
                                <td>Bereiding</td>
                                <td>19,99</td>
                            </tr>
                            <tr>
                                <td>margarita</td>
                                <td>2</td>
                                <td>€9,99</td>
                                <td>Afgerond</td>
                                <td>€18,98</td>
                            </tr>
                            <tr>
                                <td>Fanta</td>
                                <td>2</td>
                                <td>€2,49</td>
                                <td>Afgerond</td>
                                <td>€4,98</td>
                            </tr>
                            <tr>
                                <td>Cheesecake</td>
                                <td>5</td>
                                <td>€3,00</td>
                                <td>Afgerond</td>
                                <td>€15,00</td>
                            </tr>
                            <tr>
                                <td>Drumsticks</td>
                                <td>10</td>
                                <td>€1,99</td>
                                <td>Afgerond</td>
                                <td>19,99</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Pizzeria Sole Machina. Alle rechten voorbehouden.</p>
    </footer>
</body>

</html>