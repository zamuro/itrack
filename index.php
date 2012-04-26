<html>
		<head>
			<script src=assets/js/jquery.min.js></script>
			<link href="assets/stylesheets/styles.css" rel="stylesheet" type="text/css">
		</head>
		<body>
			<div class=header><? require_once "views/common/header.php"; ?> </div>
			<div class=sidebar><? require_once "views/common/sidebar.php"; ?></div>
			<div class=body><? require_once "views/common/lista.php"; ?></div> 
			<script>
			$(".class").live("click", function(e){
			e.preventDefault();
			$(".body").load($(this).attr("href"))
			})
		</script>
	</body>
</html>
