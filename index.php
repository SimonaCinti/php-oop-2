<?php
include_once __DIR__ . '/classes/Price.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-com oop</title>
</head>

<body>
    <header>
        <h1>E-commerce Test </h1>
    </header>

    <main>
        <section class="main-item">
            <?php // price istance 
            $price = new Price('Razer', 'Mouse', 60, 2, 15);
            // var_dump($price);
            ?>
            <h2> Inventario</h2>

            <h3> Oggetto: <?php echo ($price->printItem());
                            ?>
            </h3>
            <h4> Prezzo:
                <?php
                echo ($price->price . ' euro')
                ?>
            </h4>
            <h4>Sconto applicato del <?php echo ($price->discount . '%') ?>
            </h4>
            <h4>Per un valore totale di:
                <?php
                echo ($price->calcDiscount());
                ?>
            </h4>
        </section>
    </main>
</body>

</html>