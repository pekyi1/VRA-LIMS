<?php include ('partials/menu.php'); ?>


    <main>
        <section class="member-detail">
            <h1>Member Detail</h1>
            <div class="member-info">
                <p><strong>Member Name:</strong> Charles McAdjei-Ansley</p>
                <p><strong>Member Email:</strong> charles.ansley@xyz.com</p>
                <p><strong>Registration Date:</strong> 2019-07-01</p>
                <p><strong>Member Id:</strong> MS-23844</p>
                <p><strong>Department:</strong> MIS</p>
                <p><strong>Position:</strong> Librarian</p>
            </div>
        </section>

        <section class="book-basket">
            <h2>Your Title Basket</h2>
            <table>
                <thead>
                    <tr>
                        <th>Item Code</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Act1</td>
                        <td>Reasoning & Writing Well</td>
                    </tr>
                    <tr>
                        <td>Act2</td>
                        <td>Reasoning & Writing Well</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="current-book">
            <h2>Your Current Book</h2>
            <table>
                <thead>
                    <tr>
                        <th>Item Code</th>
                        <th>Title</th>
                        <th>Loan Date</th>
                        <th>Return Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Act1</td>
                        <td>Reasoning & Writing Well</td>
                        <td>2023-11-08</td>
                        <td>2023-11-28</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="book-history">
            <h2>Your Book History</h2>
            <table>
                <thead>
                    <tr>
                        <th>Item Code</th>
                        <th>Title</th>
                        <th>Book Type</th>
                        <th>Return Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Act1</td>
                        <td>Reasoning & Writing Well</td>
                        <td>Hard Copy</td>
                        <td>2023-11-28</td>
                    </tr>

                    <tr>
                        <td>Act2</td>
                        <td>Reasoning & Writing Well</td>
                        <td>Soft Copy</td>
                        <td>2023-11-28</td>
                    </tr>
                    <tr>
                        <td>Act2</td>
                        <td>Reasoning & Writing Well</td>
                        <td>E.Book</td>
                        <td>2023-11-28</td>
                    </tr>
                    <tr>
                        <td>Act2</td>
                        <td>Reasoning & Writing Well</td>
                        <td>Hard Copy</td>
                        <td>2023-11-28</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="basket-summary">
            <h2>Your Title Basket</h2>
            <p>2 Title Basket(s)</p>
            <div class="basket-actions">
                <a href="#">Reserve Book(s) on Basket</a>
                <a href="#">Clear Basket</a>
                <a href="#">Remove Selected book(s) from Basket</a>
            </div>
        </section>
        

        <footer>
            <p>&copy; Volta River Authority | Library Management System</p>
        </footer>
    </main>
</body>


<script>
    const hamburger = document.querySelector('.hamburger');
 const navLinks = document.querySelector('.nav-links');
 
 hamburger.addEventListener('click', () => {
     navLinks.classList.toggle('show');
 });
 </script>
</html>
