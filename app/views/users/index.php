<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Users</title>
</head>
<body>
    <div class="container">
        <h2>Users</h2>

        <a href="<?php echo URL; ?>/users/input" class="btn">Input User</a>

        <table>
            <tr>
                <th>NO</th>
                <th>EMAIL</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>NO HP</th>
                <th>KODE POS</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>

            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['user_email']; ?></td>
                    <td><?php echo $row['user_nama']; ?></td>
                    <td><?php echo $row['user_alamat']; ?></td>
                    <td><?php echo $row['user_hp']; ?></td>
                    <td><?php echo $row['user_pos']; ?></td>
                    <td><a href="<?php echo URL; ?>/users/edit/<?php echo $row['user_id']; ?>" class="btnedt">Edit</a></td>
                    <td><a href="<?php echo URL; ?>/users/delete/<?php echo $row['user_id']; ?>" class="btndlt" onclick="return confirm('Apakah Kamu Yakin Mau Menghapus Aku Dari Kehidupanmu?')">Delete</a></td>
                </tr>
            <?php $no++;
            } ?>
        </table>
    </div>
</body>
</html>
