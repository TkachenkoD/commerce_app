<?php include ROOT."/views/layouts/header.php"?>
<!---End Haeder-->
<section class="banner">

    
    <h3 style="text-align:center">Login the site</h3>
    <div style="text-align:center">
    <?php if(isset($errors) && is_array($errors)):?>
        <div style="background-color:grey;color:white; padding:2%">
            <?php foreach($errors as $err): ?>
                <p style="padding-bottom:10px"><?php echo $err?></p>
            <?php endforeach;?>
        </div>
            <?php endif;?>
        <form action="#" method="post" style="color:#fff">
         
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
         


</section>
<!-- END CONTACTS -->
<?php include ROOT."/views/layouts/footer.php"?>