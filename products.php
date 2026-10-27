
<?php
session_start();

// iPhone product details
$products = [
    [
        "name" => "iPhone 17 Pro",
        "price" => 134900,
        "image" => "images/iphone17pro.jpg",
        "description" => "Powerful performance. Pro camera system."
    ],
    [
        "name" => "iPhone 17",
        "price" => 82900,
        "image" => "images/iphone17.jpg",
        "description" => "Beautiful design. Incredible everyday performance."
    ],
    [
        "name" => "iPhone 16",
        "price" => 69900,
        "image" => "images/iphone16.jpg",
        "description" => "A great iPhone experience for every day."
    ]
];

$cartCount = isset($_SESSION['cart'])
    ? array_sum(array_column($_SESSION['cart'], 'quantity'))
    : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Buy iPhone | Apple Clone</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f5f7;
            color: #1d1d1f;
        }

        /* Navigation */
        nav {
            background: rgba(22, 22, 23, 0.97);
            min-height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 35px;
            padding: 15px;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        nav a {
            color: #f5f5f7;
            text-decoration: none;
            font-size: 13px;
        }

        nav a:hover {
            color: #aaa;
        }

        /* Hero section */
        .hero {
            text-align: center;
            padding: 65px 20px 45px;
        }

        .hero h1 {
            font-size: clamp(38px, 6vw, 60px);
            letter-spacing: -2px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 20px;
            color: #6e6e73;
            line-height: 1.5;
        }

        /* Product grid */
        .products {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 25px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 25px 60px;
        }

        /* Product card */
        .card {
            background: #fff;
            border-radius: 24px;
            padding: 28px 20px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
            transition: transform 0.25s, box-shadow 0.25s;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.10);
        }

        .card img {
            display: block;
            width: 100%;
            height: 260px;
            object-fit: contain;
            margin-bottom: 18px;
        }

        .card h2 {
            font-size: 24px;
            margin-bottom: 12px;
        }

        .description {
            color: #6e6e73;
            font-size: 14px;
            line-height: 1.6;
            min-height: 45px;
            margin-bottom: 15px;
        }

        .price {
            font-size: 19px;
            font-weight: bold;
            margin-bottom: 18px;
        }

        /* Add to Bag button */
        .add-button {
            display: inline-block;
            background: #0071e3;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 12px 25px;
            font-size: 15px;
            cursor: pointer;
            transition: background 0.2s;
        }

        .add-button:hover {
            background: #005bb5;
        }

        /* Footer */
        footer {
            text-align: center;
            background: #f5f5f7;
            color: #6e6e73;
            padding: 30px 15px;
            font-size: 13px;
            line-height: 1.8;
        }

        /* Tablet */
        @media (max-width: 900px) {
            .products {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        /* Mobile */
        @media (max-width: 600px) {
            nav {
                gap: 18px;
                flex-wrap: wrap;
            }

            .hero {
                padding: 45px 15px 25px;
            }

            .products {
                grid-template-columns: 1fr;
                padding: 15px 20px 40px;
            }

            .card img {
                height: 240px;
            }
        }
    </style>
</head>

<body>

<!-- Navigation bar -->
<nav>
    <a href="index.php"><strong>Apple</strong></a>
    <a href="index.php">Home</a>
    <a href="products.php">iPhone</a>
    <a href="cart.php">
        Bag (<?php echo $cartCount; ?>)
    </a>
</nav>

<!-- Page heading -->
<header class="hero">
    <h1>Explore iPhone.</h1>
    <p>Designed to be loved.</p>
</header>

<!-- Products -->
<main class="products">

    <?php foreach ($products as $product): ?>

        <article class="card">

            <img
                src="<?php echo htmlspecialchars($product['image']); ?>"
                alt="<?php echo htmlspecialchars($product['name']); ?>"
                onerror="this.onerror=null;this.src='https://placehold.co/400x400/f5f5f7/1d1d1f?text=iPhone';"
            >

            <h2>
                <?php echo htmlspecialchars($product['name']); ?>
            </h2>

            <p class="description">
                <?php echo htmlspecialchars($product['description']); ?>
            </p>

            <p class="price">
                From ₹<?php echo number_format($product['price']); ?>
            </p>

            <form action="cart.php" method="POST">
                <input
                    type="hidden"
                    name="name"
                    value="<?php echo htmlspecialchars($product['name']); ?>"
                >

                <input
                    type="hidden"
                    name="price"
                    value="<?php echo $product['price']; ?>"
                >

                <button
                    type="submit"
                    name="add_to_cart"
                    value="1"
                    class="add-button"
                >
                    Add to Bag
                </button>
            </form>

        </article>

    <?php endforeach; ?>

</main>

<!-- Footer -->
<footer>
    <p>My Apple Clone Project | Built with PHP, HTML and CSS</p>
    <p>This is an independent educational project, not affiliated with Apple Inc.</p>
</footer>

</body>
</html>
