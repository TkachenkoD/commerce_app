<?php include ROOT."/views/layouts/header.php"?>
<!---End Haeder-->
<h4>test product List</h4>
<section class="mainContainer banner">

<aside class="mainContainer-sidebar">
<ul>
    <?php foreach($listCategories as $category):?>
      <li>
        <a href="/products/category/<?php echo $category["id"];?>" class=<?php if($categoryId == $category["id"]) echo "isActive"?>><?php echo $category["name"];?></a></li>

      
    <?php endforeach;?>
</ul>         
</aside>
<div class="mainContainer-content">
<h2>list of items in <?php echo $listCategories[$categoryId-1]["name"];?></h2>

  <div class="mainContainer-content__wraper"> 
  <?php foreach($listProductsById as $singleProduct):?>
    <div>
        <h3>Title</h3>
        <div>
            <img src="/templates/images/shaker<?php echo $singleProduct["id"];?>.png" style="height:100px" alt="">
        </div>
        <a href="/products/<?php echo $singleProduct["id"];?>"><?php echo $singleProduct["name"];?></a>
   
        <p>
        <?php echo $singleProduct["price"]."and id: ".$singleProduct["id"];?> 
        </p>
    </div>
    <?php endforeach;?>
    <!-- pagination here -->
  </div>
    <?php echo $pagination->get()?>
</div>
</section>
<!-- END CONTACTS -->
<?php include ROOT."/views/layouts/footer.php"?>