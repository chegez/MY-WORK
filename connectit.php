<?php
// 1.Set the connection variables
$dbhost = "localhost";
$dbuser = "test_app_name";
$dbpass = "test_app_secret";
$dbname = "test_app";
 
//connect to mysql server
  $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 
//check if any connection error was encountered
      if(mysqli_connect_errno()) {
        echo "Error: Could not connect to database.";
         exit;
         }
// 2. Perform database query
      $query = "SELECT * FROM subjects ";
      $result = mysqli_query($connection, $query);
      // Test if there was a query error
      if (!$result) {
         die("Database query failed.");
         }
          //var_dump($result);die();

      // Use returned data (if any)
      while($row = mysqli_fetch_row($result)) {
      // output data from each row
       var_dump($row);
       }
      // Release returned data
      mysqli_free_result($result);

// 3. Values in $_POST, subjects are id,name and age.
      $id = 1;
      $name = "Bobby";
      $age = "25yrs";
    // Perform database query
      $query = "INSERT INTO subjects (";
      $query .= " id, name, age";
      $query .= ") VALUES ("; 
      $query .= " '{$id}', {$name}, {$age}";
      $query .= ")";
      $result = mysqli_query($connection, $query);

    //Find out the id,name and age of the record
      $id=mysqli_insert_id($connection);
      $name=mysqli_insert_name($connection);
      $age=mysqli_insert_age($connection);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
      <title>Databases</title>
</head>
      <body>
           <ul>
<?php
// Use returned data (if any)
while($subject = mysql_fetch_assoc($result)) {
       //output data from each column
?>
 <?php echo $subject["id", "name", "age"] . ")" .$subject["id", "name", "age"] ;

    <?php 
       }
    ?>
   
    <?php
    // Release returned data
       mysqli_free_result($result);
       ?>
</body>
</html>

<?php
// 4. Delete connection id
   $id = 1;

   // Perform database query
      $query  = "DELETE FROM subjects ";
      $query .= "WHERE id {$id} ";
      $query .= "LIMIT 1";

      $result = mysqli_query($connection, $query);      
 
// Prepare the sql statement
if ($result && mysqli_affected_columns($connection) == 1) {
  
  } else {
        die("Unable to delete.");
  }   

// 5. Close database connection
      mysqli_close($connection);
?>
