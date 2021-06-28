  <?php
    
$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include './includes/dbconnect.php';   
    
    $name = $_POST["news"];             
    
    $sql = "Select * from news where email_sub='$name'";
    
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 
    

            $sql = "INSERT INTO `news` ( `email_sub`) VALUES ('$name')";
    
            $result = mysqli_query($conn, $sql);
          
          }  
    
?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Charity TRUST - Charitable Trust</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link
       href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
       rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="./assets/css/soft-design-system.css?v=1.0.4" rel="stylesheet" />
    <link href="./assets/css/style.css" rel="stylesheet" />
 </head>

<body>

  <!-- ======= Header ======= -->
   <?php include './includes/header.php'; ?>  
  <!-- End Header -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/1 (1).jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/1 (2).jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/1 (3).jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-in">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0">
             <h4>Why Registration is Important ?</h4>
    <table border=0 class="rectangle-list">
        <tr>
            <td>
            <ol>
            <li><p>You can recieve Certificates for your work under HHFC*</p></li>
            <li><p>You can be a part of any event and program of HHFC</p></li>
            <li><p>You will be eligible to take part in Our Upcoming Internship or Certification program (abc-257 & 253)</p></li>
            <li><p>You will get Free HHFC Goodies*
</p></li>
            
            </ol>
            </td>
        </tr>
    </table>
               
            </div>
           <button type="button" class="btn btn-primary btn-lg btn-block">Register Now</button>

          </div>
        </div>

      </div>
    </section>

<section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="content">
             <h4>Example 3: Rounded List</h4>
    <table border=0 class="rounded-list">
        <tr>
            <td>
            <ol>
            <li><p>Fill and Submit the Registration Form.</p></li><a class="nav-link scrollto" href="#pricing"><button type="button" class="btn btn-primary">Form Link</button></a>
            <li><p>After submission, Click on Fee payment link.</p></li><a class="nav-link scrollto" href="#pricing"><button type="button" class="btn btn-primary">Paymeny Link</button></a><br>
            <li><p>Complete the payment.</p></li><br>
            <li>You are Done!
</p></li><br>
            </ol>
            Note:- You will be directed to our confirmation page after Registration. Our Respective member will contact you through given details.
            </td>
        </tr>
    </table>
            </div>
          
        </div>

      </div>
    </section>
   <section id="pricing" class="pricing section-bg">
          <div class="container">
             <div class="section-title" data-aos="fade-up">
                <h2>Donate</h2>
                <p></p>
             </div>
             <div class="row">
                <div class="col-lg-3 col-md-6">
                   <div class="box" data-aos="zoom-in">
                      <h3>Small Help</h3>
                      <h4><sup>₹</sup>100<span> / </span></h4>
                      <div class="btn-wrap">
                         <a href="#" class="btn-buy">Donate</a>
                      </div>
                   </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                   <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
                      <h3>Average Help</h3>
                      <h4><sup>₹</sup>250<span> / </span></h4>
                      <div class="btn-wrap">
                         <a href="#" class="btn-buy">Donate</a>
                      </div>
                   </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                   <div class="box" data-aos="zoom-in" data-aos-delay="200">
                      <h3>Help With Food</h3>
                      <h4><sup>₹</sup>500<span> / </span></h4>
                      <div class="btn-wrap">
                         <a href="#" class="btn-buy">Donate</a>
                      </div>
                   </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                   <div class="box" data-aos="zoom-in" data-aos-delay="300">
                      <span class="advanced">Advanced</span>
                      <h3>Ultimate Help</h3>
                      <h4><sup>₹</sup>1000<span> /</span></h4>
                      <div class="btn-wrap">
                         <a href="#" class="btn-buy">Donate</a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </section>
    <div class="my-5 pt-5" syt>
          <div class="container">
             <div class="row">
                <div class="col-md-6 m-auto">
                   <h4>Be the first to see the news</h4>
                   <p class="mb-4">
                      Your company may not be in the software business,
                      but eventually, a software company will be in your business.
                   </p>
                   <form action='./index.php' method="POST" role="form">
                      <div class="row">
                         <div class="col-8">
                            <div class="input-group">
                               <input type="text" name="news" required class="form-control mb-sm-0"
                                  placeholder="Your Message Here..." autocomplete="off">
                            </div>
                         </div>
                   </form>
                   <div class="col-4 ps-0">
                      <button type="submit" class="btn bg-gradient-info mb-0 h-100 position-relative z-index-2"
                         value="Subscribe">Send Message</button>
                   </div>
                </div>
             </div>
             <div class="col-md-5 ms-auto">
                <div class="position-relative">
                   <img class="max-width-50 w-100 position-relative z-index-2"
                      src="./assets/img/illustrations/sign-up.png" alt="image">
                </div>
             </div>
          </div>
       </div>
       </div>
<?php include './includes/footer.php'; ?>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
          class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <?php include 'includes/links.php';?>
</body>

</html>