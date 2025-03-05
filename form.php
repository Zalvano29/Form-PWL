<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <label for="nim">NIM</label>
            <input type="text" name="nim"> <br> <br>
            <label for="nama">Nama</label>
            <input type="text" name="nama"> <br> <br>
            <input type="submit" name="simpan" value="Simpan"> <br> <br>
        </form>
    </div>

    <?php
    if(isset($_POST['simpan'])) {
        echo "Hello, $_POST[nim], $_POST[nama]";
    }
    ?>
</body>
</html>

<?php
    //Link GitHub : https://github.com/Zalvano29/Form-PWL
?>