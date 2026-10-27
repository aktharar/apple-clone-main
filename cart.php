
<?php
session_start();

// Create an empty cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add product to cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    $name = trim($_POST['name'] ?? '');
    $price = filter_var($_POST['price'] ?? null, FILTER_VALIDATE_INT);

    // Accept only valid product details
    $validProducts = [
        'iPhone 17 Pro' => 134900,
        'iPhone 17' => 82900,
        'iPhone 16' => 69900
    ];

    if ($name !== '' && $price !== false &&
        isset($validProducts[$name]) &&
        $price === $validProducts[$name]) {

        if (isset($_SESSION['cart'][$name])) {
            $_SESSION['cart'][$name]['quantity']++;
        } else {
            $_SESSION['cart'][$name] = [
                'name' => $name,
                'price' => $price,
                'quantity' => 1
            ];
        }
    }

    header('Location: cart.php');
    exit;
}

// Remove a product
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove'])) {
    $name = $_POST['remove'];

    if (isset($_SESSION['cart'][$name])) {
        unset($_SESSION['cart'][$name]);
    }

    header('Location: cart.php');
    exit;
}

// Calculate total
$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['price'] * $item['quantity'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Bag - Apple Clone</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f5f7;
            color: #1d1d1f;
        }

        nav {
            background: #1d1d1f;
            padding: 18px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 18px;
        }

        h1 {
            text-align: center;
            margin: 40px 0 25px;
        }

        .container {
            max-width: 850px;
            margin: auto;
            padding: 20px;
        }

        .item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 15px;
        }

        .item h3 {
            margin-top: 0;
        }

        button, .shop {
            background: #0071e3;
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 20px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        button:hover, .shop:hover {
            background: #005bb5;
        }

        .remove {
            background: #e53935;
        }

        .remove:hover {
            background: #b71c1c;
        }

        .summary {
            background: white;
            border-radius: 15px;
            padding: 25px;
            text-align: right;
        }

        .empty {
            text-align: center;
            background: white;
            border-radius: 15px;
            padding: 35px;
        }

        footer {
            text-align: center;
            padding: 30px;
        }

        @media (max-width: 500px) {
            .item {
                align-items: flex-start;
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

<nav>
    <a href="index.php">Apple</a>
    <a href="index.php">Home</a>
    <a href="products.php">iPhone</a>
    <a href="cart.php">Bag (<?php
        echo array_sum(array_column($_SESSION['cart'], 'quantity'));
    ?>)</a>
</nav>

<h1>Your Bag</h1>

<div class="container">

<?php if (empty($_SESSION['cart'])): ?>

    <div class="empty">
        <h2>Your bag is empty.</h2>
        <p>Discover your favourite iPhone.</p>
        <a class="shop" href="products.php">Explore iPhone</a>
    </div>

<?php else: ?>

    <?php foreach ($_SESSION['cart'] as $item): ?>
        <div class="item">
            <div>
                <h3><?php echo htmlspecialchars($item['name']); ?></h3>
                <p>Price: ₹<?php echo number_format($item['price']); ?></p>
                <p>Quantity: <?php echo $item['quantity']; ?></p>
                <strong>
                    Subtotal: ₹<?php
                    echo number_format($item['price'] * $item['quantity']);
                    ?>
                </strong>
            </div>

            <form method="POST" action="cart.php">
                <input type="hidden" name="remove"
                    value="<?php echo htmlspecialchars($item['name']); ?>">
                <button class="remove" type="submit">Remove</button>
            </form>
        </div>
    <?php endforeach; ?>

    <div class="summary">
        <h2>Total: ₹<?php echo number_format($total); ?></h2>
        <a class="shop" href="products.php">Continue Shopping</a>
        <button type="button"
            onclick="alert('Checkout feature coming soon!')">
            Checkout
        </button>
    </div>

<?php endif; ?>

</div>

<footer>My Apple Clone Project | Built with PHP</footer>

</body>
</html>
