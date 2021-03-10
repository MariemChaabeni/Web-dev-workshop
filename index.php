<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;400&display=swap" rel="stylesheet" />
  <title>Home</title>
</head>

<body>
  <header id="top">
    <?php 
       include 'navbar.php';
    ?>
    <div class="overlay">
      <div>
        <h1>WEB DEVELOPMENT CONFERENCE!!</h1>
        <h2>12 March, 2021</h2>
        <a href="register.php">Register Now</a>
      </div>
    </div>
  </header>
  <div id="div1">
    <h1>About Our Event</h1>
    <p>
      Lorem Ipsum is simply dummy text of the printing and typesetting
      industry. Lorem Ipsum has been the industry's standard dummy text ever
      since the 1500s, when an unknown printer took a galley of type and
      scrambled it to make a type specimen book. It has survived not only five
      centuries, but also the leap into electronic typesetting, remaining
      essentially unchanged. It was popularised in the 1960s with the release
      of Letraset sheets containing Lorem Ipsum passages, and more recently
      with desktop publishing software like Aldus PageMaker including versions
      of Lorem Ipsum.
    </p>
    <p>
      Lorem Ipsum is simply dummy text of the printing and typesetting
      industry. Lorem Ipsum has been the industry's standard dummy text ever
      since the 1500s, when an unknown printer took a galley of type and
      scrambled it to make a type specimen book. It has survived not only five
      centuries, but also the leap into electronic typesetting, remaining
      essentially unchanged. It was popularised in the 1960s with the release
      of Letraset sheets containing Lorem Ipsum passages, and more recently
      with desktop publishing software like Aldus PageMaker including versions
      of Lorem Ipsum.
    </p>
  </div>
  <div id="div2">
    <div>
      <h1 class="title">Meet The Team</h1>
    </div>
    <div class="team">
    <?php    
          $bdd = new PDO('mysql:host=localhost;dbname=my-ieee-event;charset=utf8', 'root', '');      
          $members = $bdd->query('SELECT *  FROM team');
          while ($member = $members->fetch()){
            echo '<div class="width-25"><div class="white avatar"  style="background-image: url(' . $member['avatar'] . ')"></div><h1>' . $member['firstname'] .  $member['lastname'] . '</h1></div>';
          }
    ?>
<!--    <div class="width-25">
        <div class="white avatar im2"  ></div>
        <h1>Firstname last</h1>
      </div> -->
    </div>
  </div>
  <div id="div3"></div>
  <?php 
       include 'footer.php';
    ?>
</body>

</html>