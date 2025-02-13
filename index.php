<?php

// Set recipient email address
$to = "johnsonjardocs@gmail.com";

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Subject for the email
  $subject = 'Contact Form Submission - ' . $name;

  // Prepare message body
  $message_body = "Name: $name \n";
  $message_body .= "Email: $email \n";
  $message_body .= "Message: $message \n";

  // Set email headers
  $headers = "From: $email \r\n";
  $headers .= "Reply-To: $email \r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8 \r\n";

  // Attempt to send email
  if (mail($to, $subject, $message_body, $headers)) {
    // Email sent successfully
    echo "Thank you for contacting us! We will get back to you shortly.";
  } else {
    // Email sending failed
    echo "There was an error sending your message. Please try again later.";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Johnson Ikechukwu</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/Johnson__Cipher" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://github.com/JayAlwaysCodes" target="_blank" class="github"><i class="bx bxl-github"></i></a>
          <a href="https://www.linkedin.com/in/johnson-ikechukwu-190b73234/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
          <li><a href="Resume.docx" class="nav-link scrollto" target="_blank"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Johnson Ikechukwu</h1>
      <p>I'm <span class="typed" data-typed-items="a Developer, a Freelancer, an NFT Enthusiast"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <!-- <p>My strong passion and love for technology and problem solving is what keeps me going and striving to learn more and more. I have this special ability to think of creative and effective way/ways of solving problems With a strong background in Networking and Communication has helped me immersely in working with a team and delivering the expected results within the given time frame.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>SMART CONTRACT &amp; Web DEVELOPER.</h3>
            <p class="fst-italic">
            <strong>Web3 developer: </strong>Building smart contracts with Solidity and Foundry. <br>
            <strong>Blockchain enthusiast: </strong> Exploring Web3 with Solidity and Foundry.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>22 July 1999</span></li>
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li> -->
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+2348088307488</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Calabar, Nigeria</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>23</span></li> -->
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li> -->
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>johnsonjardocs@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p>
            Highly skilled web developer with expertise in HTML, CSS, JavaScript (framework-agnostic), PHP, MySQL, Python, Solidity, and Foundry. Extensive experience developing diverse projects across these technologies, honing my proficiency and mastery. Project examples can be found in the following sections and on my GitHub repository. Proven ability to collaborate effectively within teams, contributing to successful project completion. While most past collaborations have been offline, I am adept at working in both online and offline environments.
              
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
          <p>My work stats tells how deligent i am in making sure my clients gets what they desire of me. The numbers speaks for it self.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="37" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="75" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong></p>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>John Ruskin said "When love and skill work together, expect a masterpiece", Below are the skills i have acquired and how well i know them.</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">DEFI <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            
            <div class="progress">
              <span class="skill">NFT <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">GO LANG <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP/LARAVEL <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">MYSQL <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">GIT<i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Python <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            
            <div class="progress">
              <span class="skill">Solidity/Foundry <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">RUST/SOLANA <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Below are some of my projects including personal projects too</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Python Projects</li>
              <li data-filter=".filter-card">Solidity Projects</li>
              <li data-filter=".filter-web">WEB Projects</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container my-10 py-15 d-flex" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <!-- <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""> -->
              <video src="assets/img/portfolio/car_dect_AI_Trim.mp4" class="img-fluid" autoplay loop preload="auto"></video>
              
              <div class="portfolio-links">
                <a href="assets/img/portfolio/car_detect.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Car Detection App"><i class="bx bx-plus"></i></a>
                <a href="python_projects.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <video src="assets/img/portfolio/chat-app_Trim.mp4" class="img-fluid" autoplay loop preload="auto"></video>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/chat-app_pic.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Chat App"><i class="bx bx-plus"></i></a>
                <a href="web_projects.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <video src="assets/img/portfolio/Face_detect_AI_Trim.mp4" class="img-fluid" autoplay loop preload="auto"></video>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/face_reg.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Face Recognition Using Python"><i class="bx bx-plus"></i></a>
                <a href="python_projects.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/smc1.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assetsimg/portfolio/smc2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="SolidityProjects.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <video src="assets/img/portfolio/travel_site_Trim.mp4" class="img-fluid" autoplay loop preload="auto"></video>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/travel-site_pic.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Travel Site"><i class="bx bx-plus"></i></a>
                <a href="web_projects.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/motion_pic.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/motion_detect.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Motion Detection with Alarm using python and open cv"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/NFT1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/NFT2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="SolidityProjects.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/FSC1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/FSC2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="SolidityProjects.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <video src="assets/img/portfolio/Ecommerce-Trim.mp4" class="img-fluid" autoplay loop preload="auto"></video>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/Ecommer_pic.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Ecommerce"><i class="bx bx-plus"></i></a>
                <a href="web_projects.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Being well-versed in few programming languages led to offering of the below services, in which some of their projects can be seen in the portfolio section.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><img src="assets/img/file.png" alt="" class="icon"></div>
            <h4 class="title"><a href="">Python Developer</a></h4>
            <p class="description">Over the months, i have worked on a lot of projects in cluding personal projects, using python, an example of it is the car detection app.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><img src="assets/img/solid.png" alt="" class="icon"></div>
            <h4 class="title"><a href="">Solidity Developer</a></h4>
            <p class="description">This is one of the skills that i have developed great interest in, have worked on a few projects in regard to this. My github repo will tell more about this.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><img src="assets/img/nft.png" alt="" class="icon"></div>
            <h4 class="title"><a href="">NFT Enthusiast</a></h4>
            <p class="description">The fact that one can convert a work of art into a Non-fungible token is so admirable. And also to sell these work of Art for money. Interesting!.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><img src="assets/img/backend.png" alt="" class="icon"></div>
            <h4 class="title"><a href="">BackEnd Services</a></h4>
            <p class="description">I am able to offer BackEnd services using my knowledge of PHP and MYSQL.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><img src="assets/img/web-design.png" alt="" class="icon"></div>
            <h4 class="title"><a href="">FullStack Defi</a></h4>
            <p class="description">Building Web3 and SmartContracts is incredible, have work on quite a few projects on this.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><img src="assets/img/git.png" alt="" class="icon"></div>
            <h4 class="title"><a href="">Git/GitHub</a></h4>
            <p class="description">With My knowledge of git and github i am able to work remotely with any team, and this has made effective work possible.</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>I gathered to together some of the testimonial of the people i have worked on their projects, both personal and their company's projects and this is what they have said about my services.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Having the database of my company robust enough to handle large data entries was my optmost desire and Johnson helped me in making this dream come true, he is good at what he does.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Simeon</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Having your store online is what most store owners desiire so much, with help of Johnson, I have been able to also have my store online as an E-commerce outlet, Thanks to him.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonial03.jpg" class="testimonial-img" alt="">
                <h3>Justina</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Having My Portfolio set as a freelancer was made possible by Johnson, He is good at it, love his works.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Thomas</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  As a user interface designer, Johnson has helped to bring my designs to life with his html, css, and JavaScript Knowledge, i love his works.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimoial2.jpg" class="testimonial-img" alt="">
                <h3>Salient</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->


            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  As an Entreprenuer in the crypto space, my NFT project was properly handled by him and i was able to make maximum profit from it. 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonial5.jpg" class="testimonial-img" alt="">
                <h3>Destiny</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact us for any kind of query and discussion... We reply within 2hrs of you contacting us...</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Calabar, Nigeria</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <a href="mailto:johnsonjardocs@gmail.com" target="_blank"><p>johnsonjardocs@gmail.com</p></a>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call/WhatsApp:</h4>
                <a href="https://wa.me/qr/CGDESUPQWQKDP1" target="_blank"><p>+234 8088 307 488</p></a>
              </div>

              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        
            <form   id="sform"  role="form" class="php-email-form">
              <strong>
                <?php 
                  // if(!empty($msg1)){
                  //   echo $msg1;
                  // }
                ?>
              </strong>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <!-- <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="user_subject" id="subject" required>
              </div> -->
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><a href="mailto:johnsonikechukwu525@gmail.com"><button type="submit"  value="Submit" href="mailto:johnsonikechukwu525@gmail.com">Send Message</button></a></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>