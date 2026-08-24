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
    <div class="container hero-layout">
        <div class="hero-content reveal-on-scroll">
            <span class="hero-eyebrow">Full Stack Developer & IT Specialist</span>
            <h1>Hi, I'm Lloyd Kwadwo Agyapong</h1>
            <p class="hero-subtitle">
                Trained in Information Systems and Technology with a foundation in building and maintaining end-to-end web applications, Python automation & scripting, and structured database design (SQL).
            </p>
            <div class="hero-actions">
                <a href="#projects" class="btn-primary">View My Work</a>
                <a href="#contact" class="btn-secondary">Contact Me</a>
            </div>
            <div class="hero-socials">
                <a href="https://github.com/Odenkyem-1" target="_blank" rel="noopener noreferrer" aria-label="GitHub Profile" title="GitHub">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://linkedin.com/in/lloyd-kwadwo-agyapong" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn Profile" title="LinkedIn">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
                <a href="mailto:agyaponglloyd57@gmail.com" aria-label="Send an Email" title="Email">
                    <i class="fa-regular fa-envelope"></i>
                </a>
                <a href="tel:+233552296996" aria-label="Call Mobile Phone" title="+233 55 229 6996">
                    <i class="fa-solid fa-phone"></i>
                </a>
            </div>
        </div>
        <div class="hero-image-wrapper reveal-on-scroll">
            <div class="hero-avatar">
                <!-- Insert your headshot in assets/images/lloyd-profile.jpg -->
                <img 
                    src="assets/images/lloyd-profile.jpg" 
                    alt="Lloyd Kwadwo Agyapong" 
                    onerror="this.onerror=null; this.src='data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'240\' height=\'240\' viewBox=\'0 0 240 240\'><rect width=\'240\' height=\'240\' fill=\'%23f3f4f6\'/><circle cx=\'120\' cy=\'95\' r=\'45\' fill=\'%23d1d5db\'/><path d=\'M50 205 C50 150 190 150 190 205 Z\' fill=\'%23d1d5db\'/></svg>';"
                >
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="alt-bg">
    <div class="container">
        <div class="section-header reveal-on-scroll">
            <h2>Professional Summary</h2>
            <p>Background, technical drive, and core focus areas.</p>
        </div>
        <div class="about-grid reveal-on-scroll">
            <p>
                Trained in <strong>Information Systems and Technology</strong> at the University of Mines and Technology (UMaT), with a foundation in building and maintaining end-to-end web applications. Full stack web development, Python scripting and automation, and structured database design (SQL) form my core technical toolkit.
            </p>
            <p>
                I am seeking a software or web developer role where these skills can drive efficient, well-engineered digital solutions. Beyond full-stack web platforms, I actively script and automate everyday tasks—organizing files and workflows, comparing data across spreadsheets, web scraping, and building bespoke tools.
            </p>
        </div>
    </div>
</section>

<!-- Education Section -->
<section id="education">
    <div class="container">
        <div class="section-header reveal-on-scroll">
            <h2>Education</h2>
            <p>Academic training and foundational studies.</p>
        </div>
        <div class="education-list">
            <div class="education-item reveal-on-scroll">
                <h3>University of Mines and Technology — Tarkwa, Ghana</h3>
                <p class="education-degree">BSc Information Systems and Technology</p>
                <p class="education-year">2023 – Present</p>
                <p class="education-coursework"><strong>Key Coursework:</strong> Web Application Development, Database Management Systems, Systems Analysis and Design, Artificial Intelligence, Business Intelligence.</p>
            </div>
            <div class="education-item reveal-on-scroll">
                <h3>Okuapemman School — Akropong, Eastern Region, Ghana</h3>
                <p class="education-degree">West Africa Senior Secondary School Certificate (WASSCE)</p>
                <p class="education-year">2020 – 2023</p>
                <p class="education-coursework"><strong>Programme:</strong> General Science</p>
            </div>
        </div>
    </div>
</section>

