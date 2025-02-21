<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="styles.css">
    <title>Bajra-Yog | Therapy</title>
  </head>
  <body>
  
  <?php include('menu.php'); ?>

    <section class="section__container about__container" id="about">
      <div class="about__content">
        <h2 class="section__header">About Us</h2>
        <p>
          Welcome to our mental health wellness platform, 
          where we provide comprehensive support and resources to guide you on your journey toward mental well-being. 
          Our mission is to help individuals find the right care, information, and community to foster a healthy mind.
        </p>
        <p>
        Explore our wide range of mental health services, expert insights, and self-care strategies designed to empower you. 
        Whether you're navigating stress, anxiety, depression, or seeking relationship therapy, 
        we offer tools to help you understand your mental health and take meaningful steps towards healing.
        </p>
        <p>
        At the heart of our platform, you'll find expert articles, practical tips, 
        and therapeutic advice that promote mental resilience and emotional growth. 
        We believe that healing begins with understanding, and we're here to support 
        you every step of the way toward a balanced, happier life.
        </p>
      </div>
      <div class="about__image">
        <img src="https://innerspacetherapy.in/wp-content/uploads/2023/04/Untitled-design-64.png" alt="about" />
      </div>
    </section>

    <section class="section__container service__container" id="service">
      <div class="service__header">
        <div class="service__header__content">
          <h2 class="section__header">Our Services</h2>
          <p>
            Beyond simply providing medical care, our commitment lies in
            delivering unparalleled service tailored to your unique needs.
          </p>
        </div>
        <button class="service__btn">Ask A Service</button>
      </div>
      <div class="service__grid">
        <div class="service__card">
          <span><i class="ri-microscope-line"></i></span>
          <h4>Mental health Screening</h4>
          <p>
            Accurate Diagnostics, Swift Results: Experience top-notch Laboratory
            Testing at our facility.
          </p>
          <a href="#">Learn More</a>
        </div>
        <div class="service__card">
          <span><i class="ri-group-line"></i></span>
          <h4>Individual and Group Counceling</h4>
          <p>
            Our thorough assessments and expert evaluations help you stay
            proactive about your health.
          </p>
          <a href="#">Learn More</a>
        </div>
        <div class="service__card">
          <span><i class="ri-mental-health-line"></i></span>
          <h4>Psychological Assessment</h4>
          <p>
            Experience comprehensive oral care with Dentistry. Trust us to keep
            your smile healthy and bright.
          </p>
          <a href="#">Learn More</a>
        </div>
        <div class="service__card">
          <span><i class="ri-school-line"></i></span>
          <h4>School Counseling</h4>
          <p>
            
            Our primary goal is to foster a supportive and enriching environment 
          </p>
          <a href="#">Learn More</a>
        </div>
      </div>
    </section>

    <section>
      <div class="section__container booking__container" id="booking">
        <div class="booking__content">
          <h1>Providing an Exceptional Patient Experience</h1>
          <p>
          Welcome, where exceptional patient experiences are our priority.
          With compassionate care, state-of-the-art facilities, and a
          patient-centered approach, we're dedicated to your well-being. Trust
          us with your health and experience the difference.
          </p>
        </div>
        <div class="booking__form">
          <form>
            <h4>Book Now</h4>
            <input type="text" placeholder="Name" />
            <input type="text" placeholder="Email" />
              <label class="form-label visually-hidden" for="inputCategory">Category</label>
                  <select class="form-select" id="inputCategory">
                    <option selected="selected">Therapy Type</option>
                    <option> Individual </option>
                    <option> Family </option>
                    <option> Couple </option>
                  </select> 
            <button class="submit">Book Appointment</button>
          </form>
        </div>
      </div>
    </section>

    <section class="section__container why__container" id="blog">
      <div class="why__image">
        <img src="https://dy7glz37jgl0b.cloudfront.net/advice/images/756d7ae74b8cc73b45b9c6321f23b9a0-1-group-therapy-facilitator-speaks_l.jpg" alt="why choose us" />
      </div>
      <div class="why__content">
        <h2 class="section__header">Why Choose Us</h2>
        <p>
          With a steadfast commitment to your well-being, our team of highly
          trained healthcare professionals ensures that you receive nothing
          short of exceptional patient experiences.
        </p>
        <div class="why__grid">
          <span><i class="ri-hand-heart-line"></i></span>
          <div>
            <h4>Intensive Care</h4>
            <p>
              Our Intensive Care Unit is equipped with advanced technology and
              staffed by team of professionals
            </p>
          </div>
          <span><i class="ri-home-line"></i></span>
          <div>
            <h4>Home visit</h4>
            <p>
              A compassionate initiative to prioritize your health and
              well-being without any financial burden.
            </p>
          </div>
          <span><i class="ri-computer-line"></i></span>
          <div>
            <h4>Online and Offline Therapy sessions</h4>
            <p>
              Our services provides online and offline therapy 
              services to our customer via video calls, Regular calls, Private sessions
              and many other options.
            </p>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <h3>Bajra<span>Yog</span></h3>
          <p>
            We are honored to be a part of your healthcare journey and committed
            to delivering compassionate, personalized, and top-notch care every
            step of the way.
          </p>
          <p>
            Trust us with your health, and let us work together to achieve the
            best possible outcomes for you and your loved ones.
          </p>
        </div>
        <div class="footer__col">
          <h4>About Us</h4>
          <p>Home</p>
          <p>About Us</p>
          <p>Terms & Conditions</p>
        </div>
        <div class="footer__col">
          <h4>Contact Us</h4>
          <p>
            <i class="ri-map-pin-2-fill"></i> Lagankhel, Lalitpur
          </p>
          <p><i class="ri-mail-fill"></i> healthfirst@gmail.com</p>
          <p><i class="ri-phone-fill"></i> 01-54202345 </p>
        </div>
      </div>
      <div class="footer__bar">
        <div class="footer__bar__content">
          <p>Copyright © 2024 . All rights reserved.</p>
        </div>
      </div>
    </footer>
  </body>
</html>