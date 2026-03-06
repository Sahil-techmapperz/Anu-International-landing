<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- ============================================================
     TOP BAR
     ============================================================ -->
<div class="topbar">
    <div class="topbar__inner">
        <div class="topbar__left">
            <span class="badge">ISO 9001 : 2008</span>
            <span class="iso-label">Certified Company</span>
        </div>
        <div class="topbar__right">
            <a href="tel:+919891273636">
                <!-- Phone icon -->
                <svg class="icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 011 1V20a1 1 0 01-1 1C10.14 21 3 13.86 3 5a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.46.57 3.58a1 1 0 01-.25 1.01l-2.2 2.2z" />
                </svg>
                +91-9891273636
            </a>
            <a href="mailto:anuinternational27@gmail.com" class="email-link">
                <!-- Mail icon -->
                <svg class="icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                </svg>
                anuinternational27@gmail.com
            </a>
        </div>
    </div>
</div>

<!-- ============================================================
     NAVBAR
     ============================================================ -->
<nav class="navbar" id="navbar">
    <div class="navbar__inner">

        <!-- Logo -->
        <a href="<?= base_url('/') ?>" class="navbar__logo" aria-label="Anu International Home">
            <img src="<?= base_url('images/logo.png') ?>" alt="Anu International" class="navbar__logo-img">
        </a>

        <!-- Hamburger -->
        <button class="navbar__toggle" id="navToggle" aria-label="Toggle navigation" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- Nav Links Wrapper -->
        <div class="navbar__menu-wrap" id="navMenuWrap">
            <ul class="navbar__menu">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#industries">Industries</a></li>
                <li><a href="#specialized">Specialized Offering</a></li>
                <li><a href="#partners">Partners</a></li>
            </ul>
        </div>

        <!-- CTA -->
        <a href="#contact" class="btn-contact" aria-label="Contact Us">
            Contact Us
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M7 17L17 7M7 7h10v10" />
            </svg>
        </a>

    </div>
</nav>

<!-- ============================================================
     HERO SECTION
     ============================================================ -->
<section class="hero" id="home" aria-labelledby="hero-heading">
    <div class="hero__bg">
        <div class="skeleton-hero-bg" id="heroBgSkeleton"></div>
        <img
            src="<?= base_url('images/hero-warehouse.jpg') ?>"
            alt="Warehouse packaging conveyor belt"
            id="heroBgImg"
            style="opacity:0; transition: opacity 0.6s ease;"
            onload="
        this.style.opacity='1';
        document.getElementById('heroBgSkeleton').style.display='none';
      " />
    </div>

    <!-- Overlay -->
    <div class="hero__overlay"></div>
    <div class="hero__accent-line"></div>

    <!-- Content -->
    <div class="hero__content">
        <div class="hero__eyebrow">Anu International</div>

        <h1 class="hero__title" id="hero-heading">
            Anu International instead of<br>
            <span>Smart Packaging Solution</span>
        </h1>

        <a href="#about" class="btn-knowmore" aria-label="Know more about Anu International">
            Know More
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
        </a>
    </div>

    <!-- Scroll Indicator -->
    <div class="hero__scroll" aria-hidden="true">
        <div class="hero__scroll-dot"></div>
        <span>Scroll</span>
    </div>

</section>

<!-- ============================================================
     ABOUT US SECTION
     ============================================================ -->
