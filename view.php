<?php
 include('db.php');
  $select=mysqli_query($connection , "SELECT * FROM sample order by id desc");
  $i=1;
  while($userrow=mysqli_fetch_array($select))
  
  {
  $id=$userrow['id'];
  $username=$userrow['username'];
  $usermail=$userrow['emailid'];
  $usermobile=$userrow['mobileno'];
  $created=$userrow['created']
?>

<div class="display">
  <p> USER NAME : <span><?php echo $username; ?></span>
  </p>
  <br />
  <p> EMAIL ID : <span><?php echo $usermail; ?></span>
  </p>
  <br />
  <p> MOBILE NO : <span><?php echo $usermobile; ?></span>
  </p>
  <br />
  <p> CREATED ON : <span><?php echo $created; ?></span>
  </p>
  <br />
</div>
<?php } ?>
