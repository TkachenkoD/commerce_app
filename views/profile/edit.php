<?php include ROOT."/views/layouts/header.php"?>
<!---End Haeder-->
<section class="banner">

    <?php if($result) :?>
    <h3 style="text-align:center">Profile is updated!</h3>
    <?php else :?>
    <h3 style="text-align:center"><?php echo $userInfo["name"]?>, here you can edit your profile</h3>
    <div style="text-align:center">
    <?php if(isset($errors) && is_array($errors)):?>
        <div style="background-color:grey;color:white; padding:2%">
            <?php foreach($errors as $err): ?>
                <p style="padding-bottom:10px"><?php echo $err?></p>
            <?php endforeach;?>
        </div>
            <?php endif;?>
        <form action="#" method="post" style="color:#fff">
          Enter Name:<br>
            <input type="text" name="name" value="<?php echo $userInfo["name"]?>">
            <br>
           Enter Password:<br>
            <input type="password" name="password" value="<?php echo $userInfo["password"]?>">
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form> 
    </div>

<p>If you click the "Submit" button, the form-data will be sent to ....</p>
            <?php endif;?>



    <h4 style="text-align:center"><a href="/profile"> back to profile....</a></h4>
    

<p>type something ....</p>
     


</section>
<!-- END CONTACTS -->
<?php include ROOT."/views/layouts/footer.php"?>