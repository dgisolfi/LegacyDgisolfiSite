<!DOCTYPE html>
<html>
<?php
//Show all error messages
ini_set('display_errors', true);
error_reporting(E_ALL);

//require files for connection to database, inputing records into db
// and displaying the records on the page
require('scripts/connect_db.php');
require('scripts/inputRecord.php');
require('scripts/showRecord.php');

?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>dgisolfi</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <!--  Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" data-spy="affix">
                <div class="sidebar-header">
                    <h3>The Bushmen</h3>
                </div>
                <!-- <img class="img-profile" src="img/profile.jpg" alt=""> -->
                <div class="sidebar-img">
                  <!-- get the groupme image for the side link image -->
                  <img class="img-profile"  src="https://i.groupme.com/750x750.jpeg.723023e9c9c94967b7ab2d0ebbfda841.preview">
                </div>
                <ul class="list-unstyled components">
                <li class="active">
                      <li><a href="#quotes">Quotes</a></li>
                      <li><a href="#newQuote">Add Quote</a></li>
                </li>
              </ul>
            </nav>

            <!-- Page Content Holder -->
            <section id="quotes">
              <h1>Quotes</h1>

              <?php
              if(isset($_POST['addQuote'])){
		  			         insert_quote_record($dbc);
	  			    }
              #run the query to show all quote records
   			      show_quote_records($dbc);

  		   			# Close database connection
  		   			mysqli_close($dbc);
              ?>
            </section>

            <aside id="newQuote">
              <div id="entryform">
   			       <h1>Add Quote</h1>
               <p>Add a new quote to the list!</p>
               <p>Context is not required</p>
      					<form method="POST">
      					  	<br>Name<br>
      					  	<input id="text" name="author" value="<?php if(isset($_POST['author'])) echo $_POST['author'];?>" required>
      					  	<br>Quote<br>
      					  	<input id="text" name="quote" value="<?php if(isset($_POST['quote'])) echo $_POST['quote'];?>" required>
                    <br>Date in format YYYY-MM-DD<br>
      					  	<input id="text" name="q_date" value="<?php if(isset($_POST['date'])) echo $_POST['date'];?>" required>
                    <br>Context of Quote<br>
      					  	<input id="text" name="q_descr" value="<?php if(isset($_POST['q_descr'])) echo $_POST['q_descr'];?>">
      					  	<br></br>
      					  	<input id="button" name="addQuote" type="submit" value="Add Quote">
      	  			</form>
	   			 </div>
         </aside>

        <!-- jQuery CDN -->
       <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
       <!-- Bootstrap Js CDN -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <!-- Custom Scroller Js CDN -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    </body>
</html>
