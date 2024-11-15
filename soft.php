<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CyberGenix</title>
  <!-- Meta Tags for SEO -->
  <meta name="description"
    content="CyberGenix is a leading IT services company in Dalkhola, offering top-notch web development, software development, application development, and consultancy.">
  <meta name="keywords"
    content="IT services, web development, software development, app development, consultancy, Dalkhola, CyberGenix, IT company">
  <meta name="author" content="CyberGenix IT Services">
  <meta name="robots" content="index, follow">

  <!-- Open Graph for Social Media -->
  <meta property="og:title" content="CyberGenix - IT Services Company in Dalkhola">
  <meta property="og:description"
    content="Top IT services provider offering web development, software development, and more in Dalkhola.">
  <meta property="og:image" content="https://cybergenix.in/images/brand-logo.jpg">
  <meta property="og:url" content="https://cybergenix.in/">

  <!-- Twitter Card for SEO -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="CyberGenix - Best IT Services in Dalkhola">
  <meta name="twitter:description" content="Leading IT services company offering web solutions and more in Dalkhola.">
  <meta name="twitter:image" content="https://yourwebsite.com/images/twitter-image.jpg">
  <link rel="icon" href="images/brand-logoCGICON.png" sizes="32x60" type="image/x-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/custom.css">
  <script src="https://kit.fontawesome.com/e7678863ec.js" crossorigin="anonymous"></script>
  <style>
    /* *{border:1px solid red;}  */
    ::selection {background-color: rgb(19, 150, 81);}
  </style>
</head>

<body class="bg-dark">
    <div class="spinner_container d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <?php include './navigation.php';?>
  <!-- hero  -->
  <div class="container px-4 pt-5 my-5 text-center border-bottom">
    <h2 class="display-5 fw-bold text-light">Software Development Services</h2>
    <div class="col mx-auto">
    <p class="fs-6 lead mb-4 text-light px-0 px-lg-5">
      Our software development services are designed to provide custom solutions that meet the unique needs of your business. Whether you require enterprise software, desktop applications, or specialized tools, we deliver robust, scalable, and reliable software solutions that improve efficiency and drive growth.<br><br>
      <strong>Efficiency and Performance</strong><br>
      We prioritize delivering software that is optimized for performance, ensuring seamless integration with existing systems and user-friendly interfaces. Our development process involves rigorous testing and quality assurance to guarantee that your software runs smoothly and securely.<br>
      Using advanced technologies such as C++, .NET, Python, and Java, we create software solutions that are adaptable, secure, and built for long-term use, ensuring your business is prepared for future challenges and opportunities.
    </p>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-0 px-lg-5">
        <img src="images/serviceHero.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image"
          width="auto" height="500" loading="lazy">
      </div>
    </div>
  </div>
  <!-- service details -->
  <div class="container">
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden d-flex justify-content-center align-items-top flex-column-reverse flex-lg-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-light">Software</strong>
            <h3 class="mb-0 text-primary">Inventory Management App</h3>
            <p class="card-text mb-auto text-light">An application for tracking inventory, managing stock levels, purchase orders, and sales reports.</p>
            <p class="fw-bold text-light bg-primary px-1 rounded-2">Price: ₹2,50,000 - ₹4,00,000</p><p class="fw-bold text-light bg-primary px-1 rounded-2">Delivery In: 3 - 5 months</p>
          </div>
          <div class="col-12 col-lg-4">
            <img src="images/hero3.png" class="bd-placeholder-img object-fit-contain rounded float-end w-100 h-100" alt="Service Image">
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include './footer.php';?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <script>
      window.addEventListener('load', function() {
            document.querySelector('.spinner_container').style.display= 'none';
            document.querySelector('.spinner_container').remove();
        });
    </script>
</body>

</html>