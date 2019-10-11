<?php include_once 'header-index.php'; ?>
<main class="home">
	<div class="video-wrapper">
		<div class="tabmenu home">
			<a 
			href="https://www.youtube.com/watch?v=<?php if ($language == 'es'): ?>eAZUwtJ46-E<?php elseif ($language == 'en'):?>ScMzIvxBSi4<?php endif ?>" 
			class="white" 
			data-fancybox><?php if ($language == 'es'): ?>Ver Video<?php elseif ($language == 'en'):?>Watch Video<?php endif ?></a></div>
		<video src="media/home-video.mp4" autoplay loop muted></video>
	</div>
</main>
<?php include_once 'foot.php'; ?>