
	<footer class="footer cf" role="contentinfo">
<?php if($page == 'about'): ?>

		<?php snippet('social-links') ?>	
		
<?php endif ?>
		<small class="footer blog">&copy; <?php echo date("Y"); ?> CarbonGraffiti Ltd. All rights reserved.</small>

	</footer>

<?php echo js('assets/js/main.js') ?>
<script>
var nav = responsiveNav(".nav-collapse");

<?php if($page == 'about'): ?>



var options = {
  useEasing : true, 
  useGrouping : true, 
  separator : ',', 
  decimal : '.', 
  prefix : '', 
  suffix : '' 
};
var numAnim = new CountUp("age", 0, 13505, 0, 5, options);
var numAnim2 = new CountUp("career", 0, 11, 0, 15.5, options);
var numAnim3 = new CountUp("uk", 0, 2920, 0, 11, options);
var numAnim4 = new CountUp("strava", 0, 5131.4, 0, 11, options);
numAnim.start();
numAnim2.start();
numAnim3.start();
numAnim4.start();

<?php endif ?>
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1256664-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>