<!-- Work Experience Section -->
<section id="experience" class="alt-bg">
    <div class="container">
        <div class="section-header reveal-on-scroll">
            <h2>Work Experience</h2>
            <p>Professional roles, client engagements, and responsibilities.</p>
        </div>
        <div class="experience-list">
            <div class="experience-item reveal-on-scroll">
                <h3>Programs Coordinator Intern — Educ8Africa</h3>
                <p class="experience-meta">November 2025 – October 2026 | Remote</p>
                <ul>
                    <li>Managed bulk communication to registered program students using Brevo CRM, keeping enrolment updates and announcements consistent across cohorts.</li>
                    <li>Built automated email workflows with Zapier, triggering instant confirmation messages to students immediately after they submitted a Google Form registration.</li>
                    <li>Coordinated facilitator readiness by liaising directly with instructors ahead of each session and maintaining the master class timetable.</li>
                </ul>
            </div>

            <div class="experience-item reveal-on-scroll">
                <h3>Freelance Web Developer — bigentertainmentart.com</h3>
                <p class="experience-meta">May 2026 – July 2026 | Remote</p>
                <ul>
                    <li>Designed and built bigentertainmentart.com, a music and entertainment blog, from the ground up for a client, combining a neomorphic and glassmorphic luxury aesthetic with a fully responsive, user-friendly layout.</li>
                    <li>Developed a custom admin panel allowing the client to publish blog posts directly, manage users, and approve music track submissions from registered artists without manual intervention.</li>
                    <li>Built a bespoke text editor within the admin panel to streamline the content-publishing workflow.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Projects & Leadership Section -->
<section id="projects">
    <div class="container">
        <div class="section-header reveal-on-scroll">
            <h2>Projects & Leadership</h2>
            <p>Real-world applications, engineering leadership, and hackathon achievements.</p>
        </div>
        <div class="projects-list">
            
            <!-- Project 1 -->
            <article class="project-card reveal-on-scroll">
                <div class="project-video-wrapper">
                    <video controls preload="metadata" poster="assets/images/agrismart-poster.jpg">
                        <source src="assets/videos/agrismart-demo.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="project-info">
                    <h3>AgriSmart Ghana — Group Leader</h3>
                    <p class="project-tagline">Python multi-agent system for crop growth prediction</p>
                    <p class="project-tech">Python • Multi-Agent Systems • Web Integration • UMaT AI Course</p>
                    <ul>
                        <li>Led a team of 16 students to design and build a Python-based, web-integrated multi-agent system (4 coordinating agents) for crop growth prediction, covering the full pipeline from data handling to agent logic.</li>
                        <li>Coordinated task delegation, code integration, and testing across the team to deliver a working system within the course deadline.</li>
                    </ul>
                    <div class="project-links">
                        <a href="https://github.com/Odenkyem-1" target="_blank" rel="noopener noreferrer" class="btn-secondary">View Project on GitHub</a>
                    </div>
                </div>
            </article>

            <!-- Project 2 -->
            <article class="project-card reveal-on-scroll">
                <div class="project-video-wrapper">
                    <video controls preload="metadata" poster="assets/images/buzzchat-health-poster.jpg">
                        <source src="assets/videos/buzzchat-health-demo.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="project-info">
                    <h3>BuzzChat Health App — Web Developer</h3>
                    <p class="project-tagline">AI-powered health assistant (BuzzChat Hackathon — 3rd Place Winner)</p>
                    <p class="project-tech">Python • LLM Integration • Web Development • UN SDG 3</p>
                    <ul>
                        <li>Partnered with a teammate to build a health-focused application powered by BuzzChat's proprietary LLM, addressing a UN Sustainable Development Goal within the competition's scope.</li>
                        <li>Handled debugging and testing of the web application, contributing to a 3rd place finish among competing teams.</li>
                    </ul>
                    <div class="project-links">
                        <a href="https://github.com/Odenkyem-1" target="_blank" rel="noopener noreferrer" class="btn-secondary">View Project on GitHub</a>
                    </div>
                </div>
            </article>

            <!-- Project 3 -->
            <article class="project-card reveal-on-scroll">
                <div class="project-video-wrapper">
                    <video controls preload="metadata" poster="assets/images/bigentertainmentart-poster.jpg">
                        <source src="assets/videos/bigentertainmentart-demo.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="project-info">
                    <h3>bigentertainmentart.com — Freelance Web App</h3>
                    <p class="project-tagline">Music & entertainment blog with custom administrative CMS</p>
                    <p class="project-tech">PHP • MySQL • HTML5 • CSS3 • JavaScript</p>
                    <ul>
                        <li>Full-stack music and entertainment blog with neomorphic/glassmorphic responsive interface.</li>
                        <li>Custom administrative dashboard for article publishing, track approval, and role management.</li>
                        <li>Bespoke embedded WYSIWYG text editor built for streamlined content publishing.</li>
                    </ul>
                    <div class="project-links">
                        <a href="https://github.com/Odenkyem-1" target="_blank" rel="noopener noreferrer" class="btn-secondary">View Project on GitHub</a>
                    </div>
                </div>
            </article>

        </div>
    </div>
