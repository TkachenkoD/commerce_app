    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/templates/css/style.css">

    <title>commerce_local</title>
    </head>
    <body>
        <?php include_once(ROOT."/views/header.php")?>
        <div class="listOfNews">

        <?php foreach($xx as $x):?>
        <h5>
           <a href="/news/sport/<?php echo $x['id']?>"><?php echo $x['title']?></a> 
        </h5>
        <div class="post">
            <p class="date-news">
            <?php echo $x['date']?>
            </p>
            <p class="short-content-news">
            <?php echo $x['short_content']?>
            </p>
            <p><a class="news-ref" href="/news/sport/<?php echo $x['id']?>">read more...</a></p>

        </div>
<?php endforeach;?>

</div>
    </body>
    </html>