<section class="about" id="about" aria-labelledby="about-heading">
    <div class="about__inner">

        <!-- Left: Text -->
        <div class="about__text">
            <h2 class="about__heading" id="about-heading">
                <span class="bold">ABOUT</span>
                <span class="light">US</span>
            </h2>

            <div class="about__body">
                <p>Anu International is a leading India-based manufacturer and global exporter of high-performance industrial packaging materials, delivering reliable and cost-effective protective packaging solutions to clients worldwide.</p>

                <p>With a strong commitment to quality and innovation, we manufacture a comprehensive range of packaging products including Corrugated boxes, polethyene bags, bubble-wraps, Vsi Bags, Stripping Machines, Stripping Wires, Labels Protective Packaging Materials designed to ensure maximum product safety during storage and international transportation.</p>

                <p>Backed by advanced manufacturing infrastructure and modern production technology, our facility operates under strict quality control systems to meet international packaging standards.</p>

                <p>We understand the critical importance of packaging in global supply chains. Therefore, our products are engineered to provide superior cushioning, moisture resistance, impact protection, and durability to minimize transit damage during long-distance shipments.</p>

                <p>Our mission is to support global businesses with dependable packaging materials that protect product integrity, reduce logistics losses, and enhance customer satisfaction across international markets.</p>

                <p>With a growing footprint in overseas markets, Anu International continues to build long-term global partnerships by delivering packaging solutions tailored to meet evolving export packaging requirements.</p>
            </div>
        </div>

        <!-- Right: Image -->
        <div class="about__media">
            <div class="about__img-wrap">
                <!-- Skeleton shimmer while image loads -->
                <div class="about__img-skeleton" id="aboutImgSkeleton"></div>
                <img
                    src="<?= base_url('images/about-factory.jpg') ?>"
                    alt="Anu International manufacturing facility"
                    style="opacity:0; transition: opacity 0.6s ease; aspect-ratio:1/1;"
                    onload="
                        this.style.opacity='1';
                        document.getElementById('aboutImgSkeleton').style.display='none';
                    " />
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     INDUSTRIES SECTION
     ============================================================ -->
<section class="industries" id="industries" aria-labelledby="ind-heading">

    <!-- Header with Ribbon -->
    <div class="industries__header">
        <div class="title-ribbon">
            <div class="title-ribbon-inner">
                <h2 id="ind-heading">Industries We Serve</h2>
            </div>
        </div>
        <div class="industries__desc">
            <p>We specialise in designing, manufacturing & sourcing high-performance, precision components and assemblies across industry segments.</p>
        </div>
    </div>

    <!-- Cards Layout -->
    <div class="industries__grid">

        <!-- Top Row: 4 Cards -->
        <div class="ind-row ind-row-top">

            <!-- Card 1 -->
            <div class="ind-card" tabindex="0">
                <div class="ind-card__bg">
                    <div class="skeleton-card"></div>
                    <img src="<?= base_url('images/ind_pharma.png') ?>" alt="Pharmaceuticals" style="opacity:0; transition: opacity 0.6s ease;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';" />
                </div>
                <div class="ind-card__overlay"></div>
                <div class="ind-card__content">
                    <h3 class="ind-card__title">Pharmaceuticals</h3>
                    <p class="ind-card__text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="ind-card" tabindex="0">
                <div class="ind-card__bg">
                    <div class="skeleton-card"></div>
                    <img src="<?= base_url('images/ind_food.png') ?>" alt="Food & Beverages" style="opacity:0; transition: opacity 0.6s ease;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';" />
                </div>
                <div class="ind-card__overlay"></div>
                <div class="ind-card__content">
                    <h3 class="ind-card__title">Food & Beverages</h3>
                    <p class="ind-card__text">Precision packaging ensuring safety, freshness, and compliance for the food and beverage sector.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="ind-card" tabindex="0">
                <div class="ind-card__bg">
                    <div class="skeleton-card"></div>
                    <img src="<?= base_url('images/ind_electronics.png') ?>" alt="Electronics Goods" style="opacity:0; transition: opacity 0.6s ease;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';" />
                </div>
                <div class="ind-card__overlay"></div>
                <div class="ind-card__content">
                    <h3 class="ind-card__title">Electronics Goods</h3>
                    <p class="ind-card__text">Anti-static, secure, and durable packaging solutions protecting sensitive electronic components.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="ind-card" tabindex="0">
                <div class="ind-card__bg">
                    <div class="skeleton-card"></div>
                    <img src="<?= base_url('images/ind_auto.png') ?>" alt="Auto Components" style="opacity:0; transition: opacity 0.6s ease;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';" />
                </div>
                <div class="ind-card__overlay"></div>
                <div class="ind-card__content">
                    <h3 class="ind-card__title">Auto Components</h3>
                    <p class="ind-card__text">Heavy-duty industrial corrugated solutions engineered for weight-bearing automotive parts.</p>
                </div>
            </div>

        </div>

        <!-- Bottom Row: 3 Cards -->
        <div class="ind-row ind-row-bottom">

            <!-- Card 5 -->
            <div class="ind-card" tabindex="0">
                <div class="ind-card__bg">
                    <div class="skeleton-card"></div>
                    <img src="<?= base_url('images/ind_ecommerce.png') ?>" alt="E-Commerce" style="opacity:0; transition: opacity 0.6s ease;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';" />
                </div>
                <div class="ind-card__overlay"></div>
                <div class="ind-card__content">
                    <h3 class="ind-card__title">E-Commerce</h3>
                    <p class="ind-card__text">Optimized, lightweight, and resilient packaging designed for the rapid logistics of e-commerce delivery.</p>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="ind-card" tabindex="0">
                <div class="ind-card__bg">
                    <div class="skeleton-card"></div>
                    <img src="<?= base_url('images/ind_garments.png') ?>" alt="Garments & Apparels" style="opacity:0; transition: opacity 0.6s ease;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';" />
                </div>
                <div class="ind-card__overlay"></div>
                <div class="ind-card__content">
                    <h3 class="ind-card__title">Garments & Apparels</h3>
                    <p class="ind-card__text">Moisture-resistant poly covers and secure bags keeping textiles pristine shipped globally.</p>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="ind-card" tabindex="0">
                <div class="ind-card__bg">
                    <div class="skeleton-card"></div>
                    <img src="<?= base_url('images/ind_homecare.png') ?>" alt="Homecare & Consumer Goods" style="opacity:0; transition: opacity 0.6s ease;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';" />
                </div>
                <div class="ind-card__overlay"></div>
                <div class="ind-card__content">
                    <h3 class="ind-card__title">Homecare & Consumer Goods</h3>
                    <p class="ind-card__text">Versatile retail-ready packaging that ensures brand visibility while protecting fast-moving consumer goods.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ============================================================
     SPECIALIZED OFFERING SECTION
     ============================================================ -->
