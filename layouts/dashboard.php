<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Suendri">

	<title>Tugas | PBWL Project10</title>
	<link rel="shortcut icon" href="<?php echo AST; ?>/img/icon.png" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo AST; ?>/datatables/datatables.min.css">
	<link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">

	<script src="<?php echo AST; ?>/datatables/datatables.min.js"></script>

</head>

<body>

<aside>
    <header>
        <img src="<?= AST ?>/img/icon.png" class="brand">
        <div class="user"><?= $_SESSION['user_nama'] ?></div>
    </header>

    <nav>
        <ul>
            <li>
                <a href="<?= URL ?>/dashboard">
                    <img class="icon" src="<?= AST ?>/img/home.png" alt=""> Home
                </a>
            </li>
            <li>
                <a href="<?= URL ?>/pelanggan">
                    <img class="icon" src="<?= AST ?>/img/pel.png" alt=""> Pelanggan
                </a>
            </li>
            <li>
                <a href="<?= URL ?>/golongan">
                    <img class="icon" src="<?= AST ?>/img/golo.png" alt=""> Golongan
                </a>
            </li>
            <?php if ($_SESSION['user_role'] < 2): ?>
                <li>
                    <a href="<?= URL ?>/users">
                        <img class="icon" src="<?= AST ?>/img/users.png" alt=""> Users
                    </a>
                </li>
            <?php endif; ?>
            <li>
                <a href="<?= URL ?>/dashboard/logout">
                    <img class="icon" src="<?= AST ?>/img/logout.png" alt=""> Logout
                </a>
            </li> 
        </ul>
    </nav>
</aside>

	<main>
		<article>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</article>

		<footer>
			Copyright &copy; 2022 - <?php echo date('Y'); ?>. Designed by Mr. Sue
		</footer>
	</main>

	<script>
		new DataTable('#dtb', {
			info: false,
			ordering: true,
			paging: true
		});
	</script>

</body>

</html>