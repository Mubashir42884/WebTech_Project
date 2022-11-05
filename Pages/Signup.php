<?php 
    if(isset($_GET['err'])){
        echo "null username/password";
    }
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body style="font-family: Quicksand ;">
    <table border="0">
        <tr bgcolor="#4e0755">
            <th style='border:white;' align="center" colspan="2">
                <a href="Home.php"><img src="Logo.png" height="180"></a>

                <p style='border:none; font-size: 20;' align="right">
                    <a href="Home.php" style="color: #99d9ea ;">Home</a>&nbsp;|&nbsp;&nbsp;
                    <a href="Login.php" style="color: #99d9ea ;">Login</a>&nbsp;|&nbsp;&nbsp;
                    <a href="Signup.php" style="color: #99d9ea ;">&nbsp;Registration</a>&nbsp;&nbsp;
                </p>
            </th>
        </tr>

        <tr style="font-size: 26px;">
            <td align="center">
                <form method="post" action="regCheck.php">
                
                    <fieldset style="width: 550px; border-radius: 30px;">
                    <legend  style="color: #4e0755; border-radius: 5px;"><b>REGISTRATION</b></legend>
                    <table border="0">
                        <tr style="font-size: 18px;">
                            <td>Name</td>
                            <td> : <input size="35" type="text" name="name" value="" style="font-family:'Quicksand'; font-size: 18px;"></td>
                        </tr>

                        <tr style="font-size: 18px;">
                            <td>Email</td>
                            <td> : <input type="email" name="email" value="" style="font-family:'Quicksand'; font-size: 18px;"></td>
                        </tr>

                        <tr style="font-size: 18px;">
                            <td>Phone No</td>
                            <td> : <input type="number" name="phno" value="" style="font-family:'Quicksand'; font-size: 18px;"></td>
                        </tr>

                        <tr style="font-size: 18px;">
                            <td>Gender </td>
                            <td> : 
                                <input type="radio" name="Gender" value="Male" style="font-family:'Quicksand'; font-size: 18px;"> Male
                                <input type="radio" name="Gender" value="Female" style="font-family:'Quicksand'; font-size: 18px;"> Female
                                <input type="radio" name="Gender" value="Others" style="font-family:'Quicksand'; font-size: 18px;"> Others
                            </td>
                        </tr>

                        <tr style="font-size: 18px;">
                            <td>Date of Birth</td>
                            <td> : <input type="date" name="dob" value=" " style="font-family:'Quicksand'; font-size: 18px;"/><br />
                        </tr>

                        <tr style="font-size: 18px;">
                            <td>Username</td>
                            <td> : <input type="text" name="username" value="" style="font-family:'Quicksand'; font-size: 18px;"></td>
                        </tr>

                        <tr style="font-size: 18px;">
                            <td>Password</td>
                            <td> : <input type="password" name="password" value="" style="font-family:'Quicksand'; font-size: 18px;"></td>
                        </tr>

                        <tr style="font-size: 18px;">
                            <td>Confirm Password</td>
                            <td> : <input type="password" name="password" value="" style="font-family:'Quicksand'; font-size: 18px;"></td>
                        </tr>

                        <tr style="font-size: 18px;">
                            <td>Profile Picture</td>
                            <td>
                               :  <input type="file" name="dp" style="font-family:'Quicksand'; font-size: 18px;">
                            </td>
                        </tr>

                        <tr style="font-size: 18px;">
                            <td colspan="2" align="center"> <input type="checkbox" style="font-family:'Quicksand'; font-size: 18px; color: #red;"/> <b>Agree to Terms & Policy</b></td>
                        </tr>
                        <tr><td colspan="2"><br></td></tr>
                        <tr style="font-size: 18px;">
                            <td colspan="2" align="center">
                                <input type="submit" name="register" value="Register" style="font-family:'Quicksand'; font-size: 18px;">
                                <input type="reset" name="reset" value="Reset" style="font-family:'Quicksand'; font-size: 18px;">
                            </td>
                        </tr>
                    </table>
                    </fieldset>
                </form>
            </td>
        </tr>

        <tr>
            <td colspan="3" width="1920" height="50" style='border:none;'>
                <h4 align="center">Copyright ⓒ 2022</h4>
            </td>
        </tr>
    </table>
</body>
</html>