<section class="specialized" id="specialized">
    <div class="specialized__header">
        <h2>Specialized Offering</h2>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
    </div>

    <div class="spec-grid">
        <!-- ROW 1: 4 normal items -->

        <!-- Item 1: Pouches (with label) -->
        <div class="spec-item">
            <div class="skeleton-spec"></div>
            <img src="<?= base_url('images/spec_pouches.png') ?>" alt="Pouches" style="opacity:0;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';">
            <div class="spec-item__label">Pouches</div>
        </div>

        <!-- Item 2: Clear Bags -->
        <div class="spec-item">
            <div class="skeleton-spec"></div>
            <img src="<?= base_url('images/spec_clearbags.png') ?>" alt="Clear Bags" style="opacity:0;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';">
            <div class="spec-item__label">Clear Bags</div>
        </div>

        <!-- Item 3: Strapping Roll -->
        <div class="spec-item">
            <div class="skeleton-spec"></div>
            <img src="<?= base_url('images/spec_strapping.png') ?>" alt="Strapping Roll" style="opacity:0;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';">
            <div class="spec-item__label">Strapping Roll</div>
        </div>

        <!-- Item 4: Blue Foam Roll -->
        <div class="spec-item">
            <div class="skeleton-spec"></div>
            <img src="<?= base_url('images/spec_foam.png') ?>" alt="Foam Roll" style="opacity:0;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';">
            <div class="spec-item__label">Foam Roll</div>
        </div>

        <!-- ROW 2: 4 normal items -->

        <!-- Item 5: Cardboard Boxes -->
        <div class="spec-item">
            <div class="skeleton-spec"></div>
            <img src="<?= base_url('images/spec_boxes.png') ?>" alt="Cardboard Boxes" style="opacity:0;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';">
            <div class="spec-item__label">Cardboard Boxes</div>
        </div>

        <!-- Item 6: Gift Box -->
        <div class="spec-item">
            <div class="skeleton-spec"></div>
            <img src="<?= base_url('images/spec_giftbox.png') ?>" alt="Gift Box" style="opacity:0;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';">
            <div class="spec-item__label">Gift Box</div>
        </div>

        <!-- Item 7: Colorful Bags -->
        <div class="spec-item">
            <div class="skeleton-spec"></div>
            <img src="<?= base_url('images/spec_colorbags.png') ?>" alt="Colorful Bags" style="opacity:0;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';">
            <div class="spec-item__label">Colorful Bags</div>
        </div>

        <!-- Item 8: Jute Bags -->
        <div class="spec-item">
            <div class="skeleton-spec"></div>
            <img src="<?= base_url('images/spec_jutebag.png') ?>" alt="Jute Bags" style="opacity:0;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';">
            <div class="spec-item__label">Jute Bags</div>
        </div>

        <!-- ROW 3: Workshop | Tape | Workers (wide) -->

        <!-- Item 9: Workshop / Industrial tubes -->
        <div class="spec-item">
            <div class="skeleton-spec"></div>
            <img src="<?= base_url('images/spec_workshop.png') ?>" alt="Workshop Packaging" style="opacity:0;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';">
            <div class="spec-item__label">Industrial Packaging</div>
        </div>

        <!-- Item 10: Tape Rolls -->
        <div class="spec-item">
            <div class="skeleton-spec"></div>
            <img src="<?= base_url('images/spec_tape.png') ?>" alt="Tape Rolls" style="opacity:0;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';">
            <div class="spec-item__label">Tape Rolls</div>
        </div>

        <!-- Item 11: Factory Workers (WIDE — spans 2 columns) -->
        <div class="spec-item spec-wide">
            <div class="skeleton-spec"></div>
            <img src="<?= base_url('images/spec_workers.png') ?>" alt="Factory Workers" style="opacity:0;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';">
            <div class="spec-item__label">Factory Workers</div>
        </div>

        <!-- ROW 4: Bubble Wrap (wide) | Label Roll | Silica Gel -->

        <!-- Item 12: Bubble Wrap (WIDE — spans 2 columns) -->
        <div class="spec-item spec-wide">
            <div class="skeleton-spec"></div>
            <img src="<?= base_url('images/spec_bubblewrap.png') ?>" alt="Bubble Wrap Packing" style="opacity:0;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';">
            <div class="spec-item__label">Bubble Wrap</div>
        </div>

        <!-- Item 13: Label Roll -->
        <div class="spec-item">
            <div class="skeleton-spec"></div>
            <img src="<?= base_url('images/spec_labelroll.png') ?>" alt="Label Roll" style="opacity:0;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';">
            <div class="spec-item__label">Label Roll</div>
        </div>

        <!-- Item 14: Silica Gel -->
        <div class="spec-item">
            <div class="skeleton-spec"></div>
            <img src="<?= base_url('images/spec_silica.png') ?>" alt="Silica Gel" style="opacity:0;" onload="this.style.opacity='1'; this.previousElementSibling.style.display='none';">
            <div class="spec-item__label">Silica Gel</div>
        </div>
    </div>
