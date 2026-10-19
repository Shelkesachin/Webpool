<?php include './navbar.php'; ?>
<style>
    .kzn-tp-bgimg.defaultimg {
        background-repeat: no-repeat;
        background-image: url('assets/img/background_image.jpg');
        background-size: cover;
        background-position: center center;
        width: 100%;
        height: 100%;
        opacity: 1;
        visibility: inherit;
        z-index: 20;
    }

    .dropdown:hover .dropdown-menu {
        display: flex;
        display: inline-flex;
        align-items: center;
        /* Align icon and text */
        transition: color 0.3s ease;
        /* Optional: smooth transition for color */

    }

    .dropdown:hover .dropdown-menu.service {
        display: inline-flex;
        align-items: center;
        /* Align icon and text */
        transition: color 0.3s ease;
        /* Optional: smooth transition for color */

        display: block;
    }

    .dropdown-title {
        font-weight: bold;
        padding: 10px 15px;
        background-color: none;
        font-size: 18px;
        text-transform: uppercase;
        display: ruby;
    }

    .dropdown-title .submenu_list {
        text-align: center;

        display: block;

    }

    .rotate-icon {
        display: inline-block;
        /* Ensure the icon is treated as a block for rotation */
        transition: transform 0.3s ease;
        /* Smooth rotation */
        margin-left: 5px;
        font-weight: bold;
    }

    .dropdown-item:hover .rotate-icons {
        transform: rotate(-90deg);
        /* Rotate icon 90 degrees on hover */
    }


    .nav-link:hover .rotate-icon {
        transform: rotate(90deg);
        /* Rotate icon 90 degrees on hover */
    }

    .dropdown-menu.sub.sp {
        top: 0;
        /* Align with the top of the parent dropdown */
        left: 100%;
        /* Position the submenu to the right of the parent dropdown */
        margin-left: 10px;

        display: none;

    }

    .dropdowns:hover .dropdown-menu.sub.sp {
        display: block;
    }
</style>
<style>
    /* Additional QR generator functionality */
    .kzn-qr-types {
        display: none;
        margin-bottom: 20px;
    }

    .kzn-qr-types.kzn-visible {
        display: block;
    }

    .kzn-qr-type-card {
        width: 100%;
        height: 100%;
        padding: 18px 10px;
        border: 1px solid #dee2e6;
        border-radius: 10px;
        background: #fff;
        cursor: pointer;
        transition: 0.3s;
    }

    .kzn-qr-type-card:hover,
    .kzn-qr-type-card.kzn-selected {
        border-color: #5269db;
        background: #f4f6ff;
        transform: translateY(-3px);
    }

    .kzn-qr-type-card i {
        display: block;
        font-size: 27px;
        color: #5269db;
        margin-bottom: 10px;
    }

    .kzn-qr-type-card strong {
        font-size: 14px;
    }

    .kzn-qr-generator {
        display: none;
        margin-top: 20px;
    }

    .kzn-qr-generator.kzn-visible {
        display: block;
    }

    #kzn-qr-result {
        text-align: center;
        margin-top: 20px;
        overflow-wrap: anywhere;
    }

    #kzn-qr-result canvas,
    #kzn-qr-result img {
        max-width: 100%;
        height: auto;
        margin: 0 auto;
    }

    .kzn-qr-extra-btn {
        margin-top: 12px;
    }
