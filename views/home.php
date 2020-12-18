<!DOCTYPE html>
<html>
<head>
<title>Webies • Cinéma fictif</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <!-- header-section-starts -->
    <div class="full">
            <div class="menu">
                <ul>
                    <?php foreach($links as $link) : ?>
                        <li><a href="<?= $link->url; ?>"><div><i class="<?= $link->icon; ?>"></i></div></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <div class="main">
        <div class="header" style="background: url(<?= $featured->featured_img ?>);">
            <div class="top-header">
                <div class="logo">
                    <a href="index.html"><img src="images/logo.png" alt="" /></a>
                    <p><?= $header; ?></p>
                </div>
                <div class="search">
                    <form>
                        <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
                        <input type="submit" value="">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="header-info">
                <h1><?= $featured->title; ?></h1>

                <div class="featured-info">
                    <p class="age age--<?= $featured->public_color; ?>">
                        <a href="https://webies.com/publics/<?= $featured->public_slug; ?>"><?= $featured->public_label; ?></a>
                    </p>
                    <ul class="producers">
                        <?php foreach($featured->producers as $producer) : ?>
                            <li><?= $producer->firstname . ' ' . $producer->lastname; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <dl class="featured-definition">
                    <dt>Rating</dt>
                    <dd><?= number_format($featured->rating, 1, ',', ' '); ?>/10</dd>
                    <dt>Genres</dt>
                    <dd>
                        <ol>
                            <?php foreach($featured->genres as $genre): ?>
                                <li><a href="https://webies.com/genres/<?= $genre->slug; ?>"><?= $genre->label; ?></a></li>
                            <?php endforeach; ?>
                        </ol>
                    </dd>
                    <dt>Release</dt>
                    <dd>
                        <time datetime="<?= date('c', strtotime($featured->released_at)); ?>"><?= date('d F Y', strtotime($featured->released_at)); ?></time>
                    </dd>
                </dl>

                <p class="special"><?= $featured->description; ?></p>

                <a class="video" href="<?= $featured->trailer_url; ?>"><i class="video1"></i>WATCH TRAILER</a>
                <a class="book" href="https://webies.com/movies/<?= $featured->slug; ?>"><i class="book1"></i>BOOK TICKET</a>
            </div>
        </div>
        <div class="review-slider">
            <ul id="flexiselDemo1">
                <?php foreach($recentlyReleasedMovies as $movie) : ?>
                    <li>
                        <a href="https://webies.com/movies/<?= $movie->slug; ?>">
                            <img src="<?= $movie->cover_img; ?>" alt="<?= $movie->cover_alt; ?>">
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <script type="text/javascript">
        $(window).load(function() {
            
          $("#flexiselDemo1").flexisel({
                visibleItems: 6,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover: false,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 2
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 3
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 4
                    }
                }
            });
            });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>    
        </div>
        <div class="video">
            <iframe src="<?= $teased->trailer_url; ?>" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="news">
            <div class="col-md-6 news-left-grid">
                <h3>Don’t be late,</h3>
                <h2>Book your ticket now!</h2>
                <h4>Easy, simple & fast.</h4>
                <a href="#"><i class="book"></i>BOOK TICKET</a>
                <p>Get Discount up to <strong>10%</strong> if you are a member!</p>
            </div>
            <div class="col-md-6 news-right-grid">
                <h3>News</h3>

                <?php foreach($articles as $article) : ?>
                <article class="news-grid">
                    <h5><?= $article->title; ?></h5>
                    <time datetime="<?= date('c', strtotime($article->published_at)); ?>"><?= date('d M Y', strtotime($article->published_at)); ?></time>
                    <p><?= $article->excerpt; ?></p>
                </article>
                <?php endforeach; ?>

                <a class="more" href="#">MORE</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="more-reviews">
             <ul id="flexiselDemo2">
            <li><img src="images/m1.jpg" alt=""/></li>
            <li><img src="images/m2.jpg" alt=""/></li>
            <li><img src="images/m3.jpg" alt=""/></li>
            <li><img src="images/m4.jpg" alt=""/></li>
        </ul>
            <script type="text/javascript">
        $(window).load(function() {
            
          $("#flexiselDemo2").flexisel({
                visibleItems: 4,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover: false,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 2
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 3
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });
            });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>    
        </div>  
    <div class="footer">
        <h6>Disclaimer : Webies © <?php echo date('Y'); ?></h6>
        <p class="claim">This is a freebies and not an official website, I have no intention of disclose any movie, brand, news.My goal here is to train or excercise my skill and share this freebies.</p>
        <a href="example@mail.com">example@mail.com</a>
        <div class="copyright">
            <p> Template by  <a href="http://w3layouts.com">  W3layouts</a></p>
        </div>
    </div>  
    </div>
    </div>
    <div class="clearfix"></div>
</body>
</html>