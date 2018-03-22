<?php

include_once('includes/connection.php');
include_once('includes/article.php');

$article = new Articles;
$article = $article->fetch_All();


 ?>


<html>
	<head>
		<title>Squadhead</title>
    <link rel="stylesheet" href="assets/article.css" />
	</head>
	<body>
		<div class="container">
			<a href="index.php" id="logo">CMS</a>

			<ol>
        <?php foreach ($articles as $article) { ?>
				<li>
          <a href="article.php?id=<?php echo $article['article_id']; ?>">
        <?php echo $article['article_title']; ?>
      </a>

        - <small>
      posted <?php echo date('l jS', $article['article_timestamp']) ?>
        </small>
      </li>
      <?php } ?>
      </ol>

      <br />

      <small><a href="radmin">radmin</small>
		</div>
	</body>
</html>
