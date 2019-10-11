<?php 
require_once('config/database.php');
require_once('config/functions.php'); 
require_once('objects/api.php'); 
$database = new Database();
$db = $database->getConnection();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Verraki</title>
<!-- InstanceEndEditable -->
<base href="<?php echo $baseUrl; ?>" />
<link href="<?php echo get_url(); ?>" rel="canonical" />
<link type="text/css" rel="stylesheet" href="./assets/css/preset.css"/>
<link type="text/css" rel="stylesheet" href="./assets/css/front_end.css"/>
<link type="text/css" rel="stylesheet" href="./assets/css/fonts.css"/>
<link type="text/css" rel="stylesheet" href="./assets/css/responsive.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<script type="text/javascript" src="./assets/js/jquery-1.8.2.js"></script>
<script type="text/javascript" src="./assets/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="./assets/js/prefixfree-1.0.7.js"></script>
<script type="text/javascript" src="./assets/js/script.js"></script>
<script type="text/javascript" src="./assets/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="./assets/js/polygonizr-min.js"></script>
<script type="text/javascript" src="./assets/js/jquery.3.3.1-min.js"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
  
  <div class="main-wrap">
    
    <div class="header">
      <div class="hdr clearfix">
          
        <div class="brandname"> 
          <a href="./"><img class="w_logo" src="./assets/img/verraki_white.png" /></a>
          <a href="./"><img class="b_logo" src="./assets/img/verraki_logo.png" /></a>
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
              <a href="./"><img src="assets/img/verraki_logo.png" /></a>
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
              <div class="link_title"><a href="solutions">Our Solutions</a></div>
              <ul class="sublinks">
                <li><a href="">Technology</a></li>
                <li><a href="">Advisory</a></li>
                <li><a href="">Ventures</a></li>
              </ul>
            </div>
            
          </div>
          
          <div class="menu_right_col">
            <div class="link_wrap">
              <div class="link_title"><a href="">Industries</a></div>
              <ul class="sublinks">
                <li><a href="">Real Sector</a></li>
                <li><a href="">Social Sector</a></li>
                <li><a href="">Services Sector</a></li>
              </ul>
            </div>
            <div class="link_wrap">
              <div class="link_title"><a href="">Portfolio</a></div>
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
    
    <div class="content"><!-- InstanceBeginEditable name="page-contents" -->
    <div class="pg_banner" style="background-image: url(media/building.jpg)">
      <div class="overlay"></div>
    </div>
    
    <div class="pg_wrap">
      
      <div class="section">
        <div class="inner-wrap">
          <div class="pg_title">About Us</div>
          
          <div class="news_sort">
            <ul class="clearfix">
              <li>Our Company</li>
              <li>Our Value Proposition</li>
              <li>Our Team</li>
              <li>Advisors</li>
              <li>CSR</li>
              <li>FAQs</li>
            </ul>
          </div>
          
          <div class="row-t">
            <div class="sec_cap">Our Company</div>
            <div class="major_cap">Catalysing High Quality Growth by Improving Productivity of Africa’s Enterprises and Governments.</div>
            <div class="col_inner clearfix">
              <div class="left_col det_text">
                <p>Verraki Partners (Verraki) is a business solutions company for Africa. We believe that business solutions specifically fit for purpose are necessary to solve for Africa and deliver inclusive high-quality growth for the continent’s enterprises and governments.</p>
                <p>We work with enterprises and governments to ignite opportunities and achieve the seemingly impossible.</p>
              </div>
              <div class="right_col det_text">
                <p>Achieving and sustaining inclusive high-quality growth requires effective and efficient enterprises and governments to deliver impactful solutions that solve for Africa. We work with our clients to define, build and implement fit for purpose, uniquely African solutions with services across Technology, Advisory and Ventures.</p>
              </div>
            </div>
            
            <div class="col_inner clearfix">
              <div class="col_photo">
                <img src="media/craft4.gif" />
              </div>
              <div class="firm_origin">
                <div class="col_word">
                  <div class="row-f"><span>Ver</span>(sorium)</div>
                  <div class="row-l">Latin word for Turn Around, Pivot </div>
                </div>
                <div class="col_word">+</div>
                <div class="col_word">
                  <div class="row-f">(Me)<span>raki</span></div>
                  <div class="row-l">Greek word used to describe the action of doing with soul, creativity, pouring oneself into a task</div>
                </div>
              </div>
            </div>
            
            <div class="col_inner clearfix">
              <div class="left_col det_text">
                <p>Our <span>Vision</span> is to be the transformation partner of choice for enterprises and governments seeking to create a better future.</p>
              </div>
              <div class="right_col det_text">
                <p>Our <span>Mission</span> is to help enterprises and governments ignite opportunities, unleash their potential and embrace change to achieve the seemingly impossible.</p>
              </div>
            </div>
          
          </div>
        
        </div>
      </div>
      
      <div class="section grey_sec">
        <div class="inner-wrap">
            <div class="sec_cap">Our Value Proposition</div>
            
            <div class="col_inner clearfix">
              <div class="v-wrap">
                <div class="v-title"><span>01</span>Stewardship</div>
                <div class="v-det">We do not take shortcuts and we responsibly manage things entrusted to us, to leave it in a better form than we met it. We have an owner mentality and act to continuously make our firm a better place to work in the future.</div>
              </div>
              <div class="v-wrap">
                <div class="v-title"><span>02</span>Partnership</div>
                <div class="v-det">We collaborate with our clients, communities, alliances and ecosystem partners to share knowledge, assets and resources to deliver value for our clients, stakeholders and people.</div>
              </div>
              <div class="v-wrap">
                <div class="v-title"><span>03</span>Integrity</div>
                <div class="v-det">We always do the right thing. We have strong moral principles and honest work ethics that trump personal agendas.</div>
              </div>
              <div class="v-wrap">
                <div class="v-title"><span>04</span>Commitment</div>
                <div class="v-det">We always deliver excellence to our clients and partners and execute flawlessly. We have a single-minded pursuit of societal impact and believe in Africa’s potential.</div>
              </div>
              <div class="v-wrap">
                <div class="v-title"><span>05</span>Excellence</div>
                <div class="v-det">We continuously develop and reinvent our brand as we strive to exceed the expectations of our people and clients.</div>
              </div>
              <div class="v-wrap">
                <div class="v-title"><span>06</span>People</div>
                <div class="v-det">We nurture our people and create a safe environment to ensure growth and performance delivery to our clients.</div>
              </div>
            </div>
            
        </div>
      </div>
      
      <div class="section">
        <div class="inner-wrap">
            <div class="sec_cap">Our Team</div>
            
            <div class="col_inner clearfix">
              <div class="p_hld">
                <div class="p_photo" style="background-image: url(media/niyi_yusuf.jpg)"></div>
                <a href="">
                  <span>Olaniyi Yusuf</span>
                  <span>Managing Partner</span>
                </a>
              </div>
              <div class="p_hld">
                <div class="p_photo" style="background-image: url(media/toluwaleke.jpg)"></div>
                <a href="">
                  <span>Toluwaleke Adenmosun</span>
                  <span>Partner, Services</span>
                </a>
              </div>
              <div class="p_hld">
                <div class="p_photo" style="background-image: url(media/niyi_tayo.jpg)"></div>
                <a href="">
                  <span>Niyi Tayo</span>
                  <span>Partner, Technology</span>
                </a>
              </div>
              <div class="p_hld">
                <div class="p_photo" style="background-image: url(media/abayomi.jpg)"></div>
                <a href="">
                  <span>Abayomi Olarinmoye</span>
                  <span>Partner, Real Sector</span>
                </a>
              </div>
              <div class="p_hld">
                <div class="p_photo" style="background-image: url(media/kelvin.jpg)"></div>
                <a href="">
                  <span>Kelvin Balogun</span>
                  <span>Partner, Ventures</span>
                </a>
              </div>
            </div>
            
        </div>
      </div>
      
      <div class="section grey_sec">
        <div class="inner-wrap">
            
            <div class="sec_cap">Corporate Social Responsibility</div>
            <div class="major_cap">We drive transformational social impact in Africa by tackling headlong, some of the continent’s biggest hurdles.</div>
            <div class="col_inner clearfix">
              <div class="left_col det_text">
                <p>We help build greater opportunities in society by leveraging our understanding of technology and its impact on people to develop inclusive, responsible, and sustainable solutions to complex business and societal challenges.</p>
                <p>We work with enterprises and governments to ignite opportunities and achieve the seemingly impossible.</p>
              </div>
              <div class="right_col det_text">
                <p>Achieving and sustaining inclusive high-quality growth requires effective and efficient enterprises and governments to deliver impactful solutions that solve for Africa. We work with our clients to define, build and implement fit for purpose, uniquely African solutions with services across Technology, Advisory and Ventures.</p>
              </div>
            </div>
            
        </div>
      </div>
      
      <div class="section">
        <div class="inner-wrap">
          
          <div class="sec_cap">Frequently Asked Questions (FAQ)</div>
          
          <div class="col_inner">
          
          <div class="faq_wrap_l clearfix">
            <div class="faq_hld">
              <div class="ic">
                <div class="ic_text">What is the rationale behind the setting up of Verraki Partners?</div>
                <div class="ic_sign"><span class="sp-1">+</span><span class="sp-2">-</span></div>
              </div>
              <div class="faq_det">
                <div class="faq_text">
                  <p>Professional Services firms in Nigeria are currently at an inflexion point. Digital technologies, new ideas and business models create disruptions, while startups compound the challenging business terrain. New factors such as agility, flexibility, cost-leadership, value for money and entrepreneurship are required for success and to harvest the opportunities from this disruption.</p>
                  <p>Challenges to Accenture operations in Nigeria include FX Restrictions, National Contents regulations, NOTAP mandate for increased local operations, various geopolitical situations and a weakening of the economy.</p>
                </div>
              </div>
            </div>
            
            <div class="faq_hld">
              <div class="ic">
                <div class="ic_text">What does the name Verraki mean?</div>
                <div class="ic_sign"><span class="sp-1">+</span><span class="sp-2">-</span></div>
              </div>
              <div class="faq_det">
                <div class="faq_text">
                  <p>Verraki Partners is the registered name of the Partnership, with Business Number 2759461.</p>
                  <p>Verraki is a fusion of two words: ‘Versorium’ (Latin for Turn Around) and ‘Meraki’ (Greek word used to describe the action of doing something with soul, creativity, pouring oneself into a task), Verraki aptly captures the essence of our company and how we will work.</p>
                </div>
              </div>
            </div>
            
            <div class="faq_hld">
              <div class="ic">
                <div class="ic_text">How appropriate is the timing of Verraki’s entrance into the industry in Nigeria?</div>
                <div class="ic_sign"><span class="sp-1">+</span><span class="sp-2">-</span></div>
              </div>
              <div class="faq_det">
                <div class="faq_text">
                  <p>We support and develop policies and practices that encourage and respond to the diverse expressions of gifts and talents in children and youth. We help identify talented and gifted pupils and students, that is, those who out perform at the level expected for children in their age group. This may be in one or more areas of learning. We support and engage in research and development, staff development, advocacy, communication, and collaboration with other organizations and agencies who strive to improve the quality of education for all students.</p>
                </div>
              </div>
            </div>
            
            <div class="faq_hld">
              <div class="ic">
                <div class="ic_text">Does this translate into Accenture leaving Nigeria?</div>
                <div class="ic_sign"><span class="sp-1">+</span><span class="sp-2">-</span></div>
              </div>
              <div class="faq_det">
                <div class="faq_text">
                  <p>No! Accenture is not exiting Nigeria. Accenture Limited remains a legal entity which has re-organized its presence in Nigeria. Importantly, services to some Accenture clients in Nigeria will now be delivered through Verraki.</p>
                </div>
              </div>
            </div>
          </div>
          
          <div class="faq_wrap_r">
            <div class="faq_hld">
              <div class="ic">
                <div class="ic_text">Is Accenture selling any part of the business to Verraki Partners?</div>
                <div class="ic_sign"><span class="sp-1">+</span><span class="sp-2">-</span></div>
              </div>
              <div class="faq_det">
                <div class="faq_text">
                  <p>Accenture is not selling the business. However, Accenture is transitioning some existing services for Clients to the new organization, Verraki Partners on confidential terms.</p>
                </div>
              </div>
            </div>
            
            <div class="faq_hld">
              <div class="ic">
                <div class="ic_text">Should Nigerians expect setting up another Accenture office in Lagos or any other part soon?</div>
                <div class="ic_sign"><span class="sp-1">+</span><span class="sp-2">-</span></div>
              </div>
              <div class="faq_det">
                <div class="faq_text">
                  <p>We cannot speculate about the planned evolution of Accenture’s strategy and business in Nigeria. That is a matter for Accenture to decide in the future.</p>
                </div>
              </div>
            </div>
            
            <div class="faq_hld">
              <div class="ic">
                <div class="ic_text">Does this mean Accenture will not look at future/new Nigerian business?</div>
                <div class="ic_sign"><span class="sp-1">+</span><span class="sp-2">-</span></div>
              </div>
              <div class="faq_det">
                <div class="faq_text">
                  <p>It is expected that each opportunity that presents itself will be carefully considered by Accenture to determine next course of action.</p>
                </div>
              </div>
            </div>
            
            <div class="faq_hld">
              <div class="ic">
                <div class="ic_text">Will you still have offshore technical assistance that can be deployed to Client’s work?</div>
                <div class="ic_sign"><span class="sp-1">+</span><span class="sp-2">-</span></div>
              </div>
              <div class="faq_det">
                <div class="faq_text">
                  <p>Yes! Verraki Partners has a Services Provisioning Agreement with Accenture that defines how both companies can provide services to each other.</p>
                </div>
              </div>
            </div>
          </div>
          
          </div>
          
        </div>
      </div>
           
      
      
    
    </div>
    <!-- InstanceEndEditable -->
    </div>
    
    <div class="footer">
      <div class="inner-wrap">
        <div class="row-1 clearfix">
          
          <div class="col-1">
            <div class="col-hd">Quick Links</div>
            <div class="col-links clearfix">
              <ul>
                <li><a href="./">Home</a></li>
                <li><a href="about/">About Us</a></li>
                <li><a href="solutions/">Our Solutions</a></li>
                <li><a href="#">Industries</a></li>
                <li><a href="newsroom/">Newsroom</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="careers/">Careers</a></li>
                <li><a href="contact/">Contact Us</a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-2">
            <div class="col-hd">Contact</div>
            <div class="col-links">
              <div class="col-info">2nd Floor, Citibank Building, <br />27 Kofo Abayomi Street, Victoria Island, <br /> Lagos, Nigeria.</div>
              <div class="col-info clearfix">
                <p><a href="">+234 (1) 453 7151,</a></p>
                <p><a href="">0901-VERRAKI</a></p>
              </div>
              <div class="col-info">
                <p><a href="">info@verraki.com</a></p>
              </div>
              
            </div>
          </div>
          <div class="col-3">
            <div class="col-hd">Social</div>
            <div class="col-links">
              <a href="https://linkedin.com/" class="fab fa-linkedin-in"></a>
              <a href="https://facebook.com/" class="fab fa-facebook-f"></a>
              <a href="https://twitter.com/" class="fab fa-twitter"></a>
              <a href="https://youtube.com/" class="fab fa-youtube"></a>
              <a href="https://instagram.com/" class="fab fa-instagram"></a>
            </div>
<!--            <div class="v_gram">
              <img src="../assets/img/v_orange.png" />
              <div class="w_cover"></div>
            </div>
-->          </div>
        </div>
        <div class="row-2">
          <div class="copyright">&copy; <?php echo date(Y); ?> Verraki Partners - All Rights Reserved</div>
        </div>
      </div>
    </div>
  
  
  </div>

</body>
<!-- InstanceEnd --></html>