<?php include 'connection.php'; ?>

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
        $stmt = $conn->prepare("SELECT * FROM projects");
        $stmt->execute(); 
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);


        foreach($stmt->fetchAll() as $k=>$v) { ?>

        <a href="detail.php?id=<?php echo $v["id"]; ?>">
        <div class="project">
        <h1> Project
        <?php echo $v["title"]; ?>
        </h1>
        </div>
        </a>

    <?php }
    ; ?>
</body>

</html>