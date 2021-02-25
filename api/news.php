<?php require_once('../core/db.php'); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $header = getallheaders();
  $isJson = $header['Content-Type']  === 'application/json' ? true: false;

  if($isJson){
    $data = json_decode(file_get_contents('php://input'),true);
    $title = $data['title'];
    $nid = $data['nid'];
    $description = $data['description'];
    $image = $data['image'];
    $publish = $data['publish'];
    $url = $data['url'];
  }else{
    $title = $_POST['title'];
    $nid = $_POST['nid'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $publish = $_POST['publish'];
    $url = $data['url'];
  }

  if(!empty($title) && !empty($description) && !empty($image) && !empty($publish)){
    $query = $pdo->prepare("INSERT INTO news (title,description,image,publish,nid,url) VALUES (?,?,?,?,?,?)");
    $query->execute(array($title,$description,$image,$publish,$nid,$url));
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
