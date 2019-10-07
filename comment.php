

<?php
@session_start();




$conn=mysqli_connect('localhost','root','','mothezhub') or die('Connection fail');



	






if(isset($_POST['submit'])){

    
  
 

  



  $names=$_POST['names'];
  $email=$_POST['email'];
  $tel=$_POST['tel'];
  $content=$_POST['content'];
$qry = "INSERT INTO `mothezhub`.`messages` (`messages_id`, `names`, `email`,`tel`, `content`) VALUES (NULL, '$names','$email','$tel','$content')";


$res1 = mysqli_query($conn, $qry);

#$UpdateSql = "UPDATE `employee` SET fname='$fname', lname='$lname',  email='$email',gender='$gender', password='$password' position='$position', username='$username',  department='$department',phone='$phone',      WHERE id=.$id";


if($res1){
	
	echo "<div class='alert alert-success'>Thank you to contact us.</div>";
 
  

}else{
	echo "<div class='alert alert-danger'>Unable to make order. Please try again.</div>";
}

}

?>
















<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Write to us or comment us</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post">
<fieldset class="form-group">
<label for="first_name"> Names</label>
<input  type="text" class="form-control" id="first_name" name="names">
</fieldset>

<fieldset class="form-group">
<label for="first_name"> Tel</label>
<input type="text" class="form-control" id="first_name" name="tel">
</fieldset>



<fieldset class="form-group">
<label for="last_name">E-mail</label>
<input type="email" class="form-control" id="last_name" name="email">
</fieldset>

<fieldset class="form-group">
<label for="last_name">Message</label>
<textarea class="form-control" rows="5" name="content" id="comment"> </textarea>
</fieldset>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </div>
</div>

<div class="text-center">
  <!--<a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">Launch
    Modal Contact Form</a>
</div>-->