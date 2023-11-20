<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="shortcut icon" href="img/Alecto logo white.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="Style/style.css"/>
        <title>Alecto</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Alecto</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="#products" class="nav__link">Products</a>
                        </li>
                        <li class="nav__item">
                            <a href="#faqs" class="nav__link">FAQs</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Contact Us</a>
                        </li>
                        <li class="nav__item">
                            <a href="controller/login.php" class="nav__link">Login</a>
                        </li>
                    </ul>
                   
                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>
                
                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class="ri-moon-line change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="img/Mockup/Mockup BTR Product.png" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                            Upgrade your style <br>  with T-Shirts from Alecto
                        </h1>
                        <p class="home__description">
                            Get high quality products and get comfortable T-Shirt for yourself
                        </p>
                        <a href="#about" class="button button--flex">
                            Explore <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>

                    
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <img src="img/Alecto logo black.png" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            About Us
                        </h2>

                        <p class="about__description">
                            Welcome to Alecto, we are a fashion destination that brings quality and style to every piece of clothing. 
                            Alecto was founded with a simple purpose, which is to provide unique and high-quality fashion choices to those who seek more from their clothing. 
                            At Alecto, we blend careful design, quality materials, and attention to detail to create garments that meet precision standards. 
                            We offer a variety of styles, from everyday wear to special options, to celebrate your uniqueness. Join us on our fashion journey.
                        </p>

                    </div>
                </div>
            </section>

            <!--==================== WHY ====================-->
            <section class="why section container">
                <div class="why__bg">
                    <h2 class="section__title-center why__title">
                        Why Choose Us?
                    </h2>

                    <div class="why__container grid">
                        <div class="why__card">
                            <div class="why__card-icon"><i class="ri-refund-fill"></i></div>
                            <h3 class="why__card-title">Guaranteed Satisfaction</h3>
                            <p class="why__card-description">
                                If the delivered plants do not meet your expectations, we offer a hassle-free refund policy.
                            </p>
                        </div>

                        <div class="why__card">
                            <div class="why__card-icon"><i class="ri-truck-line"></i></div>
                            <h3 class="why__card-title">Fast Delivery</h3>
                            <p class="why__card-description">
                                Our commitment to quick processing ensures your order is swiftly dispatched for delivery.
                            </p>
                        </div>

                        <div class="why__card">
                            <div class="why__card-icon"><i class="ri-t-shirt-fill"></i></div>
                            <h3 class="why__card-title">Superior Quality</h3>
                            <p class="why__card-description">
                                We take pride in providing only the finest quality plants to our customers, ensuring a delightful gardening experience.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== PRODUCTS ====================-->
            <section class="product section container" id="products">
                <h2 class="section__title-center">
                    Check out our <br> newest products
                </h2>

                <p class="product__description">
                    A selection of T-shirt collections are available from our shop. Get and enjoy the best quality.
                </p>

                <div class="product__container grid">
                    <article class="product__card">
                        <img src="img/Mockup/Mockup BTR Product.png" alt="" class="product__img">
                        <h3 class="product__title">Break The Rules T-Shirt</h3>
                        <span class="product__price">Rp. 80.000</span>
                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-fill"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <img src="img/Mockup/Mockup NTL Product.png" alt="" class="product__img">
                        <h3 class="product__title">Nothing To Lose T-Shirt</h3>
                        <span class="product__price">Rp. 80.000</span>
                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-fill"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <img src="img/Mockup/Mockup STAR Product.png" alt="" class="product__img">
                        <h3 class="product__title">Star T-Shirt</h3>
                        <span class="product__price">Rp. 82.000</span>
                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-fill"></i>
                        </button>
                    </article>
                </div>
            </section>

            <!--==================== QUESTIONS ====================-->
            <section class="questions section" id="faqs">
                <h2 class="section__title-center questions__title container">
                    Some common questions <br> were often asked
                </h2>

                <div class="questions__container container grid">
                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Why is the print on my shirt fading?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Over-washing, over-drying, or using too much detergent can cause the color of the t-shirt to fade.
                                    To maintain print quality, it is recommended to wash your t-shirt in cold water and use a mild detergent.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    How do I know if the shirt will shrink after washing?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    We have tested and selected high-quality materials that have minimal shrinkage after washing. 
                                    However, we always recommend against over-washing, over-drying or over-using detergent
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    how to find the latest t-shirt releases and promotions?"
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    To find out about the latest t-shirt releases and promotions, you can sign up for our newsletter on the website or follow our official social media accounts.
                                    We regularly update our platform with information about the latest collections and special offers.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Can I customize or personalize my shirt order?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Currently, we do not provide any personalization or customization services. 
                                    However, we offer a variety of interesting and unique designs to suit your personal style ne
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    What should I do if my shirt arrives damaged?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    We apologize for the inconvenience. If your t-shirt arrives damaged, please contact our customer service immediately with photo or video evidence of the damage.
                                    Our team will be happy to help you resolve the issue immediately.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Do you have a size chart for different body types?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Yes, we provide a detailed size chart to help you choose the size that suits your body shape.
                                    Please check the size chart available on our social media for a more accurate reference before making a purchase.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== CONTACT ====================-->
            <section class="contact section container" id="contact">                
                <div class="contact__container grid">
                    <div class="contact__box">
                        <h2 class="section__title">
                            Reach out to us today <br> via any of the given <br> information
                        </h2>

                        <div class="contact__data">
                            <div class="contact__information">
                                <h3 class="contact__subtitle">Call us for instant support</h3>
                                <span class="contact__description">
                                    <i class="ri-phone-line contact__icon"></i>
                                    085771504500
                                </span>
                            </div>

                            <div class="contact__information">
                                <h3 class="contact__subtitle">Write us by mail</h3>
                                <span class="contact__description">
                                    <i class="ri-mail-line contact__icon"></i>
                                    alectoofficial11@gmail.com
                                </span>
                            </div>
                        </div>
                    </div>

                    <form action="" class="contact__form">
                        <div class="contact__inputs">
                            <div class="contact__content">
                                <input type="email" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Email</label>
                            </div>

                            <div class="contact__content">
                                <input type="text" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Subject</label>
                            </div>

                            <div class="contact__content contact__area">
                                <textarea name="message" placeholder=" " class="contact__input"></textarea>                              
                                <label for="" class="contact__label">Message</label>
                            </div>
                        </div>

                        <button class="button button--flex">
                            Send Message
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </form>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">Alecto</a>

                    <h3 class="footer__title">
                        Subscribe to our newsletter <br> to get new update
                    </h3>

                    <div class="footer__subscribe">
                        <input type="email" placeholder="Enter your email" class="footer__input">

                        <button class="button button--flex footer__button">
                            Subscribe
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Our Address</h3>

                    <ul class="footer__data">
                        <li class="footer__information">Jl. KH Hasyim Ashari</li>
                        <li class="footer__information">Tangerang - Indonesia</li>
                        <li class="footer__information">15122</li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Contact Us</h3>

                    <ul class="footer__data">
                        <li class="footer__information">085771504500</li>
                        
                        <div class="footer__social">
                            <a href="https://tiktok.com/alecto.official" class="footer__social-link">
                                <i class="fab fa-tiktok"></i>
                            </a>
                            <a href="https://www.instagram.com/alecto_official" class="footer__social-link">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            <a href="https://youtube.com/AlectoOfficial11" class="footer__social-link">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </div>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        We accept all payment
                    </h3>

                    <div class="footer__cards">
                        <i class="fab fa-paypal footer__card" aria-hidden="true"></i>
                        <i class="fab fa-google-pay footer__card" aria-hidden="true"></i>
                        <i class="fas fa-credit-card footer__card" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <p class="footer__copy">&#169; Alecto. All rigths reserved</p>
        </footer>
        
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="Script/script.js"></script>
    </body>
</html>