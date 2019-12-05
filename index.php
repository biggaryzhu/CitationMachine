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

					<!-- author(s) -->

					<div id="book-authors">
						<div class="form-row">

							<!-- first name -->
							<div class="form-group col-sm-4">
								<label for="book-author-first" class="font-weight-bold">Author first:</label>
								<input type="text" class="form-control form-book-input book-author-first">
							</div>

							<!-- last name -->
							<div class="form-group col-sm-4">
								<label for="book-author-last" class="font-weight-bold">Author last:</label>
								<input type="text" class="form-control form-book-input book-author-last">
							</div>

							<!-- remove author button -->
							<div class="form-group col-sm-2">
								<label for="book-remove-author" class="font-weight-bold">Remove author:</label>
								<button type="button" id="remove-author" class="btn btn-secondary book-remove-author" onclick="removeAuthor(this)" disabled>Remove</button>
							</div>

							<!-- add author button -->
							<div class="form-group col-sm-2">
								<label for="book-add-author" class="font-weight-bold">Add author:</label>
								<button type="button" id="book-add-author" class="btn btn-primary" onclick="addBookAuthorField()">Add author</button>
							</div>

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
						<select class="form-control form-book-input" id="book-publication-month">
							<option value="">None</option>
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

			<!-- completed citations section -->
			<div class="col-md-6 col-sm-12" id="completed-section">
			</div>

		</div>



	</div>

	<script>
		// adds a book author input field to the form
		function addBookAuthorField() {
			var first = '<div class="form-group col-sm-4"><label for="book-author-first" class="font-weight-bold">Author first:</label><input type="text" class="form-control form-book-input book-author-first"></div>';
			var last = '<div class="form-group col-sm-4"><label for="book-author-last" class="font-weight-bold">Author last:</label><input type="text" class="form-control form-book-input book-author-last"></div>';
			var removeButton =
				'<div class="form-group col-sm-2"><label for="book-remove-author" class="font-weight-bold">Remove author:</label><button type="button" class="btn btn-secondary book-remove-author" onclick="removeAuthor(this)">Remove</button></div>';
			var addButton =
				'<div class="form-group col-sm-2"><label for="book-add-author" class="font-weight-bold">Add author:</label><button type="button" id="book-add-author" class="btn btn-primary" onclick="addBookAuthorField()">Add author</button></div>';

			$("#book-authors").append('<div class="form-row">' + first + last + removeButton + addButton + '</div>');
		}

		function removeAuthor(button) {
			$(button).closest(".form-row").remove();
		}


		// creates a book citation
		function createBookCitation() {

			var author = getAuthors();
			var title = getBookTitle();
			var publisher = getBookPublisher();
			var publicationDate = getBookPublicationDate();

			var citation = '<div>' + author + title + publisher + publicationDate + '</div>';



			$("#completed-section").append(citation);
		}



		function getAuthors() {
			var lastNames = document.getElementsByClassName("book-author-last");
			var firstNames = document.getElementsByClassName("book-author-first");

			// zero or 1 author
			if (lastNames.length == 1) {
				var lastName = lastNames[0].value;
				var firstName = firstNames[0].value;

				if (lastName.length == 0 && firstName.length == 0) {
					return '';
				} else {
					var result = lastName + ', ' + firstName + '.';
					return result;
				}
			}

			// 2 authors
			else if (lastNames.length == 2) {
				// first author
				var lastName1 = lastNames[0].value;
				var firstName1 = firstNames[0].value;

				// second author
				var lastName2 = lastNames[1].value;
				var firstName2 = firstNames[1].value;

				var result = lastName1 + ', ' + firstName1 + ', and ' + firstName2 + ' ' + lastName2 + '.';
				return result;

			}

			// three or more authors
			else {
				var firstName = firstNames[0].value;
				var lastName = lastNames[0].value;

				var result = lastName + ', ' + firstName + ', et al.';
				return result;
			}
		}

		function getBookPublicationDate() {


			var day = $("#book-publication-day").val();
			var month = $("#book-publication-month").val();
			var year = $("#book-publication-year").val();

			var result = '';

			if (day.length > 0) {
				result = ' ' + day;
			}

			if (month.length > 0) {
				result = result + ' ' + month + '.';
			}

			if (year.length > 0) {
				result = result + ' ' + year + '.';
			}

			return result;
		}

		function getBookTitle() {
			var title = $("#book-title").val();

			if (title.length > 0) {
				return ' <i>' + title + '.</i>';
			} else {
				return '';
			}
		}

		function getBookPublisher() {

			var publisher = $("#book-publisher").val();
			if (publisher.length > 0) {
				return ' ' + publisher + ',';
			} else {
				return '';
			}
		}







		// returns the display for the edition
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
