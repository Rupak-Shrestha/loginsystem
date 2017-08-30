<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
		<div class="box">
 			<form id="form" name="form" method="post" action="logincode.php">
    			<table width="200" border="0" cellspacing="10">
      				<tr>
				    	<td colspan="2"><div align="center" style="background-color: grey; color: #ffffff;">User Login</div></td>
				    </tr>
				    <tr>
				    	<td width="73">User id</td>
				    	<td width="93">
				    		<input type="text" name="userid" id="userid"/>
				    	</td>
				    </tr>
      				<tr>
        				<td>Password</td>
        				<td>	
        					<input type="password" name="password" id="password"/>
        				</td>
      				</tr>
      				<tr>
      				  <td colspan="2"><input name="yes" type="checkbox" id="yes" value="yes" /> Remember Me!</td>
      				</tr>

<!--      				<tr>-->
<!--      					<td colspan="2">-->
<!--      						<div id="msg">-->
<!--      							<p>message section</p>-->
<!--      						</div>-->
<!--      					</td>-->
<!--      				</tr>-->

      				<tr>
      				  <td colspan="2"><div align="center">
      				    <input type="submit" name="submit" id="submit" value="Submit" />
      				    <input type="reset" name="reset" id="reset" value="Reset" />
      				  </div></td>
      				</tr>
    			</table>
  			</form>
		</div>

</body>
</html>