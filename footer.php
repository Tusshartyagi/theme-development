 <!-- CTA Area Start -->
 <section class="cta">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h4><?php the_field('cta_title','option'); ?> <span><?php the_field('description','option'); ?></span></h4>
         </div>
         <div class="col-md-6 text-center">
            <a href="<?php the_field('cta_btn_url','option'); ?>" class="box-btn"><?php the_field('cta_btn_text','option'); ?> <i class="fa fa-angle-double-right"></i></a>
         </div>
      </div>
   </div>
</section>
<!-- CTA Area End -->
<!-- Footer Area End -->
<footer class="footer-area pt-50 pb-50">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-6">
         <?php 
                if(is_active_sidebar('footer-1')){
                    dynamic_sidebar('footer-1');
                }
              
              ?>
         </div>
         <div class="col-lg-2 col-md-6">
         <?php 
                if(is_active_sidebar('footer-2')){
                    dynamic_sidebar('footer-2');
                }
              
              ?>
         </div>
         <div class="col-lg-4 col-md-6">
         <?php 
                if(is_active_sidebar('footer-3')){
                    dynamic_sidebar('footer-3');
                }
              
              ?>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="single-footer contact-box">
               <h4><?php the_field('footer_contact_title','option'); ?></h4>
               <ul>
                  <?php 
                     $footer_contact=get_field('footer_contact','option');
                     foreach ($footer_contact  as $contact ){
                        ?>
                        <li><i class="fa <?php echo $contact['footer_contact_icon']; ?>"></i> <?php echo $contact['footer_contact_text']; ?></li>

                   <?php     
                     }
                  ?>
                  
               </ul>
            </div>
         </div>
      </div>
      <div class="row copyright">
         <div class="col-md-6">
            <p><?php the_field('footer_copyright','option'); ?></p>
         </div>
         <div class="col-md-6 text-right">
            <ul>
               <?php 
                 $footer_socials = get_field('footer_socials','option');
                  foreach($footer_socials as $social){
                     ?>
                     <li><a href="<?php echo $social['footer_socials_link']; ?>"><i class="fa <?php echo $social['footer_socials_icon']; ?>"></i></a></li>
                  <?php
                  }

              
               ?>
              
            </ul>
         </div>
      </div>
   </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>