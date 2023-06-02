<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cifrado SHA1</title>

    <link rel="stylesheet" href="style-SHA1.css" />
</head>
<body>
    <form class="form" method="POST">
        <h3>Cifrado hash SHA1</h3>
	<h4>Gilberto Yosemir González Méndez</h4>
	<h5>Cambios realizados</h5>
        <p type="Cifrar texto:"><input placeholder="Escriba aquí.." type="text" name="cifrar" required></input></p>
        <p type="Texto cifrado:"></p>
        <p id="cifrado">
            <?php
                if (isset($_POST['cifrar'])) {
                    $cifra = $_POST['cifrar'];
                    $prueba = hash("sha1", $cifra);
                    echo $prueba;
                }
            ?>
        </p>
        <button>CIFRAR</button>
    </form>
</body>
</html>
