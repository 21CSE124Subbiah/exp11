 <!DOCTYPE html>
<html>
<head>

<style>
form{
    background-color:gray;
    width: 40%;
  }
</style>
</head>
<body>
<center>
    <h2>Form Validation</h2>
    <form name="myForm" action="newEmptyPHP.php" method="post">
  <table> 
    <tr>
  <td>Enter your Name:<br><br></td>
  <td><input type="text" name="fname"  pattern="[a-z]{1,15}" title="name should only contain letters" required><br><br></td>

     <tr>
    <td>Enter your mail ID:<br><br></td> 
    <td><input type="email" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="enter a proper email iD" required><br><br></td>
    </tr>
     <tr>
            <td>Enter Mobile No:<br><br></td> 
            <td><input type="number" name="number" pattern="/^\d{10}$/" required><br><br></td>
            </tr>
            <tr>
                <td>choose your appointment date:<br><br></td> 
                <td><input type="date" name="date" required><br><br></td>
                </tr>
             <tr>
                <td>choose your appointment time:<br><br></td> 
                <td><input type="time" name="time" required><br><br></td>
                </tr> 
                </table> 
<td colspan="2"><input type="submit" value="submit"></td>
<br><br>
</form>

</center>
</body>
</html>