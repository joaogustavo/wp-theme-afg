<?php ?>
</main>

<!-- #content -->
<?php get_template_part( 'template-parts/rodape' ); ?>
<!-- google analytics --> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'CODIGO', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_footer(); ?>
</body>
<style>@media screen and (max-width:767px){html{margin-top: 0px !important;}}</style>
<script src="<?=get_template_directory_uri()?>/mlmenu/js/jquery.dlmenu.js"></script>
<script type="text/javascript">
  (function($) { 
    $( '#dl-menu' ).dlmenu({animationClasses : { classin : 'dl-animate-in-5', classout : 'dl-animate-out-5' } });
    $('.video').modaal({ type: 'video'  });
    $('.image').modaal({ type: 'image' });
    $('.fullscreen').modaal({ fullscreen: true });
  })
  (jQuery);
</script>
</html>