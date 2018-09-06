<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title><?= $title ?></title>
</head>
<body>
    <section class="content">

        <h1><?= $title ?></h1>

        <form method="POST" autocomplete="off">
            <fieldset>
                <legend>
                    <?= $_SESSION["game"]->tries() ?>
                    <span class="tries">tries left</span>
                </legend>

                <p>Guess a number between 1 and 100</p>

                <input type="text" name="guess" onfocus="this.value=''" value="<?= $guess ?>" autofocus>
                <input type="submit" name="doGuess" value="Guess number">
                <input type="submit" name="doCheat" value="Cheat">
                <input type="submit" name="doReset" value="New game">

                <div class="information">
                    <p><?= $_SESSION["display"] ?></p>


                    <?php if (isset($_POST["doCheat"])) : ?>
                        <p>Cheat: <?= $_SESSION["game"]->number(); ?></p>
                    <?php endif; ?>

                </div>
            </fieldset>
        </form>
    </section>
</body>
</html>
