<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="/Candylandia/css/style.css">
</head>

<body>
    <header>
        <h1>CANDYLANDIA</h1>
        <nav>
            <form method="POST" action="php/logout.php">
                <button type="submit">Cerrar Sesión</button>
            </form>
        </nav>
        <div class="container-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="icon-cart">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
            </svg>
        </div>
    </header>

    <div class="container-items">
        <div class="item">
            <figure>
                <img src="https://dulceonline.com.mx/cdn/shop/products/mangomitas_360x.jpg?v=1590092376"
                    alt="Mangomitas">
            </figure>
            <div class="info-producto">
                <h2>Mangomitas</h2>
                <p class="price">$100</p>
                <button>Añadir al carrito</button>
            </div>
        </div>

        <div class="item">
            <figure>
                <img src="https://dulceonline.com.mx/cdn/shop/products/SAM_1898_1024x1024@2x.jpg?v=1584916124"
                    alt="Corona Canasta Rompope">
            </figure>
            <div class="info-producto">
                <h2>Corona Canasta Rompope</h2>
                <p class="price">$115</p>
                <button>Añadir al carrito</button>
            </div>
        </div>

        <div class="item">
            <figure>
                <img src="https://dulceonline.com.mx/cdn/shop/products/PICAFRESA100pzas_1024x1024@2x.png?v=1589331657"
                    alt="Vero Pica Goma FRESA">
            </figure>
            <div class="info-producto">
                <h2>Pica fresa</h2>
                <p class="price">$120</p>
                <button>Añadir al carrito</button>
            </div>
        </div>

        <div class="item">
            <figure>
                <img src="https://dulceonline.com.mx/cdn/shop/products/SAM_1489_1024x1024@2x.jpg?v=1587408806"
                    alt="Mazapan Gigante Cubierto con Chocolate">
            </figure>
            <div class="info-producto">
                <h2>Mazapán Gigante Cubierto con Chocolate</h2>
                <p class="price">$100</p>
                <button>Añadir al carrito</button>
            </div>
        </div>

        <div class="item">
            <figure>
                <img src="https://dulceonline.com.mx/cdn/shop/products/RicolinoDuvalinTRISABOR18Pzas_360x.jpg?v=1584649676"
                    alt="Duvalìn TRISABOR">
            </figure>
            <div class="info-producto">
                <h2>Duvalín</h2>
                <p class="price">$103</p>
                <button>Añadir al carrito</button>
            </div>
        </div>

        <div>
        </div>
    </div>

</body>

</html>