<?php include ('partials/menu.php'); ?>

    
        <section class="intro-section">
            <div class="intro-text">
                <h1>Sign-in</h1>
                <div class="line"></div>
                <p>There are many variations of passages of Lorem Ipsum available, have suffered alteration in some form.
                </p>
            </div>
        </section>
    
        <main class="login-section">
            <div class="login-box">
                <div class="login-header">
                    <h2>Librarian Sign-In</h2>
                    <div class="line"></div>
                    <p>This page is password protected. If you are the website admin, or have access to this page, please
                        type your password below.</p>
                </div>
                <div class="input-box">
                    <div class="input-field">
                        <div class="input-icon"></div>
                        <input type="email" placeholder="Enter your Email">
                    </div>
                    <div class="input-field">
                        <div class="input-icon"></div>
                        <input type="password" placeholder="Enter your password">
                    </div>
                    <div class="sign-in-button">Sign-In</div>
                </div>
            </div>
        </main>
    
        <footer class="footer">
            <div class="footer-content">
                <div class="footer-line"></div>
                <p>© Volta River Authority | Library Management System</p>
            </div>
        </footer>
    </div>
    <script>
          const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('show');
});
    </script>
</body>
</html>