<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!-- Ionicons plugin -->
	<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

	<title>Citation Machine</title>
</head>

<body>

	<div class="container-fluid">

		<h1 class="text-center">Citation Machine</h1>

		<div class="row">

			<div class="col-md-6 col-sm-12">

				<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">

					<!-- book tab -->
					<li class="nav-item">
						<a class="nav-link active" id="pills-book-tab" data-toggle="pill" href="#pills-book" role="tab" aria-controls="pills-home" aria-selected="true">Book</a>
					</li>


					<!-- website tab -->
					<li class="nav-item">
						<a class="nav-link" id="pills-wesbite-tab" data-toggle="pill" href="#pills-website" role="tab" aria-controls="pills-profile" aria-selected="false">Website</a>
					</li>

					<!-- periodical tab -->
					<li class="nav-item">
						<a class="nav-link" id="pills-periodical-tab" data-toggle="pill" href="#pills-periodical" role="tab" aria-controls="pills-contact" aria-selected="false">Periodical</a>
					</li>
				</ul>

				<!-- tab content -->
				<div class="tab-content" id="pills-tabContent">

					<!-- book citation -->
					<div class="tab-pane fade show active" id="pills-book" role="tabpanel" aria-labelledby="pills-book-tab">

						<h3>Book</h3>

						<!-- Book form -->
						<form class="form" id="form-book">
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

							<!-- publisher -->
							<div class="form-group">
								<label for="book-publisher" class="font-weight-bold">Publisher:</label>
								<input type="text" class="form-control form-book-input" id="book-publisher">
							</div>

							<div class="form-row">

								<!-- publication day -->
								<div class="form-group col-sm-2">
									<label for="book-publication-day" class="font-weight-bold">Publication day:</label>
									<input type="number" class="form-control" id="book-publication-day" min="1" max="31">
								</div>

								<!-- publication month -->
								<div class="form-group col-sm-4">
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
								<div class="form-group col-sm-6">
									<label for="book-publication-year" class="font-weight-bold">Publication year:</label>
									<input type="number" class="form-control form-book-input" id="book-publication-year" min="1">
								</div>

							</div>

							<!-- create book citation button -->
							<button type="button" id="book-create-button" class="btn btn-primary" onclick="createBookCitation()">Create</button>

							<!-- clear book input fields button -->
							<button type="button" id="book-clear-button" class="btn btn-secondary" onclick="clearBookFields()">Clear fields</button>
						</form>


					</div>

					<!-- website -->
					<div class="tab-pane fade" id="pills-website" role="tabpanel" aria-labelledby="pills-website-tab">
						<h3>Website</h3>

						<!-- website form -->
						<form class="form" id="form-website">
							<!-- author(s) -->
							<div id="website-authors">
								<div class="form-row">

									<!-- first name -->
									<div class="form-group col-sm-4">
										<label for="website-author-first" class="font-weight-bold">Author first:</label>
										<input type="text" class="form-control form-website-input website-author-first">
									</div>

									<!-- last name -->
									<div class="form-group col-sm-4">
										<label for="website-author-last" class="font-weight-bold">Author last:</label>
										<input type="text" class="form-control form-website-input website-author-last">
									</div>

									<!-- remove author button -->
									<div class="form-group col-sm-2">
										<label for="website-remove-author" class="font-weight-bold">Remove author:</label>
										<button type="button" id="remove-author" class="btn btn-secondary website-remove-author" onclick="removeAuthor(this)" disabled>Remove</button>
									</div>

									<!-- add author button -->
									<div class="form-group col-sm-2">
										<label for="website-add-author" class="font-weight-bold">Add author:</label>
										<button type="button" id="website-add-author" class="btn btn-primary" onclick="addWebsiteAuthorField()">Add author</button>
									</div>

								</div>
							</div>

							<!-- title -->
							<div class="form-group">
								<label for="website-title" class="font-weight-bold">Title:</label>
								<input type="text" class="form-control form-website-input" id="website-title">
							</div>

							<!-- container & publisher -->
							<div class="form-row">

								<!-- container -->
								<div class="form-group col-sm-6">
									<label for="website-container" class="font-weight-bold">Container:</label>
									<input type="text" class="form-control form-website-input" id="website-container">
								</div>

								<!-- publisher -->
								<div class="form-group col-sm-6">
									<label for="website-publisher" class="font-weight-bold">Publisher:</label>
									<input type="text" class="form-control form-website-input" id="website-publisher">
								</div>
							</div>

							<!-- publication date -->
							<div class="form-row">
								<!-- publication day -->
								<div class="form-group col-sm-2">
									<label for="website-publication-day" class="font-weight-bold">Publication day:</label>
									<input type="number" class="form-control" id="website-publication-day" min="1" max="31">
								</div>

								<!-- publication month -->
								<div class="form-group col-sm-4">
									<label for="website-publication-month" class="font-weight-bold">Publication month:</label>
									<select class="form-control form-website-input" id="website-publication-month">
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
								<div class="form-group col-sm-6">
									<label for="website-publication-year" class="font-weight-bold">Publication year:</label>
									<input type="number" class="form-control form-website-input" id="website-publication-year" min="1">
								</div>

							</div>

							<!-- location -->
							<div class="form-group">
								<label for="website-location" class="font-weight-bold">URL:</label>
								<input type="text" class="form-control form-website-input" id="website-location">
							</div>

							<!-- access date -->
							<div class="form-row">
								<!-- access day -->
								<div class="form-group col-sm-2">
									<label for="website-access-day" class="font-weight-bold">Access day:</label>
									<input type="number" class="form-control" id="website-access-day" min="1" max="31">
								</div>

								<!-- access month -->
								<div class="form-group col-sm-4">
									<label for="website-access-month" class="font-weight-bold">Access month:</label>
									<select class="form-control form-website-input" id="website-access-month">
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

								<!-- access year -->
								<div class="form-group col-sm-6">
									<label for="website-access-year" class="font-weight-bold">Access year:</label>
									<input type="number" class="form-control form-website-input" id="website-access-year" min="1">
								</div>

							</div>

							<!-- create website citation button -->
							<button type="button" id="website-create-button" class="btn btn-primary" onclick="createWebsiteCitation()">Create</button>

							<!-- clear website input fields button -->
							<button type="button" id="website-clear-button" class="btn btn-secondary" onclick="clearWebsiteFields()">Clear fields</button>
						</form>
					</div>

					<!-- Periodical -->
					<div class="tab-pane fade" id="pills-periodical" role="tabpanel" aria-labelledby="pills-periodical-tab">
						<h3>Periodical</h3>

						<!-- periodical form -->
						<form class="form" id="form-periodical">

							<!-- author(s) -->
							<div id="periodical-authors">
								<div class="form-row">

									<!-- first name -->
									<div class="form-group col-sm-4">
										<label for="periodical-author-first" class="font-weight-bold">Author first:</label>
										<input type="text" class="form-control form-periodical-input periodical-author-first">
									</div>

									<!-- last name -->
									<div class="form-group col-sm-4">
										<label for="periodical-author-last" class="font-weight-bold">Author last:</label>
										<input type="text" class="form-control form-periodical-input periodical-author-last">
									</div>

									<!-- remove author button -->
									<div class="form-group col-sm-2">
										<label for="periodical-remove-author" class="font-weight-bold">Remove author:</label>
										<button type="button" id="remove-author" class="btn btn-secondary periodical-remove-author" onclick="removeAuthor(this)" disabled>Remove</button>
									</div>

									<!-- add author button -->
									<div class="form-group col-sm-2">
										<label for="periodical-add-author" class="font-weight-bold">Add author:</label>
										<button type="button" id="periodical-add-author" class="btn btn-primary" onclick="addPeriodicalAuthorField()">Add author</button>
									</div>

								</div>
							</div>

							<!-- title -->
							<div class="form-group">
								<label for="periodical-title" class="font-weight-bold">Title:</label>
								<input type="text" class="form-control form-periodical-input" id="periodical-title">
							</div>

							<div class="form-row">

								<!-- container -->
								<div class="form-group col-sm-6">
									<label for="periodical-container" class="font-weight-bold">Container:</label>
									<input type="text" class="form-control form-periodical-input" id="periodical-container" placeholder="Journal name">
								</div>

								<!-- publisher -->
								<div class="form-group col-sm-6">
									<label for="periodical-publisher" class="font-weight-bold">Publisher:</label>
									<input type="text" class="form-control form-periodical-input" id="periodical-publisher">
								</div>
							</div>

							<!-- publication date -->
							<div class="form-row">
								<!-- publication day -->
								<div class="form-group col-sm-2">
									<label for="periodical-publication-day" class="font-weight-bold">Publication day:</label>
									<input type="number" class="form-control" id="periodical-publication-day" min="1" max="31">
								</div>

								<!-- publication month -->
								<div class="form-group col-sm-4">
									<label for="periodical-publication-month" class="font-weight-bold">Publication month:</label>
									<select class="form-control form-periodical-input" id="periodical-publication-month">
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
								<div class="form-group col-sm-6">
									<label for="periodical-publication-year" class="font-weight-bold">Publication year:</label>
									<input type="number" class="form-control form-periodical-input" id="periodical-publication-year" min="1">
								</div>

							</div>

							<!-- location -->
							<div class="form-group">
								<label for="periodical-location" class="font-weight-bold">Location (page numbers):</label>
								<input type="text" class="form-control form-periodical-input" id="periodical-location" placeholder="pp 10-45">
							</div>

							<!-- access date -->
							<div class="form-row">
								<!-- access day -->
								<div class="form-group col-sm-2">
									<label for="periodical-access-day" class="font-weight-bold">Access day:</label>
									<input type="number" class="form-control" id="periodical-access-day" min="1" max="31">
								</div>

								<!-- access month -->
								<div class="form-group col-sm-4">
									<label for="periodical-access-month" class="font-weight-bold">Access month:</label>
									<select class="form-control form-periodical-input" id="periodical-access-month">
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

								<!-- access year -->
								<div class="form-group col-sm-6">
									<label for="periodical-access-year" class="font-weight-bold">Access year:</label>
									<input type="number" class="form-control form-periodical-input" id="periodical-access-year" min="1">
								</div>

							</div>


							<!-- create periodical citation button -->
							<button type="button" id="periodical-create-button" class="btn btn-primary" onclick="createPeriodicalCitation()">Create</button>

							<!-- clear periodical input fields button -->
							<button type="button" id="periodical-clear-button" class="btn btn-secondary" onclick="clearPeriodicalFields()">Clear fields</button>
						</form>
					</div>
				</div>

			</div>

			<!-- completed citations section -->
			<div class="col-md-6 col-sm-12">
				<table class="table" id="myTable">
					<thead>
						<tr>
							<th>Citation</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody id="completed-section">
					</tbody>
				</table>
			</div>
		</div>



	</div>

	<script>
		function addCitationRow(citation) {
			var citationCell = '<td>' + citation + '</td>';
			var trash = '<td><ion-icon name="trash" class="remove-row-button" onclick="removeCitationRow(this)"></ion-icon></td>';
			$("#completed-section").append('<tr>' + citationCell + trash + '</tr>');

			sortTable();

			// sortTable($('#tblNodes'),'desc');
		}

		function removeCitationRow(citation) {
			if (confirm('Delete citation?')) {
				$(citation).closest("tr").remove();
			}
		}

		function sortTable() {
			var table, rows, switching, i, x, y, shouldSwitch;
			table = document.getElementById("myTable");
			switching = true;
			/*Make a loop that will continue until
			no switching has been done:*/
			while (switching) {
				//start by saying: no switching is done:
				switching = false;
				rows = table.rows;
				/*Loop through all table rows (except the
				first, which contains table headers):*/
				for (i = 1; i < (rows.length - 1); i++) {
					//start by saying there should be no switching:
					shouldSwitch = false;
					/*Get the two elements you want to compare,
					one from current row and one from the next:*/
					x = rows[i].getElementsByTagName("TD")[0];
					y = rows[i + 1].getElementsByTagName("TD")[0];
					//check if the two rows should switch place:
					if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
						//if so, mark as a switch and break the loop:
						shouldSwitch = true;
						break;
					}
				}
				if (shouldSwitch) {
					/*If a switch has been marked, make the switch
					and mark that a switch has been done:*/
					rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
					switching = true;
				}
			}
		}



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

		// remove a book author
		function removeAuthor(button) {
			$(button).closest(".form-row").remove();
		}

		// creates a book citation
		function createBookCitation() {

			var author = getBookAuthors();
			var title = getBookTitle();
			var publisher = getBookPublisher();
			var publicationDate = getBookPublicationDate();

			var citation = author + title + publisher + publicationDate;
			// $("#completed-section").append(citation);

			addCitationRow(citation);
			clearBookFields();
		}

		// clear book form input field values
		function clearBookFields() {
			$(".form-book-input").val('');
		}


		//  returns the book authors
		function getBookAuthors() {
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

		// returns the book publication date
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

		// returns the book title
		function getBookTitle() {
			var title = $("#book-title").val();

			if (title.length > 0) {
				return ' <i>' + title + '.</i>';
			} else {
				return '';
			}
		}

		// returns the book publisher
		function getBookPublisher() {

			var publisher = $("#book-publisher").val();
			if (publisher.length > 0) {
				return ' ' + publisher + ',';
			} else {
				return '';
			}
		}

		// adds a book author input field to the form
		function addWebsiteAuthorField() {
			var first = '<div class="form-group col-sm-4"><label for="website-author-first" class="font-weight-bold">Author first:</label><input type="text" class="form-control form-website-input website-author-first"></div>';
			var last = '<div class="form-group col-sm-4"><label for="website-author-last" class="font-weight-bold">Author last:</label><input type="text" class="form-control form-website-input website-author-last"></div>';
			var removeButton =
				'<div class="form-group col-sm-2"><label for="website-remove-author" class="font-weight-bold">Remove author:</label><button type="button" class="btn btn-secondary website-remove-author" onclick="removeAuthor(this)">Remove</button></div>';
			var addButton =
				'<div class="form-group col-sm-2"><label for="website-add-author" class="font-weight-bold">Add author:</label><button type="button" id="website-add-author" class="btn btn-primary" onclick="addWebsiteAuthorField()">Add author</button></div>';

			$("#website-authors").append('<div class="form-row">' + first + last + removeButton + addButton + '</div>');
		}


		function createWebsiteCitation() {

			var authors = getWebsiteAuthors();
			var title = getWebsiteTitle();
			var container = getWebsiteContainer();
			var publisher = getWebsitePublisher();
			var publicationDate = getWebsitePublicationDate();
			var location = getWebsiteLocation();
			var accessDate = getWebsiteAccessDate();

			var citation = '<div>' + authors + title + container + publisher + publicationDate + location + accessDate + '</div>';
			// $("#completed-section").append(citation);

			addCitationRow(citation);
			clearWebsiteFields();
		}

		function clearWebsiteFields() {
			$(".form-website-input").val('');
		}

		//  returns the book authors
		function getWebsiteAuthors() {
			var lastNames = document.getElementsByClassName("website-author-last");
			var firstNames = document.getElementsByClassName("website-author-first");

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

		// returns the book title
		function getWebsiteTitle() {
			var title = $("#website-title").val();

			if (title.length > 0) {
				return ' "' + title + '."';
			} else {
				return '';
			}
		}

		function getWebsitePublisher() {
			var publisher = $("#website-publisher").val();
			if (publisher.length > 0) {
				return ' ' + publisher + ',';
			} else {
				return '';
			}
		}

		function getWebsitePublicationDate() {
			var day = $("#website-publication-day").val();
			var month = $("#website-publication-month").val();
			var year = $("#website-publication-year").val();

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

		function getWebsiteContainer() {

			var container = $("#website-container").val();

			if (container.length > 0) {
				return ' <i>' + container + '</i>,';
			} else {
				return '';
			}
		}

		function getWebsiteLocation() {
			var location = $("#website-location").val();

			if (location.length > 0) {
				return ' ' + location + '.';
			} else {
				return '';
			}
		}

		function getWebsiteAccessDate() {
			var day = $("#website-access-day").val();
			var month = $("#website-access-month").val();
			var year = $("#website-access-year").val();

			var result = ' Accessed';

			if (day.length > 0) {
				result = result + ' ' + day;
			}

			if (month.length > 0) {
				result = result + ' ' + month + '.';
			}

			if (year.length > 0) {
				result = result + ' ' + year + '.';
			}

			return result;
		}


		function addPeriodicalAuthorField() {
			var first = '<div class="form-group col-sm-4"><label for="periodical-author-first" class="font-weight-bold">Author first:</label><input type="text" class="form-control form-periodical-input periodical-author-first"></div>';
			var last = '<div class="form-group col-sm-4"><label for="periodical-author-last" class="font-weight-bold">Author last:</label><input type="text" class="form-control form-periodical-input periodical-author-last"></div>';
			var removeButton =
				'<div class="form-group col-sm-2"><label for="periodical-remove-author" class="font-weight-bold">Remove author:</label><button type="button" class="btn btn-secondary periodical-remove-author" onclick="removeAuthor(this)">Remove</button></div>';
			var addButton =
				'<div class="form-group col-sm-2"><label for="periodical-add-author" class="font-weight-bold">Add author:</label><button type="button" id="periodical-add-author" class="btn btn-primary" onclick="addPeriodicalAuthorField()">Add author</button></div>';

			$("#periodical-authors").append('<div class="form-row">' + first + last + removeButton + addButton + '</div>');
		}

		function createPeriodicalCitation() {
			var authors = getPeriodicalAuthors();
			var title = getPeriodicalTitle();
			var container = getPeriodicalContainer();
			var publisher = getPeriodicalPublisher();
			var publicationDate = getPeriodicalPublicationDate();
			var location = getPeriodicalLocation();
			var accessDate = getPeriodicalAccessDate();

			var citation = '<div>' + authors + title + container + publisher + publicationDate + location + accessDate + '</div>';
			// $("#completed-section").append(citation);

			addCitationRow(citation);
			clearPeriodicalFields();
		}

		function clearPeriodicalFields() {
			$(".form-periodical-input").val('');
		}


		//  returns the periodical authors
		function getPeriodicalAuthors() {
			var lastNames = document.getElementsByClassName("periodical-author-last");
			var firstNames = document.getElementsByClassName("periodical-author-first");

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

		// returns the periodical title
		function getPeriodicalTitle() {
			var title = $("#periodical-title").val();

			if (title.length > 0) {
				return ' "' + title + '."';
			} else {
				return '';
			}
		}

		function getPeriodicalContainer() {

			var container = $("#periodical-container").val();

			if (container.length > 0) {
				return ' <i>' + container + '</i>,';
			} else {
				return '';
			}
		}

		function getPeriodicalPublisher() {
			var publisher = $("#periodical-publisher").val();
			if (publisher.length > 0) {
				return ' ' + publisher + ',';
			} else {
				return '';
			}
		}

		function getPeriodicalPublicationDate() {
			var day = $("#periodical-publication-day").val();
			var month = $("#periodical-publication-month").val();
			var year = $("#periodical-publication-year").val();

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

		function getPeriodicalAccessDate() {
			var day = $("#periodical-access-day").val();
			var month = $("#periodical-access-month").val();
			var year = $("#periodical-access-year").val();

			var result = ' Accessed';

			if (day.length > 0) {
				result = result + ' ' + day;
			}

			if (month.length > 0) {
				result = result + ' ' + month + '.';
			}

			if (year.length > 0) {
				result = result + ' ' + year + '.';
			}

			return result;
		}

		function getPeriodicalLocation() {
			var location = $("#periodical-location").val();

			if (location.length > 0) {
				return ' ' + location + '.';
			} else {
				return '';
			}
		}
	</script>


	<!-- Bootstrap jquery, popper, then bootstrap.js -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>
