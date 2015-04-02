<!-- <audio class="js-audio-player" src="<?php base_url(); ?>content/audio/smoke.mp3" type="audio/mp3"></audio> -->

		<script async type="text/javascript" src="<?php base_url(); ?>content/js/application.js"></script>
<?php if($url == "contact.php"){ ?>
		<script async type="text/javascript" src="<?php base_url(); ?>content/js/_form.js"></script>
<?php } ?>
		<script async type="text/javascript">
			// TypeKit
			(function(d) {
				var config = {
					kitId: 'uzz8xmd',
					scriptTimeout: 3000
				},
				h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
			})(document);

			// Analytics
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-19247596-1', 'wallaceerick.com.br');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');
		</script>
		
		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
		