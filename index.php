
 <?php
 $cars = [
     [
         'name' => 'Dzire',
         'image' => 'Dzire.jpg',
         'rating' => 4,
         'rates' => [
             'Airport' => 900,
             '8Hr/80Km' => 1600,
             '12Hr/200Km' => 2000,
             'OutStation' => 10
         ],
         'airport_transfer' => [
             'available' => true,
             'price' => 900
         ]
     ],
     [
         'name' => 'Ertiga',
         'image' => 'ertiga.jpg',
         'rating' => 4,
         'rates' => [
             'Airport' => 1200,
             '8Hr/80Km' => 2200,
             '12Hr/200Km' => 2600,
             'OutStation' => 13
         ],
         'airport_transfer' => [
             'available' => true,
             'price' => 1200
         ]
     ],
     [
         'name' => 'Innova',
         'image' => 'innova.jpg',
         'rating' => 4,
         'rates' => [
             'Airport' => 1500,
             '8Hr/80Km' => 3000,
             '12Hr/200Km' => 3500,
             'OutStation' => 16
         ],
         'airport_transfer' => [
             'available' => true,
             'price' => 1500
         ]
     ],
     [
         'name' => 'Crusier',
         'image' => 'cruiser.webp',
         'rating' => 4,
         'rates' => [
              'Airport' => 1700,
             '8Hr/80Km' => 3000,
             '12Hr/200Km' => 3500,
             'OutStation' => 18
             ],
         'airport_transfer' => [
             'available' => true,
             'price' => 1700
         ]
     ],
     [
         'name' => '17 Seater Tempo Traveller',
         'image' => '17seater.jpg',
         'rating' => 4,
         'rates' => [
              'Airport' => 2500,
             
             '12Hr/200Km' => 5000,
             'OutStation' => 25
             ],
         'airport_transfer' => [
             'available' => true,
             'price' => 2500
         ]
     ],
     [
         'name' => '21 Seater Tempo Traveller',
         'image' => '21seater..webp',
         'rating' => 4,
         'rates' => [],
         'airport_transfer' => [
             'available' => true,
             'price' => null
         ]
     ],
     [
         'name' => '27 Seater Tempo Traveller',
         'image' => '27st.jpeg',
         'rating' => 4,
         'rates' => [
              'Airport' => 3500,
             
             '12Hr/200Km' => 7500,
             'OutStation' => 40
             ],
         'airport_transfer' => [
             'available' => true,
             'price' => 3500
         ]
     ],
     [
         'name' => 'Innova Crysta',
         'image' => 'innovaCrysta.jpg',
         'rating' => 4,
         'rates' => [
             'Airport' => 1700,
             '8Hr/80Km' => 3500,
             '12Hr/200Km' => 4000,
             'OutStation' => 17
             
             ],
         'airport_transfer' => [
             'available' => true,
             'price' => 1700
         ]
     ],
     [
         'name' => 'AC Bus Service',
         'image' => 'acBus.jpg',
         'rating' => 4,
         'rates' => [],
         'airport_transfer' => [
             'available' => true,
             'price' => null
         ]
     ],
     [
         'name' => 'Ambulance Tavera',
         'image' => 'ambulance.jpg',
         'rating' => 4,
         'rates' => [
             'OutStation' => 17
             ],
         'airport_transfer' => [
             'available' => false
         ]
     ]
 ];
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taxi Booking Varanasi</title>
  <link rel="stylesheet" href="css/style.css?t=777">
  <link rel="stylesheet" href="./css/all.min.css">

 <style>
  .card{
    padding: 20px;
  }
  .card img{
    border-radius: 10px;
  }
  .learn-more a, .book-now a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.3s ease;
    font-weight: 800;
    font-size: 16px;
    text-transform: uppercase;
}

  </style>
