<?php
include_once __DIR__.'/../config/config.php';
include_once __DIR__.'/../includes/functions.php';

if(!isset($_GET['skillid'])){
  header('location: ../dashboard.php?error=an-error-occured');
}

$skills = getSkillById($_GET['skillid']);

include_once __DIR__.'/../includes/header.php';

?>


<body>
    <form action="editskills.php"  method= "POST">
    <label>Tilte</label><br>
    <input type="text" placeholder="<?php echo $title ?>" name="title"></input><br>
    <label>Profiency</label><br>
    <input type="text" placeholder="<?php echo $Proficiency ?>" name="proficiency"></input><br>
    <label>Level</label><br>
    <input type="text" placeholder="<?php echo $level ?>" name="level"></input><br>
    <label>Description</label><br>
    <input type="text" placeholder="<?php echo $description?>" name="description"></input><br>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="submit" name="save_changes" value="save changes"></input>
    </form>
    </body>
</html>
<?php
if(isset($_POST['save_changes'])){
    $id= $_POST['id'];
    $uptitle= $_POST['title'];
    $upproficiency= $_POST['proficiency'];
    $uplevel= $_POST['level'];
    $updescription= $_POST['description'];

    $query = "UPDATE editskills SET title='$uptitle', Profiency='$upproficiency', level='$uplevel', description='$updescription' WHERE id='$id' ";
    if(mysqli_query($conn, $query)){
        echo 'update successful';
    header("location: editskills.php");

    }
  else{
    echo 'try again';
    header("location: editskills.php");
  }
}
// print_r($row);
?>