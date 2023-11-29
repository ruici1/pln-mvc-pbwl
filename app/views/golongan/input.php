<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Input Golongan</title>
</head>
<body>
    <div class="container">
        <h2>Input Golongan</h2>

        <form action="<?php echo URL; ?>/golongan/save" method="post">
            <table class="form-table">
                <tr>
                    <td><label for="kode">KODE GOLONGAN</label></td>
                    <td><input type="text" id="kode" name="kode" required></td>
                </tr>
                <tr>
                    <td><label for="nama">NAMA GOLONGAN</label></td>
                    <td><input type="text" id="nama" name="nama" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btn_save" value="SAVE" class="btn"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</htm
