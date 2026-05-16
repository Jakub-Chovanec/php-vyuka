<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Výuka</title>
<<<<<<< HEAD
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #f5f5f5;
        }
        h1 { color: #4F5B93; }
        .card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        code {
            background: #e8e8e8;
            padding: 2px 6px;
            border-radius: 3px;
        }
    </style>
=======
    <link rel="stylesheet" href="style.css">
>>>>>>> upstream/master
</head>
<body>
    <h1>PHP Výuka</h1>

    <div class="card">
        <h2>Aktuální datum a čas</h2>
        <p><?= date('d.m.Y H:i:s') ?></p>
    </div>

    <div class="card">
        <h2>Informace o PHP</h2>
        <p>Verze PHP: <code><?= PHP_VERSION ?></code></p>
        <p>Operační systém: <code><?= PHP_OS ?></code></p>
    </div>

    <div class="card">
        <h2>Příklady</h2>
        <ul>
            <li><a href="formular.php">Formulář</a></li>
<<<<<<< HEAD
=======
            <li><a href="09-formulare-priklad.php">Lekce 9: Formuláře - Příklad</a></li>
            <li><a href="09-formulare-zadani.php">Lekce 9: Formuláře - Zadání</a></li>
            <li><a href="10-formular-akce-priklad.php">Lekce 10: Formulář s akcí na jinou stránku - Příklad</a></li>
            <li><a href="10-formular-akce-zadani.php">Lekce 10: Formulář s akcí na jinou stránku - Zadání</a></li>
            <li><a href="11a-registrace-priklad.php">Lekce 11a: Registrační formulář s validací - Příklad</a></li>
            <li><a href="11a-registrace-zadani.php">Lekce 11a: Editace profilu - Zadání</a></li>
            <li><a href="11b-objednavka-priklad.php">Lekce 11b: Objednávkový formulář - Příklad</a></li>
            <li><a href="11b-objednavka-zadani.php">Lekce 11b: Kalkulačka školního výletu - Zadání</a></li>
            <li><a href="11c-kviz-zadani.php">Lekce 11c: Kvíz s vyhodnocením - Zadání</a></li>
            <li><a href="12-soubory-priklad.php">Lekce 12: Práce se soubory (návštěvní kniha) - Příklad</a></li>
            <li><a href="12-soubory-zadani.php">Lekce 12: Kontaktní formulář s CSV - Zadání</a></li>
>>>>>>> upstream/master
        </ul>
    </div>

    <?php
    // PHP kód můžeš psát přímo do HTML
    $pozdrav = "Vítej v PHP!";
    ?>

    <div class="card">
        <h2><?= $pozdrav ?></h2>
        <p>Tento text je generovaný PHP.</p>
    </div>
</body>
</html>
