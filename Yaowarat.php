<?php include('server.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>BEEF | Yaowarat</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light container">
      <a class="navbar-brand" href="index.php" style="padding: 0 0; font-size: 32px; font-weight: bold;">BEEF</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>

      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>

        </ul>
        <span class="navbar-text">

        </span>
      </div>
      <?php  if (isset($_SESSION['username'])) { ?>
    	  <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	  <p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
      <?php } else { ?>
      <a class="btn btn-outline-primary" href="login.php">Log in</a>
      <?php } ?>
    </nav>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Bangkok
          </h3>

          <div class="blog-post">
            <h2 class="blog-post-title">History</h2>
            <p class="blog-post-meta">May 27, 2018 by <a href="#">Bank</a></p>

            <p>This post shows an interesting location that's supported your reason to travel to Bangkok Thailand.</p>
            <hr>
            <p>The history of the city of Bangkok, in Thailand, dates at least to the early–15th century, when it was under the rule of Ayutthaya. Due to its strategic location near the mouth of the Chao Phraya River,
               the town gradually increased in importance, and after the fall of Ayutthaya King Taksin established his new capital of Thonburi there, on the river's west bank. King Phutthayotfa Chulalok, 
              who succeeded Taksin, moved the capital to the eastern bank in 1782, to which the city dates its foundation under its current Thai name, "Krung Thep Maha Nakhon". Bangkok has since undergone tremendous changes, growing rapidly, 
              especially in the second half of the 20th century, to become the primate city of Thailand.</p>
            <h2>Yaowarat Road </h2>
            <p>in Samphanthawong District is the main artery of Bangkok's Chinatown. Modern Chinatown now covers a large area around Yaowarat and Charoen Krung Road. It has been the main centre for trading 
              by the Chinese community since they moved from their old site some 200 years ago to make way for the construction of Wat Phra Kaew, the Grand Palace. Nearby is the Phahurat or Indian market. The area is bordered by the Chao Phraya River to the south. Yaowarat Road is well known for its variety of foodstuffs, and at night turns into a large "food street" that draws tourists and locals from all over the city.</p>
            <h3>Yaoarat Tips</h3>
            <p>Chinatown is in one of the oldest areas of Bangkok. It is the result of the resettlement of Chinese on the west
               bank of Chao Phraya River after Rama I moved the capital of the kingdom from Thonburi to Rattanakosin. 
               From there Chinese traders operated maritime junk trade between (Siam) and China throughout the Rattanakosin period.
               By the end of 1891, King Rama V had ordered the construction of many roads, including Yaowarat Road. Chinatown does not consist of only Yaowarat Road, but also includes others such as Charoen Krung Road, Mangkon Road, Songwat Road, Songsawat Road, Ratchawong Road, and Chakkrawat Road. Yaowarat's Sam Peng Market is the center of the area. The path of the road is said to resemble a dragon's curvy body, making it an auspicious location for business. There are many shops selling gold, garments, textiles, stationery, souvenirs, second-hand parts and equipment, electric goods, computer parts, antiques, imported musical instruments and local delicacies.

                Land prices around Yaowarat Road have always been among the most expensive in Bangkok and Thailand due to limited land which is mostly owned by prominent Thai-Chinese families.</p>
          </div>


          

        </div>

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">Yaowarat The famous place in Thailand</p>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="Amphawa.html">Amphawa</a></li>
              <li><a href="RodFai.html">Rod Fai Market</a></li>
            </ol>
          </div>
        </aside>

      </div>

    </main>

    <footer class="blog-footer">
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
