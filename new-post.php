<?php 

	if($_SERVER['REQUEST_METHOD'] == "POST") {

		require 'parts/config.php';

		$sql = "
				INSERT INTO tale (title, content, published_at, author)
				VALUES (?, ?, ?, ?)
				";
		$stmt = mysqli_prepare($conn, $sql);

		if ($stmt === false) {
			echo mysql_error($conn);
		} else {
			mysqli_stmt_bind_param($stmt, "ssss", $_POST['title'], $_POST['content'], $_POST['published_at'], $_POST['author']);
			if(mysqli_stmt_execute($stmt)) {
				$id = mysqli_insert_id($conn);
				echo "View your post here " . $id;
			} else {
				echo mysqli_error($stmt);
			}
		}
	} else {
		echo mysqli_error($conn);
	}

?>

 
<?php require 'parts/header.php' ?>

	<div class="share">
		<div class="share-story">

			<h2 >What have you done?</h2>
			
			<form method="POST">

				<div class="share-story-div">
					<label>Title <input type="text" name="title" placeholder="Name this tale..."></label>
				</div>

				<div class="share-story-div">
					<label>Content<textarea name="content" placeholder="Start writing..."></textarea></label>
				</div>

				<div class="share-story-div">
					<label>Publication Date <input type="datetime-local" name="published_at"></label>
				</div>

				<div class="share-story-div">
					<label>Author <input type="text" name="author" placeholder="Any name"></label>
				</div>
				<button>Share</button>
			</form>

		</div>
		

			<?php require 'parts/sidebar-right.php' ?>
	</div>

	


<?php require 'parts/footer.php' ?>