</section>

<!-- ============================================================
     WHY CHOOSE US SECTION
     ============================================================ -->
<section class="why" id="why-choose-us">

    <!-- TOP: two-column layout -->
    <div class="why__top">

        <!-- Left: text -->
        <div class="why__text">
            <span class="why__eyebrow">Anu International</span>
            <h2 class="why__heading">Why Choose Us ?</h2>
            <ul class="why__list">
                <li>State-of-the-art Manufacturing.</li>
                <li>Custom Design-to-Delivery Services.</li>
                <li>In house testing &amp; QC.</li>
                <li>High Speed Turnaround.</li>
                <li>Export Capability.</li>
                <li>Competitive Pricing.</li>
                <li>Experienced Teams.</li>
            </ul>
        </div>

        <!-- Right: machine image -->
        <div class="why__img-wrap">
            <img
                src="<?= base_url('images/why_machine.png') ?>"
                alt="Anu International manufacturing machine"
                style="opacity:0; transition: opacity 0.6s ease;"
                onload="this.style.opacity='1';">
        </div>
    </div>

    <!-- BOTTOM: full-width worker banner -->
    <div class="why__banner">
        <img
            src="<?= base_url('images/why_worker.png') ?>"
            alt="Factory worker handling packaging material"
            style="opacity:0; transition: opacity 0.6s ease;"
            onload="this.style.opacity='1';">
    </div>

</section>

