<!-- <?php
	session_start();
?> -->
<?php
    if (isset($_SESSION['message']) && !empty($_SESSION['message'])):
    ?>
      <div class="success" style="color:red;"> 
      <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
       ?>
      </div> 
    <?php
    endif
  ?>