</head>
<body>



    <div class="marquee-container">
        <marquee behavior="scroll" direction="left" scrollamount="5">
          Welcome to Taxi Booking Varanasi
        </marquee>
      </div>
  
   <nav class="navbar">
     <div class="navbar-container">
       <a href="#" class="navbar-logo">Taxi Booking Varanasi</a>
       <div class="menu-icon">
         <span class="bar"></span>
         <span class="bar"></span>
         <span class="bar"></span>
       </div>
       <ul class="nav-menu">
         <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
         <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
         
         <li class="nav-item"><a href="#price" class="nav-link">Price</a></li>
         <li class="nav-item"><a href="#Packages" class="nav-link">Packages</a></li>
         <li class="nav-item"><a href="#saress" class="nav-link">Sarees</a></li>
         <li class="nav-item"><a href="#Booking" class="nav-link">Booking</a></li>
       </ul>
     </div>
   </nav>
    



   


   <!-- Hero Section -->
   <section class="hero" style="background-image: url('img/bhu.jpg'); background-size: cover; background-position: center;" id="home">
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <h1 class="hero-title">Your journey begins with us</h1>
      <p class="hero-subtitle">Explore Varanasi and beyond with comfort and style</p>
      <div class="hero-features">
        <div class="feature">
          <i class="fas fa-car"></i>
          <span>24/7 Taxi Service</span>
        </div>
        <div class="feature">
          <i class="fas fa-map-marked-alt"></i>
          <span>Local & Outstation Trips</span>
        </div>
        <div class="feature">
          <i class="fas fa-shield-alt"></i>
          <span>Safe & Reliable</span>
        </div>
      </div>
      <a href="tel: +91 7457960008 " class="cta-button">Book Now</a>
    </div>
  </section>




  <div class="container" id="about">
    <!-- Form Section -->
<div class="form-section">
  <h2>Car Rental Form</h2>

  <form id="car-rental-form" onsubmit="sendToWhatsApp(event)">
    <label for="name">Name*</label>
    <input type="text" id="name" name="name" placeholder="Enter your name" required>

    <label for="phone">Phone Number</label>
    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" >

    <label for="pickup">Pick-Up Location</label>
    <input type="text" id="pickup" name="pickup" placeholder="City, Airport, Station, etc." >

    <label for="dropoff">Drop-Off Location</label>
    <input type="text" id="dropoff" name="dropoff" placeholder="City, Airport, Station, etc." >

    <label for="date">Date</label>
    <input type="date" id="date" name="date" >

      <select id="car" name="car" required style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 3px;">
      <option value="">Select a car</option>
      <?php foreach ($cars as $key => $value): ?>
        <option value="<?= $value['name']  ?>"><?= $value['name'] ?></option>
      <?php endforeach; ?>
    </select>

    <button type="submit">Submit</button>
  </form>
