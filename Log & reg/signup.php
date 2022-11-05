<?php 
    if(isset($_GET['err'])){
        echo "null username/password";
    }
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <table border="2">
        <tr>
            <th align="right" width="1300" style="border:none;"><img src="Logo.png" height="100"></th>
            <th width="640" style='border:none;'></th>
            <th align="right" height="100" width="640" style='border:none;'>
               
                <a href="Login.php">Login | </a>
                <a href="Signup.php">Registration</a>
            </th>
        </tr>

        <tr>
            <td colspan="3">
                <form method="post" action="regCheck.php">
                    <fieldset>
                        <legend>REGISTRATION</legend>
                        
                        <table height="100" width="640">
                            <tr>
                                <td>Name</td>
                                <td>:<input type="text" name="name" value=""></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:<input type="email" name="email" value=""></td>
                            </tr>
                            <tr>
                                <td>Phone No </td>
                                <td>:<input type="text" name="number" value=""></td>
                            </tr>
                           
                            <tr>
                                
                            <td>Gender: </td>
	                            <td>
                                     <input type="radio" name="Gender" value="Male"> Male
	                                 <input type="radio" name="Gender" value="Female"> Female 
                                     <input type="radio" name="Gender" value="Others"> others
                                </td>
                                                 </tr></br>

                                 <tr>
       
        
                                        <td>Date of Birth</td>
                                            <td> <input type="date" name="dob" value=" " /><br />
            
                                                </tr></br>
                                 <tr>
                                    <td align=""><label for="Using as">Using as</label></td>
                                     <td>
                                        <select>
                                           <option value=" "></option>
                                           <option value="  "> </option>
                   
                                         </select>
                                             </td>
                                             <td width="20"></td>
                                               </tr></br>
                                               <tr>
                                                  <td>Username</td>
                                                   <td>:<input type="text" name="username" value=""></td>
                                                     </tr>
                                
                                <tr>
                                    <td>Password</td>
                                    <td>:<input type="password" name="password" value=""></td>
                                </tr>
                                <tr>
                                    <td>Confirm Password</td>
                                    <td>:<input type="password" name="password" value=""></td>
                                </tr>
                                
                            </tr>
                            
                             <tr>
	                                    <td>Choose file</td>
                                                    <td>
	                                            <input type="file" ></td>
                                                    </tr></br>
                                                    <tr>
                                                   <td> <input type="checkbox"  <a href="terms and policy.php">terms and policy </a></td>
                                                   </tr>
                                                    <tr>
                                <td colspan="2">
                                <input type="submit" name="submit" value="Submit">
                                <input type="reset" name="reset" value="Reset">
                                </td>
                            </tr>
                        
                        </table>
                    </fieldset>
                </form>
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