</style>
<style>
    body {
        padding-top: 70px;
        /* Add padding to prevent content from hiding behind the navbar */
    }

    .navbar-brand {
        font-weight: 700;
        font-size: 1.5rem;
    }

    .brand-highlight {
        color: #ff9800;
    }

    .navbar {
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        padding: 15px 0;
        background-color: #ffffff;
        transition: all 0.3s ease;
    }

    .navbar.scrolled {
        padding: 10px 0;
    }

    .nav-link {
        font-weight: 500;
        margin: 0 10px;
        position: relative;
        transition: all 0.3s ease;
        color: #333;
        font-size: 1rem;
    }

    .nav-link:hover {
        color: #ff9800;
    }

    .nav-link.active {
        color: #ff9800;
        font-weight: 600;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        background: #ff9800;
        bottom: -3px;
        left: 0;
        transition: width 0.3s ease;
    }

    .nav-link:hover::after,
    .nav-link.active::after {
        width: 100%;
    }

    .navbar-toggler {
        border: none;
        padding: 0.5rem;
    }

    .navbar-toggler:focus {
        box-shadow: none;
        outline: none;
    }

    .navbar-toggler-icon {
        width: 1.5em;
        height: 1.5em;
    }

    @media (max-width: 991px) {
        .navbar-collapse {
            padding: 15px 0;
            background-color: #fff;
            border-radius: 8px;
            margin-top: 10px;
        }

        .nav-link {
            margin: 10px 0;
            padding: 10px 15px;
        }

        .nav-link::after {
            bottom: 5px;
        }
    }

    .hero-section {
        position: relative;
        background: url('https://img.freepik.com/free-photo/gradient-dark-blue-futuristic-digital-grid-background_53876-129728.jpg?t=st=1743090010~exp=1743093610~hmac=e3236165440945309a61f66ad8e1a7faf6544908e47ff50648925171291a9bfd&w=1380') no-repeat center center/cover;
        height: 90vh;
        color: white;
        display: flex;
        align-items: center;
    }

    .hero-content h1 {
        font-size: 2.5rem;
        font-weight: bold;
    }

    .hero-content p {
        font-size: 1.2rem;
        margin-bottom: 20px;
    }

    .btn-custom {
        background-color: #ff9800;
        color: white;
        padding: 10px 20px;
        border-radius: 8px;
        text-decoration: none;
    }

    .btn-custom:hover {
        background-color: #e68900;
    }

    .qr-container {
        display: none;
        text-align: center;
        margin-top: 20px;
    }

    /* Common Section Styling */
    .qr-features,
    .why-choose-us {
        text-align: center;
        padding: 50px 20px;
    }

    /* General Card Styling */
    .qr-card,
    .why-card {
        background: white;
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.12);
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        text-align: center;
    }

    /* Hover Effect */
    .qr-card:hover,
    .why-card:hover {
        transform: scale(1.05);
        box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.15);
    }

    /* Icon Box Styling */
    .icon-box {
        width: 80px;
        height: 80px;
        margin: 0 auto 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: linear-gradient(135deg, #654ea3, #eaafc8);
        color: white;
        font-size: 32px;
        transition: background 0.3s ease-in-out, transform 0.3s ease-in-out;
    }

    /* Hover effect for Icon */
    .qr-card:hover .icon-box,
    .why-card:hover .icon-box {
        background: linear-gradient(135deg, #eaafc8, #654ea3);
        transform: rotate(10deg);
    }

    /* PNG Icon Styling */
    .icon-box img {
        max-width: 50px;
        height: auto;
    }

    /* Responsive Improvements */
    @media (max-width: 768px) {

        .qr-card,
        .why-card {
            padding: 20px;
        }

        .icon-box {
            width: 70px;
            height: 70px;
            font-size: 28px;
        }

        .icon-box img {
            max-width: 40px;
        }
    }
</style>



<!-- <nav class="navbar navbar-expand-lg navbar-custom fixed-top primary-navigation"
     role="navigation" aria-label="Main navigation">

    <div class="container nav-main">

        <a class="navbar-brand" href="./index.html">
            <img src="./assets/img/logos.png" alt="Company logo">
        </a>

        <button class="navbar-toggler"
                type="button"
                id="navbarbutton"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active"
                       aria-current="page"
                       href="./index.html">Home</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link "
                       aria-current="page"
                       href="./generateqr.html">Generate QR</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./about.html">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./contact-us.html">Contact</a>
                </li>

            </ul>
        </div>

    </div>
</nav> -->

<!-- Hero Section Start -->

<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-8 col-sm-10 mx-auto text-center text-lg-start">
                <div class="hero-content">
                    <h1>Generate <span style="color: #ff9800;">QR codes</span> fast and easy</h1>
                    <p>Create free custom QR codes with colors and design. It supports tracking, analytics, and free
                        tools.</p>
                    <button class="btn-custom" data-bs-toggle="modal" data-bs-target="#qrModal">Create QR
                        Code</button>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="qrModal" tabindex="-1" aria-labelledby="qrModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="qrModalLabel">Generate QR Code</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="qrForm">
                    <div class="row">
                        <!-- Purchase Order Number -->
                        <div class="col-md-8 mb-3">
                            <label for="poNumber" class="form-label">Purchase Order Number</label>
                            <input type="text" class="form-control" id="poNumber">
                        </div>
                        <!-- OR Label -->
                        <div class="col-12 text-center mb-2">
                            <strong>OR</strong>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>

                        <!-- Mobile Number -->
                        <div class="col-md-6 mb-3">
                            <label for="mobile" class="form-label">Mobile Number</label>
                            <input type="tel" class="form-control" id="mobile" pattern="[0-9]{10}">
                        </div>
                        <!-- Submit Button with onclick event -->
                        <div class="col-md-4 mb-3 d-flex align-items-end">
                            <button type="button" class="btn btn-primary w-100" id="submitPO"
                                onclick="handleSubmit()">Submit</button>
                        </div>

                    </div>


                </form>


            </div>
        </div>
    </div>
</div>

<!-- QR Features Section -->
<section class="qr-features">
    <h2 class="text-warning fw-bold mb-4">MiQR Features</h2>
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="qr-card p-4">
                    <div class="icon-box">
                        <img src="https://img.freepik.com/free-vector/mobile-technology-background-qr-code_23-2147590544.jpg?ga=GA1.1.427341043.1743093114&semt=ais_hybrid"
                            alt="">
                    </div>
                    <h4>Customize QR Code</h4>
                    <p>Modify and personalize your QR code with custom colors, styles, and logo integration.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="qr-card p-4">
                    <div class="icon-box">
                        <img src="https://img.freepik.com/free-vector/scan-qr-code-with-smartphone-illustration-design_24877-61336.jpg?ga=GA1.1.427341043.1743093114&semt=ais_hybrid"
                            alt="">
                    </div>
                    <h4>Track QR Code</h4>
                    <p>Monitor scan performance, user location, and device statistics in real-time.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="qr-card p-4">
                    <div class="icon-box">
                        <img src="https://img.freepik.com/free-vector/organic-flat-feedback-concept-illustrated_23-2148951368.jpg?ga=GA1.1.427341043.1743093114&semt=ais_hybrid"
                            alt="">
                    </div>
                    <h4>Get Feedback</h4>
                    <p>Analyze customer engagement and gather insights to improve your QR strategy.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-us">
    <h2 class="text-warning fw-bold mb-4">Why Choose Us</h2>
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="why-card p-4">
                    <div class="icon-box">
                        <img src="https://img.freepik.com/free-vector/qr-code-concept-illustration_114360-5853.jpg?ga=GA1.1.427341043.1743093114&semt=ais_hybrid"
                            alt="Secure & Reliable" class="img-fluid">
                    </div>
                    <h4>Secure & Reliable</h4>
                    <p>We ensure high security and encrypted QR codes for safe global scanning.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-card p-4">
                    <div class="icon-box">
                        <img src="https://img.freepik.com/free-vector/qr-code-concept-illustration_114360-5933.jpg?ga=GA1.1.427341043.1743093114&semt=ais_hybrid"
                            alt="Smart QR Solutions" class="img-fluid">
                    </div>
                    <h4>Smart QR Solutions</h4>
                    <p>Generate advanced QR codes with analytics, customization, and tracking.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-card p-4">
                    <div class="icon-box">
                        <img src="https://img.freepik.com/free-vector/characters-scanning-qr-codes-their-phones_23-2148616039.jpg?ga=GA1.1.427341043.1743093114&semt=ais_hybrid"
                            alt="Fast & User-Friendly" class="img-fluid">
                    </div>
                    <h4>Fast & User-Friendly</h4>
                    <p>Easy-to-use interface with quick QR code generation and smooth user experience.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section End -->


<!-- section fourth start --------------------------------------------->



<?php include './footer.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        const modalBody = document.querySelector("#qrModal .modal-body");
        const existingForm = document.getElementById("qrForm");
        const modal = document.getElementById("qrModal");

        if (!modalBody || !existingForm || !modal) {
            console.error("QR modal or form not found.");
            return;
        }

        // Prevent duplicate initialization
        if (document.getElementById("kzn-qr-generator")) {
            return;
        }

        // Create QR generator UI
        const qrGenerator = document.createElement("div");
        qrGenerator.id = "kzn-qr-generator";

        qrGenerator.innerHTML = `
        <div id="kzn-qr-options">
            <h6 class="mb-3">Choose QR Code Type</h6>

            <div class="row g-3">
                <div class="col-4">
                    <button type="button"
                        class="btn btn-outline-primary w-100"
                        data-qr-type="image">
                        <i class="fa-solid fa-image"></i>
                        <br>Image
                    </button>
                </div>

                <div class="col-4">
                    <button type="button"
                        class="btn btn-outline-primary w-100"
                        data-qr-type="pdf">
                        <i class="fa-solid fa-file-pdf"></i>
                        <br>PDF
                    </button>
                </div>

                <div class="col-4">
                    <button type="button"
                        class="btn btn-outline-primary w-100"
                        data-qr-type="text">
                        <i class="fa-solid fa-file-lines"></i>
                        <br>Text
                    </button>
                </div>
            </div>
        </div>

        <div id="kzn-qr-input-section" class="mt-4" hidden>

            <label id="kzn-qr-label"
                class="form-label fw-semibold"></label>

            <input type="file"
                id="kzn-qr-file"
                class="form-control"
                hidden>

            <textarea id="kzn-qr-text"
                class="form-control"
                rows="4"
                placeholder="Enter your text here"
                hidden></textarea>

            <div id="kzn-qr-preview" class="mt-3"></div>

            <div class="d-flex gap-2 mt-3">
                <button type="button"
                    id="kzn-qr-back"
                    class="btn btn-secondary">
                    Back
                </button>

                <button type="button"
                    id="kzn-qr-generate"
                    class="btn btn-primary">
                    Generate QR
                </button>
            </div>

            <small id="kzn-qr-message"
                class="text-muted d-block mt-2"></small>
        </div>

        <div id="kzn-qr-result"
            class="text-center mt-4"></div>
    `;

        // Add new UI without modifying existing HTML
        modalBody.insertBefore(qrGenerator, existingForm);

        // Hide the original form while using the new generator
        existingForm.style.display = "none";

        // Get elements
        const options = document.getElementById("kzn-qr-options");
        const inputSection = document.getElementById("kzn-qr-input-section");
        const label = document.getElementById("kzn-qr-label");
        const fileInput = document.getElementById("kzn-qr-file");
        const textInput = document.getElementById("kzn-qr-text");
        const preview = document.getElementById("kzn-qr-preview");
        const message = document.getElementById("kzn-qr-message");
        const result = document.getElementById("kzn-qr-result");

        let selectedType = "";
        let uploadedFileUrl = "";
        let previewUrl = "";

        // Reset UI when modal opens
        modal.addEventListener("show.bs.modal", function() {

            options.hidden = false;
            inputSection.hidden = true;

            result.replaceChildren();
            preview.replaceChildren();

            fileInput.value = "";
            textInput.value = "";
            message.textContent = "";

            uploadedFileUrl = "";
            selectedType = "";

            if (previewUrl) {
                URL.revokeObjectURL(previewUrl);
                previewUrl = "";
            }

            existingForm.style.display = "none";
        });

        // Select QR type
        options.addEventListener("click", function(event) {

            const button = event.target.closest("[data-qr-type]");

            if (!button) return;

            selectedType = button.dataset.qrType;

            options.hidden = true;
            inputSection.hidden = false;

            result.replaceChildren();
            preview.replaceChildren();

            fileInput.value = "";
            textInput.value = "";
            message.textContent = "";

            uploadedFileUrl = "";

            if (previewUrl) {
                URL.revokeObjectURL(previewUrl);
                previewUrl = "";
            }

            if (selectedType === "image") {

                label.textContent = "Select Image";

                fileInput.accept = "image/*";
                fileInput.hidden = false;
                textInput.hidden = true;

            } else if (selectedType === "pdf") {

                label.textContent = "Select PDF";

                fileInput.accept = ".pdf,application/pdf";
                fileInput.hidden = false;
                textInput.hidden = true;

            } else {

                label.textContent = "Enter Text";

                fileInput.hidden = true;
                textInput.hidden = false;
            }
        });

        // Preview selected file
        fileInput.addEventListener("change", function() {

            preview.replaceChildren();
            message.textContent = "";

            const file = fileInput.files[0];

            if (!file) return;

            if (selectedType === "image" && !file.type.startsWith("image/")) {
                alert("Please select a valid image file.");
                fileInput.value = "";
                return;
            }

            if (selectedType === "pdf" &&
                file.type !== "application/pdf" &&
                !file.name.toLowerCase().endsWith(".pdf")) {

                alert("Please select a valid PDF file.");
                fileInput.value = "";
                return;
            }

            // Example limit: 10 MB
            if (file.size > 10 * 1024 * 1024) {
                alert("Please select a file smaller than 10 MB.");
                fileInput.value = "";
                return;
            }

            if (previewUrl) {
                URL.revokeObjectURL(previewUrl);
            }

            previewUrl = URL.createObjectURL(file);

            if (selectedType === "image") {

                const image = document.createElement("img");

                image.src = previewUrl;
                image.alt = "Selected image preview";
                image.style.maxWidth = "180px";
                image.style.maxHeight = "180px";
                image.style.objectFit = "contain";

                preview.appendChild(image);

            } else {

                const fileInfo = document.createElement("p");

                fileInfo.textContent = "Selected PDF: " + file.name;

                preview.appendChild(fileInfo);
            }
        });

        // Back button
        document.getElementById("kzn-qr-back").addEventListener("click", function() {

            inputSection.hidden = true;
            options.hidden = false;

            result.replaceChildren();
            preview.replaceChildren();

            message.textContent = "";
        });

        // Generate QR code
        document.getElementById("kzn-qr-generate").addEventListener("click", async function() {

            if (typeof QRCode === "undefined") {
                alert("QR library not loaded. Check your internet connection.");
                return;
            }

            let qrValue = "";

            // Text QR code
            if (selectedType === "text") {

                qrValue = textInput.value.trim();

                if (!qrValue) {
                    alert("Please enter some text.");
                    return;
                }

            } else {

                const file = fileInput.files[0];

                if (!file) {
                    alert("Please select a file.");
                    return;
                }

                if (selectedType === "image" && !file.type.startsWith("image/")) {
                    alert("Please select a valid image.");
                    return;
                }

                if (selectedType === "pdf" &&
                    file.type !== "application/pdf" &&
                    !file.name.toLowerCase().endsWith(".pdf")) {
                    alert("Please select a valid PDF.");
                    return;
                }

                /*
                 * Upload the selected file to your server.
                 * The server must return JSON like:
                 * { "url": "https://yourwebsite.com/uploads/file.pdf" }
                 *
                 * Replace /api/upload with your actual backend endpoint.
                 */

                const generateButton = document.getElementById("kzn-qr-generate");

                generateButton.disabled = true;
                message.textContent = "Uploading file...";

                try {

                    const formData = new FormData();
                    formData.append("file", file);

                    const response = await fetch("/api/upload", {
                        method: "POST",
                        body: formData
                    });

                    if (!response.ok) {
                        throw new Error("File upload failed.");
                    }

                    const data = await response.json();

                    if (!data.url) {
                        throw new Error("Server did not return the file URL.");
                    }

                    const fileUrl = new URL(data.url, window.location.origin);

                    if (!["http:", "https:"].includes(fileUrl.protocol)) {
                        throw new Error("Invalid file URL.");
                    }

                    qrValue = fileUrl.href;
                    uploadedFileUrl = qrValue;

                } catch (error) {

                    console.error(error);

                    message.textContent =
                        "Upload failed. Configure your server's /api/upload endpoint.";

                    generateButton.disabled = false;
                    return;
                }

                generateButton.disabled = false;
            }

            // Clear previous result
            result.replaceChildren();

            // QR code container
            const qrContainer = document.createElement("div");

            qrContainer.className = "d-flex justify-content-center mb-3";

            result.appendChild(qrContainer);

            try {

                new QRCode(qrContainer, {
                    text: qrValue,
                    width: 220,
                    height: 220,
                    correctLevel: QRCode.CorrectLevel.M
                });

            } catch (error) {

                console.error(error);

                alert("Could not generate QR code. Try using shorter text.");

                return;
            }

            // Download button
            const downloadButton = document.createElement("button");

            downloadButton.type = "button";
            downloadButton.className = "btn btn-success";
            downloadButton.innerHTML =
                '<i class="fa-solid fa-download me-2"></i>Download QR Code';

            result.appendChild(downloadButton);

            // Download QR as PNG
            downloadButton.addEventListener("click", function() {

                const canvas = qrContainer.querySelector("canvas");
                const image = qrContainer.querySelector("img");

                const link = document.createElement("a");

                link.download = selectedType + "-qrcode.png";

                if (canvas) {

                    link.href = canvas.toDataURL("image/png");

                } else if (image) {

                    link.href = image.src;

                } else {

                    alert("QR image is not ready. Please try again.");
                    return;
                }

                document.body.appendChild(link);
                link.click();
                link.remove();
            });

            message.textContent = selectedType === "text" ?
                "QR code generated with your text." :
                "QR code generated with your uploaded file URL.";
        });

    });
</script>
</body>

</html>