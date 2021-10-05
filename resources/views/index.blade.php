<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style>@import "https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css";</style>
        <link rel="stylesheet" href="css/mystyles.scss">
        <title>Home</title>
        <?php
            $randomPhoto = rand(1,11);
        ?>
    </head>
<body>
    <!--Full screen section with background image and navigation bar.-->
    <section class="hero is-fullheight has-bg-img" style="background: url('/img/backgrounds/<?php echo($randomPhoto) ?>.jpg')center center; background-size:cover;">
        <div class="hero-head">
            <header class="navbar">
              <div class="container">
                <div class="navbar-brand">
                  <a class="navbar-item">
                    <img src="/img/logo.png" alt="Logo">
                  </a>
                  <span class="navbar-burger" data-target="navbarMenuHeroC">
                    <span></span>
                    <span></span>
                    <span></span>
                  </span>
                </div>
                <div id="navbarMenuHeroC" class="navbar-menu">
                  <div class="navbar-end">
                    <a class="navbar-item" href="/">
                      Home
                    </a>
                    <a class="navbar-item" href="/articles">
                      Form Testing
                    </a>
                  </div>
                </div>
              </div>
            </header>
        </div>
    </section>

    <section class="section is-medium">
        <div class="container is-max-desktop">
            <div class="notification is-primary">
              This container has a <code>max-width</code> of <code>$desktop - $container-offset</code> on widescreen and fullhd.
            </div>
          </div>
    </section>

    <section class="hero is-fullheight">
        <div class="tile is-ancestor">
            <div class="tile is-vertical is-8">
              <div class="tile">
                <div class="tile is-parent is-vertical">
                  <article class="tile is-child notification is-primary">
                    <p class="title">Vertical...</p>
                    <p class="subtitle">Top tile</p>
                  </article>
                  <article class="tile is-child notification is-warning">
                    <p class="title">...tiles</p>
                    <p class="subtitle">Bottom tile</p>
                  </article>
                </div>
                <div class="tile is-parent">
                  <article class="tile is-child notification is-info">
                    <p class="title">Middle tile</p>
                    <p class="subtitle">With an image</p>
                    <figure class="image is-4by3">
                      <img src="https://bulma.io/images/placeholders/640x480.png">
                    </figure>
                  </article>
                </div>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child notification is-danger">
                  <p class="title">Wide tile</p>
                  <p class="subtitle">Aligned with the right tile</p>
                  <div class="content">
                    <!-- Content -->
                  </div>
                </article>
              </div>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child notification is-success">
                <div class="content">
                  <p class="title">Tall tile</p>
                  <p class="subtitle">With even more content</p>
                  <div class="content">
                    <!-- Content -->
                  </div>
                </div>
              </article>
            </div>
          </div>
    </section>
</body>
</html>
