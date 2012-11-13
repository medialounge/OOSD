<html>
<head>
<title>Login</title>
<script src="functionsJs.js">
</script>
</head>
<body onLoad="document.loginProject.userId.focus();">
<h3>Login</h3>
<form id="loginForm"method="post" name="loginProject" action="bouncer.php" onSubmit="return checkLogin()">
<table width="278" border="0" >
  <tr>
    <td width="80"><p align="left">User-Id:</p></td><td width="188"><input name="userId" type="text" id="userId" maxlength="12"></td>
  </tr>
  <tr>
    <td><div align="left">Password:</div></td><td><input name="passId" type="password" id="userId2" maxlength="12"></td>
  </tr>
  <tr>
    <td height="43" colspan="2">
      
        <div align="left">
          <input name="submit" type="submit" id="submit" value="Login">
      </div></td></tr>
</table>
</form>
</html>
