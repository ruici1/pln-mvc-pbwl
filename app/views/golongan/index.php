<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Golongan</title>
</head>
<body>
    <div class="container">
        <h2>Golongan</h2>

        <a href="<?php echo URL; ?>/golongan/input" class="btn">Input Golongan</a>

        <table id="dtb">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KODE GOLONGAN</th>
                    <th>NAMA GOLONGAN</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($data['rows'] as $row) { ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['gol_kode']; ?></td>
                        <td><?php echo $row['gol_nama']; ?></td>
                        <td><a href="<?php echo URL; ?>/golongan/edit/<?php echo $row['gol_id']; ?>" class="btnedt">Edit</a></td>
                        <td><a href="<?php echo URL; ?>/golongan/delete/<?php echo $row['gol_id']; ?>" class="btndlt" onclick="return confirm('Apakah Kamu Yakin Mau Menghapus Aku Dari Kehidupanmu?')">Delete</a></td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
