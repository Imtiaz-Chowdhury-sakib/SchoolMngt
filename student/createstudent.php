<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
  <style>
    /* CSS styles for the form */
   
    .container {
     
      height: 700px;
      border: 1px solid #000;
      padding: 20px;
      margin: 0 auto;
      box-sizing: border-box;
      margin-top: 5%;
      background-color: #f2f2f2;

    }
    form {
      max-width: 400px;
      margin: 0 auto;
      
    }

    label {
      display: block;
      margin-top: 10px;
    }

    input[type="text"],
    input[type="date"] {
      width: 100%;
      height: 100%;
      padding: 5px;
      resize: none;
    }

    input[type="submit"] {
      margin-top: 10px;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #538657;
    }
    
  </style>
  
</head>
<body>
  
  <div class="container">
    <h1 style="text-align: center;">Create Student</h1>
  <form method="get" action="create_result.php">
    <label for="id">ID:</label>
    <input type="text" id="id" name="id" required>

    <label for="dept">Department:</label>
    <input type="text" id="dept" name="dept" required>

    <label for="batch">Batch:</label>
    <input type="text" id="batch" name="batch" required>


    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="nid">NID:</label>
    <input type="text" id="nid" name="nid" required>

    <label for="birthdate">Birthdate:</label>
    <input type="date" id="birthdate" name="birthdate" required>

    <label for="address">Address:</label>
    <textarea id="address" name="address" rows="4" style=" height: 50px; width: 410px; resize: none ;"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>







