<?php 
	
	require 'parts/config.php';

	$sql = "SELECT *
			FROM tales
			ORDER BY published_at DESC;

	";

	$check = mysqli_query($conn, $sql);

	if ($check == false) {
		echo mysql_error($conn);
	} else {
		$articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
	}

 ?>


<div class="outer-wrap">
<div class="outer">
	<main class="content-area">
				<p hidden id="go_up"></p>
		<div class="readorshare">
			<h2><a href="new-post.php">Share Your Story</a> OR <a href="index.php">Read People's Stories </a></h2>
			<h2></h2>
		</div>


		<div class="article">
			<ul class="article-list">
				<li>
					<article id="first-article">
						<h2><a href="#">I stole my mother's operation money<a></h2>
						<p>Stealing is bad and everyone knows that is true, my mother had a serious operation that coukd mean life or death and I stole her money knowing full well that it is horrible!</p>
					</article>

				</li>
			</ul>
		</div>
	</main>

	<?php require 'parts/sidebar-right.php'; ?>

</div>
</div>