</div>

    <!-- Features Section -->
    <div class="features-section">
      <h2>Better Way to Rent Your Perfect Cars</h2>
      <div class="feature">
        <img src="img/location.png" alt="Location Icon">
        <div class="feature-content">
          <h3>Choose Your Pickup Location</h3>
          <p>Select from a wide range of locations.</p>
        </div>
      </div>
      <div class="feature">
        <img src="img/deal.png" alt="Deal Icon">
        <div class="feature-content">
          <h3>Select the Best Deal</h3>
          <p>Get the most competitive rates.</p>
        </div>
      </div>
      <div class="feature">
        <img src="img/car.jpg" alt="Car Icon">
        <div class="feature-content">
          <h3>Reserve Your Rental Car</h3>
          <p>Book your car with ease and comfort.</p>
        </div>
      </div>
    </div>


    
  </div>



  <!-- Welcome Section -->
  <section class="welcome-section">
    <div class="welcome-text">
      <h1>Welcome to Your Travels</h1>
      <p>
     
        Welcome to Taxi Booking Varanasi, see Varanasi local side seen here, 24 hour taxi is available from Varanasi to Prayagraj, Ayodhya, Gaya, Naimisharanya, Vindhyachal, Chitrakoot, Maihar, Outstation, your Happy journey 🙏🙏
      </p>
    </div>
    <div class="welcome-image">
      <!-- Add your own image URL in the src attribute -->
      <img src="img/temple2.png" alt="Travel Image">
    </div>
  </section>

 <!-- cars section -->
  <div class="Container">
 <div class="car-listings" id="price">
   <h2>Our Car Fleet</h2>
   <div class="card-container">
     <?php foreach ($cars as $car): ?>
       <div class="car-card">
         <img src="img/<?php echo htmlspecialchars($car['image']); ?>" alt="<?php echo htmlspecialchars($car['name']); ?>" class="car-image">
         <h3><?php echo htmlspecialchars($car['name']); ?></h3>
         <div class="rating">
           <span style="color: green;">Rated: <?php echo str_repeat('★', $car['rating']) . str_repeat('☆', 5 - $car['rating']); ?></span>
         </div>
         <?php if (!empty($car['rates'])): ?>
           <div class="rates">
             <?php foreach ($car['rates'] as $type => $rate): ?>
               <p><strong><?php echo htmlspecialchars($type); ?>:</strong> ₹<?php echo number_format($rate); ?><?php echo $type === 'OutStation' ? '/Km' : ''; ?></p>
             <?php endforeach; ?>
           </div>
         <?php endif; ?>
       </div>
     <?php endforeach; ?>
   </div>
 </div>

             </div>
  <!-- Airport Transfer Car Rental Section -->
  <!-- Airport Transfer Car Rental Section -->
  <section class="airport-transfer">
      <h2>Airport Transfer Car Rentals</h2>
      <div class="car-card-container">
          <?php foreach ($cars as $car): ?>
              <?php if ($car['airport_transfer']['available']): ?>
                  <div class="car-card <?php echo strtolower(str_replace(' ', '-', $car['name'])); ?>">
                      <img src="img/<?php echo htmlspecialchars($car['image']); ?>" alt="<?php echo htmlspecialchars($car['name']); ?>">
                      <h3><?php echo htmlspecialchars($car['name']); ?></h3>
                      <?php if ($car['airport_transfer']['price']): ?>
                          <p class="price">₹<?php echo number_format($car['airport_transfer']['price']); ?></p>
                      <?php else: ?>
                          <p class="price">Price on request</p>
                      <?php endif; ?>
                      <button class="book-now"><a href="tel: +91 7457960008">Book Now</a></button>
                  </div>
              <?php endif; ?>
          <?php endforeach; ?>
      </div>
  </section>


  <!-- Tour Packages Section -->
  <section class="tour-packages" id="Packages">
    <h2>Our Popular Tour Packages</h2>
    <div class="card-container">
      <div class="card">
        <img src="img/sangam.jpg" alt="Sangam Tour">
        <h3>Sangam Tour</h3>
        <p>Experience the holy confluence of three sacred rivers in Prayagraj.</p>
        <button class="learn-more"> <a href="tel: +91 7457960008 ">Call Now</a></button>
      </div>
      <div class="card">
        <img src="img/vns.jpg" alt="Varanasi Full Tour">
        <h3>Varanasi Full Tour</h3>
        <p>Explore the spiritual heart of India with our comprehensive Varanasi tour.</p>
        <button class="learn-more"> <a href="tel: +91 7457960008 ">Call Now</a></button>
      </div>
      <div class="card">
        <img src="img/daan3.webp" alt="Pind Daan">
        <h3>Pind Daan</h3>
        <p>Perform the sacred ritual of Pind Daan for your ancestors' souls.</p>
        <button class="learn-more"> <a href="tel: +91 7457960008 ">Call Now</a></button>
      </div>
      <div class="card">
        <img src="img/daan2.jpeg" alt="Kashi Prayagraj Pind Daan Package">
        <h3>Kashi Prayagraj Pind Daan Package</h3>
        <p>A comprehensive package covering Pind Daan rituals in Kashi and Prayagraj.</p>
        <button class="learn-more"> <a href="tel: +91 7457960008 ">Call Now</a></button>
      </div>
      <div class="card">
        <img src="img/ayodhya.avif" alt="Ayodhya Tour">
        <h3>Ayodhya Full Tour Package from  Varanasi</h3>
        <p>Visit the birthplace of Lord Ram and explore the rich history of Ayodhya.</p> 
        <button class="learn-more"> <a href="tel: +91 7457960008 ">Call Now</a></button>
      </div>
      <div class="card">
        <img src="img/daan.jpg">
        <h3>Kashi Prayagraj Gaya Pind Daan Special Package</h3>
        <p>A complete pilgrimage package covering Pind Daan in three holy cities.</p>
        <button class="learn-more"> <a href="tel: +91 7457960008 ">Call Now</a></button>
      </div>
    </div>
  </section>



    </section>
  
    <!-- Banarasi Silk Sarees Section -->

    <div style="max-width: 1090px; margin: 0 auto;">
    <section class="banarasi-sarees" id="saress">
      <div class="saree-image">
        <img src="img/sare.jpeg" alt="Banarasi Silk Saree">
      </div>
      <div class="saree-content">
        <h2>Traditional Elegance</h2>
        <h3>BANARASI SILK SAREES</h3>
        <p>
          Discover the timeless beauty of Banarasi Silk Sarees, a symbol of Indian craftsmanship and elegance. 
          These exquisite sarees are woven with intricate designs and pure silk, making them perfect for special occasions and traditional ceremonies.
        </p>
        <ul>
          <li>Handcrafted by skilled artisans</li>
          <li>Rich, vibrant colors and intricate patterns</li>
          <li>Perfect for weddings and festivals</li>
          <li>A treasured addition to any wardrobe</li>
        </ul>
        <button class="learn-more"> <a href="tel: +91 7457960008 ">Call Now</a></button>
      </div>
    </section>
  
                    
    <!-- Additional Services: Hotel Booking Section -->
    <section class="hotel-booking" id="Booking">
      <div class="hotel-content">
        <h2>Additional Services</h2>
        <h3>HOTEL BOOKING</h3>
        <p>
          Enhance your travel experience with our convenient hotel booking service. We partner with a wide range of accommodations to suit every budget and preference.
        </p>
        <ul>
          <li>Handpicked selection of quality hotels</li>
          <li>Best rates guaranteed</li>
          <li>24/7 customer support</li>
          <li>Seamless booking process</li>
          <li>Special packages for tour combinations</li>
        </ul>
        <button class="book-now"><a href="tel: +91 7457960008">Book Now</a></button>
      </div>
      <div class="hotel-image">
        <img src="img/hotel1.jpg" alt="Luxury Hotel Room">
      </div>
    </section>

     </section>
 
     <!-- Cruise Booking Section -->
     <section class="cruise-booking">
       <div class="cruise-image">
         <img src="img/ship.jpg" alt="Varanasi Ganga Cruise">
       </div>
       <div class="cruise-content">
         <h2>Sail Away</h2>
         <h3>CRUISE BOOKING</h3>
         <p>
           Experience the magic of Varanasi from a unique perspective with our enchanting cruise offerings. Glide along the sacred Ganges and witness the city's spiritual essence.
         </p>
         <h4>Popular Cruise Options:</h4>
         <ul>
           <li>Sunrise Boat Ride</li>
           <li>Evening Aarti Cruise</li>
           <li>Assi to Dashashwamedh Ghat Tour</li>
           <li>Full Moon Night Cruise</li>
           <li>Ramnagar Fort Cruise</li>
         </ul>
         <h4>Nearby Attractions:</h4>
         <ul>
           <li>Kashi Vishwanath Temple</li>
           <li>Sarnath (Buddhist Site)</li>
           <li>Ramnagar Fort</li>
           <li>Bharat Mata Temple</li>
           <li>Alamgir Mosque</li>
         </ul>
         <button class="book-now"><a href="tel: +91 7457960008 ">Book Cruise</a></button>
       </div>
     </section>
 



     <!-- Achievement Showcase Section -->
    <section class="achievement-showcase">
        <div class="achievement-container">
          <div class="achievement-item">
            <i class="fas fa-calendar-alt"></i>
            <div class="achievement-number" data-target="10">0</div>
            <p>Years of Experience</p>
          </div>
          <div class="achievement-item">
            <i class="fas fa-car"></i>
            <div class="achievement-number" data-target="25">0</div> +
            <p>Total Cars</p>
          </div>
          <div class="achievement-item">
            <i class="fas fa-smile"></i>
            <div class="achievement-number" data-target="2500">0</div>
            <p>Happy Customers</p>
          </div>
          <div class="achievement-item">
            <i class="fas fa-building"></i>
            <div class="achievement-number" data-target="2">0</div>
            <p>Total Branches</p>
          </div>
        </div>
      </section>
  



     <!-- footer  -->
 
 
 
     </div>
 
 
 
 
 
 
 
 
 
 
     <footer class="site-footer">
   <div class="footer-content">
     <div class="footer-section">
       <h3>Popular Routes</h3>
       <ul>
         <li><a href="#">Varanasi to Prayagraj</a></li>
         <li><a href="#">Varanasi to Vindhyachal</a></li>
         <li><a href="#">Varanasi to Ayodhya</a></li>
         <li><a href="#">Varanasi to Gaya</a></li>
         <li><a href="#">Varanasi to Naimisharanya</a></li>
         <li><a href="#">Varanasi to Maihar</a></li>
         <li><a href="#">Varanasi to Chitrakoot</a></li>
         <li><a href="#">Varanasi to Ghazipur</a></li>
         <li><a href="#">Varanasi to Ballia</a></li>
         <li><a href="#">Varanasi to Azamgarh</a></li>
          <li><a href="#">Varanasi to Robertsganj</a></li>
       </ul>
     </div>
     <div class="footer-section">
       <h3>Information</h3>
       <ul>
         <li><a href="#">About</a></li>
         <li><a href="#">Services</a></li>
         <li><a href="#">Term and Conditions</a></li>
         <li><a href="#">Best Price Guarantee</a></li>
         <li><a href="#">Privacy & Cookies Policy</a></li>
       </ul>
     </div>
     <div class="footer-section">
       <h3>Customer Support</h3>
       <ul>
         <li><a href="#">FAQ</a></li>
         <li><a href="#">Payment Option</a></li>
         <li><a href="#">Booking Tips</a></li>
         <li><a href="#">How it works</a></li>
         <li><a href="#">Contact Us</a></li>
       </ul>
     </div>
     <div class="footer-section">
       <h3>Have a Question?</h3>
       <p>Your Address</p>
       <p>+91 7457960008</p>
       <p>garima.webdev@gmail.com</p>
     </div>
   </div>
   <div class="footer-bottom">
     <p>&copy; 2024 All rights reserved  
      
   Developed by <a href="mailto:garima.webdev@gmail.com">garima.webdev@gmail.com</a>
    
    </p>
   </div>

 </footer>

 <div class="callButton" >
    <style>
      /* Base */
