<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
?>
<?php
  $manu = find_by_id('manu',(int)$_GET['id']);
  if(!$manu){
    $session->msg("d","Missing Manufacturers id.");
    redirect('manufacturers.php');
  }
?>
<?php
  $delete_id = delete_by_id('manu',(int)$manu['id']);
  if($delete_id){
      $session->msg("s","manufacturer deleted.");
      redirect('manufacturers.php');
  } else {
      $session->msg("d","manufacturer deletion failed.");
      redirect('manufacturers.php');
  }
?>
