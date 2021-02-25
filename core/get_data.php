<?php require_once('../core/db.php'); ?>
<?php 
    $start = $_GET['start'] ;
    $limit = $_GET['limit'] ;
    $query =  $pdo->prepare("SELECT * FROM news ORDER BY published_at DESC LIMIT $start, $limit");
    $query->execute();

    $news = $query->fetchAll();

    if($query->rowCount() > 0):
        // $response  = "";
        // foreach($news as $item):
        //     $response .= '
        //     <div class="images--item">
        //         <img
        //             src="'.$item['image'].' "
        //             alt="news"
        //         />
        //         <h1 class="line-clamp-1">'. $item['title'] .'</h1>
        //         <p>
        //         '. $item['description'] .'
        //         </p>
        //     </div>
        //     ';
        // endforeach;
        header('Content-Type: application/json');
        $res = [
          "success"=> true,
          "data"=> [...$news]
        ];
       exit(json_encode($res, true)) ;
    else:
        header('Content-Type: application/json');
        $res = [
          "success"=> false,
          "data"=> null
        ];
        exit(json_encode($res, true)) ;
    endif;
?>