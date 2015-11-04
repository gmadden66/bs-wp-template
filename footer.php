<?php
/**
 *  Theme: 
 *  File: footer.php
 *  Author: Graham Madden
 */
?>

	</main>
	<footer id="footer">
	
	</footer>
</div> <!-- wrapper -->
<?php 
wp_enqueue_style( 'normalize', get_template_directory_uri().'/css/normalize.css' );
wp_enqueue_style( 'main', get_template_directory_uri().'/css/main.css' );
?>

<script>(function(){var method;var noop=function(){};var methods=['assert','clear','count','debug','dir','dirxml','error','exception','group','groupCollapsed','groupEnd','info','log','markTimeline','profile','profileEnd','table','time','timeEnd','timeStamp','trace','warn'];var length=methods.length;var console=(window.console=window.console||{});while(length--){method=methods[length];if(!console[method]){console[method]=noop;}}}());</script>
<?php wp_footer(); ?>

</body>
</html>
