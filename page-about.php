<?php
/**
 * Template Name: About Page
 **/

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
the_post();
?>

<div class="container-fluid" id="content" tabindex="-1">
  <div class="row">
    <header class="jumbotron col-md-12 text-center">
      <h1>Xavier Bustamante Talavera — <em>bustawin</em></h1>
      <br>
      <img src="<?php print get_stylesheet_directory_uri() . '/img/bustawin.jpg' ?>"
           alt="bustawin"
           class="rounded-circle border"
           id="bustawin-about">
    </header>
  </div>
</div><!-- #content -->
<div class="container" id="bustawin-about-content">
  <div class="row">
    <div class="col-md-12">
      <p class="lead">
        I am a Software Engineer specialized in project/product management and disruptive
        technologies (e.g., iOT).
      </p>
      <p>I co-founded and served as Chief Product Officer (CPO) of DeviceTag.io, a social startup
        that provides solutions for reusing devices using breakthrough technologies, and
        eReuse.org, a federation that promotes circular economy in the reuse sector. They received
        several funding from the governments of the EU, Spain, Catalonia, and Barcelona; and they
        were accelerated by Ship2B and CivicHub.
      </p>
      <p>
        I am an entrepreneur who enjoys doing projects that help shape a better world, teaching to
        diverse collectives about software, writing in my tech blog (bustawin.com), and developing
        free software.
      </p>
      <hr>
      <article>
        <header>
          <h3 id="projects">
            Projects
            <small class="text-muted">
              — Open-source projects I created.
            </small>
          </h3>
        </header>
        <dl>
          <dt><a href="https://github.com/eReuse/workbench/tree/teal">Workbench</a></dt>
          <dd>Software that creates a hardware report of your computer with components, serial
            numbers, testing, benchmarking, erasing, and installing an OS.
          </dd>
          <dt><a href="https://github.com/eReuse/devicehub-teal/tree/beta">Devicehub</a></dt>
          <dd>A distributed IT Asset Management System focused in reusing devices.</dd>
        </dl>
      </article>
      <hr>
      <article>
        <header>
          <h3 id="talks">
            Talks
          </h3>
        </header>
        <dl>
          <dt><a href="https://twitter.com/adrianafreitas/status/1141738244561874945">ereuse.org
              presentation in ESADE</a></dt>
          <dd>
            Ereuse.org / DeviceTag.io presentation in ESADE as part of the Ship2B acceleration program.
          </dd>
          <dt><a href="https://www.youtube.com/embed/n522VLSXujk?t=586">ereuse.org presentation in
              Ledger event</a></dt>
          <dd>
            Ereuse.org / DeviceTag.io presentation part of the Ledger EU program.
          </dd>
        </dl>
      </article>
      <hr>
      <article>
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="https://twitter.com/bustawin">
              <i class="fa fa-twitter fa-lg"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://linkedin.com/in/bustawin/">
              <i class="fa fa-linkedin fa-lg"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/bustawin/">
              <i class="fa fa-github fa-lg"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mailto:hello@bustawin.com">
              <i class="fa fa-envelope fa-lg"></i>
            </a>
          </li>
        </ul>
      </article>
      <hr>
      <article>
        <header>
          <h3>About this site</h3>
        </header>
        <p>
          This site is a collection of personal notes and tricks about software and programming.
          I started it alone, but a friend already contributed with a post —
          <em>thank you Dani!</em>
        </p>
        <p>
          <a href="https://github.com/bustawin/bustawin-wp-theme">Get here</a>
          the theme of this website.
        </p>
        <p class="text-center">
          <img src="<?php print get_stylesheet_directory_uri() . '/img/timmy-walk.gif' ?>">
          <br>
          <small>
            <em>Btw</em>, this little friend is Timmy, and it was drawn by a dearest friend,
            Nataly.
          </small>
        </p>
      </article>
    </div>
  </div>
</div>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<?php get_footer(); ?>
