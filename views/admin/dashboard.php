<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    
        foreach($data as $user) {
            echo "<div>".$user->id."</div>";
            echo "<div>".$user->name."</div>";
        }
    ?>

    <?php 
    // echo \Emblaze\Database\Database::links($current_page,$pages);
    echo links($current_page,$pages);
    ?>
</body>

</html>