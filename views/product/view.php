<?php include ROOT."/views/layouts/header.php"?>
<!---End Haeder-->

<div class="content-inner banner">
    <h3 class="content-inner__title">Product # <?php echo $product["name"]?></h3>
    <div class="content-inner__text">Product details: code <?php echo  $product["code"]?>
    <p>Brand:  <?php echo  $product["brand"]?></p>
    <p>Price:  <?php echo  $product["price"]?></p>
    </div>
    <div class="content-inner__text"> <?php echo  $product["description"]?>
    </div>
  </div>
  <div class="content-inner">
    <img src="/templates/images/shaker<?php echo $number?>.png" alt="" style="width:45%">
  </div>
</section>
<!-- END CONTACTS -->
<script src="/templates/JS/Loader.js" async></script>
<script src="/templates/JS/one_more.js" async></script>
<?php include ROOT."/views/layouts/footer.php"?>