<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Creative room | design | web design  | Web development  | 3D modelling, animation and VFX</title>

<!-- Bootstrap css -->



<link rel="stylesheet" href="<?php echo base_url("assets/css/theme.css"); ?>">

<!-- Bootstrap multiselect css -->

<link rel="stylesheet" href="<?php echo base_url("assets/css/swipebox.css"); ?>">

<!-- dropzone css -->

<link rel="stylesheet" href="<?php echo base_url("assets/css/blue.css"); ?>">

<!-- custom css -->

<link rel="stylesheet" href="<?php echo base_url("assets/css/custom.css"); ?>">

<link rel="stylesheet" href="<?php echo base_url("assets/css/animate.min.css"); ?>">

 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
    
    <body>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42863888-2', 'pinsupreme.com');
    ga('send', 'pageview');

  </script>
  <!-- Login Modal -->
<div aria-hidden='true' class='modal fade' id='loginModal' role='dialog' tabindex='-1'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button aria-hidden='true' class='close' data-dismiss='modal' type='button'>×</button>
        <h4 class='modal-title'>Login example</h4>
      </div>
      <div class='modal-body'>
        <form action='#' role='form'>
          <div class='row'>
            <div class='col-md-6'>
              <label class='control-label'>Username</label>
              <input class='form-control' placeholder='your username' type='text'>
            </div>
            <div class='col-md-6'>
              <label class='control-label'>Password</label>
              <input class='form-control' placeholder='your password' type='text'>
            </div>
          </div>
        </form>
      </div>
      <div class='modal-footer'>
        <button class='btn btn-default' data-dismiss='modal' type='button'>Close</button>
        <button class='btn btn-primary' type='button'>Log In</button>
      </div>
    </div>
  </div>
</div>

  <!-- Contact Modal -->
<div aria-hidden='true' class='modal fade' id='contactModal' role='dialog' tabindex='-1'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button aria-hidden='true' class='close' data-dismiss='modal' type='button'>×</button>
        <h4 class='modal-title'>Contact Us Form</h4>
      </div>
      <div class='modal-body'>
        <form action='#' role='form'>
          <div class='form-group'>
            <div class='row'>
              <div class='col-md-6'>
                <label class='control-label'>Your Name</label>
                <input class='form-control' placeholder='your username' type='text'>
              </div>
              <div class='col-md-6'>
                <label class='control-label'>Your Email</label>
                <input class='form-control' placeholder='your password' type='text'>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <div class='row'>
              <div class='col-md-12'>
                <label class='control-label'>Your Message</label>
                <textarea class='form-control' name='' rows='4'></textarea>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class='modal-footer'>
        <button class='btn btn-default' data-dismiss='modal' type='button'>Cancel</button>
        <button class='btn btn-primary' type='button'>Send Message</button>
      </div>
    </div>
  </div>
</div>

<div class='noise-wrapper'>
  <div class='header-main header-tp' id='anchorHome'>
    <div class='container'>
  <nav class='navbar navbar-default' role='navigation'>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class='navbar-header'>
      <button class='navbar-toggle' data-target='.navbar-ex1-collapse' data-toggle='collapse' type='button'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class='current navbar-brand' href='index.html'>
        <img alt='' height='55' src='assets/images/colors/blue/logo-small-top.png'>
      </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class='collapse navbar-collapse navbar-ex1-collapse'>
      <a class='btn btn-default navbar-btn navbar-right' data-toggle='modal' href='#loginModal'>
        Sign In
        <i class='icon-signin'></i>
      </a>
      <ul class='nav navbar-nav navbar-right'>
        <li class='current active'>
            <a class='current page-scroll' href='#home'>Home</a>
        </li>
        <li>
          <a class='page-scroll'href='#about'>About Us</a>
        </li>
        <li>
          <a class='page-scroll' href="#portfolio">Portfolio</a>
        </li>
        <li>
          <a class='page-scroll' href='#social'>Social</a>
        </li>
        <li>
          <a data-toggle='modal' href='#contactModal'>Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