</section>

<!-- Relevant Skills & Credentials Section -->
<section id="skills" class="alt-bg">
    <div class="container">
        <div class="section-header reveal-on-scroll">
            <h2>Skills, Certifications & Seminars</h2>
            <p>Technical proficiencies, certifications, and industry engagements.</p>
        </div>
        <div class="skills-grid">
            <div class="skills-group reveal-on-scroll">
                <h3><i class="fa-solid fa-code"></i> Technical & IT</h3>
                <p>Python, Java, PHP, JavaScript, SQL, HTML5, CSS3, Windows OS, Zapier, Brevo CRM, Git, GitHub, AnyLogic</p>
            </div>
            <div class="skills-group reveal-on-scroll">
                <h3><i class="fa-solid fa-users"></i> Soft Skills</h3>
                <p>Team leadership and coordination, stakeholder communication, problem-solving, debugging, negotiation</p>
            </div>
            <div class="skills-group reveal-on-scroll">
                <h3><i class="fa-solid fa-certificate"></i> Certification</h3>
                <p><strong>Cybersecurity Essentials</strong> — Educ8Africa Ghana (2026)</p>
            </div>
            <div class="skills-group reveal-on-scroll">
                <h3><i class="fa-solid fa-language"></i> Languages</h3>
                <p><strong>English:</strong> Fluent<br><strong>Twi (Asante & Akuapem):</strong> Fluent<br><strong>Fante:</strong> Basic</p>
            </div>
        </div>

        <!-- Workshops & Seminars -->
        <div class="workshops-wrapper reveal-on-scroll">
            <h3 class="workshops-title"><i class="fa-solid fa-chalkboard-user"></i> Workshops & Seminars</h3>
            <div class="workshops-grid">
                <div class="workshop-card">
                    <h4>Texonnect Web Conference</h4>
                    <p class="workshop-date">29th November, 2025</p>
                    <p>Themed <em>"The Conversation Beyond the Event: Building Africa's Collaborative Future"</em>. Speakers included Miss Alexandra Boateng, Dr. David King Boison, and Mr. C. K. Bruce.</p>
                </div>
                <div class="workshop-card">
                    <h4>2025 Data Protection Africa Summit (DPAS)</h4>
                    <p class="workshop-date">1st – 4th December, 2025 | Accra, Ghana</p>
                    <p>Formally opened by Hon. Samuel Nartey George, Minister for Communication, Digital Technology and Innovations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="container contact-container reveal-on-scroll">
        <div class="section-header">
            <h2>Get In Touch</h2>
            <p>Feel free to reach out for software development roles, project inquiries, or collaborations.</p>
        </div>

        <div class="contact-info-grid">
            <div class="contact-info-card">
                <i class="fa-regular fa-envelope"></i>
                <div>
                    <h4>Email</h4>
                    <a href="mailto:agyaponglloyd57@gmail.com">agyaponglloyd57@gmail.com</a>
                </div>
            </div>
            <div class="contact-info-card">
                <i class="fa-solid fa-phone"></i>
                <div>
                    <h4>Phone</h4>
                    <a href="tel:+233552296996">+233 55 229 6996</a>
                </div>
            </div>
            <div class="contact-info-card">
                <i class="fa-solid fa-location-dot"></i>
                <div>
                    <h4>Location</h4>
                    <p>P. O. Box 80, Nsawam, Eastern Region, Ghana</p>
                </div>
            </div>
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

        <p class="referees-note"><em>Referees available on request.</em></p>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
