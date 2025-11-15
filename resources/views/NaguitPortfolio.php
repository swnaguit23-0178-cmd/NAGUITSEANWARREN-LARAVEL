<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAGUIT PORTFOLIO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
body, html {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background-color: #000;
    color: #fff;
    scroll-behavior: smooth;
    scroll-padding-top:80px;
}
.navbar {
    background: #111;
    padding: 15px 20px;
}
.navbar-brand {
    font-weight: bold;
    color: #2098a8 !important;
    font-size: 1.5rem;
}
.navbar-nav .nav-link {
    color: #fff !important;
    transition: color 0.3s;
    font-size: 1.1rem;
}
.navbar-nav .nav-link:hover {
    color: #676a6e !important;
}
.hero {
    height: 100vh;
    
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 20px;
}
.hero h1 {
    font-size: 3rem;
    text-shadow: 0 0 5px #ff9800;
    margin-bottom: 15px;
}
.hero p {
    font-size: 1.2rem;
    color: #ccc;
    margin-bottom: 20px;
}
.profile-img {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    border: 4px solid #93989b;
    box-shadow: 0 0 15px #93989b;
}
.btn-glow {
    background: #ff9800;
    border: none;
    color: #000;
    padding: 12px 25px;
    font-size: 1rem;
    font-weight: bold;
    border-radius: 5px;
    box-shadow: 0 0 8px #ff9800;
    transition: all 0.3s;
    cursor: pointer;
}
.btn-glow:hover {
    background: #e68900;
    box-shadow: 0 0 15px #ff9800;
}
.progress-bar {
    color: black !important; 
    font-weight: bold; 
}
.card {
    background: #222;
    color: white;
    border-radius: 10px;
    transition: transform 0.3s, box-shadow 0.3s;
}
.card:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 15px rgba(255, 152, 0, 0.3);
}
.icon-btn {
    display: inline-block;
    width: 60px; 
    height: 40px; 
    background-size: 60%; 
    background-repeat: no-repeat;
    background-position: center;
    border-radius: 50%; 
    border: 2px solid transparent; 
    cursor: pointer;
    transition: transform 0.2s ease-in-out;
    margin: 0 10px; 
}
.icon-btn:hover {
    transform: scale(1.1); 
}
.form-control {
    background: #222;
    border: 1px solid #034747;
    color: #fff;
    padding: 12px;
    border-radius: 5px;
}
.form-control:focus {
    border-color: #034747;
    box-shadow: 0 0 10px rgba(255, 152, 0, 0.5);
}
#form-status {
    color: #ff9800;
    font-weight: bold;
}

.btn-submit {
    background-color: #ff9800;
    color: black;
    font-weight: bold;
    padding: 12px 20px;
    border-radius: 5px;
    transition: all 0.3s;
    box-shadow: 0 0 10px rgba(255, 152, 0, 0.5);
    cursor: pointer;
}
.btn-submit:hover {
    background-color: #e68900;
    color: white;
    box-shadow: 0 0 15px rgba(255, 152, 0, 0.8);
}
.social-links a {
    font-size: 24px;
    color: #6b8b8d;
    transition: transform 0.3s, color 0.3s;
}
.social-links a:hover {
    transform: scale(1.2);
    color: #354964;
}
@media (max-width: 768px) {
    .hero h1 {
        font-size: 2.5rem;
    }
    .hero p {
        font-size: 1rem;
    }
    #projects .card {
        margin-bottom: 20px;
    }
}
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">NAGUIT <span>PORTFOLIO</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#achievements">Achievements</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
<!-- Hero Section -->
<section id="home" class="hero d-flex align-items-center">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="display-4 fw-bold">NAGUIT PORTFOLIO</h1>
                <img src="c:\Users\AMD\Downloads\455691703_444278178612163_5029911740413885639_n.jpg" alt="" class="profile-img">
                <p class="lead"><br>Welcome to My Website. <br> Hello! I am Sean Warren L. Naguit, a Computer Science Student.
                    <br> I'm currently a 2nd Year student studying at City College of Angeles.</p>
                
                <a href="#projects" class="btn btn-primary mt-3">Explore</a>
            </div>
        </div>
    </div>
