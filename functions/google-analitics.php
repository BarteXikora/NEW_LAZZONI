<?php

function lazzoni_google_analytics() {

?>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-86816670-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-86816670-1'); 
</script>

<?php

}
add_action('wp_head','lazzoni_google_analytics');