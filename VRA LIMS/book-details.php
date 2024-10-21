<?php include ('partials/menu.php'); ?>


<body>
    <div class="sign-in-overlay" id="sign-in-overlay">
        <div class="sign-in-modal">
            <div class="top">
                <div><h1>Sign-In</h1></div>
                <div id="close-sign-in"><i class='bx bx-x'></i></div>
            </div>
            <div class="middle">
                <div class="error-message">
                    <div><i class='bx bx-error-circle'></i></div>
                    <div>
                        <p>Error Message</p>
                        <p>You need to sign in to be able to make a request for a book</p>
                        <p>Learn more</p>
                    </div>
                </div>
            </div>
            <div class="lower"><button>proceed to sign in</button></div>
        </div>
    </div>
    <div class="modal-overlay" id="modal-overlay">
        <div class="modal">
            <div>
                <div><img src="image-componets/background2.png" alt=""></div>
                <div>
                    <h1>Atomic One's Summary</h1>
                    <div class="line"></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consequuntur, obcaecati harum commodi autem sequi nam temporibus blanditiis molestiae magni hic voluptates ad culpa necessitatibus quas quam architecto. Totam ex et adipisci consectetur hic deleniti vel, distinctio deserunt placeat ipsum aliquam vero eveniet nam pariatur esse? Autem maiores porro nihil veniam aliquid sapiente suscipit! Omnis nemo tempora similique numquam vero?</p>
                </div>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quisquam vero suscipit nemo at soluta harum dolores neque atque pariatur odio placeat quis facilis obcaecati corporis error optio, illo numquam cum quam eos laboriosam magni commodi. Velit nesciunt deserunt fugit suscipit debitis consectetur sunt dolore, veniam perspiciatis doloremque est. Quam corporis delectus qui iusto molestias rem laborum ipsa recusandae repudiandae quaerat, placeat dicta, perferendis dolores, excepturi alias culpa distinctio ut velit illo repellendus voluptatum? Rem omnis cum ipsam eaque odio, placeat commodi culpa non! Error recusandae accusamus quos eos asperiores illo aperiam odit, corrupti tempore sed eum aliquam placeat necessitatibus iure earum officia porro fugiat? Earum laboriosam sapiente, architecto tempora consectetur, non cumque ipsa natus odio repellendus minus quas delectus blanditiis iste esse provident pariatur illo aut accusantium! Exercitationem totam excepturi et rerum at quos natus nisi voluptas commodi perspiciatis quod quo corporis inventore voluptate consectetur, autem explicabo recusandae neque maxime ipsa esse magni ullam magnam. Modi omnis aspernatur ducimus possimus accusantium neque. Natus voluptatibus odit, quam tempore blanditiis explicabo minima provident incidunt quidem in porro autem itaque facilis nam voluptate illo deleniti, ea ipsum id labore nemo esse. Dolorem totam sapiente distinctio accusamus animi tempore dignissimos expedita consequatur quas?</p>
            </div>
            <div class="close-summary-btn">
                <button class="close-modal-btn">Close</button>
            </div>
        </div>
    </div>
    <main>
        <section class="hero">
            <h1>Book Details</h1>
            <div class="line"></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab ipsum nemo velit consectetur voluptate beatae eligendi quis hic porro accusamus magni nobis ad nihil odit nostrum quasi dolorem inventore dolore, quidem corporis quod repudiandae enim. Tenetur mollitia aliquam corporis.
                </p>
        </section>
        <section class="book">
            <div class="book-upper">
                <div class="book-image"><img src="image-componets/background2.png" alt=""></div>
                <div>
                    <div class="book-details">
                        <h1>The Atomic One's</h1>
                        <p>Making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined
                            with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated
                            Lorem Ipsum.</p>
                    
                        <table class="detail-table">
                            <tr>
                                <td class="label">Publisher</td>
                                <td class="colon">:</td>
                                <td class="value">Learning Private Limited (1 January 2021)</td>
                            </tr>
                            <tr>
                                <td class="label">Language</td>
                                <td class="colon">:</td>
                                <td class="value">English</td>
                            </tr>
                            <tr>
                                <td class="label">Paperback</td>
                                <td class="colon">:</td>
                                <td class="value">212 pages</td>
                            </tr>
                            <tr>
                                <td class="label">ISBN-10</td>
                                <td class="colon">:</td>
                                <td class="value">9788120345799</td>
                            </tr>
                            <tr>
                                <td class="label">Dimensions</td>
                                <td class="colon">:</td>
                                <td class="value">20 × 14 × 4 cm</td>
                            </tr>
                        </table>
                        <div class="detail-buttons">
                            <button id="read-book-btn">Make Request</button>
                            <button id="view-summary-btn">View Summary</button>
                        </div>
                        
                    </div>
                    <div class="book-details-2">
                        <div>
                        <h1>The Atomic One's</h1>
                        </div>
                        <div class="detail-buttons">
                            <button >Read-E-Book</button>
                        </div>
                    </div>

                </div>
                
            </div>
            <div class="book-lower">
                <div>
                    <button>BOOK DESCRIPTION</button>
                    <h1>Type of Book</h1>
                    <h1 style="color: #969AA0; font-family: 'Arial', sans-serif; ">Soft-Copy</h1>
                </div>
                <div>
                    <button>BOOK AVAILABILITY</button>
                    <h1>Is this Book Available</h1>
                    <h1>Book Status Availability <span>AVAILABLE</span></h1>
                </div>
            </div>
        </section>
        <section class="similar-books">
            <h1>Similar eBooks</h1>
            <div>
                <div class="card">
                    <img src="image-componets/background2.png" alt="Atomic One's Book Cover">
                    <h2 class="book-title">Atomic One’s</h2>
                    <p class="book-description">Many variations of passages of Lorem Ipsum willing araise alteration in some form.</p>
                    <div class="soft-copy">
                        <div class="soft-copy-icon"></div>
                        <span class="soft-copy-text">Soft Copy</span>
                    </div>
                    <a href="#" class="read-button">Read Book</a>
                </div>
                <div class="card">
                    <img src="image-componets/background2.png" alt="Atomic One's Book Cover">
                    <h2 class="book-title">Atomic One’s</h2>
                    <p class="book-description">Many variations of passages of Lorem Ipsum willing araise alteration in some form.</p>
                    <div class="soft-copy">
                        <div class="soft-copy-icon"></div>
                        <span class="soft-copy-text">Soft Copy</span>
                    </div>
                    <a href="#" class="read-button">Read Book</a>
                </div>
                <div class="card">
                    <img src="image-componets/background2.png" alt="Atomic One's Book Cover">
                    <h2 class="book-title">Atomic One’s</h2>
                    <p class="book-description">Many variations of passages of Lorem Ipsum willing araise alteration in some form.</p>
                    <div class="soft-copy">
                        <div class="soft-copy-icon"></div>
                        <span class="soft-copy-text">Soft Copy</span>
                    </div>
                    <a href="#" class="read-button">Read Book</a>
                </div>
            </div>
        </section>

        <footer>
            <p>&copy; Volta River Authority | Library Management System</p>
        </footer>
        
    </main>
    

 
   

    <script>
            const readBookBtn = document.getElementById("read-book-btn");
            const bookDetails = document.querySelector(".book-details");
            const bookDetails2 = document.querySelector(".book-details-2");
            const viewSummaryBtn = document.getElementById("view-summary-btn");
            const closeModalBtn = document.querySelector('.close-modal-btn');
            const modalOverlay = document.getElementById('modal-overlay');
            const modal = document.querySelector(".modal");
            const closeSignIn = document.getElementById("close-sign-in");
            const signInOverlay = document.querySelector(".sign-in-overlay");
            const hamburger = document.querySelector('.hamburger');
            const navLinks = document.querySelector('.nav-links');
            // readBookBtn.addEventListener("click", function () {
            // bookDetails.style.display = "none";
            // bookDetails2.style.display = "flex";
            // });
                viewSummaryBtn.addEventListener('click', function () {
                    modalOverlay.classList.add('show-modal');
                    modal.classList.add('show-animation');
                    modal.classList.remove('hide-animation');
                });

                closeModalBtn.addEventListener('click', function () {
                    modalOverlay.classList.remove('show-modal');
                    modal.classList.remove('show-animation');
                    modal.classList.add('hide-animation');
                    // modal.style.animation = 'myAnim 1s ease 0s 1 reverse forwards';

                    // // Wait for the animation to finish, then hide or remove the modal
                    // setTimeout(function () {
                    //     modal.style.display = 'none'; // Or remove it from the DOM if needed
                    // }, 1000);
                });
                readBookBtn.addEventListener("click", function (){
                    signInOverlay.style.display = "flex";
                    signInOverlay.classList.add('show-animation');
                });
                
                closeSignIn.addEventListener('click', function (){
                    signInOverlay.style.display = "none";
                });

                hamburger.addEventListener('click', () => {
                    navLinks.classList.toggle('show');
});
    </script>
</body>
</html>