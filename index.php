<?php
include_once __DIR__ . '/classes/Price.php';
include_once __DIR__ . '/classes/Member_price.php';
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

            <h3> Oggetto:
                <?php echo ($price->printItem());
                ?>
            </h3>
            <h3> In magazzino:
                <?php echo ($price->num_items); ?>
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
        <!-- Membership -->
        <section class="loyalty-item">
            <?php // price istance 
            $Member_price = new Member_price('Logitec', 'Keyboard', 160, 5,);
            $Member_price->setTier('Gold');
            ?>
            <h2> Inventario per Membership</h2>
            <h3> Oggetto:
                <?php echo ($Member_price->printItem());
                ?>
            </h3>
            <h3> In magazzino:
                <?php echo ($Member_price->num_items); ?>
            </h3>
            <h4> Prezzo:
                <?php
                echo ($Member_price->price . ' euro')
                ?>
            </h4>
        </section>
    </main>
</body>

</html>