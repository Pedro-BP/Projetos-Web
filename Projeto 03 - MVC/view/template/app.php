<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Blitz - Eletrônicos</title>
    <link rel="icon" href="../img/blitz-logo.png" type="image/png">
</head>

<body class="bg-gray-950">
    <header>
        <?php require "view/template/header.php" ?>
    </header>

    <main>
        <?php require "view/{$view}.view.php"; ?>
    </main>

    <footer class="bg-gray-900 text-gray-300 mt-20 border-t border-gray-800">
        <?php require "view/template/footer.php" ?>
    </footer>

    <script src="../../js/menuHamburguer.js"></script>
</body>

</html>