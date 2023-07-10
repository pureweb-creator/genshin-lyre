<!DOCTYPE html>
<html lang="<?= $data->lang_code ?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $data->title ?></title>

    <link rel="stylesheet" href="<?= $data->home_url ?>/static/css/main.css">
</head>
<body>
<nav>
	<ul>
		<li><a href="<?= $data->home_url."/".$data->lang_code ?>">Home <?= $data->active == 'home' ? 'Active' : ''; ?></a></li>
		<li><a href="<?= $data->home_url."/".$data->lang_code ?>/about">About <?= $data->active == 'about' ? 'Active' : ''; ?></a></li>
		<li><a href="<?= $data->home_url."/".$data->lang_code ?>/contacts">Contacts <?= $data->active == 'contacts' ? 'Active' : ''; ?></a></li>
	</ul>
</nav>

<nav>
	<ul>
		<?php foreach ($data->lang_list as $lang): ?>
			<li><a href="<?= $data->home_url."/".$lang."/".$data->active ?>">
				<?= $lang ?>
				<?= $lang == $data->lang_code ? _("Active") : ""; ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</nav>