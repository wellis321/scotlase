<?php
$pageTitle = 'Home';
require_once __DIR__ . '/../includes/header.php';
?>

<section class="hero">
    <div class="hero-bg" style="background-image: url('images/facades.png');"></div>
    <div class="hero-content">
        <p class="hero-tagline hero-anim">Trusted laser cleaning partner</p>
        <h1 class="hero-anim hero-anim-2">Laser cleaning for marine, commercial & social applications</h1>
        <p class="hero-sub hero-anim hero-anim-3">We deliver precision surface treatment using advanced fibre laser technology—rust removal, stone cleaning, graffiti removal, and more—engineered for quality and efficiency.</p>
        <a href="services.php" class="btn btn-primary hero-anim hero-anim-4">Explore our services</a>
    </div>
</section>

<section class="about-preview" id="about">
    <div class="container">
        <div class="section-header scroll-reveal">
            <span class="section-label">Who we are</span>
            <h2>Driven by technology, backed by experience</h2>
        </div>
        <div class="stats-row">
            <div class="stat scroll-reveal" data-delay="0">
                <span class="stat-value">3</span>
                <p>Industrial fibre laser machines</p>
            </div>
            <div class="stat scroll-reveal" data-delay="1">
                <span class="stat-value">6000W</span>
                <p>Maximum power capacity</p>
            </div>
            <div class="stat scroll-reveal" data-delay="2">
                <span class="stat-value">3</span>
                <p>Target markets served</p>
            </div>
        </div>
        <p class="about-text scroll-reveal">Scotlase Solutions specialises in laser ablation cleaning—a non-abrasive, environmentally friendly process that removes rust, paint, graffiti, and coatings while preserving the base material. Our brand-new Hantencnc equipment delivers consistent, high-quality results for marine, commercial, and social applications.</p>
        <div class="about-preview-cta scroll-reveal">
            <a href="about.php" class="btn btn-secondary">Learn more about us</a>
        </div>
    </div>
</section>

<section class="services-preview">
    <div class="container">
        <div class="section-header scroll-reveal">
            <span class="section-label">What we do</span>
            <h2>Scalable capabilities for every challenge</h2>
        </div>
        <div class="services-grid">
            <a href="services.php#marine" class="service-card scroll-reveal" data-delay="0">
                <div class="service-image">
                    <img src="https://images.pexels.com/photos/21700771/pexels-photo-21700771.jpeg?auto=compress&cs=tinysrgb&w=600&fit=crop" alt="Marine laser cleaning - rusty boat hull">
                </div>
                <h3>Marine</h3>
                <p>Rust removal on boats and metal structures, leaving clean metal ready for coating.</p>
            </a>
            <a href="services.php#commercial" class="service-card scroll-reveal" data-delay="1">
                <div class="service-image">
                    <img src="images/laser-ablation.png" alt="Commercial industrial cleaning - laser ablation">
                </div>
                <h3>Commercial</h3>
                <p>Industrial rust removal and stone cleaning for commercial premises.</p>
            </a>
            <a href="services.php#social" class="service-card scroll-reveal" data-delay="2">
                <div class="service-image">
                    <img src="images/graffiti-cleaning.png" alt="Social - graffiti removal and surface restoration">
                </div>
                <h3>Social</h3>
                <p>Graffiti removal and surface restoration for public spaces.</p>
            </a>
        </div>
        <div class="section-cta scroll-reveal">
            <a href="services.php" class="btn btn-primary">Explore all capabilities</a>
        </div>
    </div>
</section>

<section class="advantages">
    <div class="container">
        <div class="section-header scroll-reveal">
            <span class="section-label">Technology</span>
            <h2>Advantages of laser surface treatment</h2>
        </div>
        <div class="advantages-grid">
            <div class="advantage scroll-reveal" data-delay="0">
                <h4>Non-intrusive</h4>
                <p>No mechanical or chemical impact on the cleaned surface.</p>
            </div>
            <div class="advantage scroll-reveal" data-delay="1">
                <h4>Versatile</h4>
                <p>Laser for removing rust, cleaning metal, composites, stone, and more.</p>
            </div>
            <div class="advantage scroll-reveal" data-delay="2">
                <h4>Selective</h4>
                <p>Selective removal of individual layers from a given surface.</p>
            </div>
            <div class="advantage scroll-reveal" data-delay="3">
                <h4>Ecological</h4>
                <p>Eliminates the generation of harmful substances.</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2 class="scroll-reveal">Ready to start your next project?</h2>
        <a href="contact.php" class="btn btn-primary scroll-reveal" data-delay="0">Get in touch</a>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
