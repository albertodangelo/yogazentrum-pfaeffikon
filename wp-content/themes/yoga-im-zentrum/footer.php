		<?php if($this_item->title != "Stundenplan" && get_the_ID() != 15 ) 
		{ ?>
			</div>
			<div class="col-lg-2 "></div>
		</div>    
		<?php } ?>
    </div><!-- end main container -->
	<?php 
	
   ?>
	
	<?php if (get_the_ID() != 15) { ?>
	
	
    <div class="container container-zertifikat">
        <img class="zertifikat" src="<?php  echo get_template_directory_uri() ?>/images/zertifikat-iyengar.png" >
    </div>

    
		
    <footer>  
          <div class="container footer">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6"><p class="school">IYENGAR-YOGA-IM-ZENTRUM<br />Cardiance Clinic</p>
        </div>
            <div class="col-lg-3 col-md-6  col-sm-6">
          <p>                 
            Zentrum Staldenbach 5/7<br />
            8808 Pfäffikon SZ / Schweiz<br />
            www.cardiance.com<br />
            052-303 47 47
          </p>
          </div>
            <div class="col-lg-3 col-md-6  col-sm-6">
              <p>
                Die Yogaschule<br />   
            IYENGAR-YOGA-IM-ZENTRUM<br />
            befindet sich in den Räumlichkeiten<br />
            der  CARDIANCE CLINIC
          </p>
            </div>
          <div class="col-lg-3 col-md-6  col-sm-6">
            <p>
              Informationen zu Yogatherapie<br /> 
            und Anmeldung:<br />
            <a href="mailto:info@iyengar-yoga-im-zentrum.ch">info@iyengar-yoga-im-zentrum.ch</a><br />
            079-741 97 09
            </p>

          </div>

            </div>
          </div>
   <div class="container under-footer">
      <div class="row">
        <p>Impressum | Disclaimer | Datenschutz | Sitemap</p>
      </div>
    </div>

    </footer>  
    
 	
	<?php } ?>
	
	
	
        <?php wp_footer(); ?>
    </body>
</html>


