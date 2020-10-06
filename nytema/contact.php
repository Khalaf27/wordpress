<?php
/* Template Name: Formular */

get_header();
?>

	<main id="primary" class="site-main">

		<form action="minform.php" method="post">
    <p>
    First name 
    <br>
    <br>
    <input type="text" name="firstname" value="..." size="20">
    <br>
    <br>
    </p>
       <p>
    Last name 
    <br>
    <br>
    <input type="text" name="lastname" value="..." size="20">
    <br>
    <br>
    </p>
       <p>
    Email 
    <br>
    <br>
    <input type="text" name="email" value="..." size="20">
    <br>
    <br>
   <input type="submit" name="submitknap" value="knap">
    </p>

    </form>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