.btn-floating:hover img {
  margin-bottom: -3px
}

.btn-floating {
    position: fixed;
    right: 25px;
    overflow: hidden;
    width: 50px;
    height: 50px;
    border-radius: 100px;
    border: 0;
    z-index: 9999;
    color: white;
    transition: .2s;
}

.btn-floating:hover {
    width: auto;
    padding: 0 20px;
    cursor: pointer;
}

.btn-floating span {
    font-size: 16px;
    margin-left: 5px;
    transition: .2s;
    line-height: 0px;
    display: none;
}

.btn-floating:hover span {
    display: inline-block;
}

/* Phone */
.btn-floating.phone {
    bottom: 85px;
    background-color: #760f10;
}

.btn-floating.phone:hover {
    background-color: #c03421;
}

/* WhatsApp */
.btn-floating.whatsapp {
    background-color: #34af23;
    bottom: 25px;
}

.btn-floating.whatsapp:hover {
    background-color: #1f7a12
}
      </style>
   <a href="tel:+91 7457960008">
  <button class="btn-floating phone">
<i style="font-size:23px;" class="fa-solid fa-phone"></i>

<span>+91 7457960008</span>
  </button>
</a>

<a href="https://wa.me/917457960008" target="_blank">
  <button class="btn-floating whatsapp">
    <i style="font-size:23px;" class="fab fa-whatsapp"></i>
    <span>+91 7457960008</span>
  </button>
