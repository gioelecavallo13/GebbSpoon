<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <title>{{ config('app.name') }} | Blog</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="{{ asset('css/blog.css') }}"/>
</head>
<body>
  <!-- HEADER (stesso della home) -->
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
    <!-- TITOLO PAGINA -->
    <section class="page-hero">
      <div class="container page-hero-inner">
        <h1>BLOG</h1>
      </div>
    </section>

    <!-- LISTA ARTICOLI -->
    <section class="blog-list">
      <div class="container">

        <article class="blog-item">
          <div class="blog-thumb thumb-wood"></div>
          <div class="blog-content">
            <h2>Exploring Rustic Wood Textures</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </article>

        <article class="blog-item">
          <div class="blog-thumb thumb-camera"></div>
          <div class="blog-content">
            <h2>Collecting Classic Cameras</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </article>

        <article class="blog-item">
          <div class="blog-thumb thumb-chair"></div>
          <div class="blog-content">
            <h2>Timeless Fashion Tips</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </article>

        <article class="blog-item">
          <div class="blog-thumb thumb-book"></div>
          <div class="blog-content">
            <h2>Discovering Antique Treasures</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </article>

        <article class="blog-item">
          <div class="blog-thumb thumb-vinyl"></div>
          <div class="blog-content">
            <h2>Nostalgic Music Collections</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </article>

        <div class="blog-pagination">
          <a href="#" class="pagination-link">Previous</a>
          <!-- in futuro puoi aggiungere Next, numeri pagina, ecc. -->
        </div>

      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container">
      <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
