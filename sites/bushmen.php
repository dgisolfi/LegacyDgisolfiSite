<!DOCTYPE html>
<html>
<?php
//Show all error messages
ini_set('display_errors', true);
error_reporting(E_ALL);

//require files for connection to database, inputing records into db
// and displaying the records on the page
require('../scripts/connect_db.php');
require('../scripts/inputRecord.php');
require('../scripts/showRecord.php');
require('../scripts/deleteRecord.php');


if($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(isset($_POST['btnDelete'])) {
		$id = $_POST['submit_btn_id'];
		delete_quote_record($id, $dbc);
	}
}
?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/bushmenStyle.css">
        <title>Bushmen Quotes</title>
    </head>
        <!-- Header Showcase -->
        <header id="showcase" class="grid">
            <div class="bg-image"></div>
                <div class="content-wrap">
                    <h1>Add Quote</h1>
                    <p>Add a new quote to the list! All existing quotes can be found below. Context is not required all other fields are. Make sure the date is in YYYY-MM-DD format.</p>
                </div>
        </header>

        <body>
        <!-- Main Area -->
            <main id="main">
                <!-- Section A -->
                <section id="section-a" class="grid">
                    <div id="entryform" class="content-wrap">
                        <?php
                        if(isset($_POST['addQuote'])){
                                    insert_quote_record($dbc);
                           }
                         ?>
                        <form method="POST">
                             <br>Name<br>
                                <input id="text" name="author" value="<?php if(isset($_POST['author'])) echo $_POST['author'];?>" required>
                             <br>Quote<br>
                                <input id="text" name="quote" value="<?php if(isset($_POST['quote'])) echo $_POST['quote'];?>" required>
                             <br>Date<br>
                                <input id="text" name="q_date" value="<?php if(isset($_POST['date'])) echo $_POST['date'];?>" placeholder="YYYY-MM-DD" required>
                             <br>Context<br>
                                <input id="text" name="q_descr" value="<?php if(isset($_POST['q_descr'])) echo $_POST['q_descr'];?>">
                             <br></br>
                                <input id="button" class="btn" name="addQuote" type="submit" value="Add Quote">
                         </form>
                     </div>
                 </section>

                 <!-- Section B -->
                 <section id="section-b" class="grid">
                    <div id="quotes" class="content-wrap">
                        <ul>
                            <?php
                            #run the query to show all quote records
                            show_quote_records($dbc);

                            # Close database connection
                            mysqli_close($dbc);

                            ?>
                        </ul>
                    </div>
            </section>
        </main>
        <footer id="main-footer" class="grid">
            <div>Bushmen Quote Database</div>
            <div>Created By <a href="dgisolfi.php">Daniel Gisolfi</a></div>
        </footer
    </body>
</html>
