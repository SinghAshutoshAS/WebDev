<html>
    <head>
        <title>Addition</title>
    </head>
    <body>
    <h3 style="text-align: center; margin-top: 20px">Enter Numbers:</h3>
    <hr>
        <form  method="post" action="sum.php">
            Number 1 <input type="number" name="num1"><br><br>
            Number 2 <input type="number" name="num2"><br><br>
            <input type="submit" name="submit">
        </form>
    <hr>
    </body>
</html>

<?php
    if(isset($_POST['submit'])){
        if(empty($_POST['num1']) || empty($_POST['num2'])){
            echo "No Input Provided..First enter values";
        }
        else{
            $n1= $_POST['num1'];
            $n2=$_POST['num2'];
            $sum = $n1+$n2;
            echo "Sum of $n1 and $n2 is $sum.";
        }
    }
?>