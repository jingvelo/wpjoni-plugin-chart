<?php

/*
    Plugin Name: Chart plugin
    Description: A plugin that displays chart by using shortcode
    Version: 1.1
    Author: Joni Malaluan
    Author URI: https://jonimalaluan.com
*/


/* This is a shortcode for displaying Radar Chart*/
function spider_chart_shortcode( $atts ) {
	ob_start();
	?>
    
	<canvas id="myChart"></canvas>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script>

		var ctx = document.getElementById('myChart').getContext('2d');
		var chart = new Chart(ctx, {
			type: 'radar',
			data: {
				labels: ['First', 'Second', 'Third', 'Fourth', 'Fifth'],
				datasets: [{
					label: 'Resilient Assessment',
					backgroundColor: 'rgb(255, 99, 132, 0.8)',
					borderColor: 'rgb(255, 99, 132)',
					data: [9, 9, 3, 8, 7]
				}]
			},

			// Configuration options go here
			options: {
			}
		});							
	</script>


	<?php 

	return ob_get_clean();
}
add_shortcode( 'spider_chart-section', 'spider_chart_shortcode' );