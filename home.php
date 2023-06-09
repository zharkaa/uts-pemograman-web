<?php 
include 'db_conn.php';
session_start();

// Prepare and execute the SQL query
$query = "SELECT id, title, about, image FROM products ORDER BY id ASC LIMIT 3";
$result = mysqli_query($conn, $query);

// Fetch the data and store it in an array
$cards = array();
while ($row = mysqli_fetch_assoc($result)) {
    $cards[] = $row;
}


if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="style2.css" /> -->
    <link rel="stylesheet" href="./style/style.css" />
    <link rel="stylesheet" href="./style/footer.style.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Home</title>
  </head>
  <body>

    <!-- Navbar -->
    <div id="homepage">
      <div class="cont">
        <div></div>

        <nav>
          <ul class="links">
            <li><a href="#">Home</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
        </nav>

        <div class="login">
          <a href="logout.php" style="--clr: #43c6ac">
            <span>Logout</span>
          </a>
        </div>
      </div>

      <!-- Home Display -->
      <div class="home-container">
        <div class="home-content">
          <h1>
            Welcome To <br />
            The Book Collection Website,
            <?php echo $_SESSION['name']; ?>.
          </h1>
        </div>
      </div>

      <!-- Search -->
    </div>

    <!-- Card Data -->
    <div class="s-container">
      <div id="search">
        <h1>Books Preview</h1>
        <!-- <form action="" class="search-bar">
          <input type="text" placeholder="Search" />
          <button type="submit">
            <img src="images/search.png" alt="" />
          </button>
        </form> -->
      </div>
    </div>

    <div class="preview">
      <div class="card-container" id="cardContainer">
      <?php foreach ($cards as $card) : ?>
      <div class="card">
        <a href="">
          <img class="card-img" src="data:image/jpeg;base64,<?php echo base64_encode($card['image']); ?>" alt="" />
          <div class="card-info">
            <h2 class="card-title"><?php echo $card['title']; ?></h2>
            <p class="card-text"><?php echo $card['about']; ?></p>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="btn-find">
    <a href="products.php" class="find-book-btn">Find More Books</a>
  </div>

    <!-- about content -->
    <div id="about-content">
      <div class="content-1">
        <h1>About</h1>
        <p>
          Website ini adalah platform koleksi buku online yang berfungsi
          sebagai perpustakaan virtual, yang memungkinkan pengguna untuk melihat
          koleksi buku digital yang disukai. Situs ini
          biasanya menawarkan fitur-fitur untuk membantu para pengguna untuk belajar ataupun hanya untuk entertaiment.
        </p>
      </div>
    </div>

    <!-- footer -->
    <footer>
      <div class="footer">
        <div class="row">
          <a href=""><i class="fa-brands fa-facebook"></i></a>
          <a href=""><i class="fa-brands fa-instagram"></i></a>
          <a href=""><i class="fa-brands fa-youtube"></i></a>
          <a href=""><i class="fa-brands fa-twitter"></i></a>
        </div>
        <div class="row">
          <ul>
            <li>
              <a href="./pages/about.php">About Us</a>
            </li>
            <li>
              <a href="#">Presentation</a>
            </li>
          </ul>
        </div>
        <div class="row">CopyRight &copy; 2023</div>
      </div>
    </footer>

    <!-- <script src="./js/script.js"></script> -->
  </body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>