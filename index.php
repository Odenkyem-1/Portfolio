<?php
// index.php - Lloyd Kwadwo Agyapong Portfolio
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Extract and clear flash session messages
$successMessage = $_SESSION['success'] ?? null;
$errorMessages  = $_SESSION['errors'] ?? [];
$oldInputs      = $_SESSION['old'] ?? [];

unset($_SESSION['success'], $_SESSION['errors'], $_SESSION['old']);

require_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section id="hero">
    <div class="container hero-content">
        <span class="hero-eyebrow">Full Stack Developer</span>
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
            <a href="https://github.com/Odenkyem-1" target="_blank" rel="noopener noreferrer">GitHub</a>
            <a href="https://linkedin.com/in/lloyd-kwadwo-agyapong" target="_blank" rel="noopener noreferrer">LinkedIn</a>
            <a href="mailto:agyaponglloyd57@gmail.com">Email</a>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="alt-bg">
    <div class="container">
        <div class="section-header">
            <h2>About Me</h2>
        </div>
        <div class="about-grid">
            <p>
                I'm a final-year Information Systems and Technology student at the
                University of Mines and Technology (UMaT), Tarkwa. I have a strong foundation in
                full stack web development, Python scripting and automation, and structured
                database design with SQL.
            </p>
            <p>
                My goal is to work as a software or web developer where I can build
                efficient, well-engineered digital solutions. I have experience building
                real projects—from custom content management systems and admin panels to AI-integrated
                health solutions—and I am constantly learning new tools like React, Node.js, and Laravel.
            </p>
        </div>
    </div>
</section>

