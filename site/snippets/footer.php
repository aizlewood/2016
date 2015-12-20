
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

</body>
</html>