</div>

  </div>
  <div class='separator-shadow-bottom'>
    <img alt='' src='assets/images/shadow-separator-wide-bottom.png'>
  </div>
  <section class='leaderboard leaderboard-style-one'  id='home'>
    <div class='container'>
      <h1 class='animated fadeInDown fontpro'>Welcome to creative room</h1>
      <h2 class='animated fadeInDown'>We are a hybrid creative place. With expertise in design, web design and development, 3D and VFX.</h2>
      <div class='relative-w'>
        <div class='loupe loupe-left animated rollIn'>
            <img id='smaller' alt='' src='assets/images/showcase.png'>
        </div>
        <div class='loupe loupe-right animated flipInY'>
            <img id='bigger' alt='' src='assets/images/showcase.png'>
        </div>
        <div class='frame-browser animated bounceInUp'>
          <div class='frame-buttons'>
            <div class='frame-button-close'></div>
            <div class='frame-button-max'></div>
            <div class='frame-button-min'></div>
          </div>
          <div class='frame-browser-image'>
            <img alt='' src='assets/images/showcase.png'>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class='separator-shadow-top above-screenshot-shadow'>
    <img alt='' src='assets/images/shadow-separator-wide-top.png'>
  </div>
</div>
<div class='area-content'>
  <div class='container'>
    <div class='separator-shadow-top sub-screenshot-shadow'>
      <img alt='' src='assets/images/shadow-separator-wide-top.png'>
    </div>
    <div class='iconed-features lift-on-hover style-1'>
      <div class='row'>
        <div class='col-md-4'>
          <div class='iconed-feature'>
            <div class='feature-icon-w'>
              <i class='icon-eye-open'></i>
            </div>
            <h4>Responsive Layout</h4>
            <p>Works perfectly on everything from desktops to mobile devices.</p>
            <div class='btn-show-on-parent-hover'>
              <a class='read-more-link' href='#'>Read More</a>
            </div>
          </div>
        </div>
        <div class='col-md-4'>
          <div class='iconed-feature'>
            <div class='feature-icon-w'>
              <i class='icon-cog'></i>
            </div>
            <h4>Unlimited Colors</h4>
            <p>Theme comes with multiple predefined colors.</p>
            <div class='btn-show-on-parent-hover'>
              <a class='read-more-link' href='#'>Read More</a>
            </div>
          </div>
        </div>
        <div class='col-md-4'>
          <div class='iconed-feature'>
            <div class='feature-icon-w'>
              <i class='icon-leaf'></i>
            </div>
            <h4>Modern Look</h4>
            <p>Clean and simple design is what people want nowadays.</p>
            <div class='btn-show-on-parent-hover'>
              <a class='read-more-link' href='#'>Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='separator-shadow-bottom bottom-margin'>
      <img alt='' src='assets/images/shadow-separator-wide-bottom.png'>
    </div>
    <div class='row bottom-margin'>
      <div class='col-md-5'>
        <h2 class='header-lined'>Wrappers for images</h2>
        <ul class='list-checkmarked text-bigger'>
          <li>This theme comes with a set of amazin wrappers for your images. If you are a web designer and want to showcase your websites - there is nothing better on a market than theme Earth.</li>
          <li>Simply wrap the image with couple lines of html and you will have a gorgeous looking browser frame and a magnifiyng glass for showcasing your projects details.</li>
        </ul>
        <!-- %a.btn.btn-default{:href => "#"} Show me Example -->
      </div>
      <div class='col-md-1'></div>
      <div class='col-md-6'>
        <div class='relative-w'>
          <div class='loupe loupe-left loupe-large animated-when-visible' data-animation-type='fadeInLeft'>
            <img alt='' src='http://cdn.pins.ms/earth_html/showcase2.png'>
          </div>
          <div class='frame-browser animated-when-visible' data-animation-type='bounceInRight'>
            <div class='frame-buttons'>
              <div class='frame-button-close'></div>
              <div class='frame-button-max'></div>
              <div class='frame-button-min'></div>
            </div>
            <div class='frame-browser-image'>
              <img alt='' src='http://cdn.pins.ms/earth_html/showcase2.png'>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='separator-shadow-top bottom-margin'>
      <img alt='' src='assets/images/shadow-separator-wide-top.png'>
    </div>
    
      
      <h2 id="portfolio" class="has-sub-header text-center">Our Portfolio</h2>
      
      <ul class='portfolio-filters text-center'>
    <li>
      <a data-filter='*' href='#'>show all</a>
    </li>
   
     <?php foreach($categories_dropdown as $value):?>
     
    <li><a data-filter=<?php echo ".filter-".$value->category_name; ?> href='#'><?php echo $value->category_name ?></a></li>
    
     <?php endforeach; ?>
  </ul>
  <div class='isotope-w'>
    <div class='item filter-html filter-logo'>
      <div class='portfolio-item portfolio-style-3'>
        <div class='frame-browser'>
          <figure>
            <img alt='' src='http://dribbble.s3.amazonaws.com/users/4664/screenshots/1214091/foxgrotesque.jpg'>
            <figcaption>
              <h5 class='fp-title'>
                <a href='portfolio-single.html'>Color Picker</a>
              </h5>
              <div class='fp-content'>Web Development</div>
              <div class='fp-buttons'>
                <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                  <i class='icon-file-text-alt'></i>
                  View Details
                </a>
                <a class='btn btn-default btn-sm fp-lightbox-btn swipebox hidden-mobile-ib' href='http://cdn.pins.ms/earth_html/unsplash.jpg' title='Lightbox usage example'>
                  <i class='icon-zoom-in'></i>
                  View Bigger
                </a>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
    <div class='item filter-design'>
      <div class='portfolio-item portfolio-style-3'>
        <div class='frame-browser'>
          <figure>
            <img alt='' src='http://dribbble.s3.amazonaws.com/users/31752/screenshots/1214482/my-pen-and-well.png'>
            <figcaption>
              <h5 class='fp-title'>
                <a href='portfolio-single.html'>Color Picker</a>
              </h5>
              <div class='fp-content'>Web Development</div>
              <div class='fp-buttons'>
                <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                  <i class='icon-file-text-alt'></i>
                  View Details
                </a>
                <a class='btn btn-default btn-sm fp-lightbox-btn swipebox hidden-mobile-ib' href='http://cdn.pins.ms/earth_html/unsplash.jpg' title='Lightbox usage example'>
                  <i class='icon-zoom-in'></i>
                  View Bigger
                </a>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
    <div class='item filter-design filter-development'>
      <div class='portfolio-item portfolio-style-3'>
        <div class='frame-browser'>
          <figure>
            <img alt='' src='http://dribbble.s3.amazonaws.com/users/35381/screenshots/1202099/staircar_1x.png'>
            <figcaption>
              <h5 class='fp-title'>
                <a href='portfolio-single.html'>Color Picker</a>
              </h5>
              <div class='fp-content'>Web Development</div>
              <div class='fp-buttons'>
                <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                  <i class='icon-file-text-alt'></i>
                  View Details
                </a>
                <a class='btn btn-default btn-sm fp-lightbox-btn swipebox hidden-mobile-ib' href='http://cdn.pins.ms/earth_html/unsplash.jpg' title='Lightbox usage example'>
                  <i class='icon-zoom-in'></i>
                  View Bigger
                </a>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
    <div class='item filter-design'>
      <div class='portfolio-item portfolio-style-3'>
        <div class='frame-browser'>
          <figure>
            <img alt='' src='http://dribbble.s3.amazonaws.com/users/23569/screenshots/1212234/prince_ink_co_long_live_print_1x.png'>
            <figcaption>
              <h5 class='fp-title'>
                <a href='portfolio-single.html'>Color Picker</a>
              </h5>
              <div class='fp-content'>Web Development</div>
              <div class='fp-buttons'>
                <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                  <i class='icon-file-text-alt'></i>
                  View Details
                </a>
                <a class='btn btn-default btn-sm fp-lightbox-btn swipebox hidden-mobile-ib' href='http://cdn.pins.ms/earth_html/unsplash.jpg' title='Lightbox usage example'>
                  <i class='icon-zoom-in'></i>
                  View Bigger
                </a>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
    <div class='item filter-development filter-photoshop'>
      <div class='portfolio-item portfolio-style-3'>
        <div class='frame-browser'>
          <figure>
            <img alt='' src='http://dribbble.s3.amazonaws.com/users/3460/screenshots/1211079/bus_illy_1x.png'>
            <figcaption>
              <h5 class='fp-title'>
                <a href='portfolio-single.html'>Color Picker</a>
              </h5>
              <div class='fp-content'>Web Development</div>
              <div class='fp-buttons'>
                <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                  <i class='icon-file-text-alt'></i>
                  View Details
                </a>
                <a class='btn btn-default btn-sm fp-lightbox-btn swipebox hidden-mobile-ib' href='http://cdn.pins.ms/earth_html/unsplash.jpg' title='Lightbox usage example'>
                  <i class='icon-zoom-in'></i>
                  View Bigger
                </a>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
    <div class='item filter-design filter-html filter-logo filter-photoshop'>
      <div class='portfolio-item portfolio-style-3'>
        <div class='frame-browser'>
          <figure>
            <img alt='' src='http://dribbble.s3.amazonaws.com/users/73492/screenshots/1210682/potes_1x.jpg'>
            <figcaption>
              <h5 class='fp-title'>
                <a href='portfolio-single.html'>Color Picker</a>
              </h5>
              <div class='fp-content'>Web Development</div>
              <div class='fp-buttons'>
                <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                  <i class='icon-file-text-alt'></i>
                  View Details
                </a>
                <a class='btn btn-default btn-sm fp-lightbox-btn swipebox hidden-mobile-ib' href='http://cdn.pins.ms/earth_html/unsplash.jpg' title='Lightbox usage example'>
                  <i class='icon-zoom-in'></i>
                  View Bigger
                </a>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
    <div class='item filter-logo filter-photoshop'>
      <div class='portfolio-item portfolio-style-3'>
        <div class='frame-browser'>
          <figure>
            <img alt='' src='http://dribbble.s3.amazonaws.com/users/12516/screenshots/1210825/racquet_club_numerals_1x.png'>
            <figcaption>
              <h5 class='fp-title'>
                <a href='portfolio-single.html'>Color Picker</a>
              </h5>
              <div class='fp-content'>Web Development</div>
              <div class='fp-buttons'>
                <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                  <i class='icon-file-text-alt'></i>
                  View Details
                </a>
                <a class='btn btn-default btn-sm fp-lightbox-btn swipebox hidden-mobile-ib' href='http://cdn.pins.ms/earth_html/unsplash.jpg' title='Lightbox usage example'>
                  <i class='icon-zoom-in'></i>
                  View Bigger
                </a>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
    <div class='item filter-html filter-logo'>
      <div class='portfolio-item portfolio-style-3'>
        <div class='frame-browser'>
          <figure>
            <img alt='' src='http://dribbble.s3.amazonaws.com/users/18461/screenshots/1211161/rd-pattern.png'>
            <figcaption>
              <h5 class='fp-title'>
                <a href='portfolio-single.html'>Color Picker</a>
              </h5>
              <div class='fp-content'>Web Development</div>
              <div class='fp-buttons'>
                <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                  <i class='icon-file-text-alt'></i>
                  View Details
                </a>
                <a class='btn btn-default btn-sm fp-lightbox-btn swipebox hidden-mobile-ib' href='http://cdn.pins.ms/earth_html/unsplash.jpg' title='Lightbox usage example'>
                  <i class='icon-zoom-in'></i>
                  View Bigger
                </a>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
    <div class='item filter-design filter-photoshop'>
      <div class='portfolio-item portfolio-style-3'>
        <div class='frame-browser'>
          <figure>
            <img alt='' src='http://dribbble.s3.amazonaws.com/users/12516/screenshots/1170099/ledgewood_type_1x.png'>
            <figcaption>
              <h5 class='fp-title'>
                <a href='portfolio-single.html'>Color Picker</a>
              </h5>
              <div class='fp-content'>Web Development</div>
              <div class='fp-buttons'>
                <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                  <i class='icon-file-text-alt'></i>
                  View Details
                </a>
                <a class='btn btn-default btn-sm fp-lightbox-btn swipebox hidden-mobile-ib' href='http://cdn.pins.ms/earth_html/unsplash.jpg' title='Lightbox usage example'>
                  <i class='icon-zoom-in'></i>
                  View Bigger
                </a>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
  </div>
    
    <div class='pull-right carousel-top-controls'>
      <a data-slide='prev' href='#carousel-works'>
        <span class='icon-angle-left'></span>
      </a>
      <a data-slide='next' href='#carousel-works'>
        <span class='icon-angle-right'></span>
      </a>
    </div>
    <h2 class='header-lined' id='anchorWorks'>Recent Works Slider</h2>
    <div class='carousel slide carousel-with-animated-content' id='carousel-works'>
      <!-- Wrapper for slides -->
      <div class='carousel-inner'>
        <div class='item active'>
          <div class='row'>
            <div class='col-md-4'>
              <div class='portfolio-item portfolio-style-3 animated-when-visible' data-animation-type='flipInY'>
                <div class='frame-browser'>
                  <figure>
                    <img alt='' src='http://dribbble.s3.amazonaws.com/users/31752/screenshots/1214482/my-pen-and-well.png'>
                    <figcaption>
                      <h5 class='fp-title'>
                        <a href='portfolio-single.html'>Color Picker</a>
                      </h5>
                      <div class='fp-content'>Web Development</div>
                      <div class='fp-buttons'>
                        <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                          <i class='icon-file-text-alt'></i>
                          View Details
                        </a>
                        <a class='btn btn-default btn-sm fp-lightbox-btn swipebox' href='http://cdn.pins.ms/earth_html/unsplash.jpg' title='Lightbox Example'>
                          <i class='icon-zoom-in'></i>
                          View Bigger
                        </a>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
            <div class='col-md-4'>
              <div class='portfolio-item portfolio-style-3 animated-when-visible delay-animation-one' data-animation-type='flipInY'>
                <div class='frame-browser'>
                  <figure>
                    <img alt='' src='http://dribbble.s3.amazonaws.com/users/3460/screenshots/1211079/bus_illy_1x.png'>
                    <figcaption>
                      <h5 class='fp-title'>
                        <a href='portfolio-single.html'>Color Picker</a>
                      </h5>
                      <div class='fp-content'>Web Development</div>
                      <div class='fp-buttons'>
                        <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                          <i class='icon-file-text-alt'></i>
                          View Details
                        </a>
                        <a class='btn btn-default btn-sm fp-lightbox-btn swipebox' href='http://cdn.pins.ms/earth_html/unsplash.jpg' title='Lightbox Example'>
                          <i class='icon-zoom-in'></i>
                          View Bigger
                        </a>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
            <div class='col-md-4'>
              <div class='portfolio-item portfolio-style-3 animated-when-visible delay-animation-two' data-animation-type='flipInY'>
                <div class='frame-browser'>
                  <figure>
                    <img alt='' src='http://dribbble.s3.amazonaws.com/users/73492/screenshots/1210682/potes_1x.jpg'>
                    <figcaption>
                      <h5 class='fp-title'>
                        <a href='portfolio-single.html'>Color Picker</a>
                      </h5>
                      <div class='fp-content'>Web Development</div>
                      <div class='fp-buttons'>
                        <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                          <i class='icon-file-text-alt'></i>
                          View Details
                        </a>
                        <a class='btn btn-default btn-sm fp-lightbox-btn swipebox' href='http://cdn.pins.ms/earth_html/unsplash.jpg' title='Lightbox Example'>
                          <i class='icon-zoom-in'></i>
                          View Bigger
                        </a>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class='item'>
          <div class='row'>
            <div class='col-md-4'>
              <div class='portfolio-item portfolio-style-3 animated-when-visible' data-animation-type='flipInY'>
                <div class='frame-browser'>
                  <figure>
                    <img alt='' src='http://dribbble.s3.amazonaws.com/users/73492/screenshots/1210682/potes_1x.jpg'>
                    <figcaption>
                      <h5 class='fp-title'>
                        <a href='portfolio-single.html'>Color Picker</a>
                      </h5>
                      <div class='fp-content'>Web Development</div>
                      <div class='fp-buttons'>
                        <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                          <i class='icon-file-text-alt'></i>
                          View Details
                        </a>
                        <a class='btn btn-default btn-sm fp-lightbox-btn swipebox' href='http://cdn.pins.ms/earth_html/unsplash.jpg' title='Lightbox Example'>
                          <i class='icon-zoom-in'></i>
                          View Bigger
                        </a>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
            <div class='col-md-4'>
              <div class='portfolio-item portfolio-style-3 animated-when-visible delay-animation-one' data-animation-type='flipInY'>
                <div class='frame-browser'>
                  <figure>
                    <img alt='' src='http://dribbble.s3.amazonaws.com/users/18461/screenshots/1211161/rd-pattern.png'>
                    <figcaption>
                      <h5 class='fp-title'>
                        <a href='portfolio-single.html'>Color Picker</a>
                      </h5>
                      <div class='fp-content'>Web Development</div>
                      <div class='fp-buttons'>
                        <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                          <i class='icon-file-text-alt'></i>
                          View Details
                        </a>
                        <a class='btn btn-default btn-sm fp-lightbox-btn swipebox' href='http://cdn.pins.ms/earth_html/unsplash.jpg' title='Lightbox Example'>
                          <i class='icon-zoom-in'></i>
                          View Bigger
                        </a>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
            <div class='col-md-4'>
              <div class='portfolio-item portfolio-style-3 animated-when-visible delay-animation-two' data-animation-type='flipInY'>
                <div class='frame-browser'>
                  <figure>
                    <img alt='' src='http://dribbble.s3.amazonaws.com/users/23569/screenshots/1212234/prince_ink_co_long_live_print_1x.png'>
                    <figcaption>
                      <h5 class='fp-title'>
                        <a href='portfolio-single.html'>Color Picker</a>
                      </h5>
                      <div class='fp-content'>Web Development</div>
                      <div class='fp-buttons'>
                        <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                          <i class='icon-file-text-alt'></i>
                          View Details
                        </a>
                        <a class='btn btn-default btn-sm fp-lightbox-btn swipebox' href='http://cdn.pins.ms/earth_html/unsplash.jpg' title='Lightbox Example'>
                          <i class='icon-zoom-in'></i>
                          View Bigger
                        </a>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='block-lined-over'>
      <a class='continue-reading-link pull-right' href='portfolio.html'>
        <i class='icon-th'></i>
        View All
      </a>
    </div>
    <h2 class='header-lined has-sub-header text-center' id='anchorClients'>Our Clients</h2>
    <h4 class='sub-lined-header less-margin text-center'>Our clients love us! You are welcome to become one of them.</h4>
    <div class='clients'>
      <div class='row bottom-margin'>
        <div class='col-md-2'>
          <img alt='' class='animated-when-visible' data-animation-type='rotateInUpLeft' src='assets/images/clients/client-1.png'>
        </div>
        <div class='col-md-2'>
          <img alt='' class='animated-when-visible delay-animation-one' data-animation-type='rotateInUpLeft' src='assets/images/clients/client-2.png'>
        </div>
        <div class='col-md-2'>
          <img alt='' class='animated-when-visible delay-animation-two' data-animation-type='rotateInUpLeft' src='assets/images/clients/client-3.png'>
        </div>
        <div class='col-md-2'>
          <img alt='' class='animated-when-visible delay-animation-two' data-animation-type='rotateInUpRight' src='assets/images/clients/client-4.png'>
        </div>
        <div class='col-md-2'>
          <img alt='' class='animated-when-visible delay-animation-one' data-animation-type='rotateInUpRight' src='assets/images/clients/client-5.png'>
        </div>
        <div class='col-md-2'>
          <img alt='' class='animated-when-visible' data-animation-type='rotateInUpRight' src='assets/images/clients/client-6.png'>
        </div>
      </div>
    </div>
  </div>
  <div class='highlight-content bottom-margin light'>
    <div class='carousel slide' id='carousel-testimonials'>
      <!-- Indicators -->
      <ol class='carousel-indicators'>
        <li class='active' data-slide-to='0' data-target='#carousel-testimonials'></li>
        <li data-slide-to='1' data-target='#carousel-testimonials'></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class='carousel-inner'>
        <div class='item active'>
          <div class='container'>
            <div class='testimonial'>
              <div class='testimonial-icon'>
                <i class='icon-quote-left'></i>
              </div>
              <p>"This is an absolutely beautiful template, easy to work with, easy to customize, lots of feature. I am glad I bought it and I will definitely recommend it to my freiends and coworkers!"</p>
              <div class='testimonial-by'>Thomas Mayers - Yorkshire Foundation</div>
            </div>
          </div>
        </div>
        <div class='item'>
          <div class='container'>
            <div class='testimonial'>
              <div class='testimonial-icon'>
                <i class='icon-quote-left'></i>
              </div>
              <p>"This is an absolutely beautiful template, easy to work with, easy to customize, lots of feature. I am glad I bought it and I will definitely recommend it to my freiends and coworkers!"</p>
              <div class='testimonial-by'>Thomas Mayers - Yorkshire Foundation</div>
            </div>
          </div>
        </div>
      </div>
      <!-- Controls -->
      <a class='left carousel-control' data-slide='prev' href='#carousel-testimonials'>
        <span class='icon-prev'></span>
      </a>
      <a class='right carousel-control' data-slide='next' href='#carousel-testimonials'>
        <span class='icon-next'></span>
      </a>
    </div>
  </div>
 
 
    <div class='container' id="about">
    <h2 class='header-lined has-sub-header text-center' id='anchorTeam'>Meet the "Dream Team"</h2>
    <h4 class='sub-lined-header text-center'>We are a small team of designers and developers who help brands with big ideas.</h4>
    <div class='row bottom-margin'>
      <div class='col-md-3'>
        <div class='team-member animated-when-visible' data-animation-type='bounceInUp'>
          <div class='member-avatar'>
            <img alt='' src='http://cdn.pins.ms/earth_html/member-1.jpg'>
          </div>
          <h3>Lionel Messi</h3>
          <h4>Goal Machine</h4>
          <p>Messi started the season by lifting the Spanish Supercup with Barcelona, scoring three goals and providing two assists.</p>
          <div class='member-social'>
            <a href='#'>
              <i class='icon-facebook'></i>
            </a>
            <a href='#'>
              <i class='icon-twitter'></i>
            </a>
            <a href='#'>
              <i class='icon-linkedin'></i>
            </a>
            <a href='#'>
              <i class='icon-envelope'></i>
            </a>
          </div>
        </div>
      </div>
      <div class='col-md-3'>
        <div class='team-member animated-when-visible delay-animation-one' data-animation-type='bounceInUp'>
          <div class='member-avatar'>
            <img alt='' src='http://cdn.pins.ms/earth_html/member-2.jpg'>
          </div>
          <h3>David Villa</h3>
          <h4>Perfect Finisher</h4>
          <p>Messi started the season by lifting the Spanish Supercup with Barcelona, scoring three goals and providing two assists.</p>
          <div class='member-social'>
            <a href='#'>
              <i class='icon-facebook'></i>
            </a>
            <a href='#'>
              <i class='icon-twitter'></i>
            </a>
            <a href='#'>
              <i class='icon-linkedin'></i>
            </a>
            <a href='#'>
              <i class='icon-envelope'></i>
            </a>
          </div>
        </div>
      </div>
      <div class='col-md-3'>
        <div class='team-member animated-when-visible delay-animation-two' data-animation-type='bounceInUp'>
          <div class='member-avatar'>
            <img alt='' src='http://cdn.pins.ms/earth_html/member-3.jpg'>
          </div>
          <h3>Andres Iniesta</h3>
          <h4>Magician</h4>
          <p>Messi started the season by lifting the Spanish Supercup with Barcelona, scoring three goals and providing two assists.</p>
          <div class='member-social'>
            <a href='#'>
              <i class='icon-facebook'></i>
            </a>
            <a href='#'>
              <i class='icon-twitter'></i>
            </a>
            <a href='#'>
              <i class='icon-linkedin'></i>
            </a>
            <a href='#'>
              <i class='icon-envelope'></i>
            </a>
          </div>
        </div>
      </div>
      <div class='col-md-3'>
        <div class='team-member animated-when-visible delay-animation-three' data-animation-type='bounceInUp'>
          <div class='member-avatar'>
            <img alt='' src='http://cdn.pins.ms/earth_html/member-4.jpg'>
          </div>
          <h3>Xavi Hernandez</h3>
          <h4>Another Magician</h4>
          <p>Messi started the season by lifting the Spanish Supercup with Barcelona, scoring three goals and providing two assists.</p>
          <div class='member-social'>
            <a href='#'>
              <i class='icon-facebook'></i>
            </a>
            <a href='#'>
              <i class='icon-twitter'></i>
            </a>
            <a href='#'>
              <i class='icon-linkedin'></i>
            </a>
            <a href='#'>
              <i class='icon-envelope'></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    
    
   
    <h2 class='header-lined has-sub-header text-center'>Our Skills</h2>
    <h4 class='sub-lined-header text-center'>We can do more than you might think, we are awesome and we can make you awewsome.</h4>
    <div class='row'>
      <div class='col-md-3'>
        <div class='skill'>
          <input class='dial' data-fgColor='#87ceeb' data-linecap='round' data-thickness='.2' type='text' value='90'>
          <h4>Web Design</h4>
        </div>
      </div>
      <div class='col-md-3'>
        <div class='skill'>
          <input class='dial' data-fgColor='#34bab3' data-linecap='round' data-thickness='.2' type='text' value='70'>
          <h4>Graphic Design</h4>
        </div>
      </div>
      <div class='col-md-3'>
        <div class='skill'>
          <input class='dial' data-fgColor='#e3ce9f' data-linecap='round' data-thickness='.2' type='text' value='85'>
          <h4>Photoshop</h4>
        </div>
      </div>
      <div class='col-md-3'>
        <div class='skill'>
          <input class='dial' data-fgColor='#d74681' data-linecap='round' data-thickness='.2' type='text' value='65'>
          <h4>SEO / Marketing</h4>
        </div>
      </div>
    </div>
  </div>
</div>
  <footer id="main-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <ul class="footer-menu">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
          <div class="copyright">
            2013 &copy; Theme Earth. All rights reserved.
          </div>
        </div>
        <div class="col-md-6">
          <ul class="footer-social">
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-dribbble"></i></a></li>
            <li><a href="#"><i class="icon-linkedin"></i></a></li>
            <li><a href="#"><i class="icon-google-plus"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>

<script type="text/javascript" src="<?php echo base_url("assets/js/color_switcher.js"); ?>"></script>

<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap/carousel.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap/transition.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap/collapse.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap/modal.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap/dropdown.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap/tooltip.js"); ?>"></script>

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.visible.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap/tab.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.isotope.min.js"); ?>"></script>

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.knob.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.scrollUp.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.swipebox.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.smoothScroll.js"); ?>"></script>
<!-- Include jQuery ScrollTo -->

<script type="text/javascript" src="<?php echo base_url("assets/js/application.js"); ?>"></script>

 <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>




</body>
</html>





