<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <title>MVC PHP Example</title>
</head>
<body>
    <main class="wrapper">
        <section class="products-container">
            <header>
                <h1>List of products</h1>
            </header>
            <?php foreach( $products as $product ) : ?>
                <ul class="product-info">
                    <li><span>Code:</span> <?= $product->getProductCode();  ?></li>
                    <li><span>Name:</span> <?= $product->getProductName();  ?></li>
                    <li><span>Short name:</span> <?= $product->getProductShortName();  ?></li>
                    <li><span>PVP:</span> <?= $product->getProductPvp();  ?></li>
                </ul>
            <?  endforeach; ?>
        </section>
    </main>
</body>
</html>