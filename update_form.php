<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>update</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        }

        form {
          background-color: white;
          padding: 30px;
          border-radius: 12px;
          box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
          width: 100%;
          max-width: 450px;
        }

        h1 {
          text-align: center;
          color: #333;
          margin-bottom: 20px;
          font-size: 24px;
        }

        label {
          display: block;
          margin: 8px 0 6px;
          font-size: 14px;
          color: #333;
          font-weight: 600;
        }

        input {
          width: 100%;
          padding: 12px;
          margin-bottom: 20px;
          border-radius: 8px;
          border: 1px solid #ccc;
          box-sizing: border-box;
          font-size: 16px;
        }

        input:focus {
          border-color: #28a745;
          outline: none;
          box-shadow: 0 0 5px rgba(40, 167, 69, 0.3);
        }

        button {
          width: 100%;
          padding: 12px;
          background: #5c6bc0;
          color: white;
          border: none;
          border-radius: 8px;
          cursor: pointer;
          font-size: 16px;
          font-weight: bold;
          transition: background-color 0.3s ease;
        }

        button:hover {
          background-color: #0056b3; /* Darker blue for hover effect */
        }

        button:focus {
          outline: none;
          box-shadow: 0 0 5px rgba(0, 123, 255, 0.3); /* Blue focus shadow */
        }


        @media (max-width: 500px) {
          form {
            padding: 20px;
          }

          h1 {
            font-size: 20px;
          }

          label {
            font-size: 13px;
          }

          input, button {
            font-size: 14px;
          }
        }
    </style>
  </head>
  <body>
    <form method="post">
      <h1><b>Update Form</b></h1>
      <br />
      <label for="name">Name</label>
      <input type="text" name="name" id="name" required /><br /><br />
      <label for="status">Status</label>
      <input name="status" id="status" placeholder="Active/Inactive" required /><br /><br />
      <label for="cd">Create Date</label>
      <input name="cd" id="cd" placeholder="0000-00-00" required /><br /><br />
      <button name="submit">SUBMIT</button><br>
    </form>
  </body>
</html>
<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'county';
  
  $conn = new mysqli($host ,$user ,$pass ,$db);
  
  if($conn){
  echo "";
  }
  else{
    die(mysqli_error($conn));
  }

  
  if(isset($_POST['submit']))
  {
    $name = $_POST["name"];
    $status =  $_POST["status"];
    $cd=$_POST["cd"];
    $sql="update country set status='$status',create_date='$cd' where name='$name'";
    $result=mysqli_query($conn,$sql);
    if($result){
      echo"";
    }
    else{
      die(mysqli_error($conn));
    }
  }
    
?>