</a>
   </div>

 <script>




      document.addEventListener('DOMContentLoaded', function() {
         const navLinks = document.querySelectorAll('.nav-menu a[href^="#"]');
         
         navLinks.forEach(link => {
           link.addEventListener('click', function(e) {
             e.preventDefault();
             
             const targetId = this.getAttribute('href').substring(1);
             const targetElement = document.getElementById(targetId);
             
             if (targetElement) {
               window.scrollTo({
                 top: targetElement.offsetTop - 70, // Adjust for header height
                 behavior: 'smooth'
               });
             }
           });
         });
        });
    </script>





<script>
      const menuIcon = document.querySelector('.menu-icon');
    const navMenu = document.querySelector('.nav-menu');
    achievementNumbers = document.querySelectorAll('.achievement-number');
    menuIcon.addEventListener('click', () => {
      menuIcon.classList.toggle('active');
      navMenu.classList.toggle('active');
    });

    document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', () => {
      menuIcon.classList.remove('active');
      navMenu.classList.remove('active');
    }));


      const animateNumber = (element) => {
        const target = parseInt(element.getAttribute('data-target'));
        const duration = 2000; // Animation duration in milliseconds
        const step = target / (duration / 16); // 60 fps
        let current = 0;
  
        const updateNumber = () => {
          current += step;
          if (current < target) {
            element.textContent = Math.round(current);
            requestAnimationFrame(updateNumber);
          } else {
            element.textContent = target;
          }
        };
  
        updateNumber();
      };
  
      const observerOptions = {
        threshold: 0.5
      };
  
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            animateNumber(entry.target);
            observer.unobserve(entry.target);
          }
        });
      }, observerOptions);
  
      achievementNumbers.forEach(number => {
        observer.observe(number);
      });




</script>



<script>
  function sendToWhatsApp(event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const phone = document.getElementById('phone').value;
    const pickup = document.getElementById('pickup').value;
    const dropoff = document.getElementById('dropoff').value;
    const date = document.getElementById('date').value;
    const car = document.getElementById('car').value;

    const message = `Hi, I want to book a car rental:\n` +
                    `Name: ${name}\n` +
                    `Phone: ${phone}\n` +
                    `Pick-Up Location: ${pickup}\n` +
                    `Drop-Off Location: ${dropoff}\n` +
                    `Date: ${date}\n` +
                    `Car: ${car}`;

    const whatsappURL = `https://wa.me/917457960008?text=${encodeURIComponent(message)}`;
    window.open(whatsappURL, '_blank');
  }
</script>


  </body>
  </html>
