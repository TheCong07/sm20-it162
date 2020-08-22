<?php
include "includes/header.php"
?>

<div id="wrapper">
    <main>
        <h1>Contact Cong Ho</h1>
        <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "cong.ho@seattlecentral.edu";  //place your/your client's email address here
        $toName = "Cong Ho"; //place your client's name here
        $website = "Contact Form Test";  //place NAME of your client's website

        // echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
    </main>
</div> <!-- end wrapper -->

<?php
include "includes/footer.php"
?>