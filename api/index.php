<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WebPool IT Solutions</title>
  <!-- Bootstrap 5.3 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">WebPool IT Solutions</a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto align-items-lg-center">
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li> -->
          <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
          <li class="nav-item"><a class="btn btn-custom ms-3" href="#contact">Get in Touch</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Carousel -->
  <section id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="https://cdn.pixabay.com/photo/2015/09/09/19/56/office-932926_1280.jpg" class="d-block w-100"
          alt="Web Development">
        <div class="carousel-caption text-center">
          <h1>Web & App Development</h1>
          <p>Modern, responsive, and secure solutions tailored for your business.</p>
          <div class="mt-3">
            <a href="#services" class="btn btn-custom btn-lg me-2">Explore Services</a>
            <a href="#contact" class="btn btn-outline-light btn-lg">Contact Us</a>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1600&q=80"
          class="d-block w-100" alt="Cloud Solutions">
        <div class="carousel-caption text-center">
          <h1>Cloud & IT Consulting</h1>
          <p>Scalable, secure, and optimized solutions for startups and enterprises.</p>
          <a href="#services" class="btn btn-custom btn-lg">Learn More</a>
        </div>
      </div>

      <div class="carousel-item">
        <img
          src="https://media.istockphoto.com/id/2164746643/photo/artificial-intelligence-idea-ai-light-bulb-idea-concept.jpg?s=612x612&w=0&k=20&c=_2wT47RCl6Q5xsTXFhpvN3GElQr-8ISm0HhzfPXlJE4="
          class="d-block w-100" alt="AI Solutions">
        <div class="carousel-caption text-center">
          <h1>AI & Automation</h1>
          <p>Future-ready solutions with AI tools and smart integrations.</p>
          <a href="#contact" class="btn btn-custom btn-lg">Get Started</a>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </section>

  <!-- About -->
  <section id="about" class="bg-light">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-4">About WebPool IT Solutions</h2>
          <p class="lead text-muted">We empower businesses with innovative digital solutions – from web & app
            development
            to cloud, consulting, and AI integrations. Our mission is to deliver cutting-edge technology with unmatched
            reliability and support.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services">
    <div class="container text-center">
      <h2 class="fw-bold mb-5">Our Services</h2>
      <div class="row g-4">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card h-100 p-3">
            <i class="bi bi-code-slash"></i>
            <h5 class="fw-bold mt-3">Web Development</h5>
            <p class="text-muted">Modern websites & web apps with responsive and secure design.</p>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card h-100 p-3">
            <i class="bi bi-phone"></i>
            <h5 class="fw-bold mt-3">App Development</h5>
            <p class="text-muted">Custom mobile applications for Android & iOS platforms.</p>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card h-100 p-3">
            <i class="bi bi-cloud"></i>
            <h5 class="fw-bold mt-3">Cloud Solutions</h5>
            <p class="text-muted">Scalable cloud hosting, migration, and IT infrastructure consulting.</p>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card h-100 p-3">
            <i class="bi bi-robot"></i>
            <h5 class="fw-bold mt-3">AI & Automation</h5>
            <p class="text-muted">AI tools, chatbots, and automation solutions for businesses.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects -->
  <!-- <section id="projects" class="bg-light">
    <div class="container text-center">
      <h2 class="fw-bold mb-4">Our Projects</h2>
      <div class="row g-4">
        <div class="col-12 col-md-4"><img
            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80"
            class="rounded shadow w-100" alt="Project"></div>
        <div class="col-12 col-md-4"><img
            src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=800&q=80"
            class="rounded shadow w-100" alt="Project"></div>
        <div class="col-12 col-md-4"><img
            src="https://images.unsplash.com/photo-1556155092-8707de31f9c4?auto=format&fit=crop&w=800&q=80"
            class="rounded shadow w-100" alt="Project"></div>
      </div>
    </div>
  </section> -->

  <!-- Testimonials -->
  <section id="testimonials">
    <div class="container">
      <h2 class="text-center fw-bold mb-5">What Our Clients Say</h2>
      <div class="row g-4">
        <div class="col-12 col-md-6">
          <div class="p-4 shadow-sm rounded bg-light h-100">
            <p>"WebPool transformed our online presence. Professional, responsive, and innovative."</p>
            <strong>- Startup Founder</strong>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="p-4 shadow-sm rounded bg-light h-100">
            <p>"Reliable IT solutions partner – from cloud migration to app development."</p>
            <strong>- Enterprise Client</strong>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta">
    <div class="container">
      <h2>Ready to Start Your Project with Us?</h2>
      <a href="#contact" class="btn btn-lg mt-3">Get in Touch</a>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact">
    <div class="container text-center">
      <h2 class="fw-bold mb-4">Contact Us</h2>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <form class="bg-light p-4 rounded shadow-sm">
            <div class="mb-3"><input type="text" class="form-control" placeholder="Your Name"></div>
            <div class="mb-3"><input type="email" class="form-control" placeholder="Your Email"></div>
            <div class="mb-3"><textarea class="form-control" rows="4" placeholder="Your Message"></textarea></div>
            <button class="btn btn-custom w-15">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-4">
    <div class="container text-center">
      <p>© 2025 WebPool IT Solutions. All rights reserved.</p>
      <p>📍Pune, India | 📞 <a href="tel:+919325348445">+91 93253 48445</a></p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>