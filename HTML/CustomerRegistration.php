<html>
<head>
<title>Customer Registration</title>
<link type="text/css" rel="stylesheet" href="formValidationCSS.css" />
<script src="functionsJs.js">
</script>
</head>
<body onLoad="document.registrationForm.userId.focus();">
<form id="customerRegistration" method="post" name="registrationForm" action="bouncer.php" onsubmit="return checkForm()">
  <table width="1050" border="1">
    <tr>
      <td colspan="2"><div align="center">
        <h1>Customer Registration</h1>
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><p align="right">Use tab keys to move from one input field to the next</p></td>
    </tr>
    <tr>
      <td><div align="right">User id: </div></td>
      <td><input name="userId" type="text" id="userId" maxlength="12"></td>
    </tr>
    <tr>
      <td><div align="right">Password:</div></td>
      <td><input name="passId" type="password" id="passId" maxlength="12"></td>
    </tr>
    <tr>
      <td><div align="right">Name:</div></td>
      <td><input name="name" type="text" maxlength="50"></td>
    </tr>
    <tr>
      <td><div align="right">Address:</div></td>
      <td><input name="address" type="text" id="address" maxlength="50"></td>
    </tr>
    <tr>
      <td><div align="right">City:</div></td>
       <td><select name="city">
          <option selected="" value="default">(Please select a City)</option>
          <option value="CL">Calgary</option>
          <option value="ED">Edmonton</option>
          <option value="FO">Fort McMurray</option>
        </select>      </td>
    </tr>
    <tr>
      <td><div align="right">Province:</div></td>
      <td><select name="province">
          <option selected="" value="default">(Please select a Province)</option>
          <option value="AL">Alberta</option>
          <option value="ON">Ontario</option>
          <option value="QU">Quebec</option>
        </select>      </td>
    </tr>
    <tr>
      <td><div align="right">Postal Code:</div></td>
      <td><input name="postalcode" type="text" id="postalcode" maxlength="10"></td>
    </tr>
    <tr>
      <td><div align="right">Country:</div></td>
      <td><select name="country">
          <option selected="" value="default">(Please select a Country)</option>
          <option value="CA">Canada</option>
          <option value="US">U.S.A.</option>
          <option value="PE">Per&uacute;</option>
        </select>      </td>
    </tr>
    <tr>
      <td><div align="right">Email:</div></td>
      <td><input name="emailf" type="text" id="emailf" maxlength="50"></td>
    </tr>
    <tr>
      <td><div align="right">Home Phone Number:</div></td>
      <td><input name="homenumber" type="text" id="homenumber" maxlength="10"></td>
    </tr>
    <tr>
      <td><div align="right">Business Phone Number:</div></td>
      <td><input name="businessnumber" type="text" id="businessnumber" maxlength="10"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="submit" type="submit"  value="Submit">
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>