<!-- ============================================================
     OUR PARTNERS SECTION
     ============================================================ -->
<section class="partners" id="partners">
    <div class="partners__header">
        <h2>Our Partners</h2>
    </div>
    <div class="partners__track-wrap">
        <!-- Duplicated list for infinite scroll illusion -->
        <div class="partners__track">
            <div class="partner-logo">Partner 1</div>
            <div class="partner-logo">Partner 2</div>
            <div class="partner-logo">Partner 3</div>
            <div class="partner-logo">Partner 4</div>
            <div class="partner-logo">Partner 5</div>
            <div class="partner-logo">Partner 6</div>
            <div class="partner-logo">Partner 7</div>
            <!-- Duplicated for loop -->
            <div class="partner-logo">Partner 1</div>
            <div class="partner-logo">Partner 2</div>
            <div class="partner-logo">Partner 3</div>
            <div class="partner-logo">Partner 4</div>
            <div class="partner-logo">Partner 5</div>
            <div class="partner-logo">Partner 6</div>
            <div class="partner-logo">Partner 7</div>
        </div>
    </div>
</section>

<!-- ============================================================
     CONTACT US SECTION
     ============================================================ -->
<section class="contact" id="contact">
    <div class="contact__container">
        <!-- Left Side: Information -->
        <div class="contact__info">
            <h2>Get In Touch</h2>
            <p class="contact__desc">
                We'd love to hear from you. Whether you have a question about our packaging solutions, pricing, need a consultation, or anything else, our team is ready to answer all your questions.
            </p>

            <div class="contact__details">
                <div class="contact__item">
                    <div class="contact__icon"><i class="bi bi-geo-alt-fill"></i></div>
                    <div class="contact__text">
                        <strong>Address</strong>
                        <p>388 HSIIDC Kundli Sector-S3 Phase - 3<br>Kundli, Sonipat Haryana, India</p>
                    </div>
                </div>

                <div class="contact__item">
                    <div class="contact__icon"><i class="bi bi-telephone-fill"></i></div>
                    <div class="contact__text">
                        <strong>Phone</strong>
                        <p><a href="tel:+919891273636">+91-9891273636</a></p>
                    </div>
                </div>

                <div class="contact__item">
                    <div class="contact__icon"><i class="bi bi-envelope-fill"></i></div>
                    <div class="contact__text">
                        <strong>Email</strong>
                        <p><a href="mailto:Anuinternational27@gmail.com">Anuinternational27@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side: Form -->
        <div class="contact__form-wrap">
            <h3 class="contact__form-title">Send us a Message</h3>
            <form class="contact__form" id="contactForm" onsubmit="handleContactSubmit(event)">
                <div class="form-group">
                    <input type="text" class="form-control" id="contactName" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="contactEmail" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="contactSubject" name="subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="contactMessage" name="message" rows="5" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="contact__submit-btn" id="contactSubmitBtn">Send Message</button>
            </form>
            <div id="contactFormMessage" class="mt-3 text-center" style="font-weight: 600; font-size: 0.95rem;"></div>
        </div>
    </div>
</section>

<!-- ============================================================
     NEWSLETTER STRIP
     ============================================================ -->
<section class="newsletter">
    <div class="newsletter__inner">
        <p class="newsletter__title">Stay Update with our New letter</p>
        <form class="newsletter__form" id="newsletterForm" onsubmit="handleNewsletterSubmit(event)">
            <input class="newsletter__input" type="email" id="newsletterEmail" name="email" placeholder="Email......" required>
            <button class="newsletter__btn" type="submit">Submit</button>
        </form>
        <div id="newsletterMessage" style="width: 100%; text-align: center; margin-top: 10px; font-weight: 600; font-size: 0.9rem;"></div>
    </div>
</section>

<!-- ============================================================
     FOOTER
     ============================================================ -->
