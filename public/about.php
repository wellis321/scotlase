<?php
$pageTitle = 'About Us';
require_once __DIR__ . '/../includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <h1 class="scroll-reveal">About Scotlase Solutions</h1>
        <p class="lead scroll-reveal">Laser cleaning specialists for marine, commercial and social applications across Scotland and the UK</p>
    </div>
</section>

<section class="about-content">
    <div class="container">
        <div class="content-block about-intro scroll-reveal">
            <div class="about-intro-grid">
                <div class="about-intro-text">
                    <h2>Our company</h2>
                    <p>Scotlase Solutions is a laser cleaning company using specialised fibre laser equipment to deliver high-quality surface treatment services. Our mission is to provide customers with precision cleaning—removing rust, paint, graffiti, and coatings—while preserving the base material and minimising environmental impact.</p>
                    <p>Based in Scotland, we serve clients across the marine, commercial, and social sectors. Whether you need rust removed from a boat hull, stone cleaned on a building facade, or graffiti removed from public spaces, our laser ablation technology delivers results without the mess, chemicals, or damage of traditional methods.</p>
                </div>
                <div class="about-intro-image">
                    <img src="/images/cleaning-building.png" alt="Laser cleaning in action - commercial building facade">
                </div>
            </div>
        </div>

        <div class="content-block equipment-section scroll-reveal">
            <div class="equipment-layout">
                <div class="equipment-image equipment-image-left">
                    <img src="/images/laser-cleaner-1.png" alt="Hantencnc pulse laser cleaner - 1000W–2000W">
                </div>
                <div class="equipment-content">
                    <h2>Our equipment</h2>
                    <p>We use brand-new industrial fibre laser machines from <a href="https://hantencnc.com/" target="_blank" rel="noopener">Hantencnc</a>:</p>
                    <ul>
                        <li><strong>2 × 2000W</strong> machines for versatile, high-precision cleaning—ideal for boats, delicate surfaces, and detailed work</li>
                        <li><strong>1 × 6000W</strong> machine for heavy-duty industrial applications—stone facades, large metal structures, and high-throughput jobs</li>
                    </ul>
                    <p>Laser ablation is a non-abrasive, environmentally friendly process that removes contaminants with minimal interference to the base material. Unlike sandblasting or chemical stripping, there's no dust, no runoff, and no damage to the substrate—ideal for metal, stone, composites, and more.</p>
                </div>
                <div class="equipment-image equipment-image-right">
                    <img src="/images/laser-cleaner-2.png" alt="Hantencnc pulse laser cleaner">
                </div>
            </div>
            <div class="equipment-image equipment-image-bottom">
                <img src="/images/laser-ablation.png" alt="Laser ablation in action - rust removal">
            </div>
        </div>

        <div class="content-block scroll-reveal">
            <h2>Why laser cleaning?</h2>
            <div class="advantages-grid">
            <div class="advantage scroll-reveal" data-delay="0">
                <h4>Non-intrusive</h4>
                    <p>No mechanical abrasion or chemical impact. The base material stays intact.</p>
                </div>
            <div class="advantage scroll-reveal" data-delay="1">
                <h4>Ecological</h4>
                    <p>No harmful substances, dust, or waste. Safe for people and the environment.</p>
                </div>
            <div class="advantage scroll-reveal" data-delay="2">
                <h4>Precise</h4>
                    <p>Selective removal of coatings. Perfect for heritage, marine, and sensitive surfaces.</p>
                </div>
            </div>
        </div>

        <div class="content-block scroll-reveal">
            <h2>Markets we serve</h2>
            <div class="markets-grid">
            <div class="market-card scroll-reveal" data-delay="0">
                <h3>Marine</h3>
                    <p>Rust removal on boats, hulls, and maritime structures. Clean metal ready for coating, welding, or antifouling—without grinding or chemicals.</p>
                </div>
            <div class="market-card scroll-reveal" data-delay="1">
                <h3>Commercial</h3>
                    <p>Industrial rust removal and stone cleaning for commercial premises, facades, and infrastructure. Factories, warehouses, and building exteriors.</p>
                </div>
            <div class="market-card scroll-reveal" data-delay="2">
                <h3>Social</h3>
                    <p>Graffiti removal, surface restoration, and maintenance for public spaces, councils, and heritage sites.</p>
                </div>
            </div>
        </div>

        <div class="content-block cta-block scroll-reveal">
            <a href="/contact.php" class="btn btn-primary">Get in touch</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
