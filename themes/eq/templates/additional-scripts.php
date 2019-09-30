<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '', 'auto');
  ga('send', 'pageview');
</script>

<script>
	jQuery(document).ready(function(){

    // Select and loop the container element of the elements you want to equalise
    jQuery('.container').each(function(){  
      
      // Cache the highest
      var highestBox = 0;
      
      // Select and loop the elements you want to equalise
      jQuery('.column', this).each(function(){
        
        // If this box is higher than the cached highest then store it
        if(jQuery(this).height() > highestBox) {
          highestBox = jQuery(this).height(); 
        }
      
      });  
            
      // Set the height of all those children to whichever was highest 
      jQuery('.column',this).height(highestBox);
                    
    }); 

});
</script>

<script>
jQuery(document).ready(function($) {
  // Check if element is scrolled into view
  function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  }
  // If element is scrolled into view, fade it in
  $(window).scroll(function() {
    $('.btn').each(function() {
      if (isScrolledIntoView(this) === true) {
        $(this).addClass('animated fadeIn');
      }
    });
  });
  $(window).scroll(function() {
    $('.solutions-single').each(function() {
      if (isScrolledIntoView(this) === true) {
        $(this).addClass('animated fadeIn');
      }
    });
  });
  $(window).scroll(function() {
    $('.page-section').each(function() {
      if (isScrolledIntoView(this) === true) {
        $(this).addClass('animated fadeIn');
      }
    });
  });
  $(window).scroll(function() {
    $('.column').each(function() {
      if (isScrolledIntoView(this) === true) {
        $(this).addClass('animated fadeIn');
      }
    });
  });
});
</script>