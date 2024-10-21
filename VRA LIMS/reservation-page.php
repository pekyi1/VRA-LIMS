<?php include ('partials/menu.php'); ?>

    <div class="sign-in-overlay" id="sign-in-overlay">
        <div class="sign-in-modal">
            <div class="top">
                <div>
                    <h1>Request Submitted</h1>
                </div>
                <div id="close-sign-in"><i class='bx bx-x'></i></div>
            </div>
            <div class="middle">
                <div class="error-message">
                    <div><i class='bx bx-error-circle'></i></div>
                    <div>
                        <p>Request Submitted</p>
                        <p>Your request for "To Kill a Mockingbird" has been submitted successfully. We'll process your request shortly and notify
                        you via email.Thank you for using our library management system!</p>
                        <p>Learn more</p>
                    </div>
                </div>
            </div>
            <div class="lower"><button>View User Loan Page</button></div>
        </div>
    </div>


    <main>
        <section class="reservation">
            <h1>Reservation Page</h1>
            <div class="line"></div>
            <p>Welcome to the book request section of our Library management system! Here, you can conveniently request books and other materials to be added to our collection or borrowed for your use.</p>
        </section>

        <section>

            <div class="reservation-form">
                <form action="#" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="book-title">
                                <i class="icon">📚</i>
                                Book Title
                            </label>
                            <input type="text" id="book-title" placeholder="Book Title" required>
                        </div>
                        <div class="form-group">
                            <label for="author-name">
                                <i class="icon">👤</i>
                                Author Name
                            </label>
                            <input type="text" id="author-name" placeholder="Author Name" required>
                        </div>
                    </div>
                    <div class="form-group full-width">
                        <label for="request-type">
                            <i class="icon">🔄</i>
                            Reservation/Request Type
                        </label>
                        <select id="request-type" required>
                            <option value="">Reservation/Request Type</option>
                            <option value="Reserve">Reserve</option>
                            <option value="Request">Request</option>
                        </select>
                    </div>
                    <div class="form-group full-width">
                        <label for="pickup-location">
                            <i class="icon">📍</i>
                            Preferred Pickup Location
                        </label>
                        <select id="pickup-location" required>
                            <option value="">Preferred Pickup Location</option>
                            <option value="Main Library">Accra Library</option>
                            <option value="Main Library">Akuse Library</option>
                            <option value="Main Library">Akosombo Library</option>
                            <option value="Main Library">Aboaze Library</option>
                            <option value="City Branch">Tema Library</option>
                        </select>
                    </div>
                    <div class="form-group full-width">
                        <label for="comments">
                            <i class="icon">📝</i>
                            Additional Information
                        </label>
                        <textarea id="comments" rows="4" placeholder="Add any additional information or comments about your request here"></textarea>
                    </div>
                    <button id="submit-btn" type="submit" class="submit-btn">Submit Request</button>
                </form>
            </div>         
            
        </section>
    </main>

    <footer>
        <p>&copy; Volta River Authority | Library Management System</p>
    </footer>

    <script>
          const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('show');
});
    </script>
    <script>
        const submitBtn = document.getElementById("submit-btn");
        const closeSignIn = document.getElementById("close-sign-in");
        const signInOverlay = document.querySelector(".sign-in-overlay");
       
        submitBtn.addEventListener("click", function () {
            signInOverlay.style.display = "flex";
            signInOverlay.classList.add('show-animation');
        });

        closeSignIn.addEventListener('click', function () {
            signInOverlay.style.display = "none";
        });
    </script>
</body>
</html>
