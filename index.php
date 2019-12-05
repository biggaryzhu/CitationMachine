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

		<div class="row">

			<div class="col-md-6 col-sm-12">

				<!-- Book form -->
				<form class="form" method="post" id="form-book">

					<!-- author -->
					<div class="form-row">

						<!-- first name -->
						<div class="form-group col-sm-6">
							<label for="book-author-first" class="font-weight-bold">Author first:</label>
							<input type="text" class="form-control form-book-input" id="book-author-first">
						</div>

						<!-- last name -->
						<div class="form-group col-sm-6">
							<label for="book-author-last" class="font-weight-bold">Author last:</label>
							<input type="text" class="form-control form-book-input" id="book-author-last">
						</div>

					</div>

					<!-- title -->
					<div class="form-group">
						<label for="book-title" class="font-weight-bold">Title:</label>
						<input type="text" class="form-control form-book-input" id="book-title">
					</div>

					<!-- version -->
					<!-- <div class="form-group">
						<label for="book-version" class="font-weight-bold">Version:</label>
						<input type="text" class="form-control form-book-input" id="book-version">
					</div> -->

					<!-- number -->
					<!-- <div class="form-group">
						<label for="book-number" class="font-weight-bold">Number(edition):</label>
						<input type="text" class="form-control form-book-input" id="book-number">
					</div> -->

					<!-- publisher -->
					<div class="form-group">
						<label for="book-publisher" class="font-weight-bold">Publisher:</label>
						<input type="text" class="form-control form-book-input" id="book-publisher">
					</div>

					<!-- publication day -->
					<div class="form-group">
						<label for="book-publication-day" class="font-weight-bold">Publication day:</label>
						<input type="number" class="form-control" id="book-publication-day" min="1" max="31">
					</div>

					<!-- publication month -->
					<div class="form-group">
						<label for="book-publication-month" class="font-weight-bold">Publication month:</label>
						<!-- <input type="text" class="form-control form-book-input" id="book-publication-month"> -->
						<select class="form-control form-book-input" id="book-publication-month">
							<option value="Jan">January</option>
							<option value="Feb">February</option>
							<option value="Mar">March</option>
							<option value="Apr">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="Aug">August</option>
							<option value="Sep">September</option>
							<option value="Oct">October</option>
							<option value="Nov">November</option>
							<option value="Dec">December</option>
						</select>
					</div>

					<!-- publication year -->
					<div class="form-group">
						<label for="book-publication-year" class="font-weight-bold">Publication year:</label>
						<input type="number" class="form-control form-book-input" id="book-publication-year" min="1">
					</div>

					<!-- create book citation button -->
					<button type="button" id="book-create-button" class="btn btn-primary" onclick="createBookCitation()">Create</button>

					<!-- clear book input fields button -->
					<button type="button" id="book-clear-button" class="btn btn-secondary">Clear fields</button>
				</form>

			</div>

			<div class="col-md-6 col-sm-12" id="completed-section" >
			</div>

		</div>



	</div>

	<script>

	function createBookCitation() {

		// get the info
		var first = $("#book-author-first").val();
		var last = $("#book-author-last").val();
		var title = $("#book-title").val();
		// var version = $("#book-version").val();
		// var number = $("#book-number").val();
		var publisher = $("#book-publisher").val();
		var day = $("#book-publication-month").val();
		var month = $("#book-publication-day").val();
		var year = $("#book-publication-year").val();

		var publicationDate = day + ' ' + month + '. ' + year + ', ';

		var citation = '<div>' + last + ', ' + first + '. <i> ' + title + '</i>. ' +  publisher  + ', ' +  publicationDate   +  '</div>';

		$("#completed-section").append(citation);


	}

	function getBookEdition(edition) {

		if (edition == 1) {
			return '1st';
		} else if (edition == 2) {
			return '2nd';
		} else if (edition == 3) {
			return '3rd';
		} else {
			return edition + 'th';
		}
	}






	</script>

















	<!-- Bootstrap jquery, popper, then bootstrap.js -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
