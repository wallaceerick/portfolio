<!-- <audio class="js-audio-player" src="<?php echo $base_url ?>content/audio/smoke.mp3" type="audio/mp3"></audio> -->

		<script src="<?php echo $base_url ?>content/js/application.js"></script>
		<?php if($url == "contact.php"){ ?>
			<script src="<?php echo $base_url ?>content/js/_form.js"></script>
		<?php } ?>
		<script>
			(function(d) {
				var config = {
					kitId: 'uzz8xmd',
					scriptTimeout: 3000
				},
				h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
			})(document);
		</script>
		
		<?php if($base_url == "http://localhost/~wallace/portfolio/"){ ?>
			<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
		<?php } ?>