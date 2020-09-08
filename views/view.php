<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/templates/css/style.css">

    <title>commerce_<?php echo $cc['title']?></title>
</head>

<body>
    <div class="listOfNews">

        <div id="content">
            <div class="post">
                <h2 class="title"><?php echo $cc['title'].' # '.$cc['id'];?></a>
                </h2>
                <p class="meta">Posted by <a href="#"><?php echo $cc['author_name'];?></a> on <?php echo $cc['date'];?>
                    &nbsp;&bull;&nbsp;
                    <a href='/news/' class="permalink"> Back to List of News</a>
                </p>
                <div class="entry">
                    <p><img src="/templates/images/<?php echo $cc['preview']?>" width="100%"  alt="" /></p>
                    <p class = "short_content"><?php echo $cc['short_content'];?></p>
                    <p class = "content"><?php echo $cc['content'];?></p>
                </div>
            </div>
            <p><a href='/news/' class="permalink"> Back to List of News</a></p>
            <div style="clear: both;">&nbsp;</div>
        </div>
        <!-- end #content -->

    </div>
</body>

</html>