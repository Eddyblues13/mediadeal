@include("home.header");

<section class="service position-relative overflow-hidden bg-dark py-2">
  <div class="container position-relative py-2">
    <div class="row py-5">
      <div class="bg-dark-zinc text-white text-center">
        <h1 class="fs-4 fw-semibold mb-0">Deal directly with your favorite radio station!</h1>
        <p class="small text-light mb-0">We make DIRECT contact with radio stations.</p>
      </div>
    </div>
    <div class="row d-flex flex-wrap justify-content-center step-row">
       <!-- How it works section -->
  <div class="bg-medium-zinc text-white p-3">
    <h2 class="mb-3 small fw-medium">How it works</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-2 small">
      <div class="col" data-aos="fade-up" data-aos-delay="0">
        <div class="how-it-works-block">
          <div class="d-flex align-items-start">
            <span class="step-number">1.</span>
            <p class="mb-0"><span class="fw-bold">Search & Select</span> your preferred radio station.</p>
          </div>
        </div>
      </div>
      <div class="col" data-aos="fade-up" data-aos-delay="50">
        <div class="how-it-works-block">
          <div class="d-flex align-items-start">
            <span class="step-number">2.</span>
            <p class="mb-0">Click <span class="fw-bold">"View Details"</span> to see ad rates and vital information.</p>
          </div>
        </div>
      </div>
      <div class="col" data-aos="fade-up" data-aos-delay="100">
        <div class="how-it-works-block">
          <div class="d-flex align-items-start">
            <span class="step-number">3.</span>
            <p class="mb-0">Send your Ad details and click <span class="fw-bold">"Send Message"</span> to negotiate discount.</p>
          </div>
        </div>
      </div>
      <div class="col" data-aos="fade-up" data-aos-delay="150">
        <div class="how-it-works-block">
          <div class="d-flex align-items-start">
            <span class="step-number">4.</span>
            <p class="mb-0">Enter agreed amount in <span class="fw-bold">"Make Payment"</span> and complete transaction.</p>
          </div>
        </div>
      </div>
      <div class="col" data-aos="fade-up" data-aos-delay="200">
        <div class="how-it-works-block">
          <div class="d-flex align-items-start">
            <span class="step-number">5.</span>
            <p class="mb-0"><span class="fw-bold">Request compliance</span> to get proof of broadcast.</p>
          </div>
        </div>
      </div>
      <div class="col" data-aos="fade-up" data-aos-delay="250">
        <div class="how-it-works-block">
          <div class="d-flex align-items-start">
            <span class="step-number">6.</span>
            <p class="mb-0"><span class="fw-bold">Request refund</span> if unsatisfied.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
</section>

<section>
  <!-- Main content -->
  <main class="container py-4">
    <!-- Search buttons -->
    
    <div class="row row-cols-1 row-cols-md-3 g-3 mb-4 d-flex justify-content-center">
      <div class="col">
        <div class="search-container p-3">
          <form>
            <div class="input-group">
              <div class="position-relative flex-grow-1">
                <span class="search-icon-position">
                  <i class="bi bi-search"></i>
                </span>
                <input type="search" class="form-control search-input" aria-label="Search">
              </div>
              <button class="btn btn-primary search-button" type="submit">
                Search
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Radio station grid -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 mb-4">
      <div class="col" data-aos="zoom-in" data-aos-delay="0">
        <div class="card radio-card">
          <div class="card-body text-center text-secondary fw-medium">
            Radio 1
          </div>
        </div>
      </div>
      <div class="col" data-aos="zoom-in" data-aos-delay="50">
        <div class="card radio-card">
          <div class="card-body text-center text-secondary fw-medium">
            Radio 2
          </div>
        </div>
      </div>
      <div class="col" data-aos="zoom-in" data-aos-delay="100">
        <div class="card radio-card">
          <div class="card-body text-center text-secondary fw-medium">
            Radio 3
          </div>
        </div>
      </div>
      <div class="col" data-aos="zoom-in" data-aos-delay="150">
        <div class="card radio-card">
          <div class="card-body text-center text-secondary fw-medium">
            Radio 4
          </div>
        </div>
      </div>
      <div class="col" data-aos="zoom-in" data-aos-delay="200">
        <div class="card radio-card">
          <div class="card-body text-center text-secondary fw-medium">
            Radio 5
          </div>
        </div>
      </div>
      <div class="col" data-aos="zoom-in" data-aos-delay="250">
        <div class="card radio-card">
          <div class="card-body text-center text-secondary fw-medium">
            Radio 6
          </div>
        </div>
      </div>
    </div>

    <!-- Load More Button (positioned right after the radio grid) -->
    <div class="load-more-container" data-aos="fade-up">
      <button class="btn load-more-btn btn-primary">Load More</button>
    </div>
</section>

<section class="px-2">
  <!-- Newsletter Section -->
  <div class="container newsletter-section" data-aos="fade-up">
    <div class="row align-items-center">
      <div class="col-md-7 mb-2">
        <h3 class="h5 mb-2">Can't find your favorite Radio?</h3>
        <p class="small mb-0">Subscribe to our newsletter to get updates on our latest news, radio stations, and promotions.</p>
      </div>
      <div class="col-md-5">
        <div class="d-flex gap-2">
          <input type="email" class="form-control email-input" placeholder="Enter your email address">
          <button class="btn btn-subscribe animate-pulse bg-white">Subscribe</button>
        </div>
      </div>
    </div>
  </div>
</section>

@include("home.footer");