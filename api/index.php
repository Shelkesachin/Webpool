<!--  -->
<?php
$navbarPath = __DIR__ . '/navbar.php';

if (file_exists($navbarPath)) {
    include $navbarPath;
} else {
    error_log('Navbar not found: ' . $navbarPath);
}
?>
<!-- Hero Section Start -->
<section class="kzn-hero">
    <div class="kzn-hero-overlay"></div>

    <div class="container kzn-hero-container">
        <div class="kzn-hero-content">
            <h1>Learning Courses Online</h1>
            <p>Find your course and start learning.</p>
        </div>

        <!-- Feature Cards -->
        <div class="row g-4 kzn-feature-row">

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="kzn-feature-card">
                    <div class="kzn-feature-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="kzn-feature-info">
                        <h3>Best Industry Leaders</h3>
                        <a href="./about.html">
                            View More <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="kzn-feature-card">
                    <div class="kzn-feature-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div class="kzn-feature-info">
                        <h3>Learn New Skills</h3>
                        <a href="./courses.html">
                            View More <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="kzn-feature-card">
                    <div class="kzn-feature-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div class="kzn-feature-info">
                        <h3>Career Opportunities</h3>
                        <a href="./contact-us.html">
                            View More <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Hero Section End -->



<!-- Services Section Start -->
<section class="kzn-services-section">
    <div class="container">

        <!-- Section Heading -->
        <div class="kzn-services-heading text-center">
            <span class="kzn-services-subtitle">WHAT WE OFFER</span>

            <h2>Our Professional Services</h2>

            <p>
                We provide innovative digital solutions to help your
                business grow and succeed in the digital world.
            </p>
        </div>

        <!-- Service Cards -->
        <div class="row g-4">

            <!-- Website Development -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="kzn-service-card kzn-web-service">

                    <div class="kzn-service-icon">
                        <i class="fa-solid fa-code"></i>
                    </div>

                    <h3>Website Development</h3>

                    <p>
                        We create modern, responsive, and user-friendly
                        websites tailored to your business requirements.
                        Our solutions focus on performance, design,
                        and user experience.
                    </p>

                    <a href="./contact-us.html" class="kzn-service-link">
                        Learn More
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>
            </div>

            <!-- QR Code Generation -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="kzn-service-card kzn-qr-service">

                    <div class="kzn-service-icon">
                        <i class="fa-solid fa-qrcode"></i>
                    </div>

                    <h3>QR Code Generation</h3>

                    <p>
                        Generate custom QR codes for websites, contact
                        details, business promotions, digital menus,
                        and other business applications with ease.
                    </p>

                    <a href="./contact-us.html" class="kzn-service-link">
                        Learn More
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>
            </div>

            <!-- App Development -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="kzn-service-card kzn-app-service">

                    <div class="kzn-service-icon">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>

                    <h3>App Development</h3>

                    <p>
                        Build intuitive and reliable applications
                        designed around your business goals, helping
                        you improve customer engagement and productivity.
                    </p>

                    <a href="./contact-us.html" class="kzn-service-link">
                        Learn More
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- Services Section End -->


    <!-- section fourth start --------------------------------------------->

<?php
$footerPath = __DIR__ . '/footer.php';

if (file_exists($footerPath)) {
    include $footerPath;
} else {
    error_log('Footer not found: ' . $footerPath);
}
?>

</body>

</html>