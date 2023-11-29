<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Edit Golongan</title>
</head>
<body>
    <div class="container">
        <h2>Edit Golongan</h2>

        <form action="<?php echo URL; ?>/golongan/update" method="post">
            <input type="hidden" name="id" value="<?php echo $data['row']['gol_id']; ?>">
            <table class="form-table">
                <tr>
                    <td><label for="kode">KODE GOLONGAN</label></td>
                    <td><input type="text" id="kode" name="kode" value="<?php echo $data['row']['gol_kode']; ?>" required></td>
                </tr>
                <tr>
                    <td><label for="nama">NAMA GOLONGAN</label></td>
                    <td><input type="text" id="nama" name="nama" value="<?php echo $data['row']['gol_nama']; ?>" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btn_save" value="SAVE" class="btn"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
