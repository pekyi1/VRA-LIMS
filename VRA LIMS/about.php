<?php include ('partials/menu.php'); ?>

    <!-- About Us Section -->
    <section class="about-us">
        <div class="about-header">
            <h1>Who We Are?</h1>
            <p>Welcome to the LMS your trusted partner in managing library resources efficiently and effectively. With a passion for promoting knowledge and literacy, we strive to provide cutting-edge solutions tailored to the needs of libraries and their patrons.</p>
        </div>
    </section>

    <section class="about-lms-section">
        <div class="about-content">
            <img src="image-componets/Photo.jpg" alt="Library Image" class="about-image">
            <div class="about-text">
                <h2>About LMS</h2>
                <p>The VRA Library was established with the inception of the Volta River Project based on Government Legislative Act which established VRA (Act 46 of 1962, section 16).</p>
                <p>It serves as one of the world’s leading research libraries, collects, organizes, preserves, and provides access to and services for a rich and unique record of human thought and creativity on the Volta River Project.</p>
                <a href="reservation-page.html" class="about-btn">Make A Book Request</a>
            </div>
        </div>
    </section>
    
    
        
    

    <!-- What We Do Section -->
    <section class="what-we-do">
        <h2>What We Do</h2>
        <p>Making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures.</p>
        <div class="services-container">
            <div class="service-list">
                <ul>
                    <li>
                        <div class="service-number">01</div>
                        <div class="service-description">
                            <strong>Great Author Awards – 1996 & 2000</strong>
                            <p>How to navigate around the interface and toggle on/off the panels you wish to use.</p>
                        </div>
                    </li>
                    <li>
                        <div class="service-number">02</div>
                        <div class="service-description">
                            <strong>10 Times New York Times ® Best Seller</strong>
                            <p>How to navigate around the interface and toggle on/off the panels you wish to use.</p>
                        </div>
                    </li>
                    <li>
                        <div class="service-number">03</div>
                        <div class="service-description">
                            <strong>Writer of Hack Productivity</strong>
                            <p>How to navigate around the interface and toggle on/off the panels you wish to use.</p>
                        </div>
                    </li>

                    <li>
                        <div class="service-number">04</div>
                        <div class="service-description">
                            <strong>Writer of Hack Productivity</strong>
                            <p>How to navigate around the interface and toggle on/off the panels you wish to use.</p>
                        </div>
                    </li>

                    
                    <!-- Additional services can be added here -->
                </ul>
            </div>
            <img src="image-componets/image.jpg" alt="Library Service Image" class="service-image">
        </div>
    </section>
    

    <!-- Our Collection Section -->
    <section class="our-collection">
        <h2>Our Collection</h2>
        <div class="collection-content">
            <img src="image-componets/1.png" alt="Book Collection" class="collection-image">
            <p>This is a subscription based collections of books, reports, Project Document, Newspaper articles related to VRA and the energy sector, Government Publication, journals, and working papers.
                Read about the challenges, milestones, and work of the Volta River Authority over the years.
                Flip through our e-catalog featuring: publicly available VRA documents, including operational & maintenance manuals, project, and board documents.</p>
        </div>
    </section>
    
    <!-- Library Locations Section -->
    <section class="library-locations">
        <h2>Library Locations and Contact</h2>
        <div class="line"></div>
        <div class="location-list">
            <div class="location-item">
                <img src="image-componets/mdi_location.svg" alt="Location Icon">
                <p><strong>Accra / Tema Library</strong><br>Charles Dodge-Addy<br>1306</p>
            </div>
            <div class="location-item">
                <img src="image-componets/mdi_location.svg" alt="Location Icon">
                <p><strong>Akosombo Library</strong><br>Mark Y. Awufo<br>2611</p>
            </div>
            <div class="location-item">
                <img src="image-componets/mdi_location.svg" alt="Location Icon">
                <p><strong>Akuse Library</strong><br>Grace B. Duah<br>3967</p>
            </div>
            <div class="location-item">
                <img src="image-componets/mdi_location.svg" alt="Location Icon">
                <p><strong>Aboadze</strong><br>Eric K. Obeng<br>4231</p>
            </div>
            <div class="location-item">
                <img src="image-componets/mdi_location.svg" alt="Location Icon">
                <p><strong>Kumasi</strong><br>Blessings N. Tetteh<br>5231</p>
            </div>
        </div>
    </section>
    <!-- Opening Hours Section -->
    <section class="opening-hours">
        <div class="opening-hours-container">
            <h2>Opening Hours</h2>
            <div class="hours-content">
                <div class="hours-item">
                    <img src="image-componets/ri_time-line.svg" alt="Opening Hours Icon" class="hours-icon">
                    <p><strong>Mondays</strong></p>
                    <p>Open: 08:00 AM</p>
                    <p>Close: 16:00 PM</p>
                </div>
                <p class="to-text">TO</p>
                <div class="hours-item">
                    <img src="image-componets/clarity_date-line.svg" alt="Calendar Icon" class="hours-icon">
                    <p><strong>Friday</strong></p>
                    <p>Open: 08:00 AM</p>
                    <p>Close: 16:00 PM</p>
                </div>
            </div>
        </div>
    </section>
    

    <footer>
        <p>&copy; Volta River Authority | Library Management System</p>
    </footer>
    
</body>

<script>
   const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('show');
});
</script>

</html>
