<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Citation Machine</title>
</head>

<body>

	<div class="container-fluid">

		<h1 class="text-center">Citation Machine</h1>

		<!-- Book form -->
		<form class="form" method="post" name="form-book">

			<!-- author -->
			<div class="form-group">
				<label for="book-author" class="font-weight-bold">Author(s):</label>
				<input type="text" class="form-control" id="book-author">
			</div>

			<!-- title -->
			<div class="form-group">
				<label for="book-title" class="font-weight-bold">Title:</label>
				<input type="text" class="form-control" id="book-title">
			</div>

			<!-- version -->
			<div class="form-group">
				<label for="book-version" class="font-weight-bold">Version:</label>
				<input type="text" class="form-control" id="book-version">
			</div>

			<!-- number -->
			<div class="form-group">
				<label for="book-number" class="font-weight-bold">Number(edition):</label>
				<input type="text" class="form-control" id="book-number">
			</div>

			<!-- publisher -->
			<div class="form-group">
				<label for="book-publisher" class="font-weight-bold">Publisher:</label>
				<input type="text" class="form-control" id="book-publisher">
			</div>

			<!-- publication day -->
			<div class="form-group">
				<label for="book-publication-day" class="font-weight-bold">Publication day:</label>
				<input type="number" class="form-control" id="book-publication-day" min="1" max="31">
			</div>

			<!-- publication month -->
			<div class="form-group">
				<label for="book-publication-month" class="font-weight-bold">Publication month:</label>
				<input type="text" class="form-control" id="book-publication-month">
			</div>

			<!-- publication year -->
			<div class="form-group">
				<label for="book-publication-year" class="font-weight-bold">Publication year:</label>
				<input type="number" class="form-control" id="book-publication-year" min="1">
			</div>

			<button type="button" id="book-create-button" class="btn btn-primary">Create</button>
			<button type="button" id="book-clear-button" class="btn btn-secondary">Clear fields</button>
		</form>










	</div>


	<!-- Bootstrap jquery, popper, then bootstrap.js -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
