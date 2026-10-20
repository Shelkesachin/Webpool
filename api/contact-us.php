
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us & Contact | Webpool Soft Services</title>
    <meta name="description" content="Learn about our mission, vision, and services. Contact Webpool Soft Services for assistance.">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* General */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* About Hero */
        .kzn-about-hero {
            background:
                linear-gradient(rgba(0, 0, 0, .55), rgba(0, 0, 0, .55)),
                url("../assets/img/about-us.webp");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            min-height: 450px;
            display: flex;
            align-items: center;
            color: #fff;
        }

        .kzn-about-title {
            font-size: clamp(36px, 5vw, 58px);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .kzn-about-subtitle {
            font-size: 18px;
            line-height: 1.7;
        }

        /* Breadcrumb */
        .kzn-about-breadcrumb {
            background: #f8f9fa;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .06);
            padding: 13px 0;
        }

        .kzn-about-breadcrumb .breadcrumb {
            margin: 0;
            font-size: 14px;
        }

        .kzn-about-breadcrumb a {
            color: #555;
            text-decoration: none;
        }

        .kzn-about-breadcrumb a:hover {
            color: #44bfd9;
        }

        /* Common headings */
        .kzn-about-heading,
        .kzn-contact-heading {
            font-size: clamp(30px, 4vw, 42px);
            font-weight: 700;
            color: #222;
            margin-bottom: 18px;
        }

        .kzn-about-divider,
        .kzn-contact-divider {
            width: 85px;
            height: 3px;
            background: #aa2121;
            margin: 20px auto 30px;
            border: 0;
            opacity: 1;
        }

        /* About introduction */
        .kzn-about-intro {
            padding: 70px 0;
        }

        .kzn-about-description {
            color: #666;
            font-size: 16px;
            line-height: 1.9;
            max-width: 1000px;
            margin: auto;
        }

        /* Mission and Vision */
        .kzn-about-mission {
            padding: 65px 0 80px;
            background: #f7f9fc;
        }

        .kzn-about-card {
            background: #fff;
            height: 100%;
            border: 1px solid #e8e8e8;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .06);
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .kzn-about-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, .1);
        }

        .kzn-about-card-heading {
            background: #44bfd9;
            color: #fff;
            padding: 22px 15px;
        }

        .kzn-about-card-heading h3 {
            font-size: 25px;
            font-weight: 600;
            margin: 0;
        }

        .kzn-about-card-body {
            padding: 28px;
            color: #666;
            line-height: 1.9;
        }

        .kzn-about-icon {
            width: 65px;
            height: 65px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #e8f9fc;
            color: #168da5;
            border-radius: 50%;
            margin: 0 auto 18px;
            font-size: 28px;
        }

        /* Contact section */
        .kzn-contact-section {
            padding: 70px 0;
            background: #fff;
        }

        .kzn-contact-card {
            background: #fff;
            border: 1px solid #e9ecef;
            border-radius: 12px;
            padding: 30px 20px;
            height: 100%;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .05);
            transition: transform .3s ease;
        }

        .kzn-contact-card:hover {
            transform: translateY(-5px);
        }

        .kzn-contact-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e8f9fc;
            color: #168da5;
            border-radius: 50%;
            font-size: 27px;
        }

        .kzn-contact-card h4 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .kzn-contact-card p,
        .kzn-contact-card a {
            color: #666;
            line-height: 1.8;
            overflow-wrap: anywhere;
        }

        .kzn-contact-card a {
            text-decoration: none;
        }

        .kzn-contact-card a:hover {
            color: #168da5;
        }

        /* Contact form */
        .kzn-contact-form-wrapper {
            background: #f7f9fc;
            padding: 35px;
            border-radius: 12px;
            height: 100%;
        }

        .kzn-contact-form-wrapper .form-control {
            padding: 12px 14px;
            border-radius: 7px;
        }

        .kzn-contact-submit {
            background: #44bfd9;
            color: #fff;
            padding: 12px 28px;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            transition: background .3s ease;
        }

        .kzn-contact-submit:hover {
            background: #229db8;
            color: #fff;
        }

        /* Map */
        .kzn-contact-map {
            width: 100%;
            height: 380px;
            border: 0;
            border-radius: 12px;
        }

        /* Responsive */
        @media (max-width: 767px) {
            .kzn-about-hero {
                min-height: 320px;
                text-align: center;
            }

            .kzn-about-intro {
                padding: 45px 15px;
            }

            .kzn-about-mission {
                padding: 45px 0;
            }

            .kzn-about-card-body {
                padding: 22px;
            }

            .kzn-contact-section {
                padding: 45px 0;
            }

            .kzn-contact-form-wrapper {
                padding: 22px;
            }

            .kzn-contact-map {
                height: 300px;
            }
        }
    </style>
