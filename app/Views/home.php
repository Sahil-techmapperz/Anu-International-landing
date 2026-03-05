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
            <a href="mailto:anuinternational27@gmail.com">
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
            <!-- Skeleton placeholder for logo -->
            <div class="skeleton-logo" id="logo-skeleton" aria-hidden="true"></div>
            <!-- Real logo SVG (hidden until loaded, swap with real img if available) -->
            <div class="navbar__logo-text">
                <span class="name">ANU</span>
                <span class="tagline">International</span>
            </div>
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
                <li><a href="#offerings">Specialized Offering</a></li>
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

<?= $this->endSection() ?>