<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    </head>

<h1>This is my first CI page</h1>

<?php foreach($records as $row): ?>
<p><?php echo $row->title; ?></p>
<?php endforeach; ?>
