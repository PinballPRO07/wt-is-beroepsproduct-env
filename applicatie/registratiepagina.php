<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratie Sole Machina Pizzeria</title>
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
        <div class="login-box">
            <form action="registratiepagina.php" method="post">
                <div class="login-box-grid">
                    <div class="login-item">
                        <label for="username">Gebruikersnaam:</label>
                        <input autocomplete="name" type="text" id="username" name="username"
                            placeholder="Vul je gebruikersnaam in" pattern="[a-zA-Z]{8,16}" required>
                    </div>
                    <div class="login-item">
                        <label for="Voornaam">Voornaam:</label>
                        <input autocomplete="name" type="text" id="Voornaam" name="voornaam"
                            placeholder="Vul je voornaam in" pattern="[a-zA-Z]{1,25}" required>
                    </div>
                    <div class="login-item">
                        <label for="Tussenvoegsel">Tussenvoegsel:</label>
                        <input autocomplete="name" type="text" id="Tussenvoegsel" name="tussenvoegsel"
                            placeholder="Vul je tussenvoegsel in" pattern="[a-zA-Z]{1,20}">
                    </div>
                    <div class="login-item">
                        <label for="achternaam">Achternaam:</label>
                        <input autocomplete="name" type="text" id="achternaam" name="achternaam"
                            placeholder="Vul je achternaam in" pattern="[a-zA-Z]{1,25}" required>
                    </div>
                    <div class="login-item">
                        <label for="password">Wachtwoord:</label>
                        <input type="password" id="password" name="password" placeholder="Vul je wachtwoord in" required
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                    </div>
                    <div class="login-item">
                        <label for="email">E-mail adres:</label>
                        <input autocomplete="email" type="email" id="email" name="email"
                            placeholder="voorbeeld@domein.com" pattern=".{1,35}" required>
                    </div>
                    <div class="login-item">
                        <label for="telefoonnummer">Telefoonnummer:</label>
                        <input autocomplete="tel" type="tel" id="telefoonnummer" name="telefoonnummer"
                            placeholder="XX-XXXXXXXX" required
                            pattern="([0-9]{2}-[0-9]{8})|([0-9]{10})|([0-9]{11})|([0-9]{3}-[0-9]{8})">
                    </div>
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
                    <div class="login-item-privacyverklaring">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">Ik accepteer de <a href="#privacyverklaring">privacyverklaring</a></label>
                    </div>
                    <div id="privacyverklaring" class="model-privacyverklaring">
                        <div class="modal-content">
                            <a href="#" class="close">&times;</a>
                            <h2>Privacyverklaring</h2>
                            <div class="modal-text">
                                <p>Bij Pizzeria Sole Machina hechten wij veel waarde aan de bescherming van uw
                                    persoonsgegevens. In deze privacyverklaring leggen wij uit hoe wij omgaan met uw
                                    gegevens, welke gegevens wij verzamelen en voor welke doeleinden deze worden
                                    gebruikt.</p>

                                <h2>1. Welke gegevens verzamelen wij?</h2>
                                <p>Wij kunnen de volgende persoonsgegevens verzamelen:</p>
                                <ul>
                                    <li>Naam en adresgegevens</li>
                                    <li>Contactinformatie, zoals e-mailadres en telefoonnummer</li>
                                    <li>Bestelgeschiedenis</li>
                                    <li>Betaalgegevens</li>
                                    <li>IP-adres</li>
                                </ul>

                                <h2>2. Waarom verzamelen wij gegevens?</h2>
                                <p>Uw gegevens worden gebruikt voor de volgende doeleinden:</p>
                                <ul>
                                    <li>Het verwerken van uw bestellingen</li>
                                    <li>Het bieden van klantenservice</li>
                                    <li>Het verbeteren van onze diensten</li>
                                    <li>Marketingdoeleinden, zoals het verzenden van aanbiedingen</li>
                                    <li>Voldoen aan wettelijke verplichtingen</li>
                                </ul>

                                <h2>3. Hoe beschermen wij uw gegevens?</h2>
                                <p>Wij nemen passende technische en organisatorische maatregelen om uw persoonsgegevens
                                    te beschermen tegen verlies, misbruik of ongeoorloofde toegang. Denk hierbij aan
                                    versleuteling van gegevens en beveiligde verbindingen.</p>

                                <h2>4. Hoe lang bewaren wij uw gegevens?</h2>
                                <p>Wij bewaren uw gegevens niet langer dan noodzakelijk is voor de doeleinden waarvoor
                                    ze worden verzameld, tenzij een wettelijke bewaartermijn geldt.</p>

                                <h2>5. Delen wij uw gegevens met derden?</h2>
                                <p>Wij delen uw gegevens uitsluitend met derden wanneer dit noodzakelijk is voor de
                                    uitvoering van onze diensten (bijvoorbeeld bezorgdiensten) of wanneer wij daartoe
                                    wettelijk verplicht zijn.</p>

                                <h2>6. Uw rechten</h2>
                                <p>U heeft het recht om:</p>
                                <ul>
                                    <li>Inzage te krijgen in de persoonsgegevens die wij van u verwerken</li>
                                    <li>Uw gegevens te corrigeren of te laten verwijderen</li>
                                    <li>Bezwaar te maken tegen de verwerking van uw gegevens</li>
                                    <li>Uw toestemming voor gegevensverwerking in te trekken</li>
                                </ul>

                                <h2>7. Contact</h2>
                                <p>Als u vragen heeft over deze privacyverklaring of uw rechten wilt uitoefenen, kunt u
                                    contact met ons opnemen via:</p>
                                <p><strong>E-mailadres:</strong> privacy@pizzeriasolemachina.nl</p>
                                <p><strong>Telefoonnummer:</strong> +31 6 12345678</p>
                                <p><strong>Adres:</strong> Pizzaweg 123, 1234 AB Pizzastad</p>
                            </div>
                        </div>
                    </div>
                    <a class="login-pagina-switch" href="loginpagina.php">Ik heb al een account</a>
                    <div class="login-item">
                        <button class="login-registratie-button">Registratie</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Pizzeria Sole Machina. Alle rechten voorbehouden.</p>
    </footer>
</body>

</html>