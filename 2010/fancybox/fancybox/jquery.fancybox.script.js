// JavaScript Document
/* -=(Piter)=- */

$(document).ready(function() {
			/*
			*   Examples - iframe
			*/
			<?php $i=1;
			while ($i<=3)
			  {
				?>		 
			 $("#frame<?php echo $i; ?>").fancybox({
				'width'				: '90%',
				'height'			: '90%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
			<?php 
			  $i++;
			  }
			?>
									
		});