<?php
    include 'config.php';
    $id = $_GET['id'];
?>
<html>
    <head>
        <title>Confirm Deletion</title>
        <style>
            .pop{
                background-color: yellow;
                height: 20px;
                width: 300px;
                text-align: center;
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    </head>
    <body>
        <div class = "pop">
            <?php echo "Are you sure you want to delete?"?>
            <a href = "viewDetails.php">No</a>
            <a href = "delete.php?id=<?php echo $id?>">Yes</a>
        </div>
    </body>
</html>