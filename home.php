<?php 
/*  Template Name: HomePage */

get_header();	
?>

<div class="trade-stats"></div>

<?php echo do_shortcode("[api-data]"); ?>

<!-- <script>
     
	const url = 'https://trades.tradegenie.app/api/OP85JUH3JK6LKIO/trades-stats';
	const dataCollection = document.querySelector('.trade-stats');
	
	fetch(url)
	.then(response =>response.json())
	.then(data => console.log(data));
	
</script> -->


<?php
get_footer();
?>
