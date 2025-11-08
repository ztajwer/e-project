<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Font Awesome CDN -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
  />
  <!-- Your CSS -->
  <link rel="stylesheet" href="../css/index.css">
</head>

<body>
<nav class="navbar">
  <div class="logo">
    <img id="logo" src="../assets/logo.png" alt="eBooks Logo">
  </div>
  <div class="links">
    <a href="index.php"><i class="fa-solid fa-house"></i> Home</a>
    <a href="pages/about.php"><i class="fa-solid fa-circle-info"></i> About</a>
    <a href="books/index.php"><i class="fa-solid fa-book-open"></i> Books</a>
    <a href="competitions/index.php"><i class="fa-solid fa-trophy"></i> Competitions</a>
    <a href="pages/contact.php"><i class="fa-solid fa-envelope"></i> Contact</a>
    <button onclick="toggleDarkMode()" class="dark-btn">
      <i class="fa-solid fa-moon"></i>
    </button>
  </div>
</nav>

</body>
<script>function toggleDarkMode() {
  const body = document.body;
  const logo = document.getElementById("logo");
  body.classList.toggle("dark-mode");

  if (body.classList.contains("dark-mode")) {
    logo.src = "assets/images/logo-dark.png";
  } else {
    logo.src = "../assets/logo.png";
  }
}
</script>
</html>
