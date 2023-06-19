<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
<h1>User List</h1>
<ul>
    <?php foreach ($users as $user): ?>
        <li><?php echo $user['name']; ?> - <?php echo $user['email']; ?></li>
    <?php endforeach;?>
</ul>
</body>
</html>
