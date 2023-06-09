<?php 
// include 'db_conn.php';
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style/about.style.css" />
    <title>About</title>
  </head>
  <body>
    <!-- Navbar -->
    <div id="about-nav">
      <div class="cont-nav">
        <nav>
          <ul class="about-links">
            <li><a href="home.php">Home</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <div id="about-container">
      <h1 class="title">Our Team</h1>
      <div class="team-row">
        <div class="member">
          <img src="./images/pic1.jpg" alt="" />
          <h2>ADJIE CHANDRA ARBIE</h2>
          <p>NIM: 20021106044</p>
        </div>
        <div class="member">
          <img src="./images/pic2.jpeg" alt="" />
          <h2>PATRICK GUSTAVO BRAVY WALUJAN</h2>
          <p>NIM: 20021106121</p>
        </div>
        <div class="member">
          <img src="./images/pic3.jpg" alt="" />
          <h2>GRACIA AURELIA FLORENCIA RORI</h2>
          <p>NIM: 210211060153</p>
        </div>
        <div class="member">
          <img src="./images/pic4.jpg" alt="" />
          <h2>VIRGIE RIZKY FAZRAH POSUMAH</h2>
          <p>NIM: 210211060200</p>
        </div>
      </div>
    </div>

    <!-- Link Presentasi -->
    <div class="preview">
      <div class="card-container" id="cardContainer"></div>
      <div class="btn-find">
        <a
          href="https://drive.google.com/drive/folders/1hrCZC07Zg-gFgylFJA9xUNs8ZqU5FHBP?usp=share_link"
          class="find-book-btn"
          >Video Presentasi UTS dan UAS</a
        >
      </div>

      <div class="btn-find">
        
      </div>
    </div>
  </body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>