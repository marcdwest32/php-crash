<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/

if(isset($_POST['submit'])) {
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  $age = htmlspecialchars($_POST['age']);

  // $age = filter_var($_POST['age'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  echo $name;
  echo $age;
  // echo $_POST['age'];
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<div>
  <label for="name">Name: </label>
  <input type="text" name="name">
</div>
<div>
  <label for="age">Age: </label>
  <input type="text" name="age">
</div>
  <input type="submit" value="Submit" name="submit">
</form>