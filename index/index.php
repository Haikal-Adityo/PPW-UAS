<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- ===== Fontawesome CDN Link ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- ===== JAVASCRIPT ===== -->
    <script src="carouselScript.js" defer></script>
    <title>Green Leaf</title>
    
</head>

<body>


    <header>
        <a href="#"><img class="logo" src="assets/LOGO_NO_BACKGROUND.png" alt="logo"></a>
        <nav>
            <ul>
                <li><a href="#banner">Home</a></li>
                <li><a href="#content">About</a></li>
                <li><a href="#product-carousel">Products</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="main-div" id="banner">
        <div class="banner-content">
            <h1>Take a Sip</h1>
            <p>Elevate your tea experience with out exquisite blends and exceptional brews</p>
        </div>
    </div>


    <div class="main-div" id="category">
        <div class="container">
            <h2>Explore Our Category</h2>
            <div class="product-grid">
                <div class="product">
                    <img src="assets/TEA.jpg" alt="Product 1">
                    <p>Tea</p>
                </div>
                <div class="product">
                    <img src="assets/ACCESSORIES.png" alt="Product 2">
                    <p>Tea Accessories</p>
                </div>
                <div class="product">
                    <img src="assets/GIFT_BOX.jpg" alt="Product 3">
                    <p>Gifts</p>
                </div>
                <!-- Add more product items as needed -->
            </div>
        </div>
    </div>

    <div class="main-div" id="content">
        <div class="container">
            <div class="image-container">
                <img src="https://images.unsplash.com/photo-1644335471325-52e2d44fca64?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                    alt="factory">
            </div>
            <div class="text-container">
                <h2>We're extremely proud of our creations</h2>
                <p>At Green Leaf, we meticulously handcraft, blend, and package our products in Yogyakarta,
                    Indonesia.
                    Through collaborations with global growers and small-scale cooperatives, we responsibly source
                    the
                    finest organic ingredients. Our creations are thoughtfully designed, offering therapeutic
                    benefits,
                    exquisite flavors, and a minimal ecological impact. Join us in embracing serene moments,
                    prioritizing well-being, and sharing the joy of exceptional tea with loved ones.</p>
                <a href="about.html">
                    <button type="learn" id="submitBtn" class="btn">
                        <span>About Us</span>
                        <span><i class="fa-solid fa-chevron-right"></i></span>
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="main-div" id="product-carousel">

        <div class="wrapper">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <h2>Some of our most loved teas</h2>
            <ul class="carousel">
                <li class="card">
                    <div class="img"><img src="assets/GREEN_TEA.jpg" alt="Green Tea"></div>
                    <strong>Green Tea</strong>
                    <p>Cleansing and revitalizing</p>
                </li>
                <li class="card">
                    <div class="img"><img src="assets/MATCHA.jpg" alt="Matcha"></div>
                    <strong>Matcha</strong>
                    <p>Rich, creamy, and vibrant</p>
                </li>
                <li class="card">
                    <div class="img"><img src="assets/PEPPERMINT.jpg" alt="Peppermint"></div>
                    <strong>Peppermint</strong>
                    <p>Refreshing and cooling</p>
                </li>
                <li class="card">
                    <div class="img"><img src="assets/CHAMOMILE.jpg" alt="Chamomile"></div>
                    <strong>Chamomile</strong>
                    <p>Relaxation in a gentle cup</p>
                </li>
                <li class="card">
                    <div class="img"><img src="assets/ENGLISH_BREAKFAST.jpg" alt="English Breakfast"></div>
                    <strong>English Breakfast</strong>
                    <p>A premium black tea</p>
                </li>
                <li class="card">
                    <div class="img"><img src="assets/FRENCH_EARL_GREY.jpg" alt="Frech Earl Grey"></div>
                    <strong>Frech Earl Grey</strong>
                    <p>Unique take on a Traditional Favourite</p>
                </li>
                <li class="card">
                    <div class="img"><img src="assets/SLEEP.jpg" alt="Sleep Tea"></div>
                    <strong>Sleep Tea</strong>
                    <p>A soothing, calming blend</p>
                </li>
                <li class="card">
                    <div class="img"><img src="assets/CAFFEINE_FREE_CHAI.jpg" alt="Caffeine Free Chai"></div>
                    <strong>Caffeine Free Chai</strong>
                    <p>Fresh spices, authentic flavours</p>
                </li>
            </ul>
            <i id="right" class="fa-solid fa-angle-right"></i>
        </div>

    </div>


    <div class="main-div" id="content">
        <div class="container">
            <div class="image-container">
                <img src="https://images.unsplash.com/photo-1601876814226-443511d81ddc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                    alt="food-waste">
            </div>
            <div class="text-container">
                <h2>We strive to cultivate a greener world</h2>
                <p>At Green Leaf, we proudly hold certifications that reflect our environmental commitment. Our
                    partnership with 1% for the Planet, organic certification, and support for fair trade practices
                    showcase our dedication. We actively minimize our ecological footprint through conscious choices
                    in
                    our operations. Our mission is to nurture a sustainable future with the smallest possible
                    negative
                    impact on the planet.</p>
                <a href="green-world.html">
                    <button type="learn" id="submitBtn" class="btn">
                        <span>Learn more</span>
                        <span><i class="fa-solid fa-chevron-right"></i></span>
                    </button>
                </a>
            </div>
        </div>
    </div>


    <div class="main-div" id="contact" style="visibility: visible;">
        <h2>Contact Us</h2>
        <p>Have a question or inquiry? Fill out the form below and we'll get back to you as soon as possible.</p>
        <form action="" method="POST" id="form">
            <input type="text" id="name" name="name" placeholder="Name" required>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <textarea id="message" name="message" placeholder="Message" required></textarea>
            <button type="submit" id="submitBtn" class="btn">
                <span>Send Message</span>
                <span><i class="fa-solid fa-chevron-right"></i></span>
            </button>
        </form>
    </div>

    <div class="main-div" id="thankYouMessage" style="display: none;">
        <h2>Thank You!</h2>
        <p>Your message has been received. We will get back to you soon.</p>
    </div>

    <footer>
        <p>&copy; 2023 Green Leaf. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>

</html>