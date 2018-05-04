<?php
/**
 * footer
 * 
 */
?>

<footer class="c-footer">
	<h3 class="c-footer__logo"><?php nujawak_the_homelink(); ?></h3>
	
	<nav class="c-footer__nav">
		<ul class="c-footer__links">
			<li class="c-footer__link"><a href="/about/">about</a></li>
			<li class="c-footer__link"><a href="/blog/">blog</a></li>
			<li class="c-footer__link"><a href="mailto:nujawak.online@gmail.com">contact</a></li>
			<li class="c-footer__link"><a href="https://github.com/nujawak/">GitHub</a></li>
		</ul>
	</nav>
	
	<p class="c-footer__WP"><a href="https://ja.wordpress.org/">Proudly powered by WordPress</a></p>
</footer>

<?php wp_footer(); ?>

<?php if ( ! is_user_logged_in() and 'https://nujawak.online' === home_url() ) : ?>
	<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-96859207-1', 'auto');ga('send', 'pageview');</script>
<?php endif; ?>

</body>
</html>