
<?php include ('partials/menu.php'); ?>

    
    <main>
        <section class="hero">
            <h1>VRA LIBRARY</h1>
            <div class="line"></div>
            <div class="search-bar">
                <input type="text" placeholder="Search for Books, Tutorials, Manuals and Authors">
                <button><img src="image-componets/search.png" alt="Search"></button>
            </div>
            <button class="advance-search">Advance Search</button>
            <div class="filter-container">
                <div class="filter-item">
                    <label for="author">Author</label>
                    <div class="input-box">
                        <input type="text" id="author" placeholder="Jack W. Hayford">
                        <span class="clear-btn">✕</span>
                    </div>
                </div>
                <div class="filter-item">
                    <label for="book-type">Book Type</label>
                    <div class="input-box">
                        <select id="book-type">
                            <option>Literature</option>
                            <option>Literature</option>
                            <option>Literature</option>
                            <option>Literature</option>
                            <!-- Add more options here -->
                        </select>
                    </div>
                </div>
                <div class="filter-item">
                    <label for="subject">Subject</label>
                    <div class="input-box">
                        <input type="text" id="subject" placeholder="Jack W. Hayford">
                        <span class="clear-btn">✕</span>
                    </div>
                </div>
                <div class="filter-item">
                    <label for="locations">Locations</label>
                    <div class="input-box">
                        <select id="locations">
                            <option>All Location</option>
                            <option>Tema</option>
                            <option>Akuse</option>
                            <option>Accra</option>
                            <!-- Add more options here -->
                        </select>
                    </div>
                </div>
            </div>
        </section>

        <section class="book-list">
            <div class="book-item">
                <div class="book-card">
                    <img src="image-componets/background2.png" alt="Atomic One’s">
                </div>
                <h3>Atomic One’s</h3>
                <p>Many variations of passages of Lorem Ipsum willing arise alteration in some form.</p>
                <div class="copy-type-container">
                    <img src="image-componets/Bg.svg" class="copy-type-img">
                    <span class="copy-type">Hard Copy</span>
                </div>
                <button>Request Book</button>
            </div>
            
                <div class="book-item">
                    <div class="book-card">
                        <img src="image-componets/background2.png" alt="Atomic One’s">
                    </div>
                    <h3>Atomic One’s</h3>
                    <p>Many variations of passages of Lorem Ipsum willing arise alteration in some form.</p>
                    <div class="copy-type-container">
                        <img src="image-componets/Bg.svg" class="copy-type-img">
                        <span class="copy-type">Hard Copy</span>
                    </div>
                    <button>Request Book</button>
                </div>
            
                <div class="book-item">
                    <div class="book-card">
                        <img src="image-componets/background2.png" alt="Atomic One’s">
                    </div>
                    <h3>Atomic One’s</h3>
                    <p>Many variations of passages of Lorem Ipsum willing arise alteration in some form.</p>
                    <div class="copy-type-container">
                        <img src="image-componets/Bg.svg" class="copy-type-img">
                        <span class="copy-type">Hard Copy</span>
                    </div>
                    <button>Request Book</button>
                </div>

                <div class="book-item">
                    <div class="book-card">
                        <img src="image-componets/background2.png" alt="Atomic One’s">
                    </div>
                    <h3>Atomic One’s</h3>
                    <p>Many variations of passages of Lorem Ipsum willing arise alteration in some form.</p>
                    <div class="copy-type-container">
                        <img src="image-componets/Bg.svg" class="copy-type-img">
                        <span class="copy-type">Hard Copy</span>
                    </div>
                    <button>Request Book</button>
                </div>

                <div class="book-item">
                    <div class="book-card">
                        <img src="image-componets/background2.png" alt="Atomic One’s">
                    </div>
                    <h3>Atomic One’s</h3>
                    <p>Many variations of passages of Lorem Ipsum willing arise alteration in some form.</p>
                    <div class="copy-type-container">
                        <img src="image-componets/Bg.svg" class="copy-type-img">
                        <span class="copy-type">Hard Copy</span>
                    </div>
                    <button>Request Book</button>
                </div>

                <div class="book-item">
                    <div class="book-card">
                        <img src="image-componets/background2.png" alt="Atomic One’s">
                    </div>
                    <h3>Atomic One’s</h3>
                    <p>Many variations of passages of Lorem Ipsum willing arise alteration in some form.</p>
                    <div class="copy-type-container">
                        <img src="image-componets/Bg.svg" class="copy-type-img">
                        <span class="copy-type">Hard Copy</span>
                    </div>
                    <button>Request Book</button>
                </div>

                <div class="book-item">
                    <div class="book-card">
                        <img src="image-componets/background2.png" alt="Atomic One’s">
                    </div>
                    <h3>Atomic One’s</h3>
                    <p>Many variations of passages of Lorem Ipsum willing arise alteration in some form.</p>
                    <div class="copy-type-container">
                        <img src="image-componets/Bg.svg" class="copy-type-img">
                        <span class="copy-type">Hard Copy</span>
                    </div>
                    <button>Request Book</button>
                </div>

                <div class="book-item">
                    <div class="book-card">
                        <img src="image-componets/background2.png" alt="Atomic One’s">
                    </div>
                    <h3>Atomic One’s</h3>
                    <p>Many variations of passages of Lorem Ipsum willing arise alteration in some form.</p>
                    <div class="copy-type-container">
                        <img src="image-componets/Bg.svg" class="copy-type-img">
                        <span class="copy-type">Hard Copy</span>
                    </div>
                    <button>Request Book</button>
                </div>
            
        </section>
    </main>

    <footer>
        <p>&copy; Volta River Authority | Library Management System</p>
    </footer>

    <script>
        const advanceSearch = document.querySelector(".advance-search");
        const advanceSearchBox = document.querySelector(".filter-container");

        advanceSearch.addEventListener('click', () => {
                if (advanceSearchBox.style.display === 'flex') {
                    advanceSearchBox.style.display = 'none'; // Hide the component
                } else {
                    advanceSearchBox.style.display = 'flex'; // Show the component
                }
            });

    </script>
</body>
</html>
