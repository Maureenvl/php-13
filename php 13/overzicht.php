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

<form method="get" action="">
<input type="search" name="zoeken" placeholder="zoeken naar...">
<input type="submit" value="zoeken">
</form>

<?php
if (isset($_GET["zoeken"]))
{
echo ($_GET["zoeken"]);
}
?>



        <?php
        // echo'test';
        // $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
        $stmt = $conn->prepare("SELECT * FROM projects WHERE title LIKE':zoeken' ORDER BY id DESC");
        $stmt->bindParam(':zoeken', $_GET["id"]);


        $stmt->execute(); 
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $k => $v) { ?>

         <a href="detail.php?id=<?php echo $v["id"]; ?>">
           <div class="project">
            <h1><?php echo $v["title"]; ?></h1>
            <?php echo $v["korte_omschrijving"]; ?><br>
            <?php echo $v["jaar"]; ?><br>
            
        </div>
    </a>

    <?php } ; ?>

</body>

</html>