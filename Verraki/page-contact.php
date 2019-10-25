<?php get_header(); ?>
    
    <div class="content">
    <div class="pg_banner" style="background-image: url(<?php bloginfo('template_directory'); ?>/media/building.jpeg)">
      <div class="overlay"></div>
    </div>
    
    <div class="section">
      <div class="inner-wrap">
        
        <div class="pg_title">Contact Us</div>
        
        <div class="col_inner">
        
          <div class="major_cap">How can we be of help?</div>
          <div class="det_text s_line">
            <p>Contact us about your upcoming project, questions about our services and capabilities, or any other questions you have regarding Verraki.</p>
          </div>
        
        </div>
        
        <div class="row-t">
          
          <div class="cont_wrap">
          
            <div class="cont_hld">
              <div class="cont_title">Address</div>
              <div class="cont_det">
                <p>2nd Floor, Citibank Building, <br />27 Kofo Abayomi Street, Victoria Island,<br />Lagos, Nigeria.</p>
              </div>
            </div>
            
            <div class="cont_hld">
              <div class="cont_title">Email</div>
              <div class="cont_det">
                <p>info@verraki.com</p>
              </div>
            </div>
            
            <div class="cont_hld">
              <div class="cont_title">Phone</div>
              <div class="cont_det">
                <p>+234 (1) 453 7151</p>
                <p>0901-VERRAKI</p>
              </div>
            </div>
          
          </div>
          
          <form>
            
            <div class="in_row clearfix">
              <div class="tgroup">
             	<label>Name</label>
                <input type="text" id="name" name="name" />
              </div>
              
              <div class="tgroup">
             	<label>Email</label>
                <input type="email" id="email" name="email" />
              </div>
            </div>
            
            <div class="in_row clearfix">
              <div class="tgroup">
             	<label>Phone</label>
                <input type="phone" id="phone" name="phone"/>
              </div>
              <div class="tgroup">
             	<label>Company</label>
                <input type="text" id="company" name="company" />
              </div>
            </div>
            
            <div class="in_row clearfix">
              <div class="tgroup">
                <label>Message</label>
                <textarea placeholder="Enter Text Here"></textarea>
              </div>
            </div>
            
            <button class="edge-cta" id="submit">Submit</button>
          
          </form>
          
        </div>
        
        <div class="row-t">
        
          <div class="pg_wrap">
            <div id="map"></div>
          </div>
            
         </div>
        
       </div>
        
      </div>
    </div>
    
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnfMCvOW_WJ2Y3OjlcZlE_3yCxXOK9mzs"></script>
    <script>
		var myCenter = new google.maps.LatLng(6.436394, 3.418948);
		function initialize(){
    		var mapProp = {
				center:myCenter,
				zoom:15,
				mapTypeId:google.maps.MapTypeId.ROADMAP
			};

		var map = new google.maps.Map(document.getElementById("map"),mapProp);

		var marker = new google.maps.Marker({
			position:myCenter,
		});

		marker.setMap(map);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
    
    </div>
    
   <?php get_footer(); ?>
