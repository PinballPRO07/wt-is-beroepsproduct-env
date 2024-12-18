<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sole Machina Pizzeria</title>
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

    <input type="radio" id="pizza" name="tab" checked>
    <input type="radio" id="dessert" name="tab">
    <input type="radio" id="drinks" name="tab">
    <input type="radio" id="snacks" name="tab">

    <nav class="items-navbalk">

        <label for="pizza" class="navbalk-button">Pizza</label>
        <label for="dessert" class="navbalk-button">Dessert</label>
        <label for="drinks" class="navbalk-button">Dranken</label>
        <label for="snacks" class="navbalk-button">Snacks</label>
    </nav>
    <main>
        <section id="pizza-section" class="product-grid">
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Pizza margaritha">
                <h1>Pizza Margarita</h1>
                <p class="prijs">€19.99</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Pizza margaritha">
                <h1>Pizza Margarita</h1>
                <p class="prijs">€19.99</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Pizza margaritha">
                <h1>Pizza Margarita</h1>
                <p class="prijs">€19.99</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Pizza margaritha">
                <h1>Pizza Margarita</h1>
                <p class="prijs">€19.99</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Pizza margaritha">
                <h1>Pizza Margarita</h1>
                <p class="prijs">€19.99</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Pizza margaritha">
                <h1>Pizza Margarita</h1>
                <p class="prijs">€19.99</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
        </section>

        <section id="dessert-section" class="product-grid">
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Dessert">
                <h1>Chocolade Cake</h1>
                <p class="prijs">€5.99</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Dessert">
                <h1>Chocolade Cake</h1>
                <p class="prijs">€5.99</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Dessert">
                <h1>Chocolade Cake</h1>
                <p class="prijs">€5.99</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Dessert">
                <h1>Chocolade Cake</h1>
                <p class="prijs">€5.99</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Dessert">
                <h1>Chocolade Cake</h1>
                <p class="prijs">€5.99</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
        </section>

        <section id="drinks-section" class="product-grid">
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Drinks">
                <h1>Cola</h1>
                <p class="prijs">€2.50</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Drinks">
                <h1>Cola</h1>
                <p class="prijs">€2.50</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Drinks">
                <h1>Cola</h1>
                <p class="prijs">€2.50</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Drinks">
                <h1>Cola</h1>
                <p class="prijs">€2.50</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Drinks">
                <h1>Cola</h1>
                <p class="prijs">€2.50</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Drinks">
                <h1>Cola</h1>
                <p class="prijs">€2.50</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
        </section>
        <section id="snacks-section" class="product-grid">
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Snacks">
                <h1>Bitterballen</h1>
                <p class="prijs">€6.99</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Snacks">
                <h1>Bitterballen</h1>
                <p class="prijs">€6.99</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Snacks">
                <h1>Bitterballen</h1>
                <p class="prijs">€6.99</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Snacks">
                <h1>Bitterballen</h1>
                <p class="prijs">€6.99</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Snacks">
                <h1>Bitterballen</h1>
                <p class="prijs">€6.99</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
            <article class="product-card">
                <img src="/IMAGES/pizza.jpg" alt="Snacks">
                <h1>Bitterballen</h1>
                <p class="prijs">€6.99</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><button class="toevoegen">Toevoegen</button></p>
            </article>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Pizzeria Sole Machina. Alle rechten voorbehouden.</p>
    </footer>
</body>

</html>