</section>
    <!-- Achievements Section -->
<section id="achievements" class="mt-5">
    <div class="container">
        <h2 class="text-center mb-4">My Achievements</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="c:\Users\AMD\Downloads\3163fb25-056f-4924-9b52-c6d26610cfb1.jpg">
                    <div class="card-body">
                        <h5 class="card-title">SHS GRADUATION</h5>
                        <p class="card-text">I Finish my High School journey S.Y. 2022-2023 at ACSCI.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="c:\Users\AMD\Downloads\c4133fe7-a987-46bc-87c6-e6130cec6069.jpg" class="card-img-top" alt="Inventory Management System Project">
                    <div class="card-body">
                        <h5 class="card-title">IT Essentials</h5>
                        <p class="card-text">IT Essentials PC Hardware and Software.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="c:\Users\AMD\Downloads\17d53f11-f251-4803-b1c3-b585c00972ec.jpg">
                    <div class="card-body">
                        <h5 class="card-title">CHAMPION IN 3X3</h5>
                        <p class="card-text">My first achievement in Basketball.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skills Section -->
<section id="skills" class="mt-5">
    <div class="container">
        <h2 class="text-center">My Skills</h2>
        <div class="progress my-2">
            <div class="progress-bar bg-primary" style="width: 80%">HTML & CSS - 80%</div>
        </div>
        <div class="progress my-2">
            <div class="progress-bar bg-success" style="width: 50%">JavaScript - 50%</div>
        </div>
    </div>
</section>
 <!-- Projects Section -->
<section id="projects" class="mt-5">
<div class="container">
    <h2 class="text-center mb-4">My Projects</h2>
        <div class="row my-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">HTML Basics</h5>
                        <p class="card-text">Introduction of tags in HTML.</p>
                        <a href="https://drive.google.com/file/d/1VZJQkDpsVxzv3O6AG634HwlduJOhvgQd/view?usp=sharing" target="_blank">
                            <button class="btn btn-primary">SHOW CODE</button>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">HTML Styles</h5>
                        <p class="card-text">Using Style to design the website.</p>
                        <a href="https://drive.google.com/file/d/1hxetWsS1PUDAEhNdK8S5z-kSp8jIzB2Q/view?usp=sharing" target="_blank">
                            <button class="btn btn-primary">SHOW CODE</button>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">CSS</h5>
                        <p class="card-text">Using CSS to design the website.</p>
                        <div class="d-flex align-items-center gap-5">
                            <a href="https://drive.google.com/file/d/1CDeVR_PlYrgKvAC0n2gztEYMGYBNUOIe/view?usp=sharing" target="_blank" class="text-start">
                                <button class="btn btn-primary">SHOW HTML</button>
                            </a>
                            <a href="https://drive.google.com/file/d/1hkpGsxh07RkOL6rTNZpFj53ZeivVeQx6/view?usp=sharing" target="_blank" class="text-end">
                                <button class="btn btn-primary">SHOW CSS</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    
        <div class="row my-5">
    
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bootstrap</h5>
                        <p class="card-text">Using Bootstrap to design the website.</p>
                        <a href="https://drive.google.com/file/d/1wWNd7OGhItLzEJWpM5L0TsZ4WGQoBOtO/view?usp=sharing" target="_blank">
                            <button class="btn btn-primary">SHOW CODE</button>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">JavaScript</h5>
                        <p class="card-text">Using JavaScript for interaction.</p>
                        <a href="https://drive.google.com/file/d/1cSnskFe-ZgwqrIW44cGZWz6QwcifQCK-/view?usp=sharing" target="_blank">
                            <button class="btn btn-primary">SHOW CODE</button>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Boostrap X JS</h5>
                        <p class="card-text">Integration of Bootstrap and JavaScript.</p>
                        <a href="https://drive.google.com/file/d/1Z2sOpxF9mJ0HtTukZkb2Ltn0v9HI44CZ/view?usp=sharing" target="_blank">
                            <button class="btn btn-primary">SHOW CODE</button>
                        </a>
                    </div>
                </div>
            </div>
    
        </div>
