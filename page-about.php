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
<main>
  <header class="jumbotron text-center position-relative" id="bustawin-header">
    <img src="<?php print get_stylesheet_directory_uri() . '/img/bustawin.jpg' ?>"
         alt="bustawin"
         class="rounded-circle border"
         id="bustawin-about">
    <h1 class="d-inline align-middle">
      Xavier Bustamante Talavera
      <br>
    </h1>
  </header>
  <div class="lead alert alert-warning text-center"
       id="bustawin-lead"
       style="font-family: 'Roboto Slab';">
    A geeky Product Engineer specialized in software development, product management, academic research, and python.
  </div>
  <div class="container my-3">
    <div class="row">
      <div class="col-sm-9">
        <article>
          <header>
            <h2 id="experience">
              Experience
            </h2>
          </header>
          <dl>
            <ul class="list-inline mb-0 text-muted float-right pt-1">
              <li class="list-inline-item">Qustodio Professional
              <li class="list-inline-item">2020 — Present
            </ul>
            <dt class="h5 text-primary">Product Manager & software developer</dt>
            <dd>
              <p>
                Joined the new Qustodio Professional team to bring the success of
                Qustodio, the leading parental control company, to the B2B market
                —spearheading the development of the new product.
              </p>
            </dd>
            <ul class="list-inline mb-0 text-muted float-right pt-1">
              <li class="list-inline-item">DeviceTag.io
              <li class="list-inline-item">2015 — 2019
            </ul>
            <dt class="h5 text-primary">Product Manager & software developer</dt>
            <dd>
              <p>
                Co-founded DeviceTag.io, a social startup that provides solutions for reusing
                devices using breakthrough technologies, managing a team of ~7 people and
                developing the full-stack; secured 0.5M€ in funding from the governments of the
                EU (Horizon 2020), Spain, and Catalonia; and we were accelerated by Ship2B,
                CivicHub, and Ledger.
              </p>
            </dd>
            <ul class="list-inline mb-0 text-muted float-right pt-1">
              <li class="list-inline-item">XSR (Xarxa de Suport a la Reutilització)
              <li class="list-inline-item">2013 — 2015
            </ul>
            <dt class="h5 text-primary">Developer and manager</dt>
            <dd>
              <p>
                Developed and managed XSR, a collaborative platform of the
                Generalitat de Catalunya (CoreTIC).
              </p>
            </dd>
            <ul class="list-inline mb-0 text-muted float-right pt-1">
              <li class="list-inline-item">JEDI (Joves estudiants d'informàtica)
              <li class="list-inline-item">2012 — 2014
            </ul>
            <dt class="h5 text-primary">President</dt>
            <dd>
              <p>
                Managed and administered a student-run consulting NGO.
              </p>
            </dd>
          </dl>
        </article>
        <article>
          <header>
            <h2 id="projects">
              Projects
            </h2>
          </header>
          <p>Open-source projects I created, developed, and led in DeviceTag.io.</p>
          <dl>
            <ul class="list-inline mb-0 text-muted float-right pt-1">
              <li class="list-inline-item">
                Python 3.6, Debian/Linux, Terminal based
              </li>
              <li class="list-inline-item">
                (<a href="https://github.com/bustawin/workbench/tree/teal">link</a>)
              </li>
            </ul>
            <dt class="h5 text-primary">Workbench</dt>
            <dd>Software that creates a hardware report of a computer by extracting
              component information (e.g. serial numbers), testing, benchmarking, erasing, and
              installing an OS.
            </dd>
            <ul class="list-inline mb-0 text-muted float-right pt-1">
              <li class="list-inline-item">
                Python 3.6, PostgreSQL, Flask, MongoDB, API REST, AngularJS
              </li>
              <li class="list-inline-item">
                (<a href="https://github.com/bustawin/devicehub-teal/tree/beta">link</a>)
              </li>
            </ul>
            <dt class="h5 text-primary">Devicehub</dt>
            <dd>A distributed iOT Asset Management System focused on reusing devices.</dd>
          </dl>
        </article>
        <article>
          <header>
            <h2 id="teaching">
              Teaching
            </h2>
            <dl>
              <ul class="list-inline mb-0 text-muted float-right pt-1">
                <li class="list-inline-item">Spring 2019, Fall 2019
              </ul>
              <dt class="h5 text-primary">Geneva Business
                School
                Barcelona Campus
              </dt>
              <dd>BBA, Two introductory classes: Coding (Python), and software product management
                (prototyping a web app).
              </dd>
              <ul class="list-inline mb-0 text-muted float-right pt-1">
                <li class="list-inline-item">Spring 2015
              </ul>
              <dt class="h5 text-primary">Trinijove</dt>
              <dd>Youth in social exclusion risk, Website development.</dd>
              <ul class="list-inline mb-0 text-muted float-right pt-1">
                <li class="list-inline-item">Biannual conference, 2013 — 2019
              </ul>
              <dt class="h5 text-primary">Tecnologia per Tothom (TxT)
              </dt>
              <dd>
                Volunteer, Bachelor in software engineering and bachelor in telecommunications.
                Socio-environmental impact of technology and reuse. Tecnologia per Tothom (TxT) is
                an NGO under the Universitat Politècnica de Catalunya.
              </dd>
              <ul class="list-inline mb-0 text-muted float-right pt-1">
                <li class="list-inline-item">Spring 2012, Fall 2012
              </ul>
              <dt class="h5 text-primary">JEDI
              </dt>
              <dd>Bachelor in software engineering, Website development.</dd>
            </dl>
          </header>
        </article>
        <article class="page-break">
          <header>
            <h2 id="talks">
              Talks
            </h2>
          </header>
          <div class="card bg-transparent border-0">
            <div class="row no-gutters">
              <div class="col-md-3">
                <img src="https://pbs.twimg.com/media/D9hEyfWXkAUSpw5?format=jpg&name=4096x4096"
                     class="card-img-top"
                >
              </div>
              <div class="col-md-9">
                <div class="card-body">
                  <ul class="list-inline mb-0 text-muted float-right pt-1">
                    <li class="list-inline-item">
                      (<a href="https://twitter.com/adrianafreitas/status/1141738244561874945">link</a>)
                    </li>
                  </ul>
                  <h5 class="card-title text-primary">
                    At ESADE, Spain
                  </h5>
                  <p class="card-text">
                    Presenting DeviceTag.io as part of the Ship2B acceleration program.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card bg-transparent border-0">
            <div class="row no-gutters">
              <div class="col-md-3">
                <img src="<?php print get_stylesheet_directory_uri() . '/img/xavi-presenting-ledger.png' ?>"
                     class="card-img-top"
                >
              </div>
              <div class="col-md-9">
                <div class="card-body">
                  <ul class="list-inline mb-0 text-muted float-right pt-1">
                    <li class="list-inline-item">
                      (<a href="https://www.youtube.com/embed/n522VLSXujk?t=586">link</a>)
                    </li>
                  </ul>
                  <h5 class="card-title text-primary">
                    At Ledger, The Netherlands
                  </h5>
                  <p class="card-text">
                    Presenting DeviceTag.io as part of the Ledger EU program.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </article>
        <article>
          <h2 id="education">
            Education
          </h2>
          <dl>
            <ul class="list-inline mb-0 text-muted float-right pt-1">
              <li class="list-inline-item">Universitat Politècnica de Catalunya
              <li class="list-inline-item">2010 — 2016
            </ul>
            <dt class="h5 text-primary">Bachelor Degree in Informatics Engineering</dt>
          </dl>
        </article>
        <hr>
        <em>
          <p class="d-print-none">
            I am an entrepreneur who enjoys doing projects that help shape a better world, teaching
            to
            diverse collectives about software, developing in python, and writing in this blog.
          </p>
          Creative, agileist, resolutive, and social & environmental researcher.
          <span class="text-secondary">Become rich by solving poverty.</span>
        </em>
        <article class="d-print-none">
          <header>
            <h2>About this site</h2>
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
        </article>
      </div>
      <aside class="col-sm-3">
        <address>
          <h2 id="contact" class="d-print-none">Contact</h2>
          <dl>
            <dt><i class="fa fa-laptop fa-fw align-text-top"></i> Website</dt>
            <dd><a href="https://bustawin.com">bustawin.com</a></dd>
            <dt><i class="fa fa-envelope fa-fw align-text-top"></i> Email</dt>
            <dd><a href="mailto:xavier@bustawin.com">xavier@bustawin.com</a></dd>
            <dt><i class="fa fa-linkedin fa-fw align-text-top"></i> Linkedin</dt>
            <dd><a href="http://linkedin.com/in/bustawin/"> /in/bustawin</a></dd>
            <dt><i class="fa fa-github fa-fw align-text-top"></i> Github</dt>
            <dd><a href="https://github.com/bustawin/">/bustawin</a></dd>
            <dt><i class="fa fa-location-arrow fa-fw align-text-top"></i> Address</dt>
            <dd>C/Aribau, Barcelona.</dd>
            <dt><i class="fa fa-phone fa-fw align-text-top"></i> Phone</dt>
            <dd><a href="tel:+34634541887">+34 634541887</a></dd>
          </dl>
        </address>

        <article>
          <h2>Skills</h2>
          <dl class="row">
            <dt class="col-sm-6">Python</dt>
            <dd class="col-sm-6 text-right">
              <i class="fa fa-circle"></i><i
                  class="fa fa-circle"></i><i class="fa fa-circle"></i>
            </dd>
            <dt class="col-sm-6">Javascript</dt>
            <dd class="col-sm-6 text-right">
              <i class="fa fa-circle"></i><i
                  class="fa fa-circle"></i><i class="fa fa-circle"></i>
            </dd>
            <dt class="col-sm-6">AngularJS</dt>
            <dd class="col-sm-6 text-right">
              <i class="fa fa-circle"></i><i
                  class="fa fa-circle"></i><i class="fa fa-circle"></i>
            </dd>
            <dt class="col-sm-6">PostgreSQL</dt>
            <dd class="col-sm-6 text-right">
              <i class="fa fa-circle"></i><i
                  class="fa fa-circle"></i><i class="fa fa-circle"></i>
            </dd>
            <dt class="col-sm-6">Software Architecture</dt>
            <dd class="col-sm-6 text-right">
              <i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i>
            </dd>
            <dt class="col-sm-6">TDD</dt>
            <dd class="col-sm-6 text-right">
              <i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i>
            </dd>
            <dt class="col-sm-6">DDD</dt>
            <dd class="col-sm-6 text-right">
              <i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i>
            </dd>
            <dt class="col-sm-6">API / REST</dt>
            <dd class="col-sm-6 text-right">
              <i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i>
            </dd>
            <dt class="col-sm-6">Drupal / PHP</dt>
            <dd class="col-sm-6 text-right">
              <i class="fa fa-circle"></i><i
                  class="fa fa-circle"></i><i class="fa fa-dot-circle-o"></i>
            </dd>
            <dt class="col-sm-6">Debian / Linux</dt>
            <dd class="col-sm-6 text-right">
              <i class="fa fa-circle"></i><i
                  class="fa fa-circle"></i><i class="fa fa-dot-circle-o"></i>
            </dd>
            <dt class="col-sm-6">MongoDB</dt>
            <dd class="col-sm-6 text-right">
              <i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-dot-circle-o"></i>
            </dd>
              <dt class="col-sm-6">NodeJS</dt>
              <dd class="col-sm-6 text-right">
                  <i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-dot-circle-o"></i>
              </dd>
              <dt class="col-sm-6">Docker</dt>
              <dd class="col-sm-6 text-right">
                  <i class="fa fa-circle"></i><i class="fa fa-dot-circle-o"></i><i class="fa fa-dot-circle-o"></i>
              </dd>
              <dt class="col-sm-6">AWS</dt>
              <dd class="col-sm-6 text-right">
                  <i class="fa fa-circle"></i><i class="fa fa-dot-circle-o"></i><i class="fa fa-dot-circle-o"></i>
              </dd>
              <dt class="col-sm-6">Blockchain</dt>
              <dd class="col-sm-6 text-right">
                  <i class="fa fa-circle"></i><i class="fa fa-dot-circle-o"></i><i class="fa fa-dot-circle-o"></i>
              </dd>
          </dl>
          <dl class="row">
            <dt class="col-sm-6">Presenting</dt>
            <dd class="col-sm-6 text-right">
              <i class="fa fa-circle"></i><i
                  class="fa fa-circle"></i><i class="fa fa-circle"></i>
            </dd>
            <dt class="col-sm-6">Planning</dt>
            <dd class="col-sm-6 text-right">
              <i class="fa fa-circle"></i><i
                  class="fa fa-circle"></i><i class="fa fa-circle"></i>
            </dd>
            <dt class="col-sm-6">Researching</dt>
            <dd class="col-sm-6 text-right">
              <i class="fa fa-circle"></i><i
                  class="fa fa-circle"></i><i class="fa fa-circle"></i>
            </dd>
            <dt class="col-sm-6">SCRUM</dt>
            <dd class="col-sm-6 text-right">
              <i class="fa fa-circle"></i><i
                  class="fa fa-circle"></i><i class="fa fa-dot-circle-o"></i>
            </dd>
            <dt class="col-sm-6">Platforms</dt>
            <dd class="col-sm-6 text-right">
              <i class="fa fa-circle"></i><i
                  class="fa fa-circle"></i><i class="fa fa-dot-circle-o"></i>
            </dd>
            <dt class="col-sm-6">DevOps</dt>
            <dd class="col-sm-6 text-right">
              <i class="fa fa-circle"></i><i
                  class="fa fa-dot-circle-o"></i><i class="fa fa-dot-circle-o"></i>
            </dd>
            <dt class="col-sm-6">Digital design</dt>
            <dd class="col-sm-6 text-right">
              <i class="fa fa-circle"></i><i class="fa fa-dot-circle-o"></i><i class="fa fa-dot-circle-o"></i>
            </dd>
            <dt class="col-sm-6">Marketing</dt>
            <dd class="col-sm-6 text-right">
              <i class="fa fa-circle"></i><i class="fa fa-dot-circle-o"></i><i class="fa fa-dot-circle-o"></i>
            </dd>
          </dl>
          <dl class="row page-break">
            <dt class="col-sm-6">Spanish</dt>
            <dd class="col-sm-6 text-right">
              Native
            </dd>
            <dt class="col-sm-6">Catalan</dt>
            <dd class="col-sm-6 text-right">
              Native
            </dd>
            <dt class="col-sm-6">English</dt>
            <dd class="col-sm-6 text-right">
              Proficient
            </dd>
          </dl>
        </article>
      </aside>
    </div>
    <div class="row justify-content-center m-3 d-print-none">
      <a class="btn btn-outline-primary col-sm-8 text-center"
         href="<?php print get_stylesheet_directory_uri() . '/img/cv-xavier.pdf' ?>"
         download="CV Xavier Bustamante - bustawin.pdf"
      >
        <i class="fa fa-download fa-fw"></i>Download this CV</a>
    </div>
    <p class="text-center m-3">
      <img src="<?php print get_stylesheet_directory_uri() . '/img/timmy-walk.gif' ?>">
      <br>
      <small class="d-print-none">
        <em>Btw</em>, this little friend is Timmy, and it was drawn by a dearest friend,
        Nataly.
      </small>
    </p>
  </div>
</main>
<?php get_footer(); ?>
