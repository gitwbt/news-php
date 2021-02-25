<?php require_once('./core/db.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--=================== Meta =============================-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>News App</title>
    <!--=================== Styles =============================-->
    <link rel="stylesheet" href="./assets/css/main.css" />
  </head>
  <body>
    <section class="images">
      <div class="images--grid" id="loadData">
        <!-- <?php // if($news){?>
           <?php //foreach($news as $item):?>
             <div class="images--item">
                <img
                    src="<?php// echo $item['image'] ?>"
                    alt=""
                />
                <h1 class="line-clamp-1"><?php // echo $item['title'] ?></h1>
                <p>
                 <?php// echo $item['description'] ?>
                </p>
            </div>
            <?php// endforeach; ?>
         <?php// }else{ ?>
            <p>No Content Found</p>
        <?php// }?> -->
      </div>
      <div id="loadmore"></div>
    </section>
    <!--=================== Scripts =============================-->
    <script defer src="assets/js/main.js"></script>
  </body>
</html>