<!-- Education Section -->
<section id="education">
    <div class="container">
        <div class="section-header">
            <h2>Education</h2>
        </div>
        <div class="education-list">
            <div class="education-item">
                <h3>University of Mines and Technology — Tarkwa, Ghana</h3>
                <p class="education-degree">BSc Information Systems and Technology</p>
                <p class="education-year">2023 – Present</p>
            </div>
            <div class="education-item">
                <h3>Okuapemman School — Akropong, Eastern Region</h3>
                <p class="education-degree">West Africa Senior Secondary School Certificate (WASSCE) — General Science</p>
                <p class="education-year">2020 – 2023</p>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="alt-bg">
    <div class="container">
        <div class="section-header">
            <h2>Skills & Technologies</h2>
        </div>
        <div class="skills-grid">
            <div class="skills-group">
                <h3>Languages</h3>
                <p>Python, Java, PHP, JavaScript, SQL, HTML5, CSS3</p>
            </div>
            <div class="skills-group">
                <h3>Tools & Platforms</h3>
                <p>Git, GitHub, Zapier, Brevo CRM, AnyLogic, Windows OS, Apache, MySQL</p>
            </div>
            <div class="skills-group">
                <h3>Soft Skills</h3>
                <p>Team leadership, stakeholder communication, problem-solving, debugging, negotiation</p>
            </div>
            <div class="skills-group">
                <h3>Currently Learning</h3>
                <p>React, Node.js, Laravel, REST APIs</p>
            </div>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience">
    <div class="container">
        <div class="section-header">
            <h2>Experience</h2>
        </div>
        <div class="experience-list">
            <div class="experience-item">
                <h3>Freelance Web Developer — bigentertainmentart.com</h3>
                <p class="experience-meta">May 2026 – July 2026 | Remote</p>
                <ul>
                    <li>Designed and built a music and entertainment blog with a neomorphic and glassmorphic luxury aesthetic.</li>
                    <li>Developed a custom admin panel for publishing blog posts, managing users, and approving music track submissions.</li>
                    <li>Built a bespoke rich text editor inside the admin panel to streamline content publishing.</li>
                </ul>
            </div>
            <div class="experience-item">
                <h3>Programs Coordinator Intern — Educ8Africa</h3>
                <p class="experience-meta">November 2025 – October 2026 | Remote</p>
                <ul>
                    <li>Managed bulk communication to program students using Brevo CRM.</li>
                    <li>Built automated email workflows with Zapier triggered by Google Form submissions.</li>
                    <li>Coordinated facilitator readiness and maintained the master class timetable.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="alt-bg">
    <div class="container">
        <div class="section-header">
            <h2>Featured Projects</h2>
            <p>Real-world projects showcasing full stack web architecture, automation, and AI integration.</p>
        </div>
        <div class="projects-list">
            
            <!-- Project 1 -->
            <article class="project-card">
                <div class="project-video-wrapper">
                    <video controls preload="metadata" poster="assets/images/bigentertainmentart-poster.jpg">
                        <source src="assets/videos/bigentertainmentart-demo.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="project-info">
                    <h3>bigentertainmentart.com</h3>
                    <p class="project-tagline">Music & entertainment blog with custom admin panel</p>
                    <p class="project-tech">PHP • MySQL • HTML • CSS • JavaScript</p>
                    <ul>
                        <li>Custom administrative panel for publishing posts and approving tracks.</li>
                        <li>User role management and moderation workflows.</li>
                        <li>Bespoke WYSIWYG text editor built from scratch.</li>
                    </ul>
                    <div class="project-links">
                        <a href="https://github.com/Odenkyem-1" target="_blank" rel="noopener noreferrer" class="btn-secondary">GitHub Repo</a>
                    </div>
                </div>
            </article>

            <!-- Project 2 -->
            <article class="project-card">
                <div class="project-video-wrapper">
                    <video controls preload="metadata" poster="assets/images/agrismart-poster.jpg">
                        <source src="assets/videos/agrismart-demo.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="project-info">
                    <h3>AgriSmart Ghana</h3>
                    <p class="project-tagline">Python multi-agent system for crop growth prediction</p>
                    <p class="project-tech">Python • Multi-Agent Systems • Web Integration</p>
                    <ul>
                        <li>Led a team of 16 students to design and deliver a working prediction engine.</li>
                        <li>Built 4 coordinating agents for data acquisition, processing, and prediction logic.</li>
                        <li>Coordinated code integration, unit testing, and collaborative delegation.</li>
                    </ul>
                    <div class="project-links">
                        <a href="https://github.com/Odenkyem-1" target="_blank" rel="noopener noreferrer" class="btn-secondary">GitHub Repo</a>
                    </div>
                </div>
            </article>

            <!-- Project 3 -->
            <article class="project-card">
                <div class="project-video-wrapper">
                    <video controls preload="metadata" poster="assets/images/buzzchat-health-poster.jpg">
                        <source src="assets/videos/buzzchat-health-demo.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="project-info">
                    <h3>BuzzChat Health App</h3>
                    <p class="project-tagline">AI-powered health assistant addressing UN SDG 3</p>
                    <p class="project-tech">Python • LLM Integration • Full Stack Web</p>
                    <ul>
                        <li>Developed during the BuzzChat Hackathon to address global healthcare access.</li>
                        <li>Integrated Large Language Models for automated health information assistance.</li>
                        <li>Awarded 3rd Place among competing regional engineering teams.</li>
                    </ul>
                    <div class="project-links">
                        <a href="https://github.com/Odenkyem-1" target="_blank" rel="noopener noreferrer" class="btn-secondary">GitHub Repo</a>
                    </div>
                </div>
            </article>

        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="container contact-container">
        <div class="section-header">
            <h2>Get In Touch</h2>
            <p>Have a project in mind or an open opportunity? Send a message below.</p>
        </div>

        <div class="form-alerts">
            <?php if ($successMessage): ?>
                <div class="form-success">
                    <?php echo htmlspecialchars($successMessage, ENT_QUOTES, 'UTF-8'); ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($errorMessages)): ?>
                <?php foreach ($errorMessages as $error): ?>
                    <div class="form-error">
                        <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <form action="contact-process.php" method="POST" class="contact-form">
            <div class="form-group">
                <label for="name">Name *</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    required 
                    placeholder="Your Name"
                    value="<?php echo htmlspecialchars($oldInputs['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                >
            </div>

            <div class="form-group">
                <label for="email">Email *</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    required 
                    placeholder="name@example.com"
                    value="<?php echo htmlspecialchars($oldInputs['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                >
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <input 
                    type="text" 
                    id="subject" 
                    name="subject" 
                    placeholder="Project Inquiry / Job Opportunity"
                    value="<?php echo htmlspecialchars($oldInputs['subject'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                >
            </div>

            <div class="form-group">
                <label for="message">Message *</label>
                <textarea 
                    id="message" 
                    name="message" 
                    rows="5" 
                    required 
                    placeholder="Write your message here..."
                ><?php echo htmlspecialchars($oldInputs['message'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>
            </div>

            <button type="submit" class="btn-primary">Send Message</button>
        </form>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
