<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">
  <title>Document</title>
</head>

<body>
    <main>
      <!-- we use this 2 form attribiutes in order to tell our php how and where(action-> include and den to formhandler) we want to submit the data -->
      <form action="includes/formhandler.php" method="post"> 
        <label for="firstname">First name?</label>
        <input type="text" name="firstname" id="firstname" placeholder="Firstname...">

        <label for="lastname">Last name?</label>
        <input type="text" name="lastname" id="lastname" placeholder="Lastname...">

        <label for="favpet">Favourite pet?</label>
        <select id="favpet" name="favpet">
          <option value="none">None</option>
          <option value="dog">Dog</option>
          <option value="cat">Cat</option>
          <option value="bird">Bird</option>
          </select>

        <button type="submit">Submit</button>
      </form>
    </main>

</body>
      
</html>