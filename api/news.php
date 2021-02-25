<?php require_once('../core/db.php'); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $nid = $_POST['nid'];
  $description = $_POST['description'];
  $image = $_POST['image'];
  $publish = $_POST['publish'];

  if(!empty($title) && !empty($description) && !empty($image) && !empty($publish)){
    $query = $pdo->prepare("INSERT INTO news (title,description,image,publish,nid) VALUES (?,?,?,?,?)");
    $query->execute(array($title,$description,$image,$publish,$nid));
    if($query){
        header('Content-Type: application/json');
        $res = [
          "success"=>true,
          "message"=>'Data has been Inserted.'
        ];
        echo json_encode($res);
    }else{
        header('Content-Type: application/json');
        $res = [
          "success"=>false,
          "message"=>'Something went wrong.'
        ];
        echo json_encode($res);;
    }
  }
}
?>
