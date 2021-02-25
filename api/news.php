<?php require_once('../core/db.php'); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $nid = $_POST['nid'];
  $description = $_POST['description'];
  $image = $_POST['image'];
  $publish = $_POST['publish'];

  if(!empty($title) && !empty($description) && !empty($image) && !empty($publish)){
    $query = $pdo->prepare("INSERT INTO news (title,description,image,publish) VALUES (?,?,?,?)");
    $query->execute(array($title,$description,$image,$publish));
    // if($query){
    //     echo 'Data has been Inserted.',
    // }
    // else{
    //     echo 'Something went wrong.'
    // }
  }
}
?>
