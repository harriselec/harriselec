
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!--icons-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <link rel="preload" as="image" href="{{'images/card.jpg'}}">
        <link rel="preload" as="image" href="{{'/images/outdoorsocket.jpg'}}">
        <link rel="preload" as="image" href="{{'images/three-gang-socket.jpg'}}">
        <link rel="preload" as="image" href="{{'images/IMG_4286.JPG'}}">
        <link rel="preload" as="image" href="{{'/images/outsidelight.jpg'}}">
        
        @vite(['resources/css/front-app.css', 'resources/js/front-app.js'])
    </head>
    <body>

        <!-- 
          - #HEADER
        -->
      
        <header class="header" data-header>
          <div class="container">
      
            <a href="#home" class="logo">
              <img src="{{'/images/thelogo.png'}}" width="74" height="24" alt=" home" class="logo-light">
      
              <img src="{{'/images/thelogo.png'}}" width="74" height="24" alt=" home" class="logo-dark">
            </a>
      
            <nav class="navbar" data-navbar>
      
              <div class="navbar-top">
                <a href="#home" class="logo">
                  <img src="{{'/images/thelogo.png'}}" width="74" height="24" alt="home">
                </a>
      
                <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                  <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                </button>
              </div>
      
              <ul class="navbar-list">
      
                <li>
                  <a href="#home" class="navbar-link">Home</a>
                </li>
      
                <li>
                  <a href="#about" class="navbar-link">About</a>
                </li>

                <li>
                  <a href="#booking" class="navbar-link">Book me</a>
                </li>
      
              </ul>
      
              <div class="wrapper">
                <a href="mailto:heathen@harriselec.co.uk" class="contact-link">heathen@harriselec.co.uk</a>
      
                <a href="tel:07951597002" class="contact-link">07951597002</a>
              </div>
      
              <ul class="social-list">
      
                <li>
                  <a href="" class="social-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>
      
                <li>
                  <a href="https://www.facebook.com/harriselectrical97" class="social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>
      
                
      
                <li>
                  <a href="https://www.instagram.com/harris_electrical97/" class="social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                  </a>
                </li>
      
               
      
              </ul>
      
            </nav>
      
            <a href="#" class="btn btn-primary">Clinet portal</a>
      
            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
              <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
            </button>
      
            <div class="overlay" data-nav-toggler data-overlay></div>
      
          </div>
        </header>
      
      
      
      
      
        <main>
          <article>
      
            <!-- 
              - #HERO
            -->
      
            <section class="section hero has-bg-image" aria-label="home" id="home"
              style="background-image: url('./assets/images/hero-bg.jpg')">
              <div class="container">
      
                <div class="hero-content">
      
                  <h1 class="h1 hero-title">Powering Your Space with Excellence.</h1>

                  <h3 class="h3 hero-tagline">Wiring the Future, Illuminating the Present.</h3>
      
                  <p class="hero-text">
                    Your Dedicated Electrician for Lasting Connections
                  </p>
      
                  <div class="btn-wrapper">
      
                    <a href="#" class="btn btn-primary">Explore Now</a>
      
                    <a href="#" class="btn btn-primary">Contact Us</a>
      
                  </div>
      
                </div>
      
                <div class="hero-slider" data-slider>
      
                  <div class="slider-inner">
                    <ul class="slider-container" data-slider-container>
                        
                        <li class="slider-item">
                            <div class="hero-card">
                              <figure class="img-holder" style="--width: 575; --height: 550;">
                                <img src="{{'images/card.jpg'}}" width="575" height="550" alt="hero banner"
                                  class="img-cover">
                              </figure>
                            </div>
                        </li>
      
                        <li class="slider-item">
                            <div class="hero-card">
                                <figure class="img-holder" style="--width: 575; --height: 550;">
                                    <img src="{{'/images/outdoorsocket.jpg'}}" width="575" height="550" alt="hero banner"
                                    class="img-cover">
                                </figure>
                            </div>
                        </li>
      
                      

                        <li class="slider-item">
                            <div class="hero-card">
                                <figure class="img-holder" style="--width: 575; --height: 550;">
                                    <img src="{{'images/three-gang-socket.jpg'}}" width="575" height="550" alt="" class="img-cover">
                                </figure>
                            </div>
                        </li>

                        <li class="slider-item">
                            <div class="hero-card">
                                <figure class="img-holder" style="--width: 575; --height: 550;">
                                    <img src="{{'images/IMG_4286.JPG'}}" width="575" height="550" alt="" class="img-cover">
                                </figure>
                            </div>
                        </li>  
                        
                        <li class="slider-item">
                            <div class="hero-card">
                                <figure class="img-holder" style="--width: 575; --height: 550;">
                                    <img src="{{'/images/outsidelight.jpg'}}" width="575" height="550" alt="" class="img-cover">
                                </figure>
                            </div>
                        </li>
      
                    </ul>
                  </div>
      
                  <button class="slider-btn prev" aria-label="slide to previous" data-slider-prev>
                    <ion-icon name="arrow-back"></ion-icon>
                  </button>
      
                  <button class="slider-btn next" aria-label="slide to next" data-slider-next>
                    <ion-icon name="arrow-forward"></ion-icon>
                  </button>
      
                </div>
      
              </div>
            </section>
      
      
      
      
      
            <!-- 
              - #SERVICE
            -->
      
            <section class="section service" aria-labelledby="service-label">
              <div class="container">
      
                <p class="section-subtitle" id="service-label">How we work!</p>
      
                <h2 class="h2 section-title">
                  The service we offer is specifically designed to meet your needs.
                </h2>
      
                <ul class="grid-list">
                  <li>
                    <div class="service-card">
      
                      <div class="card-icon">
                        <ion-icon name="call"></ion-icon>
                      </div>
                      <h3 class="h4 card-title">Step 1</h3>
                      <h3 class="h4 card-title">Contact us!</h3>
      
                      <p class="card-text">
                        We're here to assist you every step of the way. Contact us through:
                      </p>

                      <br>
      
                      <div class="wrapper">
                        <a href="mailto:heathen@harriselec.co.uk" class="btn-text">E-mail
                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon></a>
              
                        <a href="tel:07951597002" class="btn-text">call
                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon></a>

                        <a href="#" class="btn-text"><span class="span">Book me</span>
                          <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>
                      </div>

                      
                      
                      
                     
                    </div>
                  </li>
      
                  <li>
                    <div class="service-card">
      
                      <div class="card-icon">
                        <ion-icon name="hammer"></ion-icon>
                      </div>
                      <h3 class="h4 card-title">Step 2</h3>
                      <h3 class="h4 card-title">Completing the Job</h3>
      
                      <p class="card-text">
                        Our experienced team will arrive on the agreed-upon date to provide you with top-notch electrical services. 
                      </p>
                      <p class="card-text">
                        We're dedicated to delivering quality workmanship.
                      </p>
      
                      
      
                    </div>
                  </li>
      
                  <li>
                    <div class="service-card">
      
                      <div class="card-icon">
                        <ion-icon name="pie-chart-outline" aria-hidden="true"></ion-icon>
                      </div>
                      <h3 class="h4 card-title">Step 3</h3>
                      <h3 class="h4 card-title">The Client Portal</h3>
      
                      <p class="card-text">
                        Document Access: View and download essential project documents, invoices, and reports whenever you need them.
                      </p>
                      
      
                      <a href="#" class="btn-text">
                        <span class="span">Client Portal</span>
      
                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                      </a>
      
                    </div>
                  </li>
      
                </ul>
      
              </div>
            </section>
      
      
      
      
      
            <!-- 
              - #ABOUT
            -->
      
            <section class="about" aria-labelledby="about-label" id="about">
              <div class="container">
      
                <figure class="about-banner">
                    <img src="{{'images/IMG_4284.JPG'}}" width="600" height="380" loading="lazy" alt="about banner"
                    class="w-100 i-r-1">
                </figure>
      
                <div class="about-content">
      
                  <p class="section-subtitle" id="about-label">Why Choose Us?</p>
      
                  <h2 class="h2 section-title">
                    We bring solutions to make life easier for our clients.
                  </h2>
      
                  <ul>
      
                    <li class="about-item">
                      <div class="accordion-card expanded" data-accordion>
      
                        <h3 class="card-title">
                          <button class="accordion-btn" data-accordion-btn>
                            <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>
      
                            <span class="span h5">Smart Design</span>
                          </button>
                        </h3>
      
                        <p class="accordion-content">
                          Our creative approach brings efficiency and practicality to every project.
                        </p>
      
                      </div>
                    </li>
      
                    <li class="about-item">
                      <div class="accordion-card" data-accordion>
      
                        <h3 class="card-title">
                          <button class="accordion-btn" data-accordion-btn>
                            <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>
      
                            <span class="span h5">Precision Execution</span>
                          </button>
                        </h3>
      
                        <p class="accordion-content">
                          From planning to implementation, our meticulous approach guarantees excellence.
                        </p>
      
                      </div>
                    </li>
      
                    <li class="about-item">
                      <div class="accordion-card" data-accordion>
      
                        <h3 class="card-title">
                          <button class="accordion-btn" data-accordion-btn>
                            <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>
      
                            <span class="span h5">Lasting Relationships</span>
                          </button>
                        </h3>
      
                        <p class="accordion-content">
                          Beyond the project, we aim to foster enduring partnerships based on trust.
                        </p>
      
                      </div>
                    </li>
      
                  </ul>
      
                </div>
      
              </div>
            </section>
      
      
      
      
      
            <!-- 
              - #FEATURE
            -->
      
            <section class="section feature" aria-labelledby="feature-label">
              <div class="container">
      
                <figure class="feature-banner">
                  <img src="{{'images/IMG_0542.JPG'}}" width="800" height="531" loading="lazy" alt="feature banner"
                    class="w-100 i-r-1">
                </figure>
      
                <div class="feature-content">
      
                  <p class="section-subtitle" id="feautre-label">Our services</p>
      
                  <h2 class="h2 section-title">
                    From installation to inspection, your in safe hands. 
                  </h2>
      
                  <p class="section-text">
                    At Harris Electrical, we're your comprehensive solution for a wide range of electrical services: 
                  </p>
      
                  <ul class="feature-list">
      
                         
                    <li>
                      <div class="feature-card">
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Non-Notifiable Work: Whether it's small electrical tasks or repairs, we handle non-notifiable work efficiently.
                        </span>
      
                      </div>
                    </li>
      
                    <li>
                      <div class="feature-card">
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Electrical Installation Condition Reports (EICRS): We conduct thorough inspections to ensure your electrical systems are safe and compliant.
                        </span>
      
                      </div>
                    </li>
      
                    <li>
                      <div class="feature-card">
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Maintenance Services: Our team is dedicated to keeping your electrical systems running smoothly through regular maintenance.
                        </span>
      
                      </div>
                    </li>

                    <li>
                      <div class="feature-card">
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Emergency Repairs: Provide quick response and repair services for electrical emergencies like power outages, electrical faults
                        </span>
      
                      </div>
                    </li>

                    <li>
                      <div class="feature-card">
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Outdoor Lighting and Security: Offer installation of outdoor lighting solutions for landscaping, security lighting, and pathway illumination.
                        </span>
      
                      </div>
                    </li>
      
      
                  </ul>
      
                </div>
      
              </div>
            </section>
      
      
      
      
      
        
      
            
      
      
      
      
      
            <!-- 
              - #booking
            -->
      
            <section class="section booking" aria-labelledby="booking-label" id="booking" >
              <div class="container">
      
                <p class="section-subtitle" id="booking-label">Book with us!</p>
      
                <h2 class="h2 section-title">
                  Booking Made Easy: Your Power, Your Time, Your Way
                </h2>
      
                
                    <form action="process_booking.php" method="post">
                      <div class="grid-list">
                        <div class="booking-card ">
                          <div class="booking-card-top">
                            <p class="section-subtitle " id="booking-label">select a time and date</p> 
                          </div>
                          <div class="booking-form">
                            <label for="date">Date:</label>
                            <input type="date" id="date" name="date" required>
                      
                            <label for="time"> Time slot:</label>
                            <input type="time" min="09:00" max="17:00">
                          </div>
                        </div>
                        <div class="booking-card ">
                          <div class="booking-card-top">
                            <p class="section-subtitle " id="booking-label">Your Details</p> 
                          </div>
                          <div class="booking-form">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>
                          
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>

                            <label for="phone">Phone:</label>
                            <input type="phonw" id="phone" name="phone" required>

                            <label for="address">Address:</label>
                            <input type="address" id="address" name="address" required>

                            <label for="post-code">Post Code:</label>
                            <input type="post-code" id="post-code" name="post-code" required>
                          </div>
                        </div>
                        <div class="booking-card ">
                          <div class="booking-card-top">
                            <p class="section-subtitle" id="booking-label">work Details</p>
                          </div>
                          <div class="booking-form">
                              <label for="work">What best describes your Job?</label>
                            <select name="work" id="work-types">
                              <option value="OutdoorLighting">Outdoor Lighting</option>
                              <option value="OutdoorPower">Outdoor Power</option>
                              <option value="IndoorLighting">Indoor lighting</option>
                              <option value="IndoorPower">Indoor Socket</option>
                              <option value="EICR">EICR</option>
                            </select>
                            <div class="work-more">
                              <p> the more infomation you give us the better we can help!</p>
                              <textarea id="comments" name="comments" rows="10" cols="40" style="resize: none;"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="center">
                        <button class="btn btn-primary" type="submit">Book Appointment</button>
                      </div>
                    </form>

                
      
                  
                 
                
      
              </div>
            </section>
      
      
      
      
      
           
          </article>
        </main>
      
      
      
      
      
        <!-- 
          - #FOOTER
        -->
      
        <footer class="footer">
          <div class="container grid-list">
      
            <div class="footer-brand">
      
              <a href="#" class="logo">
                <img src="{{'/images/thelogo.png'}}" width="74" height="24" alt="Adex home">
              </a>
      
              <p class="footer-text">
                &copy; 2023 Harris Electrical Services. <br> All rights reserved.
              </p>
      
              <ul class="social-list">
      
                <li>
                  <a href="" class="social-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>
      
                <li>
                  <a href="https://www.facebook.com/harriselectrical97" class="social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>
      
                
      
                <li>
                  <a href="https://www.instagram.com/harris_electrical97/" class="social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                  </a>
                </li>
      
               
      
              </ul>
      
            </div>
      
            <ul class="footer-list">
      
              <li>
                <p class="h4 footer-list-title">Get in Touch</p>
              </li>
              <li>
                <a href="mailto:info@email.com" class="footer-link">heathen@harriselec.co.uk</a>
              </li>
      
              <li>
                <a href="tel:001234567890" class="footer-link">07951597002</a>
              </li>
      
            </ul>
      
            <ul class="footer-list">
      
              <li>
                <p class="h4 footer-list-title">Learn More</p>
              </li>
      
              <li>
                <a href="#about" class="footer-link">About Us</a>
              </li>
      
            </ul>
      
            <div class="footer-list">
      
              <h2 class="h4 footer-list-title">Qualifications</h2>
              <div class="container">
                
                <div class="grid">
                  <img src="{{'images/city and gilds.png'}}" class="cg">
                  <img src="{{'images/dao.png'}}" class="dao" >

                </div>
                
      
              </div>
      
            </div>
      
          </div>
        </footer>
      
      
      
      
      
        <!-- 
          - custom js link
        -->
        <script src="./assets/js/script.js"></script>
      
        <!-- 
          - ionicon
        -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
      
      </body>
    
</html>
