<?php $url = basename($_SERVER['PHP_SELF']); ?>
	
		<script src="assets/js/_jquery.js"></script>
		<script src="assets/js/_preloader.js"></script>
		<?php if($url == 'projects-with-ajax.php'){ ?>
			<script src="assets/js/_hash.js"></script>
		<?php } ?>
		<script src="assets/js/_carousel.js"></script>
		<script src="assets/js/_custom.js"></script>
		<script>
			(function(d) {
				var config = {
					kitId: 'uzz8xmd',
					scriptTimeout: 3000
				},
				h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
			})(document);
		</script>

		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>