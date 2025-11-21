<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <title>{{ config('app.name') }} | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Font opzionali (puoi toglierle se non ti servono) -->
  <link rel="stylesheet" href="{{ asset('css/home.css') }}"/>

</head>
<body>
  <!-- HEADER -->
  <header class="site-header">
    <div class="container header-inner">
      <div class="site-title">{{ config('app.name') }}</div>
      <nav class="main-nav">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('blog') }}">Blog</a>
        <a href="{{ route('contact') }}">Contact</a>
      </nav>
    </div>
  </header>

  <main>
    <!-- HERO / INTRO -->
    <section class="hero">
      <div class="container hero-inner">
        <h1>WELCOME TO MY BLOG</h1>
        <p class="hero-text">
          A cozy corner of the internet where I share my love for all things vintage.
          Join me on a journey through the past!
        </p>
      </div>
    </section>

    <!-- FEATURED POST -->
    <section class="featured">
      <div class="container featured-inner">
        <!-- Qui puoi mettere una vera immagine al posto del div -->
        <div class="featured-image" aria-hidden="true"></div>

        <article class="featured-content">
          <p class="featured-label">FEATURED POST</p>
          <h2>Exploring Rustic Wood Textures</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor.
          </p>
        </article>
      </div>
    </section>

    <!-- LATEST POSTS -->
    <section class="latest">
      <div class="container">
        <div class="section-heading">
          <h2>LATEST POSTS</h2>
          <span class="section-line"></span>
        </div>

        <div class="posts-grid">
          <article class="post-card">
            <div class="post-thumb thumb-1" aria-hidden="true"></div>
            <h3>The Charm of Vintage Decor</h3>
            <p>Lorem ipsum dolor sit amet, consectetur…</p>
          </article>

          <article class="post-card">
            <div class="post-thumb thumb-2" aria-hidden="true"></div>
            <h3>Collecting Classic Cameras</h3>
            <p>Lorem ipsum elit sit amet, consectetur…</p>
          </article>

          <article class="post-card">
            <div class="post-thumb thumb-3" aria-hidden="true"></div>
            <h3>Timeless Fashion Tips</h3>
            <p>Lorem ipsum dolor sit amet, consectetur…</p>
          </article>
        </div>
      </div>
    </section>

    <!-- NEWSLETTER -->
    <section class="newsletter">
      <div class="container newsletter-inner">
        <div class="newsletter-copy">
          <h2>Subscribe to My Newsletter</h2>
          <p>Sign up to receive updates and more.</p>
        </div>

        <form class="newsletter-form">
          <input
            type="email"
            name="email"
            placeholder="Email address"
            required
          />
          <button type="submit">Subscribe</button>
        </form>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container">
      <p>&copy; 2025 Vintage Blog. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>