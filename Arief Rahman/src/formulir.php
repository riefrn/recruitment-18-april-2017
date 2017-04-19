<?php

// php code to Insert data into mysql database from input text
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "tes";
    
    // get values form input text and number

    $string = $_POST['string'];
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

	$query = "INSERT INTO `request` (`timestamp`, `string`) VALUES (now(),'$_POST[string]')";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> Arief Rahman </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        <form action="formulir.php" method="post">

            <input type="text" name="string" required placeholder="String"><br><br>

            <input type="submit" name="insert" value="Masukkan Ke Dalam Database">

        </form>

    </body>

</html>
