
<!DOCTYPE html>
<html>
    
    <header>
        <style>
            h1 {
                color: #000000;
                font-size: 70px;
            }
            
            .button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }
        </style>
    </header>
    
<body bgcolor="#ffd8d8">
<!-- Starting the session to get the session variable from the last page-->

    <center>
        <h1>Receipt</h1>
<?php

session_start();
@$totalValue2 = $_POST['txtTotal'];
@$fullNameValue = $_POST['txtName'];
@$emailValue = $_POST['txtEmail'];
echo "Name: ".$fullNameValue.".";
echo "<br></br>";
echo "Email: ".$emailValue.".";
echo "<br></br>";
echo "Total Amount: ".$totalValue2.".";
?>

    <div>
        <br><br><br>
        <a href="index.php" class="button">Menu</a>
        <a href="interests.html" class="button">Interests</a>
        <br><br><br>
    </div>
    </center>
</body>
</html>