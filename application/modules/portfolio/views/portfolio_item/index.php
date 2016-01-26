<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

<!-- Bootstrap css -->

<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">

<link rel="stylesheet" href="<?php echo base_url("assets/css/theme.css"); ?>">

<!-- Bootstrap multiselect css -->

<link rel="stylesheet" href="<?php echo base_url("assets/css/swipebox.css"); ?>">

<!-- dropzone css -->

<link rel="stylesheet" href="<?php echo base_url("assets/css/blue.css"); ?>">

<!-- custom css -->

<link rel="stylesheet" href="<?php echo base_url("assets/css/animate.min.css"); ?>">

 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>




<div class='container'>
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
</div>

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

<script type="text/javascript" src="<?php echo base_url("assets/js/application.js"); ?>"></script>





