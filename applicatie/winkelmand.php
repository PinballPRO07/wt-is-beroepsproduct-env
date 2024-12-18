<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelmand Sole Machina Pizzeria</title>
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
        <div class="winkelmand-container">
            <section class="winkelmand">
                <article class="winkelmand-item">
                    <img src="IMAGES/pizza.jpg" alt="Foto pizza">
                    <div class="item-details">
                        <h4>Pepperoni</h4>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae, consequuntur.</p>
                        <p>Lorem, ipsum.</p>
                        <div class="aantal">
                            <label for="aantal" class="aantal-label">Aantal:</label>
                            <input type="number" id="aantal" class="aantal-input" value="1" min="1" max="99">
                        </div>
                        <p>9.99</p>
                    </div>
                    <div class="item-prijs"></div>
                    <button class="verwijder-item"><i class="fa fa-trash"></i></button>
                </article>
            </section>
            <aside class="bestelling-samenvatting">
                <section class="samenvatting-item">
                    <h2>Samenvatting</h2>
                    <div class="rij">
                        <span>Subtotaal:</span>
                        <span>€39,99</span>
                    </div>
                    <div class="rij">
                        <span>Verzending:</span>
                        <span>€4,99</span>
                    </div>
                    <div class="rij">
                        <span>Totaal (incl. BTW):</span>
                        <span>€100,00</span>
                    </div>
                    <div class="rij">
                        <span>Totaal (excl. BTW):</span>
                        <span>€79,00</span>
                    </div>
                </section>
                <section class="adresgegevens">
                    <div class="login-item">
                        <label for="postcode">Postcode:</label>
                        <input type="text" id="postcode" name="postcode" placeholder="1234 AB" required
                            pattern="\d{4}\s?[A-Za-z]{2}">
                    </div>
                    <div class="login-item">
                        <label for="straat">Straat:</label>
                        <input type="text" id="straat" name="straat" placeholder="Hoofdstraat" required>
                    </div>
                    <div class="login-item">
                        <label for="huisnummer">Huisnummer:</label>
                        <input type="number" id="huisnummer" name="huisnummer" placeholder="12" required>
                    </div>
                    <div class="login-item">
                        <label for="toevoeging">Toevoeging aan huisnummer:</label>
                        <input type="text" id="toevoeging" name="toevoeging" placeholder="A" maxlength="10">
                    </div>
                    <div class="login-item">
                        <label for="plaats">Plaats:</label>
                        <input type="text" id="plaats" name="plaats" placeholder="Amsterdam" required>
                    </div>
                    <div class="login-item">
                        <label for="land">Land:</label>
                        <input type="text" id="land" name="land" placeholder="Nederland" required>
                    </div>
                    <button class="checkout-button">betalen</button>
                </section>
            </aside>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Pizzeria Sole Machina. Alle rechten voorbehouden.</p>
    </footer>
</body>

</html>