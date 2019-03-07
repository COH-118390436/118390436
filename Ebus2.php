<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
$emailValue = "";
/*
 * Create a session variable for the mobile number
 */
@$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txttotal'] = $totalValue2;
$_Session['txtEmail'] = $emailValue;

/*
 * Allocate the mobile number session variable to a textbox
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
    </head>
    
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
        <div class="form">
            <form name="Details" method="post" action="eBus3.php">
                <center>
                <h1>Personal Details</h1>
                </center>
                
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td><input type="text" id="txtName" name="txtName" value="" required="true" /></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input type="text" id="txtEmail" name="txtEmail" value="" required="true"/></td>
                        </tr>
                        <tr>
                            <td>Pin:</td>
                            <td><input type="text" id="txtPassword" name="txtPassword" value="" required="true" pattern="\d{4}"/></td>
                        </tr>
                        
                        <tr>
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                        
                    </table>
                </center>
                
                <center>
                    <input class="button" type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
                </center>
                
                <div>
                    <center>
                    <br><br><br>
                    <a href="index.php" class="button">Menu</a>
                    <a href="interests.html" class="button">Interests</a>
                    <br><br><br>
                    </center>
                </div>
                
            </form>
        </div>
    </body>
</html>