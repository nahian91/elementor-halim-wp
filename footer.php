<?php
   $footer_about_title = get_field('footer_about_title', 'option');
   $footer_about_description = get_field('footer_about_description', 'option');
   $footer_contact = get_field('footer_contact', 'option');
?>
      <!-- Footer Area End -->
      <footer class="footer-area pt-50 pb-50">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6">
                  <div class="single-footer footer-logo">
                     <h3><?php echo $footer_about_title;?></h3>
                     <p><?php echo $footer_about_description;?></p>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6">
                  <div class="single-footer">
                     <?php dynamic_sidebar('footer-1'); ?>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="single-footer">
                     <?php dynamic_sidebar('footer-2'); ?>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="single-footer contact-box">
                     <h4>Contact Us</h4>
                     <ul>
                        <?php
                           foreach ($footer_contact as $contact) {
                        ?>
                           <li><i class="fa <?php echo $contact['footer_contact_icon'];?>"></i> <?php echo $contact['footer_contact_name'];?></li>
                        <?php
                           }
                        ?>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row copyright">
               <div class="col-md-6">
                  <p>&copy; All Rights Reserved 2022</p>
               </div>
               <div class="col-md-6 text-right">
                  <ul>
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                     <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer Area End -->
      <?php wp_footer();?>
   </body>
</html>