<footer class="site-footer" id="contact">
    <div class="footer__inner">

        <!-- Col 1: Brand -->
        <div class="footer__brand">
            <div class="footer__brand-logo">
                <img src="<?= base_url('images/logo.png') ?>" alt="Anu International Logo" class="footer__logo-img">
            </div>
            <p class="footer__brand-desc">Anu International is a pioneering manufacturer of corrugated boxes based in India, dedicated to delivering sustainable, high-strength, and custom-designed packaging solutions. Our company thrives on the principles of quality, precision, and customer centricity.</p>
        </div>

        <!-- Col 2: Our Services -->
        <div class="footer__col">
            <h4 class="footer__col-title">Our Services</h4>
            <ul class="footer__links">
                <li><a href="#">Pharmaceutical</a></li>
                <li><a href="#">Food &amp; Beverages</a></li>
                <li><a href="#">Electronics Goods</a></li>
                <li><a href="#">Auto Components</a></li>
                <li><a href="#">E-Commerce</a></li>
                <li><a href="#">Garments &amp; Apparels</a></li>
                <li><a href="#">Homecare &amp; Consumer Goods</a></li>
            </ul>
        </div>

        <!-- Col 3: Quick Links -->
        <div class="footer__col">
            <h4 class="footer__col-title">Quick Links</h4>
            <ul class="footer__links">
                <li><a href="#hero">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#industries">Industries</a></li>
                <li><a href="#specialized">Specialized Offering</a></li>
                <li><a href="#partners">Partners</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </div>

        <!-- Col 4: Contact -->
        <div class="footer__col">
            <h4 class="footer__col-title">Our Services</h4>
            <ul class="footer__contact">
                <li>
                    <span class="fc-icon">📞</span>
                    <span>+91-9891273636</span>
                </li>
                <li>
                    <span class="fc-icon">✉️</span>
                    <span>Anuinternational27@gmail.com</span>
                </li>
                <li>
                    <span class="fc-icon">📍</span>
                    <span>388 HSIIDC Kundli Sector-S3 Phase - 3 Kundli, Sonipat Haryana, India</span>
                </li>
            </ul>
        </div>

    </div>

    <!-- Bottom copyright bar -->
    <div class="footer__bar">
        <span>&copy; Copyrights 2026. All Rights Reserved Anu International</span>
        <span>Developed By - <a href="https://techmapperz.com" target="_blank" rel="noopener">Techmapperz</a></span>
    </div>
</footer>

<!-- Newsletter Script -->
<script>
    async function handleNewsletterSubmit(e) {
        e.preventDefault();
        const emailInput = document.getElementById('newsletterEmail');
        const msgDiv = document.getElementById('newsletterMessage');
        const email = emailInput.value;

        msgDiv.textContent = 'Submitting...';
        msgDiv.style.color = 'white';

        try {
            const formData = new FormData();
            formData.append('email', email);

            const response = await fetch('<?= base_url('api/newsletter/subscribe') ?>', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            const result = await response.json();

            if (result.status === 'success') {
                msgDiv.textContent = result.message;
                msgDiv.style.color = '#fff';
                emailInput.value = ''; // clear input
            } else {
                msgDiv.textContent = result.message;
                msgDiv.style.color = '#ffcccc'; // light red error
            }
        } catch (err) {
            msgDiv.textContent = 'A network error occurred. Please try again.';
            msgDiv.style.color = '#ffcccc';
        }
    }

    async function handleContactSubmit(e) {
        e.preventDefault();
        const form = document.getElementById('contactForm');
        const msgDiv = document.getElementById('contactFormMessage');
        const submitBtn = document.getElementById('contactSubmitBtn');
        const originalBtnText = submitBtn.textContent;

        submitBtn.disabled = true;
        submitBtn.textContent = 'Sending...';
        msgDiv.textContent = '';

        try {
            const formData = new FormData(form);

            const response = await fetch('<?= base_url('api/contact/submit') ?>', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            const result = await response.json();

            if (result.success) {
                msgDiv.textContent = result.message;
                msgDiv.style.color = '#198754'; // Bootstrap success green
                form.reset(); // clear form
            } else {
                msgDiv.textContent = result.message;
                msgDiv.style.color = '#dc3545'; // Bootstrap danger red
            }
        } catch (err) {
            msgDiv.textContent = 'A network error occurred. Please try again.';
            msgDiv.style.color = '#dc3545';
        } finally {
            submitBtn.disabled = false;
            submitBtn.textContent = originalBtnText;
        }
    }
</script>

<?= $this->endSection() ?>