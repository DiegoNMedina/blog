<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo base_url('blog/skills'); ?>" method="POST">
        <label>Name</label><input type="text" name="Name">
        <label>Progress</label><input type="text" name="Progress">
        <input type="submit" value="Insertar">
    </form>
</body>

</html>