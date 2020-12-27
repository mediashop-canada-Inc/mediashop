<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after.
 *
 * @package Nimmo
 */
$back_totop_on = nimmo_get_opt('back_totop_on', true); ?>

		</div><!-- #content inner -->
	</div><!-- #content -->

	<?php if(!is_404()) { 
		nimmo_footer(); 
	} ?>

	<?php nimmo_hidden_sidebar(); ?>

	<?php if (isset($back_totop_on) && $back_totop_on) : ?>
	    <a href="#" class="ct-scroll-top">
	    	<i class="ti-angle-up"></i>
	    </a>
	<?php endif; ?>

	</div><!-- #page -->

	<?php wp_footer(); ?>
	
	<?php echo nimmo_get_opt( 'site_footer_code', '' ); ?>

<!-- <script type="text/javascript">
  jQuery(document).ready(function() {
  jQuery('<script type="text/javascript" src="' + <?php //home_url();?> + '/wp-content/plugins/contact-form-7/includes/js/scripts.js"></script>').appendTo('head');
   });
</script> -->
	 
<script src="<?php echo get_stylesheet_directory_uri()?>/assets/jquery.validate.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function() {
    jQuery('#commentform').validate({

    rules: {
      author: {
        required: true,
        minlength: 2
      },

      email: {
        required: true,
        email: true
      },

      comment: {
        required: true,
        minlength: 2
      }
    },

    messages: {
      author: "Please  enter your name",
      email: "Please enter a valid email address.",
      comment: "Please enter your comment"
    },

    errorElement: "div",
    errorPlacement: function(error, element) {
      element.after(error);
    }

    });
});

</script>
<script type="text/javascript">
  jQuery(document).ready(function(){
     var hours=jQuery("#hours");
    
      hours.keyup(function(){
          jQuery("#total").val(total);
          var discount= jQuery("#discount").val();
          var price= jQuery("#price").val();
     
          if(discount !== ''){
           finalprice= price - discount;
           var total = finalprice * hours;
          // alert("With Discount" total);
          }
          else{
          var total = price * hours;
           //alert("Without Discount" total); 
            
          }
          
  });   
  });
</script>
<script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery( ".property_grid" ).append( "<button id='reset'> Reset</button>" );

   
    jQuery( "#reset" ).click( function(){
             
    jQuery('.mix').css('display',"inline-block");
/*    jQuery('.property_grid li:first').addClass('active').siblings().removeClass('active');

*/
      jQuery( ".property_grid .pl-drop_down ul li:first-child" ).each(function() {

        jQuery(this).addClass('active').siblings().removeClass('active');
      });  
   });
  });
</script>

<script>
jQuery(document).ready(function($){
  $(".pl-drop_down").click(function(){
    $(".pl-anim250").toggle();
  });
});
</script>
	</body>
</html>