</div>
</section>
 <!-- Contact Section -->
<section id="contact" class="container mt-5">
    <h2 class="text-center">Contact Me</h2>
    <form id="contact-form">
        <div class="mb-3 form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
            <small id="nameError" class="text-danger d-none" aria-live="polite">Name is required</small>
        </div>
        <div class="mb-3 form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            <small id="emailError" class="text-danger d-none" aria-live="polite">Valid email is required</small>
        </div>
        <div class="mb-3 form-group">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" placeholder="Enter the subject" required>
            <small id="subjectError" class="text-danger d-none" aria-live="polite">Subject is required</small>
        </div>
        <div class="mb-3 form-group">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Write your message here..." required></textarea>
            <small id="messageError" class="text-danger d-none" aria-live="polite">Message cannot be empty</small>
        </div>
        <button id="Send" type="submit" class="btn btn-primary">Send</button>
        <p id="form-status" class="mt-3 text-center"></p>
        
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script src="script.js"></script>
    </form>
</section>

<!-- Footer -->
<footer class="text-center mt-5 py-3 bg-dark text-light">
    <div class="container">
        <p>&copy; <span id="currentYear"></span> Naguit Portfolio. All Rights Reserved.</p>
        <div class="social-links text-center mt-4">
            <a href="https://www.instagram.com/pakul_seany?igsh=MWpvaWpxN3Z6OGNpNg==" target="_blank" class="social-icon">
                <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a href="https://www.facebook.com/share/1XNitUqDrL/" target="_blank" class="social-icon">
                <i class="fab fa-facebook fa-2x"></i>
            </a>
            <a href="https://www.twitter.com/studentprofile" target="_blank" class="social-icon">
                <i class="fab fa-x-twitter fa-2x"></i>
            </a>
        </div>
    </div>
</footer>
<script>
    document.getElementById("currentYear").textContent = new Date().getFullYear();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("contact-form").addEventListener("submit", function (event) {
        event.preventDefault();

        let name = document.getElementById("name").value.trim();
        let email = document.getElementById("email").value.trim();
        let subject = document.getElementById("subject").value.trim();
        let message = document.getElementById("message").value.trim();
        let formStatus = document.getElementById("form-status");

        let nameError = document.getElementById("nameError");
        let emailError = document.getElementById("emailError");
        let subjectError = document.getElementById("subjectError");
        let messageError = document.getElementById("messageError");

        let isValid = true;

        nameError.classList.add("d-none");
        emailError.classList.add("d-none");
        subjectError.classList.add("d-none");
        messageError.classList.add("d-none");
        formStatus.innerText = "";

        if (name === "") {
            nameError.classList.remove("d-none");
            isValid = false;
        }
        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            emailError.classList.remove("d-none");
            isValid = false;
        }
        if (subject === "") {
            subjectError.classList.remove("d-none");
            isValid = false;
        }
        if (message === "") {
            messageError.classList.remove("d-none");
            isValid = false;
        }
        if (isValid) {
            formStatus.innerText = "✅ Message Sent Successfully!";
            formStatus.style.color = "green";

            setTimeout(() => {
                document.getElementById("contact-form").reset();
                formStatus.innerText = ""; 
            }, 3000);
        }
    });
    document.querySelectorAll("#name, #email, #subject, #message").forEach(input => {
        input.addEventListener("input", function () {
            document.getElementById(this.id + "Error").classList.add("d-none");
        });
    });
});
</script>
</body>
</html>
