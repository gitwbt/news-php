<?php require_once('./core/db.php'); ?>
<?php 
    $query =  $pdo->prepare("SELECT * FROM news");
    $query->execute();
    $news = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--=================== Meta =============================-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>News</title>
    <!--=================== Styles =============================-->
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link rel="manifest" href="manifest.json" />
  </head>
  <body>
    <section class="images">
      <div class="images--grid">
        <?php if($news){?>
           <?php foreach($news as $item):?>
             <div class="images--item">
                <img
                    src="<?php echo $item['image'] ?>"
                    alt=""
                />
                <h1><?php echo $item['title'] ?></h1>
                <p>
                 <?php echo $item['description'] ?>
                </p>
            </div>
            <?php endforeach; ?>
         <?php }else{ ?>
            <p>No Content Found</p>
        <?php }?>
        <!-- <div class="images--item">
          <img
            src="https://images.unsplash.com/photo-1611095565995-d09bbf618f6d?ixid=MXwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80"
            alt=""
          />
          <h1>Image Title</h1>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Consectetur, eum?
          </p>
        </div>
        <div class="images--item">
          <img
            src="https://images.unsplash.com/photo-1613929906219-a2173ecec511?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
            alt=""
          />
          <h1>Image Title</h1>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Consectetur, eum?
          </p>
        </div>
        <div class="images--item">
          <img
            src="https://images.unsplash.com/photo-1611095560396-89216a352761?ixid=MXwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
            alt=""
          />
          <h1>Image Title</h1>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Consectetur, eum?
          </p>
        </div>
        <div class="images--item">
          <img
            src="https://images.unsplash.com/photo-1611095565995-d09bbf618f6d?ixid=MXwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80"
            alt=""
          />
          <h1>Image Title</h1>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Consectetur, eum?
          </p>
        </div>
        <div class="images--item">
          <img
            src="https://images.unsplash.com/photo-1613963991007-de23ae6be55f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
            alt=""
          />
          <h1>Image Title</h1>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Consectetur, eum?
          </p>
        </div>
        <div class="images--item">
          <img
            src="https://images.unsplash.com/photo-1613967250754-e2145aa389c5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80"
            alt=""
          />
          <h1>Image Title</h1>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Consectetur, eum? Lorem ipsum dolor sit amet consectetur adipisicing
            elit. Ratione quasi mollitia, at explicabo asperiores id alias,
            aliquid illum debitis labore quod ea molestiae, soluta vitae! Rem
            voluptatum dolores, nam adipisci quas voluptas beatae aperiam
            explicabo blanditiis quis? Officiis a rerum repudiandae, iusto odit
            ipsam natus error sint iure amet eum.
          </p>
        </div>
        <div class="images--item">
          <img
            src="https://images.unsplash.com/photo-1613985964670-1d5cab6d8cc4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80"
            alt=""
          />
          <h1>Image Title</h1>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Consectetur, eum?
          </p>
        </div>
        <div class="images--item">
          <img
            src="https://images.unsplash.com/photo-1613782456409-b088e8d62e2a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=738&q=80"
            alt=""
          />
          <h1>Image Title</h1>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Consectetur, eum?
          </p>
        </div>
        <div class="images--item">
          <img
            src="https://images.unsplash.com/photo-1613851169252-874699eadee2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80"
            alt=""
          />
          <h1>Image Title</h1>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Consectetur, eum?
          </p>
        </div>
        <div class="images--item">
          <img
            src="https://images.unsplash.com/photo-1611095565995-d09bbf618f6d?ixid=MXwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80"
            alt=""
          />
          <h1>Image Title</h1>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Consectetur, eum?
          </p>
        </div> -->
      </div>
    </section>
    <!--=================== Scripts =============================-->
    <script defer src="assets/js/main.js"></script>
  </body>
</html>