</head>

<body>

<?php include './navbar.php'; ?>

<!-- ==================== ABOUT HERO ==================== -->
<section class="kzn-about-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h1 class="kzn-about-title">Contact Us</h1>
                <p class="kzn-about-subtitle mb-0">
                    Learn with passion to live with purpose.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ==================== BREADCRUMB ==================== -->
<section class="kzn-about-breadcrumb">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Contact Us
                </li>
            </ol>
        </nav>
    </div>
</section>



<!-- ==================== CONTACT SECTION ==================== -->
<section class="kzn-contact-section" id="contact">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="kzn-contact-heading">Get In Touch</h2>
            <hr class="kzn-contact-divider">
            <p class="text-secondary">
                Have a question or need assistance? We'd love to hear from you.
            </p>
        </div>

        <!-- Contact information cards -->
        <div class="row g-4 mb-5">

            <!-- Address -->
            <div class="col-12 col-md-4">
                <div class="kzn-contact-card">
                    <div class="kzn-contact-icon" aria-hidden="true">
                        &#128205;
                    </div>

                    <h4>Our Address</h4>

                    <p class="mb-0">
                        Karve Nagea, Pune,<br>
                        Maharashtra, India
                    </p>
                </div>
            </div>

            <!-- Phone -->
            <div class="col-12 col-md-4">
                <div class="kzn-contact-card">
                    <div class="kzn-contact-icon" aria-hidden="true">
                        &#128222;
                    </div>

                    <h4>Phone Number</h4>

                    <p class="mb-0">
                        <a href="tel:+919325348445">
                            +91 9325348445
                        </a>
                    </p>
                </div>
            </div>

            <!-- Email -->
            <div class="col-12 col-md-4">
                <div class="kzn-contact-card">
                    <div class="kzn-contact-icon" aria-hidden="true">
                        &#9993;
                    </div>

                    <h4>Email Address</h4>

                    <p class="mb-0">
                        <a href="mailto:webpool25@gmail.com">
                            webpool25@gmail.com
                        </a>
                    </p>
                </div>
            </div>

        </div>

        <!-- Contact form and map -->
        <div class="row g-4">

            <!-- Contact form -->
            <div class="col-12 col-lg-6">
                <div class="kzn-contact-form-wrapper">

                    <h3 class="mb-2">Send Us a Message</h3>

                    <p class="text-secondary mb-4">
                        Fill in the form and tell us how we can help.
                    </p>

                    <form action="" method="post">

                        <div class="mb-3">
                            <label for="kzn-contact-name" class="form-label">
                                Full Name
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="kzn-contact-name"
                                name="name"
                                placeholder="Enter your name"
                                autocomplete="name"
                                maxlength="100"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="kzn-contact-email" class="form-label">
                                Email Address
                            </label>

                            <input
                                type="email"
                                class="form-control"
                                id="kzn-contact-email"
                                name="email"
                                placeholder="Enter your email"
                                autocomplete="email"
                                maxlength="150"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="kzn-contact-phone" class="form-label">
                                Phone Number
                            </label>

                            <input
                                type="tel"
                                class="form-control"
                                id="kzn-contact-phone"
                                name="phone"
                                placeholder="Enter your phone number"
                                autocomplete="tel"
                                maxlength="20">
                        </div>

                        <div class="mb-3">
                            <label for="kzn-contact-message" class="form-label">
                                Message
                            </label>

                            <textarea
                                class="form-control"
                                id="kzn-contact-message"
                                name="message"
                                rows="4"
                                maxlength="3000"
                                placeholder="Write your message..."
                                required></textarea>
                        </div>

                        <button
                            type="submit"
                            class="kzn-contact-submit">
                            Send Message
                        </button>

                    </form>

                </div>
            </div>

            <!-- Google map -->
            <div class="col-12 col-lg-6">
                <div class="h-100">

                    <h3 class="mb-3">Find Us on the Map</h3>

                    <iframe
                        class="kzn-contact-map"
                        src="https://www.google.com/maps?q=karvenagar,Pune,Maharashtra&output=embed"
                        title="Map showing Karve Nagar, Pune"
                        loading="lazy"
                        allowfullscreen
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                    <p class="text-secondary mt-3">
                        Visit us in Pune, Maharashtra, India.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==================== FOOTER ==================== -->
<?php include './footer.php'; ?>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
