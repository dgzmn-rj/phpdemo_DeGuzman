<?php
include 'pure_php.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Demo</title>
</head>
<body>
  <a href ="pure_php.php">Next Page</a>
  <br>
  <h1>
    <label>Username:</label>
    <br>
    <?php echo $username;?>
    <br>
    <label>User ID:</label>
    <?php echo $user_id; ?>
    <br>
    <label>Name_Mo:</label>
    <?php echo $name_mo; ?>
  </h1>

  <button type="button" onclick="greetUser('alert')">Greet User</button>

  <script>
    let username = "<?php echo $username?>";
    let user_id = "<?php echo $user_id;?>";
    let name_mo ="<?php echo $name_mo;?>";
    function greetUser(){
      alert("Hello" + username + "!" + " your user id is:" + user_id + " Name:"+ name_mo);
    }
  </script>
</body>
</html>