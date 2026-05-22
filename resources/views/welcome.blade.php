<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aksel Inesta Saleh — Web Developer</title>
  <meta name="description" content="Portfolio of Aksel Inesta Saleh, a passionate web developer and student at SMK Prestasi Prima." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>

  <!-- ── NAVBAR ── -->
  <nav class="navbar" id="navbar">
    <div class="nav-inner">
      <a href="#home" class="nav-logo">Portofolio</a>
      <ul class="nav-links">
        <li><a href="#home" class="nav-link active">Home</a></li>
        <li><a href="#about" class="nav-link">About</a></li>
        <li><a href="#service" class="nav-link">Service</a></li>
        <li><a href="#project" class="nav-link">Project</a></li>
        <li><a href="#contact" class="nav-link">Contact</a></li>
      </ul>
      <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </nav>

  <!-- ── HERO ── -->
  <section class="section hero-section" id="home">
    <div class="noise"></div>
    <div class="hero-content">
      <div class="hero-avatar-wrap">
        <div class="hero-avatar">
          <img src="{{ asset('images/foto.jpg') }}" alt="Aksel" style="width:100%;height:100%;object-fit:cover;border-radius:50%;" />
        </div>
        <div class="avatar-ring ring1"></div>
        <div class="avatar-ring ring2"></div>
      </div>
      <div class="hero-badge">
        <span class="badge-dot"></span>
        Available for projects
      </div>
      <h1 class="hero-title">
        Hi, Im <span class="hero-name">Aksel Inesta</span>
      </h1>
      <p class="hero-role">Web Developer</p>
      <div class="hero-socials">
        <a href="https://instagram.com/ac4lli" target="_blank" class="social-btn" aria-label="Instagram">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
        </a>
        <a href="https://wa.me/6281387493537" target="_blank" class="social-btn" aria-label="WhatsApp">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
        </a>
        <a href="mailto:aksel.inesta.s@gmail.com" class="social-btn" aria-label="Email">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><polyline points="22,4 12,13 2,4"/></svg>
        </a>
      </div>
      <p class="hero-desc">
        A passionate web developer and student who loves turning ideas into clean, functional,
        and impactful digital experiences. I believe great websites are more than just code —
        they're conversations between technology and people.
      </p>
      <div class="hero-stats">
        <div class="stat">
          <span class="stat-num">10+</span>
          <span class="stat-label">Projects</span>
        </div>
        <div class="stat-divider"></div>
        <div class="stat">
          <span class="stat-num">1+</span>
          <span class="stat-label">Years Learning</span>
        </div>
        <div class="stat-divider"></div>
        <div class="stat">
          <span class="stat-num">5+</span>
          <span class="stat-label">Technologies</span>
        </div>
      </div>
      <a href="#project" class="btn-primary">View My Work
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>
    <div class="scroll-indicator">
      <span>Scroll</span>
      <div class="scroll-line"></div>
    </div>
  </section>

  <!-- ── ABOUT ── -->
  <section class="section about-section" id="about">
    <div class="noise"></div>
    <div class="about-inner">
      <div class="about-left">
        <p class="section-eyebrow">Get to know me</p>
        <h2 class="section-heading">
          <span class="heading-white">About</span> <span class="heading-dim">me</span>
        </h2>
        <p class="about-text">
          I'm <strong>Aksel Inesta Saleh</strong>, a dedicated student at SMK Prestasi Prima with a strong focus on web development. Even at this stage of my journey, I'm committed to building real-world solutions through code — learning every day, one project at a time.
        </p>
        <p class="about-text">
          My passion for the web started with curiosity — wondering how websites work, how they're built, and how they can make people's lives easier. That curiosity turned into skill, and skill into purpose. Web development isn't just what I do — it's how I express my creativity and problem-solving mindset.
        </p>
        <div class="about-info-grid">
          <div class="info-item">
            <span class="info-label">School</span>
            <span class="info-value">SMK Prestasi Prima</span>
          </div>
          <div class="info-item">
            <span class="info-label">Profession</span>
            <span class="info-value">Web Developer</span>
          </div>
          <div class="info-item">
            <span class="info-label">Location</span>
            <span class="info-value">Indonesia</span>
          </div>
          <div class="info-item">
            <span class="info-label">Status</span>
            <span class="info-value info-available">Open to Work</span>
          </div>
        </div>
        <a href="#contact" class="btn-primary">Read More
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
      </div>
      <div class="about-right">
        <div class="skills-box">
          <p class="skills-box-title">Tech Stack</p>
          <div class="skills-grid">
            <div class="skill-chip">HTML5</div>
            <div class="skill-chip">CSS3</div>
            <div class="skill-chip">JavaScript</div>
            <div class="skill-chip">PHP</div>
            <div class="skill-chip">Laravel</div>
            <div class="skill-chip">MySQL</div>
            <div class="skill-chip">Bootstrap</div>
            <div class="skill-chip">Tailwind</div>
            <div class="skill-chip">Git</div>
            <div class="skill-chip">Figma</div>
          </div>
        </div>
        <div class="exp-box">
          <div class="exp-item">
            <div class="exp-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
            </div>
            <div>
              <p class="exp-title">SMK Prestasi Prima</p>
              <p class="exp-sub">Software Engineering · 2025 – Present</p>
            </div>
          </div>
          <div class="exp-item">
            <div class="exp-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>
            </div>
            <div>
              <p class="exp-title">Freelance Web Developer</p>
              <p class="exp-sub">Building projects & client solutions · 2025 – Present</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── SERVICES ── -->
  <section class="section service-section" id="service">
    <div class="noise"></div>
    <div class="service-inner">
      <p class="section-eyebrow center">What I offer</p>
      <h2 class="section-heading center">
        <span class="heading-dim">Our</span> <span class="heading-white">Services</span>
      </h2>
      <p class="section-sub center">From idea to deployment — here's what I can build for you.</p>
      <div class="services-grid">

        <div class="service-card">
          <div class="service-num">01</div>
          <div class="service-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
          </div>
          <h3 class="service-name">Website Design</h3>
          <p class="service-desc">Creating clean, modern, and responsive website layouts that look stunning on any screen size and device.</p>
          <div class="service-tags">
            <span>UI/UX</span><span>Responsive</span><span>Figma</span>
          </div>
        </div>

        <div class="service-card">
          <div class="service-num">02</div>
          <div class="service-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
          <h3 class="service-name">Frontend Development</h3>
          <p class="service-desc">Building interactive, fast, and user-friendly web interfaces with clean, structured, and maintainable code.</p>
          <div class="service-tags">
            <span>HTML/CSS</span><span>JavaScript</span><span>Tailwind</span>
          </div>
        </div>

        <div class="service-card">
          <div class="service-num">03</div>
          <div class="service-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>
          </div>
          <h3 class="service-name">Backend Development</h3>
          <p class="service-desc">Developing robust server-side logic, APIs, and databases to power dynamic and fully functional websites.</p>
          <div class="service-tags">
            <span>PHP</span><span>Laravel</span><span>MySQL</span>
          </div>
        </div>

        <div class="service-card">
          <div class="service-num">04</div>
          <div class="service-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
          </div>
          <h3 class="service-name">Landing Page</h3>
          <p class="service-desc">Designing high-converting landing pages for products, businesses, or personal branding with SEO best practices.</p>
          <div class="service-tags">
            <span>Conversion</span><span>SEO</span><span>Branding</span>
          </div>
        </div>

        <div class="service-card">
          <div class="service-num">05</div>
          <div class="service-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
          </div>
          <h3 class="service-name">E-Commerce Website</h3>
          <p class="service-desc">Building complete online stores with product management, cart systems, payment integration, and admin dashboard.</p>
          <div class="service-tags">
            <span>Laravel</span><span>Payment</span><span>Admin</span>
          </div>
        </div>

        <div class="service-card">
          <div class="service-num">06</div>
          <div class="service-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
          </div>
          <h3 class="service-name">Website Maintenance</h3>
          <p class="service-desc">Keeping your website updated, bug-free, secure, and running smoothly long after the initial launch.</p>
          <div class="service-tags">
            <span>Bug Fix</span><span>Updates</span><span>Support</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ── PROJECT ── -->
  <section class="section project-section" id="project">
    <div class="noise"></div>
    <div class="project-inner">
      <p class="section-eyebrow center">My work</p>
      <h2 class="section-heading center">
        <span class="heading-dim">Latest</span> <span class="heading-white">Project</span>
      </h2>
      <p class="section-sub center">A selection of projects I've built — from school assignments to real-world applications.</p>

      <div class="projects-grid">

        <div class="project-card featured">
          <div class="project-img project-img-1">
            <div class="project-img-overlay">
              <img src="{{ asset('images/project1.png') }}" alt="Sistem Kasir & Manajemen Toko" style="width:100%;height:100%;object-fit:cover;" />
            </div>
          </div>
          <div class="project-info">
            <div class="project-tags">
              <span class="ptag">Laravel</span>
              <span class="ptag">MySQL</span>
              <span class="ptag">Bootstrap</span>
            </div>
            <h3 class="project-name">Sistem Kasir & Manajemen Toko</h3>
            <p class="project-desc">A complete point-of-sale system with product management, sales tracking, customer records, and a real-time dashboard with analytics charts.</p>
            <div class="project-links">
              <a href="#" class="project-btn">View Project
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </a>
              <a href="#" class="project-btn-ghost">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>
                GitHub
              </a>
            </div>
          </div>
        </div>

        <div class="project-card">
          <div class="project-img project-img-2">
            <div class="project-img-overlay">
              <img src="{{ asset('images/project2.png') }}" alt="Stok Produk Management" style="width:100%;height:100%;object-fit:cover;" />
            </div>
          </div>
          <div class="project-info">
            <div class="project-tags">
              <span class="ptag">PHP</span>
              <span class="ptag">MySQL</span>
              <span class="ptag">Tailwind</span>
            </div>
            <h3 class="project-name">Stok Produk Management</h3>
            <p class="project-desc">An inventory management system for tracking product stock with real-time updates and low-stock alerts.</p>
            <a href="#" class="project-btn">View Project <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
          </div>
        </div>

        <div class="project-card">
          <div class="project-img project-img-3">
            <div class="project-img-overlay">
              <img src="{{ asset('images/project3.png') }}" alt="Sistem Kasir POS" style="width:100%;height:100%;object-fit:cover;" />
            </div>
          </div>
          <div class="project-info">
            <div class="project-tags">
              <span class="ptag">Laravel</span>
              <span class="ptag">JavaScript</span>
            </div>
            <h3 class="project-name">Sistem Kasir (POS)</h3>
            <p class="project-desc">A point-of-sale cashier system with cart management, customer selection, and seamless checkout flow.</p>
            <a href="#" class="project-btn">View Project <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ── CONTACT ── -->
  <section class="section contact-section" id="contact">
    <div class="noise"></div>
    <div class="contact-inner">
      <p class="section-eyebrow center">Get in touch</p>
      <h2 class="section-heading center">
        <span class="heading-white">Contact</span> <span class="heading-dim">Me!</span>
      </h2>
      <p class="section-sub center">Have a project or want to collaborate? I'd love to hear from you.</p>

      <div class="contact-layout">
        <div class="contact-info-col">
          <div class="contact-info-card">
            <h3 class="contact-info-title">Let's talk</h3>
            <p class="contact-info-sub">I'm currently open for freelance projects and internship opportunities. Don't hesitate to reach out!</p>
            <div class="contact-details">
              <div class="contact-detail-item">
                <div class="cd-icon">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><polyline points="22,4 12,13 2,4"/></svg>
                </div>
                <div>
                  <p class="cd-label">Email</p>
                  <p class="cd-value">aksel.inesta.s@gmail.com</p>
                </div>
              </div>
              <div class="contact-detail-item">
                <div class="cd-icon">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                </div>
                <div>
                  <p class="cd-label">WhatsApp</p>
                  <p class="cd-value">+62 813-8749-3537</p>
                </div>
              </div>
              <div class="contact-detail-item">
                <div class="cd-icon">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <div>
                  <p class="cd-label">Location</p>
                  <p class="cd-value">Indonesia</p>
                </div>
              </div>
            </div>
            <div class="contact-socials">
              <a href="https://instagram.com/ac4lli" target="_blank" class="social-btn sm" aria-label="Instagram">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
              </a>
              <a href="https://github.com" target="_blank" class="social-btn sm" aria-label="GitHub">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>
              </a>
              <a href="https://wa.me/6281387493537" target="_blank" class="social-btn sm" aria-label="WhatsApp">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form-col">
          <form class="contact-form" id="contactForm">
            @csrf
            <div class="form-row">
              <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" placeholder="Aksel Inesta" required />
              </div>
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="hello@email.com" required />
              </div>
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" id="subject" name="subject" placeholder="Project Collaboration" required />
            </div>
            <div class="form-group">
              <label for="message">Your Message</label>
              <textarea id="message" name="message" placeholder="Tell me about your project..." rows="6" required></textarea>
            </div>
            <button type="submit" class="btn-primary full">
              Send Message
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- ── FOOTER ── -->
  <footer class="footer">
    <div class="footer-inner">
      <p class="footer-logo">Portofolio</p>
      <p class="footer-copy">© 2025 Aksel Inesta Saleh. Built with Laravel & passion.</p>
      <div class="footer-links">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#service">Service</a>
        <a href="#project">Project</a>
        <a href="#contact">Contact</a>
      </div>
    </div>
  </footer>

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>