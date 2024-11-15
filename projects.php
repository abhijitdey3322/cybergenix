<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CyberGenix</title>
    <!-- Meta Tags for SEO -->
    <meta name="description" content="CyberGenix is a leading IT services company in Dalkhola, offering top-notch web development, software development, application development, and consultancy.">
    <meta name="keywords" content="IT services, web development, software development, app development, consultancy, Dalkhola, CyberGenix, IT company">
    <meta name="author" content="CyberGenix IT Services">
    <meta name="robots" content="index, follow">

    <!-- Open Graph for Social Media -->
    <meta property="og:title" content="CyberGenix - IT Services Company in Dalkhola">
    <meta property="og:description" content="Top IT services provider offering web development, software development, and more in Dalkhola.">
    <meta property="og:image" content="https://cybergenix.in/images/brand-logo.jpg">
    <meta property="og:url" content="https://cybergenix.in/">

    <!-- Twitter Card for SEO -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="CyberGenix - Best IT Services in Dalkhola">
    <meta name="twitter:description" content="Leading IT services company offering web solutions and more in Dalkhola.">
    <meta name="twitter:image" content="https://yourwebsite.com/images/twitter-image.jpg">
    <link rel="icon" href="images/brand-logoCGICON.png" sizes="32x60" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://kit.fontawesome.com/e7678863ec.js" crossorigin="anonymous"></script>
    <style>
      ::selection {background-color: rgb(19, 150, 81);}
      .card {width: 330px;min-height: 370px;box-shadow: 5px 5px 8px #1b1b1b,-5px -5px 8px #272727;transition: 0.4s;}
      .card:hover {translate: 0 -10px;}
      .card-image {max-height: 170px;background-color: #313131;background: #313131;box-shadow: inset 5px 5px 3px #2f2f2f,inset -5px -5px 3px #333333;overflow:hidden;}
    </style>
  </head>
  <body class="bg-dark">
    <div class="spinner_container d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <?php include './navigation.php';?>
    <!-- hero -->
    <div class="bg-dark text-secondary px-4 py-5 text-center">
      <div class="py-5">
        <h1 class="display-5 fw-bold text-white">Showcasing All Completed Projects</h1>
        <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4 text-white-50">Showcase all completed projects here, demonstrating our expertise in crafting responsive, mobile-first sites with Bootstrap. Utilize prebuilt components, Sass, and JavaScript for robust, custom solutions.</p>

          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="./contact" type="button" class="btn text-light btn-outline-primary btn-lg px-4">Contact</a>
          </div>
        </div>
      </div>
    </div>
  <!-- projects -->
   <div class="projectNav container mb-3 d-flex justify-content-center align-items-center">
    <button class="btn btn-primary shadow col col-lg-3 rounded-0 rounded-start-5 text-uppercase" onclick="showRelatedCard(this)" data-name="website">Website</button>
    <button class="btn btn-primary shadow col col-lg-3 rounded-0 text-uppercase" onclick="showRelatedCard(this)" data-name="application">Application</button>
    <button class="btn btn-primary shadow col col-lg-3 rounded-0 rounded-end-5 text-uppercase" onclick="showRelatedCard(this)" data-name="software">Software</button>
   </div>
   <div class="projectContainer container mb-5 d-flex justify-content-center align-items-top flex-wrap">
      <div class="card m-2 p-3 rounded-4 bg-dark" data-name="website">
        <div class="card-image rounded-3 d-flex justify-content-center align-items-center"><img src="images/project2.png" class="img-thumbnail" alt="Project Image"style="object-fit: contain;"></div>
        <p class="fs-4 fw-semibold card-title text-primary m-3">Power Friend <span class="text-center text-scondary fw-bold"style="font-size: 13px;color: #b3b3b3;">( WEBSITE )</span></p>
        <p class="card-body text-light">
        Power Friend offers an e-commerce platform for battery orders, tracking, claims, admin management, monthly PDF reports, and file sharing between customers and owners. Visit: powerfriend.in
        </p>
        <p class="text-end mx-3 text-scondary"style="font-size: 13px;color: #b3b3b3;">Time Duration <span class="fw-bold">28-08-2024</span> to <span class="fw-bold">18-09-2024</span></p>
      </div>
      <div class="card m-2 p-3 rounded-4 bg-dark" data-name="website">
        <div class="card-image rounded-3 d-flex justify-content-center align-items-center"><img src="images/project1.png" class="img-thumbnail" alt="Project Image"style="object-fit: contain;"></div>
        <p class="fs-4 fw-semibold card-title text-primary m-3">Inventory Managment System <span class="text-center text-scondary fw-bold"style="font-size: 13px;color: #b3b3b3;">( WEBSITE )</span></p>
        <p class="card-body text-light">
        Private inventory management system for two farm, handling sales, purchase invoices, and party info with owner-only access and verification, ensuring streamlined business operations.
        </p>
        <p class="text-end mx-3 text-scondary"style="font-size: 13px;color: #b3b3b3;">Time Duration <span class="fw-bold">06-08-2024</span> to <span class="fw-bold">31-08-2024</span></p>
      </div>
      <div class="card m-2 p-3 rounded-4 bg-dark" data-name="application">
        <div class="card-image rounded-3 d-flex justify-content-center align-items-center"><img src="images/project3.png" class="img-thumbnail" alt="Project Image"style="object-fit: contain;"></div>
        <p class="fs-4 fw-semibold card-title text-primary m-3">TeilenIT <span class="text-center text-scondary fw-bold"style="font-size: 13px;color: #b3b3b3;">( APPLICATION )</span></p>
        <p class="card-body text-light">
        Welcome to Teilen IT, a growing hub for computer education. Driven by passion, innovation, and community feedback, we offer diverse tech courses, empowering learners to shape the future of technology.
        </p>
        <p class="text-end mx-3 text-scondary"style="font-size: 13px;color: #b3b3b3;">Time Duration <span class="fw-bold">23-11-2023</span> to <span class="fw-bold">10-02-2024</span></p>
      </div>
      <div class="card m-2 p-3 rounded-4 bg-dark"data-name="software">
        <div class="card-image rounded-3 d-flex justify-content-center align-items-center"><img src="images/project4.png" class="img-thumbnail" alt="Project Image"style="object-fit: contain;"></div>
        <p class="fs-4 fw-semibold card-title text-primary m-3">ANAYA <span class="text-center text-scondary fw-bold"style="font-size: 13px;color: #b3b3b3;">( SOFTWARE )</span></p>
        <p class="card-body text-light">
        Introducing ANAYA, an AI robot controlling Windows software. Built with Python for AI and C# for the GUI, it features a media player, weather reports, PPT presentations, and voice control capabilities.
        </p>
        <p class="text-end mx-3 text-scondary"style="font-size: 13px;color: #b3b3b3;">Time Duration <span class="fw-bold">02-12-2023</span> to <span class="fw-bold">28-06-2024</span></p>
      </div>
    </div>

    <?php include './footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
    function showRelatedCard(element) {
      // Get the 'data-name' attribute from the clicked element
      var selectedName = element.getAttribute('data-name');

      // Get all the card elements inside the projectContainer
      var cards = document.querySelectorAll('.projectContainer .card');

      // Loop through each card and toggle its visibility
      cards.forEach(function(card) {
        // Get the 'data-name' attribute of the card
        var cardName = card.getAttribute('data-name');

        // Check if the card's data-name matches the selected name
        if (cardName === selectedName) {
          card.classList.remove('d-none');
          card.classList.add('d-block');
        } else {
          card.classList.remove('d-block');
          card.classList.add('d-none');
        }
      });
    }
    window.addEventListener('load', function() {
        document.querySelector('.spinner_container').style.display= 'none';
        document.querySelector('.spinner_container').remove();
    });
  </script>

  </body>
</html>