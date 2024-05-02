<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple HTML HomePage</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="index.css">

  <script>
    let slideIndex = 0;

    function showSlides() {
      let slides = document.getElementsByClassName("slides");

      for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }

      slideIndex++;

      if (slideIndex > slides.length) {
        slideIndex = 1;
      }

      slides[slideIndex - 1].style.display = "block";

      setTimeout(showSlides, 3000);  // Change slide every 3 seconds
    }

    function prevSlide() {
      slideIndex = (slideIndex - 2 + slides.length) % slides.length;
      showSlides();
    }

    function nextSlide() {
      showSlides();
    }

    window.onload = function() {
      showSlides();  // Start slideshow on page load
    };
  </script>
  
  
</head>

<body>
  <header class="header">
    <a href="#" class="logo">Book Review</a>
    <nav class="form-btn">
    <form action="logout.php" method="post">
        <button type="submit">Log Out</button>
    </form>
    <a href="index.php" title="User Profile"><i class="fas fa-user-circle fa-3x"></i></a>
            
    </nav>
  </header>
  <main>
    <div class="intro">
      <h1>WELCOME TO OUR PLATFORM</h1>
      <p>Explore new books.</p>
      <form action="registration.php" method="post">
        <button type="submit">Rate Books</button>
  
  
</body>

</html>