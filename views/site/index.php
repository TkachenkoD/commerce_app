<?php include ROOT."/views/layouts/header.php"?>
<section class="banner clearfix">
  <div class="banner-inner">
    <h2 class="banner-inner__title">Custom & Private Label</h2>
    <h2 class="banner-inner__title">Shaker Bottles</h2>
    <div class="banner-inner__text">The World's Largest Selection of Private Label Shaker Bottles, Pill organizers, and other Promotional Fitness Items. Customize with your company logo and colors.
    </div>
    <div class="banner-inner__btn">
    <a href="/products">
      <button>
     View all Shakers
      </button>
      </a>
    </div>
    <div class="banner-inner__link">
      <a href="">Watch how it works</a>
    </div>
  </div>
  <div class="banner-inner">
    <img src="/templates/images/draft1.png" alt="">
  </div>
</section>
<!--End Banner-->
<section class="brandLine clearfix">
  <div class="brandLine-inner__oneOfThree">
    Over 3,000,000 shakers shipped to date
  </div>
  <div class="brandLine-inner__twoOfThree">
    <ul class="brands-item">
    <?php foreach($listCategories as $category):?>
      <li><a href="/products/<?php echo $category["id"]?>"><img src="/templates/images/brand<?php echo $category["id"]?>.png" style="height:25px" alt=""><?php echo $category["name"]?></a></li>
    <?php endforeach;?>
    </ul>
  </div>
</section>
<!-- END Brands line -->
<section class="carusel-outter">
<div id="carousel" class="carousel">
   <button class="arrow prev"></button>
   <div class="gallery">
     <ul class="images">
       <li><img src="/templates/images/shaker1.png" data-item="shaker1"></li>
       <li><img src="/templates/images/shaker4.png" data-item="shaker2"></li>
       <li><img src="/templates/images/shaker1.png" data-item="shaker3"></li>
       <li><img src="/templates/images/shaker2.png" data-item="shaker4"></li>
       <li><img src="/templates/images/shaker1.png" data-item="shaker1"></li>
       <li><img src="/templates/images/shaker4.png" data-item="shaker1"></li>
       <li><img src="/templates/images/shaker3.png" data-item="shaker1"></li>
       <li><img src="/templates/images/shaker1.png" data-item="shaker1"></li>
       <li><img src="/templates/images/shaker4.png" data-item="shaker1"></li>
       <li><img src="/templates/images/shaker1.png" data-item="shaker1"></li>
       <li><img src="/templates/images/shaker4.png" data-item="shaker1"></li>
     </ul>
   </div>
   <button class="arrow next"></button>
 </div>
 </section>
<!-- end galery carousel -->
<section class="adwert">
    <div class="adwert-inner">
      We supply shakers and acessories to some of the largest name brands in the supplement industry.
    </div>
</section>
<!--  END ADWERTISMENT BLOCK-->
<section class="content clearfix">
  <div class="content-inner">
    <h3 class="content-inner__title">Custom design & Free mockups</h3>
    <div class="content-inner__text">Our shaker bottles comes in various shapes and sizes, and can be custom-designed from over 20 molds.
    </div>
    <div class="content-inner__text">All shakers are customizable with your logo and any color on lid and body, and we provide free mockups of yourshaker prior to sampling.
    </div>
  </div>
  <div class="content-inner">
    <img src="IMG/draft2.png" alt="">
  </div>
</section>
<!--  end CONTENT block 1 of 2-->
<section class="content clearfix">
  <div class="content-inner content-inner--left-img">
    <img src="IMG/people.png" alt="">
  </div>
  <div class="content-inner">
    <h3 class="content-inner__title">Door to Door Pricing</h3>
    <div class="content-inner__text">Our shaker bottles comes in various shapes and sizes, and can be custom-designed from over 20 molds.
    </div>
    <div class="content-inner__text">All shakers are customizable with your logo and any color on lid and body, and we provide free mockups of yourshaker prior to sampling.
    </div>
  </div>
</section>
<!-- END CONTENT BLOCK 2 of 2-->
<section class="adwert adwert--testimonials">
    <div class="adwert-inner adwert-inner--testimonials">
      What our clients are saying.
    </div>
</section>
<!-- end adwert-restimonials -->
<section class="testimonials clearfix">
  <section class="testimonials-inner">
    <p class="testimonials-inner__article">We chose shakerfactory for their efficiency and friendly sales team, get in touch with them and you’ll know what I mean.and friendly sales team, get in touch with them and you’ll know what I mean.
    </p>
      <div class="testimonials-inner__author-name">
        Angelo Eu
      </div>
      <div class="testimonials-inner__company-name">
        Optimum Nutrition
      </div>
  </section>
  <section class="testimonials-inner">
    <p class="testimonials-inner__article">The two most significant benefits of Shakerfactory for me are the good prices and the high quality of products.
    </p>
    <div class="testimonials-inner__author-name">
      Spiros Maragakis
    </div>
    <div class="testimonials-inner__company-name">
      X-Treme Stores
    </div>
  </section>
  <section class="testimonials-inner">
    <p class="testimonials-inner__article">To future clients I would say that Shakerfactory has both good personal service and good prices.
    </p>
    <div class="testimonials-inner__author-name">
      Arnaugur Einarsson
    </div>
    <div class="testimonials-inner__company-name">
      Aliajia Ehf
    </div>
  </section>
</section>
<!--  END testimonials 3 column section-->
<section class="adwert adewert--cta">
    <div class="adwert-inner adwert-inner--cta">
      We supply shakers to some of the largest name
brands in the supplement industry.
    </div>
    <div class="banner-inner__text banner-inner__text--cta">View our large selection of Shakers and get started on your own design today.
    </div>
    <div class="banner-inner__btn banner-inner__btn--cta">
      <button>View our selection</button>
    </div>
</section>
<!-- END ADWERT CALL TO ACTION CTA -->
<script src="/templates/JS/script.js" async></script>
<script src='/templates/JS/popup.js' async></script>

  <?php include ROOT."/views/layouts/footer.php"?>