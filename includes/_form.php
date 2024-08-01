<div class="test_form_container">
      <form class="test_form" action="action.php" method="post">
        <img style="height: 100px; filter: invert(1);" src="https://isdamar.com/wp-content/uploads/2021/10/logo-isdamar-300x294-1.png" alt="CATERPILLAR LOGO">
        <br>
        <div>
          <h1>MACHINERY REGISTRATION</h1>
          <br>
        </div>
        <label for="name">Promt Machine Serial Number</label>
        <input name="name" id="name" placeholder="CATXXXXXXXXXX" type="text" pattern="CAT+\d{10,12}" required>
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
        <label for="hours">Work Hours</label>
        <input name="hours" id="hours" placeholder="3255.54" type="number">
        <label for="age">Bought Date</label>
        <input name="birthday" id="date" type="date" required>
        <label for="proyect">Assignated Proyect</label>
        <select name="proyect" id="proyect">
          <option value="trenmayat2">Tren Maya T2ST5-SUR</option>
          <option value="hermosillo-guasimas">Mina Guasimas</option>
          <option value="colima-concheno">Mina Concheño</option>
        </select>

        <button type="submit">Send</button>
        <br>
      </form>
      </div>