<!DOCTYPE html>
<html lang="en">

@include('layout.partials.head')

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  @include('layout.partials.nav')

  <!-- ======= Header ======= -->
  <header id="header">
  @include('layout.partials.header')
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
  @include('layout.partials.hero-section')
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
    @include('layout.partials.about-section')
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
    @include('layout.partials.facts-section')
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
    @include('layout.partials.skills-section')
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
    @include('layout.partials.resume-section')
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="portfolio" class="portfolio section-bg">
    @include('layout.partials.portfolio-section')
    </section> -->
    <!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
    @include('layout.partials.services-section')
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
   <!--  <section id="testimonials" class="testimonials section-bg">
    @include('layout.partials.testimonials-section')
    </section> -->
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    @include('layout.partials.contact-section')
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
  @include('layout.partials.footer')
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  @include('layout.partials.footer-scripts')

</body>

</html>