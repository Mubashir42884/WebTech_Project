<?php 

    if(isset($_GET['err'])){
        echo "null username/password";
    }
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <table border="2">
        <tr>
        <th align="right" width="1500" style='border:none;'><img src="Logo.png" height="100"></th>
            <th width="640" style='border:none;'></th>
            <th align="right" height="100" width="640" style='border:none;'>
                <a href="Login.php">Login | </a>
                <a href="Signup.php">Registration</a>
            </th>
        </tr>

        <tr>
            <td valign="middle" colspan="3" height="500" width="1920" align="left">
                <form method="post" action="loginCheck.php">
                    <fieldset>
                        <legend>Login</legend>

                        <table border="0">
                            <tr>
                                <td><label id="uname">Username</label></td>
                                <td>:<input type="text" name="username" id="uname" /></td>
                            </tr>
                            <tr>
                                <td><label id="pass">Password</label></td>
                                <td>:<input type="password" name="password" id="pass" /></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="remember" /> Remember Me</td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="Login" value="Login" /></td>
                                <td><a href="Forgot Password.html">Forgot Password?</a></td>
                            </tr>
                        </table>

                    </fieldset>
                </form>
            </td>
        </tr>
        
        <tr>
           
            <th colspan="3" width="1920" height="50" style='border:none;'>
                <h4 align="left">heptopass@gmail.com</h4></th>
          
                    
                 <th colspan="3" width="1920" height="50" style='border:none;'>
                  <h4 align="center"> ⓒ heptopass</h4> </th>
                    
           
               
                  <th colspan="3" width="1920" height="50" style='border:none;'>
                <h4 align="center">FAQ | Privacy | Terms & Uses</h4></th>
            </tr>
            </td>
        </tr>
    </table>
</body>
</html>