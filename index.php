<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
    <title>SEECware</title>
</head>
<body>
    <nav>
        <div class="nav_img_container">
          <img id="main-logo" src="assets/logo.png" alt="seec logo">
          <div></div>
          <a style="text-decoration: none;" href="https://www.google.com"><div class="aboutus">About us</div></a>
          
        </div>
        <div class="nav-decorator">
          <div class="nav-decorator-elem-blue"></div>
          <div class="nav-decorator-elem-red"></div>
          <div class="nav-decorator-elem-green"></div>
          <div class="nav-decorator-elem-purple"></div>
        </div>
      </nav>

      <div class="test_form_container">
      <form class="test_form" action="action.php" method="post">
        <img style="height: 100px; filter: invert(1);" src="https://isdamar.com/wp-content/uploads/2021/10/logo-isdamar-300x294-1.png" alt="CATERPILLAR LOGO">
        <br>
        <div>
          <h1>DATABASE COLLECTING</h1>
          <br>
        </div>
        <label for="name" id="name">Promt Machine Serial Number</label>
        <input name="name" id="name" placeholder="CATXXXXXXXXXX" type="text">
        <label for="model" id="model">Select the Machine Type:</label>
        <select name="model" id="model">
          <option value="725">Articulated Truck 725</option>
          <option value="730">Articulated Truck 730</option>
          <option value="730EJ">Articulated Truck 730EJ</option>
          <option value="740">Articulated Truck 740</option>
          <option value="740EJ">Articulated Truck 740EJ</option>
          <option value="740GC">Articulated Truck 740GC</option>
          <option value="D4">D4 Tractor</option>
          <option value="D5">D5 Tractor</option>
          <option value="D6">D6 Tractor</option>
          <option value="D7">D7 Tractor</option>
          <option value="D7T">D7T Tractor</option>
          <option value="D8T">D8T Tractor</option>
        </select>
        <label for="hours" id="hours">Work Hours</label>
        <input name="hours" id="hours" placeholder="3255.54" type="number">
        <label for="age" id="age">Bought Date</label>
        <input name="birthday" id="birthday" type="date">
        <label for="proyect" id="proyect">Assignated Proyect</label>
        <select name="proyect" id="proyect">
          <option value="trenmayat2">Tren Maya T2ST5-SUR</option>
          <option value="hermosillo-guasimas">Mina Guasimas</option>
          <option value="colima-concheno">Mina Concheño</option>
        </select>

        <button type="submit">Send</button>
      </form>
      </div>

    <footer>
        <div class="f-left-info">
            <div><a href="https://www.mysql.com/" target="_blank"><img src="./assets/includes-mysql.png" alt="INCLUDES MYSQL LOGO"></a></div>
            <div><img src="./assets/includes-php.png" alt="INCLUDES PHP LOGO"></div>
        </div>
        <div class="f-right-info">
            SEEC© 2024, Loc. Hobomó, San Francisco de Campeche, 24520..
        </div>
    </footer>
</body>
</html>