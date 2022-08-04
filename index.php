<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5 Букв</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="game">
        <div class="game__field">
            <?php for ($i = 1; $i <= 6; $i++):?>
                <div class="row" data-row="<?="$i"?>">
                    <?php for ($j = 1; $j <= 5; $j++):?>
                        <div class="cell">
                            <input type="text" name="" id="<?="$i$j"?>">
                        </div>
                    <?php endfor;?>
                </div>
            <?php endfor;?>
        </div>
        <div class="game__keyboard">
            <?php $letters = mb_str_split('ЙЦУКЕНГШЩЗХЪФЫВАПРОЛДЖЭЯЧСМИТЬБЮ');
            foreach ($letters as $index => $letter):?>
                <button class="letter" id="<?= $letter?>"><?=$letter?></button>
                <?php if ($index == 11 || $index == 22):?>
                    <br>
                <?php endif;?>
            <?php endforeach;?>
            <button class="back"><-</button>
        </div>
        <div>
            <button class="save-button">Отправить</button>
        </div>
    </div>

    <script src="game.js"></script>
</body>
</html>