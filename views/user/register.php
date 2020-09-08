<?php include ROOT."/views/layouts/header.php"?>
<!---End Haeder-->
<section class="banner">
<?php if($result) :?>
    <h3 style="text-align:center">You are Registered</h3>
    <?php else :?>
    <h3 style="text-align:center">Registration</h3>
    <div style="text-align:center">
    <?php if(isset($errors) && is_array($errors)):?>
        <div style="background-color:grey;color:white; padding:2%">
            <?php foreach($errors as $err): ?>
                <p style="padding-bottom:10px"><?php echo $err?></p>
            <?php endforeach;?>
        </div>
            <?php endif;?>
        <form action="#" method="post" style="color:#fff">
           Name:<br>
            <input type="text" name="name" value="<?php echo $name?>">
            <br>
            E-mail:<br>
            <input type="email" name="email" value="<?php echo $email?>">
            <br><br>
            Password:<br>
            <input type="password" name="password" value="<?php echo $password?>">
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form> 
    </div>

<p>If you click the "Submit" button, the form-data will be sent to ....</p>
            <?php endif;?>


</section>
<!-- END CONTACTS -->
<?php include ROOT."/views/layouts/footer.php"?>