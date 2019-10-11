<?php 
require_once('config/database.php');
require_once('config/functions.php'); 
require_once('objects/api.php'); 
$database = new Database();
$db = $database->getConnection();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Verraki</title>
<base href="<?php echo $baseUrl; ?>" />
<link href="<?php echo get_url(); ?>" rel="canonical" />
<link type="text/css" rel="stylesheet" href="assets/css/preset.css"/>
<link type="text/css" rel="stylesheet" href="assets/css/front_end.css"/>
<link type="text/css" rel="stylesheet" href="assets/css/fonts.css"/>
<link type="text/css" rel="stylesheet" href="assets/css/responsive.css"/>
<link type="text/css" media="screen" rel="stylesheet" href="fancybox/jquery.fancybox.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<script type="text/javascript" src="assets/js/jquery-1.8.2.js"></script>
<script type="text/javascript" src="assets/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="assets/js/prefixfree-1.0.7.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox.js"></script>

<script type="text/javascript">
$(window).load(function() {
	$('.flexslider').flexslider({
		slideshowSpeed: 6000,
		animation: "slide",
		controlNav: false,
		directionNav: false,
		animationSpeed: 700,
		easing: "linear"
	});
});
</script>

</head>

<body>

  <div id="main_wrapper">
    <div class="hm_pg_wrap">
    
      <div class="header">
        <div class="hdr clearfix">
          
          <div class="brandname"> 
            <a href="./">
              <img src="assets/img/verraki_white.png" />
            </a>
          </div>
          
          <div class="menu_icon">
<!--            <div class="menu_text">Menu</div>   -->
            <div class="b_icon"> 
              <span class="b_top"></span> 
              <span class="b_mid"></span> 
              <span class="b_bot"></span> 
            </div>
          </div>
        
        </div> 
      </div>
      
      <div class="menu">
        
        <div class="header">
          <div class="hdr clearfix">
          
            <div class="brandname"> 
              <a href="./">
                <img src="assets/img/verraki_logo.png" />
              </a>
            </div>
          
            <div class="menu_icon">
<!--            <div class="menu_text">Menu</div>   -->
              <div class="b_icon"> 
                <span class="b_top"></span> 
                <span class="b_mid"></span> 
                <span class="b_bot"></span> 
              </div>
            </div>
        
          </div> 
        </div>
        <div class="menu_wrap">
        
          <div class="menu_left_col">
            <div class="link_wrap">
              <div class="link_title"><a href="./">Home</a></div>
            </div>
            <div class="link_wrap">
              <div class="link_title"><a href="about/">About Us</a></div>
              <ul class="sublinks">
                <li><a href="">Our Company</a></li>
                <li><a href="">Value Proposition</a></li>
                <li><a href="">Our Team</a></li>
                <li><a href="">Advisors</a></li>
                <li><a href="">Community Programmes</a></li>
                <li><a href="">FAQs</a></li>
              </ul>
            </div>
            <div class="link_wrap">
              <div class="link_title"><a href="solutions/">Our Solutions</a></div>
              <ul class="sublinks">
                <li><a href="">Technology</a></li>
                <li><a href="">Advisory</a></li>
                <li><a href="">Ventures</a></li>
              </ul>
            </div>
            
          </div>
          
          <div class="menu_right_col">
            <div class="link_wrap">
              <div class="link_title"><a href="industries/">Industries</a></div>
              <ul class="sublinks">
                <li><a href="">Real Sector</a></li>
                <li><a href="">Social Sector</a></li>
                <li><a href="">Services Sector</a></li>
              </ul>
            </div>
            <div class="link_wrap">
              <div class="link_title"><a href="portfolio/">Portfolio</a></div>
            </div>
            <div class="link_wrap">
              <div class="link_title"><a href="newsroom/">Newsroom</a></div>
              <ul class="sublinks">
                <li><a href="">Blog</a></li>
                <li><a href="">Media</a></li>
                <li><a href="">Insights</a></li>
              </ul>
            </div>
            <div class="link_wrap">
              <div class="link_title"><a href="careers/">Careers</a></div>
            </div>
            <div class="link_wrap">
              <div class="link_title"><a href="contact/">Contact Us</a></div>
            </div>
          </div>
        
        </div>
        
        <div class="menu_ft">
          <div class="cont_info_ft">
            <div class="info_col">
              <a href="">info@verraki.com</a>
            </div>
            <div class="info_col">
              <a href="">27 Kofo Abayomi Street, Victoria Island, Lagos, Nigeria</a>
            </div>
            <div class="info_col">
              <a href="">+234-(1)-453-7151</a>
            </div>
          </div>
          <div class="social">
            <a href="https://linkedin.com/" class="fab fa-linkedin-in"></a>
            <a href="https://facebook.com/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/" class="fab fa-twitter"></a>
            <a href="https://youtube.com/" class="fab fa-youtube"></a>
            <a href="https://instagram.com/" class="fab fa-instagram"></a>
          </div>
        </div>
                   
      </div>
      
            
      <div class="banner" style ="background-image: url(media/team2.jpg)">
        <div class="overlay"></div>
      </div>
      
      <div class="news_slide">
        <div class="slide_hd">Latest News</div>
        <div class="flexslider">
          <ul class="slides">
            <li>
              <div class="news_caption">20% of government’s procurement should go to SMEs.</div>
              <div class="news_detail">According to the United Nations Industrial Development Organization (UNIDO), SMEs form the backbone of economic growth in most industrialized economies, and account for 50 to 60 percent of employment generation.</div>
            </li>
            <li>
              <div class="news_caption">African challenges demand specific tech solutions.</div>
              <div class="news_detail">Niyi Yusuf is the Managing Partner of Verraki, a pan African business and technology solutions firm. He spoke with journalists, including ADEYEMI ADEPETUN, on the uniqueness of African challenges.</div>
            </li>
            <li>
              <div class="news_caption">Investment in STEM education will boost innovation.</div>
              <div class="news_detail">The Managing Partner at Verraki, Niyi Yusuf, has advocated for increased government investment in Science, Technology, Engineering and Mathematics education to boost innovation in the country.</div>
            </li>
          </ul>
        </div>
      </div>
      
      <div class="menu_nav">
        <div class="inner_wrap">
          <ul class="nav">
            <li><a href="about/">About Us</a></li>
            <li><a href="solutions/">Our Solutions</a></li>
            <li><a href="careers/">Careers</a></li>
            <li><a href="contact/">Contact Us</a></li>
          </ul>
        </div>
      </div>  
   
    </div>
  </div>
  
</body>
</html>
