<?php include ('partials/menu.php'); ?>


    <main>
        <!-- Contact Us Section -->
        <section class="contact-us">
            <h1>Contact Us</h1>
            <div class="line"></div>
            <p>Welcome to our contact page! We're thrilled that you're reaching out to us. Whether you have questions, feedback, or just want to say hello, we're here to assist you.</p>
        </section>

        <section class="keep-in-touch">
            <h2>Keep in Touch</h2>
            <p>Please stay connected with the library management using the provided contacts. Additionally, feel free to leave any feedback or reviews, and we'll be sure to respond to you promptly.</p>
            
            <div class="contact-methods">
                <div class="contact-item">
                    <img src="image-componets/Icon20.svg" alt="Visit Us Icon">
                    <div class="contact-text">
                        <p><strong>Visit Us :</strong><br>VOLTA RIVER AUTHORITY, ELECTROVOLTA</p>
                    </div>
                </div>
                <div class="contact-item">
                    <img src="image-componets/Icon.svg" alt="Drop Us Icon">
                    <div class="contact-text">
                        <p><strong>Drop Us :</strong><br>P.O. BOX MB 77, ACCRA</p>
                    </div>
                </div>
                <div class="contact-item">
                    <img src="image-componets/phone-call.svg" alt="Call Us Icon">
                    <div class="contact-text">
                        <p><strong>Call Us (Main-Line):</strong><br>Call: 233-30-266841-9</p>
                    </div>
                </div>
                <div class="contact-item">
                    <img src="image-componets/phone-call.svg" alt="Call PLC Icon">
                    <div class="contact-text">
                        <p><strong>Call Us (PLC):</strong><br>Call: 724306 / 724307</p>
                    </div>
                </div>
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
        
        

        <!-- Frequent Questions Section -->
        <section class="faq">
            <h2>Frequent Questions?</h2>
            <ul>
                <li>
                    <div class="question">Can’t search for materials by author, title, subject, or keyword?</div>
                    <div class="answer">You can use our advanced search features to find materials by these criteria in the library catalog.</div>
                </li>
                <li>
                    <div class="question">How do I search for books or materials in the library catalog?</div>
                    <div class="answer">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search function in our library can help you find books.</div>
                </li>
                <li>
                    <div class="question">Do you offer interlibrary loan services?</div>
                    <div class="answer">Yes, we offer interlibrary loans to assist in obtaining resources from other libraries.</div>
                </li>
                <li>
                    <div class="question">Can I access the library's resources remotely?</div>
                    <div class="answer">Yes, you can access many digital resources through our online platform using your library card.</div>
                </li>
                <li>
                    <div class="question">How do I access my library account online?</div>
                    <div class="answer">You can access your library account by logging into our website and navigating to the account section.</div>
                </li>
                <li>
                    <div class="question">How many items can I borrow at once, and what is the loan period?</div>
                    <div class="answer">You can borrow up to 10 items at a time for a period of 21 days.</div>
                </li>
                <li>
                    <div class="question">Can I access digital resources such as e-books and online databases?</div>
                    <div class="answer">Yes, digital resources including e-books and databases are accessible through the library’s digital platform.</div>
                </li>
                <li>
                    <div class="question">What are the library's operating hours?</div>
                    <div class="answer">The library operates from 9:00 AM to 8:00 PM on weekdays and 10:00 AM to 6:00 PM on weekends.</div>
                </li>
            </ul>
        </section>
        <!-- JavaScript Code Inline -->
    <script>
        document.querySelectorAll('.faq .question').forEach(question => {
            question.addEventListener('click', () => {
                const parent = question.parentElement;
                parent.classList.toggle('active');
            });
        });
   const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('show');
});
    </script>
        
    </main>

    <footer>
        <p>&copy; Volta River Authority | Library Management System</p>
    </footer>

</body>
</html>
