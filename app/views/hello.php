<!doctype html>
<html>
	<head>
		<title>Punctual</title>
	</head>
	<body>
		<?php if ( ! $logged ) : ?>
		<form method="post" action="/login">
			<h3>Log in</h3>
			<input type="email" name="email" placeholder="email" value="" required /> <br />
			<input type="password" name="password" placeholder="password" value="" required /> <br />
			<input type="submit" name="submit" />
		</form>
		<?php else : ?>
		<form method="post" action="submit">
			<h3>Add link</h3>
			<input type="text" name="title" placeholder="title" size="100" required> <br>
			<input type="text" name="url" placeholder="link" size="100" required> <br>
			<textarea name="description" id="" cols="30" rows="10"></textarea> <br>
			<input type="submit" name="submit" />
		</form>

		<h1>Your Links</h1>
		<ul>
			<?php foreach ( $links as $link ) : ?>
			<li><a href="<?php echo $link->url; ?>" target="_blank"><?php echo $link->title; ?></a></li>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
	</body>
</html>