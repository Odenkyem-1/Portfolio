# Lloyd Kwadwo Agyapong — Full Stack Developer Portfolio

A minimal black-and-white portfolio website built with **PHP, MySQL, HTML, CSS, and JavaScript**.  
This README is both the project documentation and your step-by-step build guide. Follow it from top to bottom.

---

## Table of Contents

1. [Overview](#overview)  
2. [Tech Stack](#tech-stack)  
3. [Features](#features)  
4. [Design System](#design-system)  
5. [Folder Structure](#folder-structure)  
6. [Local Setup](#local-setup)  
7. [Database Setup](#database-setup)  
8. [Content Guide](#content-guide)  
9. [Adding Live Demo Videos](#adding-live-demo-videos)  
10. [Contact Form with MySQL](#contact-form-with-mysql)  
11. [Deployment](#deployment)  
12. [Final Pre-Launch Checklist](#final-pre-launch-checklist)  
13. [License](#license)

---

## Overview

This is a personal portfolio website for **Lloyd Kwadwo Agyapong**, a final-year Information Systems and Technology student at the University of Mines and Technology, Tarkwa. The site is designed to:

- Introduce you as a full stack developer.
- Showcase 3–4 real projects with **embedded video demos**.
- Provide a downloadable resume.
- Allow visitors/recruiters to contact you through a form that stores messages in MySQL.
- Look clean, professional, and mobile-friendly using a strict black-and-white theme.

---

## Tech Stack

| Layer | Technology |
| --- | --- |
| Backend | PHP 8+ |
| Database | MySQL |
| Frontend | HTML5, CSS3, Vanilla JavaScript |
| Server | Apache (via XAMPP/WAMP for local development) |
| Version Control | Git & GitHub |
| Design | Minimal black-and-white, no external CSS frameworks |

No PHP framework is used for this project. This keeps the portfolio fast, simple, and easy to deploy on any PHP/MySQL hosting.

---

## Features

- Responsive navigation with mobile hamburger menu
- Hero section with clear call-to-action buttons
- About section using your resume details
- Skills section grouped into Languages, Tools, Soft Skills, and Currently Learning
- Projects section with **live demo videos** instead of static screenshots
- Education and work experience sections
- Contact form that stores messages in MySQL
- Downloadable PDF resume
- SEO meta tags and Open Graph image for better sharing
- Smooth scrolling and small JavaScript interactions
- Fully responsive on phones, tablets, and desktops

---

## Design System

The entire site uses only black, white, and shades of gray. No color accents.

| Element | Color |
| --- | --- |
| Background | `#ffffff` (white) |
| Text | `#0a0a0a` (near black) |
| Muted text | `#666666` |
| Borders | `#e5e5e5` |
| Section alt background | `#f7f7f7` |
| Buttons primary | `#0a0a0a` background, `#ffffff` text |
| Buttons secondary | `#ffffff` background, `#0a0a0a` border and text |

**Typography**  
Use Google Fonts:

- Headings: `Space Grotesk`
- Body: `Inter`

Add this inside `<head>`:

```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
```

In CSS:

```css
body {
  font-family: 'Inter', sans-serif;
  color: #0a0a0a;
  background: #ffffff;
}
h1, h2, h3, h4 {
  font-family: 'Space Grotesk', sans-serif;
}
```

**Spacing**  
Keep generous white space:

- Section padding: `80px 0`
- Container max width: `1100px`
- Border radius: `10px` for cards and buttons
- Button padding: `12px 24px`

**Buttons**

```css
.btn-primary {
  background: #0a0a0a;
  color: #ffffff;
  border: 2px solid #0a0a0a;
  padding: 12px 24px;
  border-radius: 10px;
  cursor: pointer;
  text-decoration: none;
  display: inline-block;
}
.btn-secondary {
  background: #ffffff;
  color: #0a0a0a;
  border: 2px solid #0a0a0a;
  padding: 12px 24px;
  border-radius: 10px;
  cursor: pointer;
  text-decoration: none;
  display: inline-block;
}
```

---

## Folder Structure

Create this exact structure inside your project folder:

```
portfolio/
│
├── index.php                  # Main single-page site
├── contact-process.php        # Handles contact form submission
│
├── includes/
│   ├── db.php                 # Database connection
│   ├── header.php             # HTML head, nav, hero
│   └── footer.php             # Footer and scripts
│
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── main.js
│   ├── images/
│   │   ├── lloyd-profile.jpg  # Your professional photo
│   │   ├── og-image.png       # 1200x630 image for social sharing
│   │   └── favicon.ico
│   └── videos/
│       ├── bigentertainmentart-demo.mp4
│       ├── agrismart-demo.mp4
│       └── buzzchat-health-demo.mp4
│
├── sql/
│   └── portfolio.sql          # Database schema
│
├── resume.pdf                 # Your downloadable resume
└── README.md
```

---

## Local Setup

### Step 1: Install XAMPP

Download and install [XAMPP](https://www.apachefriends.org/) if you don’t already have it.  
Start **Apache** and **MySQL** from the XAMPP Control Panel.

### Step 2: Clone the Repository

```bash
cd C:/xampp/htdocs
git clone https://github.com/yourusername/your-portfolio.git portfolio
```

Or manually create the folder `C:/xampp/htdocs/portfolio` and add your files.

### Step 3: Create the Database

Open [http://localhost/phpmyadmin](http://localhost/phpmyadmin) in your browser.

1. Click **New** on the left sidebar.
2. Database name: `portfolio_db`
3. Choose `utf8mb4_general_ci`
4. Click **Create**.

Then import `sql/portfolio.sql` or run the SQL below.

### Step 4: Configure Database Connection

Open `includes/db.php` and update the credentials if needed:

```php
<?php
$host = 'localhost';
$dbname = 'portfolio_db';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}
?>
```

### Step 5: Run the Site

Open your browser and visit:

```
http://localhost/portfolio
```

---

## Database Setup

The database is used to store contact form messages. You can also store project data in MySQL if you want to make the projects section dynamic, but for simplicity we will keep projects in the HTML/PHP files.

### `sql/portfolio.sql`

```sql
CREATE DATABASE IF NOT EXISTS portfolio_db;
USE portfolio_db;

CREATE TABLE IF NOT EXISTS contact_messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL,
  subject VARCHAR(200) DEFAULT NULL,
  message TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

Run this in phpMyAdmin under the SQL tab, or import the file.

---

## Content Guide

Use the information from your resume exactly or slightly shortened. Below is the recommended content for each section.

### Hero Section

```html
<section id="hero">
  <p class="hero-eyebrow">Full Stack Developer</p>
  <h1>Hi, I'm Lloyd Kwadwo Agyapong</h1>
  <p class="hero-subtitle">
    I build end-to-end web applications using PHP, Python, JavaScript, and SQL.
    Currently expanding into React, Node.js, and Laravel.
  </p>
  <div class="hero-actions">
    <a href="#projects" class="btn-primary">View My Work</a>
    <a href="#contact" class="btn-secondary">Contact Me</a>
  </div>
  <div class="hero-socials">
    <a href="https://github.com/yourusername" target="_blank">GitHub</a>
    <a href="https://linkedin.com/in/lloyd-kwadwo-agyapong" target="_blank">LinkedIn</a>
  </div>
</section>
```

### About Section

```html
<section id="about">
  <h2>About Me</h2>
  <p>
    I'm a final-year Information Systems and Technology student at the
    University of Mines and Technology, Tarkwa. I have a strong foundation in
    full stack web development, Python scripting and automation, and structured
    database design with SQL.
  </p>
  <p>
    My goal is to work as a software or web developer where I can build
    efficient, well-engineered digital solutions. I have experience building
    real projects—from custom admin panels to AI-integrated health apps—and I
    am constantly learning new tools like React, Node.js, and Laravel.
  </p>
</section>
```

### Education

```html
<section id="education">
  <h2>Education</h2>
  <div class="education-item">
    <h3>University of Mines and Technology — Tarkwa, Ghana</h3>
    <p>BSc Information Systems and Technology</p>
    <p>2023 – Present</p>
  </div>
  <div class="education-item">
    <h3>Okuapemman School — Akropong, Eastern Region</h3>
    <p>West Africa Senior Secondary School Certificate (WASSCE)</p>
    <p>General Science</p>
    <p>2020 – 2023</p>
  </div>
</section>
```

### Skills Section

```html
<section id="skills">
  <h2>Skills</h2>
  <div class="skills-group">
    <h3>Languages</h3>
    <p>Python, Java, PHP, JavaScript, SQL, HTML, CSS</p>
  </div>
  <div class="skills-group">
    <h3>Tools & Platforms</h3>
    <p>Git, GitHub, Zapier, Brevo CRM, AnyLogic, Windows OS</p>
  </div>
  <div class="skills-group">
    <h3>Soft Skills</h3>
    <p>Team leadership, stakeholder communication, problem-solving, debugging, negotiation</p>
  </div>
  <div class="skills-group">
    <h3>Currently Learning</h3>
    <p>React, Node.js, Laravel</p>
  </div>
</section>
```

### Experience

```html
<section id="experience">
  <h2>Experience</h2>

  <div class="experience-item">
    <h3>Freelance Web Developer — bigentertainmentart.com</h3>
    <p>May 2026 – July 2026 | Remote</p>
    <ul>
      <li>Designed and built a music and entertainment blog with a neomorphic and glassmorphic luxury aesthetic.</li>
      <li>Developed a custom admin panel for publishing blog posts, managing users, and approving music track submissions.</li>
      <li>Built a bespoke text editor inside the admin panel to streamline content publishing.</li>
    </ul>
  </div>

  <div class="experience-item">
    <h3>Programs Coordinator Intern — Educ8Africa</h3>
    <p>November 2025 – October 2026 | Remote</p>
    <ul>
      <li>Managed bulk communication to program students using Brevo CRM.</li>
      <li>Built automated email workflows with Zapier triggered by Google Form submissions.</li>
      <li>Coordinated facilitator readiness and maintained the master class timetable.</li>
    </ul>
  </div>
</section>
```

---

## Projects Section with Video Demos

The projects section is the most important part of your portfolio. Use **live demo videos** instead of static screenshots.

### Recommended Projects

1. **bigentertainmentart.com**  
   *Music & entertainment blog with custom admin panel*  
   - Built with PHP, MySQL, HTML, CSS, JavaScript  
   - Custom admin panel, user management, music submission approval  
   - Bespoke text editor for content publishing  

2. **AgriSmart Ghana**  
   *Python-based multi-agent system for crop growth prediction*  
   - Led a team of 16 students  
   - Built 4 coordinating agents covering data handling to prediction logic  
   - Web-integrated Python system  

3. **BuzzChat Health App**  
   *Health-focused web app using an LLM*  
   - Built for BuzzChat Hackathon  
   - Addressed a UN Sustainable Development Goal  
   - Won 3rd place among competing teams  

### Project Card Markup

```html
<div class="project-card">
  <div class="project-video-wrapper">
    <video controls preload="metadata" poster="assets/images/agrismart-poster.jpg">
      <source src="assets/videos/agrismart-demo.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
  <div class="project-info">
    <h3>AgriSmart Ghana</h3>
    <p class="project-tagline">Python multi-agent system for crop growth prediction</p>
    <p class="project-tech">Python • Web Integration • Team Leadership</p>
    <ul>
      <li>Led a team of 16 students to deliver a working system.</li>
      <li>Built 4 coordinating agents for data handling and prediction.</li>
      <li>Coordinated code integration, testing, and task delegation.</li>
    </ul>
    <div class="project-links">
      <a href="https://github.com/yourusername/agrismart" target="_blank" class="btn-secondary">GitHub Repo</a>
    </div>
  </div>
</div>
```

---

## Adding Live Demo Videos

### How to Record a Demo Video

1. Use [OBS Studio](https://obsproject.com/) (free) or [Loom](https://www.loom.com/).
2. Record your screen while walking through the key features of the app.
3. Keep the video between **30 seconds and 2 minutes**.
4. Export as `.mp4` (H.264 codec works everywhere).
5. If the file is large, compress it with [HandBrake](https://handbrake.fr/) or an online compressor.
6. Save the video inside `assets/videos/`.

### Video Best Practices

- Start with a clean screen — no unnecessary tabs or notifications.
- Show the main user flow first.
- Use captions or voice-over to explain what is happening.
- End with the most impressive feature.

### Embedding Videos

Use the HTML5 `<video>` element. Always include a `poster` image so the video looks good before playing.

```html
<video controls preload="metadata" poster="assets/images/project-poster.jpg">
  <source src="assets/videos/project-demo.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
```

Optional: add autoplay muted looping for a short hero video or background:

```html
<video autoplay muted loop playsinline>
  <source src="assets/videos/hero-bg.mp4" type="video/mp4">
</video>
```

---

## Contact Form with MySQL

### HTML Form

```html
<section id="contact">
  <h2>Contact Me</h2>
  <form action="contact-process.php" method="POST">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="subject">Subject</label>
    <input type="text" id="subject" name="subject">

    <label for="message">Message</label>
    <textarea id="message" name="message" rows="5" required></textarea>

    <button type="submit" class="btn-primary">Send Message</button>
  </form>
</section>
```

### PHP Handler (`contact-process.php`)

```php
<?php
session_start();
require 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $errors = [];

    if ($name === '') {
        $errors[] = 'Name is required.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'A valid email is required.';
    }
    if ($message === '') {
        $errors[] = 'Message cannot be empty.';
    }

    if (empty($errors)) {
        $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $email, $subject, $message]);

        $_SESSION['success'] = 'Thanks! Your message has been received.';
        header('Location: index.php#contact');
        exit;
    } else {
        $_SESSION['errors'] = $errors;
        $_SESSION['old'] = $_POST;
        header('Location: index.php#contact');
        exit;
    }
}
?>
```

### Displaying Success/Error Messages

Inside `index.php`, above the form:

```php
<?php
session_start();
if (isset($_SESSION['success'])) {
    echo '<p class="form-success">' . htmlspecialchars($_SESSION['success']) . '</p>';
    unset($_SESSION['success']);
}
if (!empty($_SESSION['errors'])) {
    foreach ($_SESSION['errors'] as $error) {
        echo '<p class="form-error">' . htmlspecialchars($error) . '</p>';
    }
    unset($_SESSION['errors']);
}
?>
```

---

## Header, Footer, and JavaScript

### `includes/header.php`

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lloyd Agyapong | Full Stack Developer</title>
    <meta name="description" content="Lloyd Kwadwo Agyapong — Full Stack Developer portfolio. Python, PHP, JavaScript, SQL, MySQL.">
    <meta property="og:title" content="Lloyd Agyapong | Full Stack Developer">
    <meta property="og:description" content="Full stack developer portfolio with project demos and contact information.">
    <meta property="og:image" content="assets/images/og-image.png">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
    <nav class="navbar container">
        <a href="#hero" class="logo">Lloyd<span>.</span></a>
        <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">☰</button>
        <ul class="nav-links" id="navLinks">
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="resume.pdf" download class="btn-primary">Download Resume</a></li>
        </ul>
    </nav>
</header>
<main>
```

### `includes/footer.php`

```php
</main>
<footer class="site-footer">
    <div class="container footer-inner">
        <p>© <?php echo date('Y'); ?> Lloyd Kwadwo Agyapong. All rights reserved.</p>
        <div class="footer-links">
            <a href="mailto:agyaponglloyd57@gmail.com">Email</a>
            <a href="https://linkedin.com/in/lloyd-kwadwo-agyapong" target="_blank">LinkedIn</a>
            <a href="https://github.com/yourusername" target="_blank">GitHub</a>
        </div>
    </div>
</footer>
<script src="assets/js/main.js"></script>
</body>
</html>
```

### `assets/js/main.js`

```javascript
// Mobile navigation toggle
const navToggle = document.getElementById('navToggle');
const navLinks = document.getElementById('navLinks');

if (navToggle && navLinks) {
    navToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
}

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
    });
});
```

---

## Deployment

### Option 1: Shared Hosting with cPanel

Most PHP/MySQL hosting plans work perfectly. Popular choices:

- Hostinger
- Namecheap
- Bluehost

Steps:

1. Purchase a hosting plan and domain.
2. Upload your files via cPanel File Manager or FTP into `public_html`.
3. Create a MySQL database in cPanel.
4. Import `sql/portfolio.sql` via phpMyAdmin.
5. Update `includes/db.php` with the live database credentials.
6. Test the contact form on the live site.

### Option 2: Free PHP Hosting

You can start with free hosts for learning/demo purposes:

- InfinityFree
- 000webhost

> **Note:** Free hosts often have limitations and may show ads. A custom domain is recommended for professional use.

### Option 3: Render / Railway

Platforms like [Render](https://render.com) and [Railway](https://railway.app) support PHP + MySQL with free tiers. Check their documentation for PHP deployment.

---

## Final Pre-Launch Checklist

Before sharing your portfolio anywhere, verify all of the following:

- [ ] Hero section shows your name and title immediately
- [ ] About section clearly explains who you are and what you want
- [ ] Skills are grouped and honest
- [ ] At least 3 projects are featured with video demos
- [ ] Each project has a GitHub repo link
- [ ] Contact form stores messages in MySQL
- [ ] Resume PDF downloads correctly
- [ ] Email and LinkedIn links work
- [ ] Site is mobile responsive
- [ ] All videos load and play correctly
- [ ] No broken links or placeholder text
- [ ] SEO meta tags are present
- [ ] Open Graph image appears when sharing on LinkedIn/WhatsApp
- [ ] Favicon is visible in browser tabs
- [ ] Page load time is fast (images/videos optimized)
- [ ] Site tested on Chrome, Firefox, Edge, and Safari
- [ ] GitHub repository has a clean README
- [ ] Portfolio link is on your LinkedIn profile and resume

---

## License

This project is intended as a personal portfolio. You may use it as a base for your own site, but replace all personal content with your own.  
All code is provided as-is without warranty.
