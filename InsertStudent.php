<html>
  <head>
    <title> Insert Student</title>
  </head>
  <body> 
    <h3> Student </h3>
    <!--- Create Form --->
    <form method="GET", action="insert.php"> 
      <p>
      Student ID: <br>
      <input type="text" name = "id"/>
      </p>

      <p>
      Student Name: <br>
      <input type="text" name="fName"/>
      </p>

      <p>
      Student Address: <br>
      <input type="text" name="address"/>
      </p>

      <p>
      Student Payment: <br>
      <input type="text" name="payment"/>
      </p>

      <p>
      
      <input type="reset" value="Clear" />
      <input type="submit" value="Insert"/>
            
      </p>
      
    </form>
  </body>
</html>