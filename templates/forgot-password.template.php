<?php require 'partials/head.php'; ?>
<?php require 'partials/header.php'; ?>
<?php require 'partials/banner.php'; ?>


<form action="../includes/forgotpassword-include.php" method="post">
	<label for="email">Email:</label>
	<input type="email" id="email" name="email" required>
	<input type="submit" value="Submit">
</form>

<?php require 'partials/footer.php'; ?>