<?php 
    session_start();

    if(!isset($_COOKIE['status'])){
        header('location: login.php');
    }
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <table border="2">
        <tr>
              <th align="right" width="1500" style='border:none;'>
                <img src="Logo.png" height="100"></th>
            </th>
            <th width="640" style='border:none;'>

            </th>
            <th align="right" height="100" width="640" style='border:none;'>
                Logged in as
                <a href="Home.html">
                    <?php 
                        $username = $_SESSION['user']['username'];
                        echo($username);
                    ?>
                | </a>
                <a href="logout.php">Log Out</a>
            </th>
        </tr>

        <tr>
            <td valign="top" colspan="3" height="150" width="1920" align="left">
                <table border="0">
                    <tr>
                        <th>Account</th>
                    </tr>
                    <tr style="border:solid" ;>
                        <td>
                        <ul>
                                <h2><a href="">Website Description</a></h2>
                                <h2><a href="">Website Features</a></h2>
                                <h2><a href="">Website Facilities</a></h2>
                                <h2><a href="">User Guidelines</a></h2>
                            
                               
                            </ul>
                        </td>
                        <td valign="middle" width="500">
                            <fieldset>
                                <legend>PROFILE</legend>

                                <table>
                                    <tr>
                                        <td><b>Name</b></td>
                                        <td> : 
                                            <?php
                                            $name = $_SESSION['user']['name'];
                                            echo($name);
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Username</b></td>
                                        <td> : <?php echo($username); ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Email</b></td>
                                        <td> : 
                                            <?php
                                            $email = $_SESSION['user']['email'];
                                            echo($email);
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Gender</b></td>
                                        <td> : 
                                            <?php
                                            $gender = $_SESSION['user']['gender'];
                                            echo($gender);
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Date of Birth</b></td>
                                        <td> : 
                                            <?php
                                            $dob = $_SESSION['user']['dob'];
                                            echo($dob);
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                        </td>
                    </tr>
                </table>
            </td>
            
        </tr>

        <th colspan="3" width="1920" height="50" style='border:none;'>
                <h4 align="left">heptopass@gmail.com</h4></th>
          
                    
                 <th colspan="3" width="1920" height="50" style='border:none;'>
                  <h4 align="center"> ⓒ heptopass</h4> </th>
                    
           
               
                  <th colspan="3" width="1920" height="50" style='border:none;'>
                <h4 align="center">FAQ | Privacy | Terms & Uses</h4></th>
            </tr>
        </tr>
    </table>
</body>
</html>