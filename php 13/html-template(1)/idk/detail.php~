<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail</title>
</head>

<body>


        <?php
        // echo'test';
        // $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
        $stmt = $conn->prepare("SELECT * FROM projects WHERE id = :id");
        $stmt->bindParam(':id' , $_GET["id"]);

        
        $stmt->execute(); 
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $k=>$v) { ?>
         <a href="detail.php?id=<?php echo $v["id"]; ?>">
           <div class="project">
            <h1><?php echo $v["title"]; ?></h1>
            <?php echo $v["lange-omschrijving"]; ?><br>
            <?php echo $v ["jaar"]; ?><br>
            <?php echo $v ["type"]; ?>
        </div>
    </a>

    <?php } ; ?>

</body>

</html>