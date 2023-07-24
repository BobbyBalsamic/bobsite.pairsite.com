<!doctype html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Londrina+Outline&display=swap" rel="stylesheet"> 
  <link href="static/css/main.css" rel="stylesheet">
  <title>BobsHTML</title>
  <meta name="description" content="Our first page">
  <meta name="keywords" content="html tutorial template">
</head>
<body>
  <?php include('./nav.html') ?>

  <h1> Welcome to Bob's Site </h1>

  <div class="container">
    <div class="row">
      <div class="col">
        <h2>Bob's Favorite Movies</h2>
        <ul>
         <li>
           <a href="https://www.imdb.com/title/tt0266697/">Kill Bill Volume: 1 and 2</a>
         </li>
         <li>
           <a href="https://www.imdb.com/title/tt1483797/">Redline</a>
         </li>
         <li>
           <a href="https://www.imdb.com/title/tt0063522/?ref_=nv_sr_srsg_0_tt_7_nm_1_q_rosemary%27s%2520baby">Rosemary's Baby</a>
         </li>
      </div>

      <div class="col">
        <h3>TV Shows</h3>
          <li>
          <a href="https://www.hbo.com/the-sopranos">Sopranos</a> 
          </li>
          <li>
          <a href="https://www.imdb.com/title/tt2575988/">Silicon Valley</a> 
          </li>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">
       <div class="row">
         <div class="col">
           <iframe width="1280" height="720" src="https://www.youtube.com/embed/v7llmA7WjgM" title="Sopranos &quot;Balsamic Balsamic Balsamic&quot;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
         </div>
       </div>

        <h2>Sign My Guest Book</h2>
        <form action='guestbook.php'>
          <label for="fname">Full Name:</label><br>
          <input type="text" id="fname" name="fname">
          <input type="submit" value="Sign">
        </form> 
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">
        <?php include("./textarea.php") ?>
      </div>
    </div>
  </div>


<?php include("./guestbook.php") ?>
<?php include("./footer.html") ?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

