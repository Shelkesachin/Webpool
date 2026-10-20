
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Webpool Soft Services</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
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

        .kzn-about-intro {
            padding: 70px 0;
        }

        .kzn-about-heading {
            font-size: clamp(30px, 4vw, 42px);
            font-weight: 700;
            color: #222;
            margin-bottom: 18px;
        }

        .kzn-about-divider {
            width: 85px;
            height: 3px;
            background: #aa2121;
            margin: 0 auto 30px;
            border: 0;
            opacity: 1;
        }

        .kzn-about-description {
            color: #666;
            font-size: 16px;
            line-height: 1.9;
            max-width: 1000px;
            margin: auto;
        }

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
        }
    </style>
</head>

<body>

<?php
$navbarPath = __DIR__ . '/navbar.php';

if (file_exists($navbarPath)) {
    include $navbarPath;
} else {
    error_log('Navbar not found: ' . $navbarPath);
}
?>

<!-- About Us Banner -->
<section class="kzn-about-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h1 class="kzn-about-title">About Us</h1>
                <p class="kzn-about-subtitle mb-0">
                    Learn with passion to live with purpose.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Breadcrumb -->
<section class="kzn-about-breadcrumb">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    About Us
                </li>
            </ol>
        </nav>
    </div>
</section>

<!-- About Introduction -->
<section class="kzn-about-intro">
    <div class="container text-center">

        <h2 class="kzn-about-heading">Why Choose Us?</h2>
        <hr class="kzn-about-divider">

        <p class="lead text-secondary mb-4">
            Your partner in learning, professional development and career growth.
        </p>

        <p class="kzn-about-description">
            In today's rapidly changing world, continuous learning is essential
            for personal and professional success. We believe that everyone
            deserves the opportunity to improve their skills, expand their
            knowledge and achieve their career goals.

            <br><br>

            Our focus is on practical learning, real-world examples and
            personalized guidance. We aim to help learners understand new
            concepts, recognize their strengths and develop the confidence
            needed to succeed in their chosen fields.

            <br><br>

            Whether you are starting your career or upgrading your existing
            skills, our goal is to support your learning journey with useful
            knowledge and a positive learning experience.
        </p>

    </div>
</section>

<!-- Mission and Vision -->
<section class="kzn-about-mission">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="kzn-about-heading">Our Mission &amp; Vision</h2>
            <hr class="kzn-about-divider">
            <p class="text-secondary">
                Building knowledge, creating opportunities and inspiring growth.
            </p>
        </div>

        <div class="row g-4">

            <!-- Mission Card -->
            <div class="col-12 col-md-6">
                <div class="kzn-about-card text-center">

                    <div class="kzn-about-card-heading">
                        <h3>Our Mission</h3>
                    </div>

                    <div class="kzn-about-card-body">
                        <div class="kzn-about-icon" aria-hidden="true">
                            &#127919;
                        </div>

                        <p class="mb-0">
                            Our mission is to provide accessible, practical
                            and high-quality learning opportunities that help
                            students and professionals strengthen their skills,
                            improve their knowledge and prepare for new career
                            opportunities.
                        </p>
                    </div>

                </div>
            </div>

            <!-- Vision Card -->
            <div class="col-12 col-md-6">
                <div class="kzn-about-card text-center">

                    <div class="kzn-about-card-heading">
                        <h3>Our Vision</h3>
                    </div>

                    <div class="kzn-about-card-body">
                        <div class="kzn-about-icon" aria-hidden="true">
                            &#128161;
                        </div>

                        <p class="mb-0">
                            Our vision is to create a learning environment
                            where individuals can continuously grow, develop
                            their potential and build successful careers
                            through knowledge, practical experience and
                            lifelong learning.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<?php
$footerPath = __DIR__ . '/footer.php';

if (file_exists($footerPath)) {
    include $footerPath;
} else {
    error_log('Footer not found: ' . $footerPath);
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
