<?php 

$insert = false;
$upadate = false;
$delete = false;
// connect to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";

//connection quary
$conn = mysqli_connect($servername, $username, $password, $database);


if($conn){
  echo "SUCCSESSFULLY CONNECTED TO THE (DATABASE)";
}else{
  echo "failed to connect";
}


// echo $_SERVER['REQUEST_METHOD'];
//server request--
if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $sql = "DELETE  FROM `notes` where sno ='$sno';";
  $result = mysqli_query($conn, $sql);
  echo $delete = true;
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST['snoedit'])){
    // echo "yes";
    //update quary
    $sno = $_POST['snoedit'];
    $title = $_POST['titleedit'];
    $dscription = $_POST['descriptionedit'];

// updating--
$sql = "UPDATE `notes` SET `title` = '$title' , `description` = '$dscription' WHERE `notes`.`sno` = $sno";
$result = mysqli_query($conn, $sql);
if($result){
  $upadate = true;

}else{
  echo "faield";
}
}
else{
    $title = $_POST['title'];
    $dscription = $_POST['description'];

// inserting--
$sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$dscription');";
$result = mysqli_query($conn, $sql);

 if($result){
     $insert = true;
 }else{
      "sorry not submited";
 }
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
   
    <title>CURD!</title>
  </head>
  <body>

  <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
  Edit Modal
</button> -->

<!--edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModal">Edit Record</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form  action="/2020 full php tranning/25_CURD.php" method="post">
          <input type="hidden" name="snoedit" id="snoedit">
          <div class="mb-3">
            <label for="note" class="form-label">Note title</label>
            <input type="text" name= "titleedit" class="form-control" id="titleedit" aria-describedby="emailHelp">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
          </div>
          <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
          <textarea class="form-control" name="descriptionedit" id="descriptionedit" rows="3"></textarea>
        </div>
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        <button type="submit" class="btn btn-primary">Edit note</button>
      </div>
      </form>
    </div>
  </div>
</div>
    <?php
    if($insert){
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>succsesfull!</strong> Your note succsessfully inserted.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
  }

    ?>
      <?php
    if($delete){
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>succsesfull!</strong> Your note succsessfully deleted.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
  }

    ?>
      <?php
    if($upadate){
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>succsesfull!</strong> Your note succsessfully updated.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
  }

    ?>
        <div class="container">
        <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong><?php //echo $suc?></strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        </div> -->

      <H1>ADD NOTE CURD APP</H1>
        <div class="container my-3">
        <form  action="/2020 full php tranning/25_CURD.php" method="post">
      <div class="mb-3">
        <label for="note" class="form-label">Note title</label>
        <input type="text" name= "title" class="form-control" id="title" aria-describedby="emailHelp">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
      </div>
      <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
      <textarea class="form-control" name="description" id="description" rows="3"></textarea>
    </div>
      <button type="submit" class="btn btn-primary">Add note</button>
    </form>
    </div>

      <div class="container my-4">
        <table class="table" id="example_info" >
        <thead>
            <tr >
            <th scope="col">sno</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
   
          <?php
        //select quary

        $sql = "select * from notes;";
        $result = mysqli_query($conn, $sql);
    
        $num = mysqli_num_rows($result);
        // echo "total row effected-".$num;
        // echo "<br>";
        $sno = 0;
        if($num > 0){
          while($row= mysqli_fetch_assoc($result)){
            $sno = $sno +1;
            echo "<tr>
                <th scope= 'row'>".$sno."</th>
                <td>".$row['title']."</td>
                <td>".$row['description']."</td>
                <td> <button  class='edit btn btn-primary' id=".$row['sno'].">Edit</button> <button  class='delete btn btn-primary' id=d".$row['sno'].">delete</button> </td>
              </tr>";
    
      //  echo "id-".$row['sno']."<br>"."title-".$row['title']."<br>"."Description-".$row['description']."<br>";
            }
          }

          ?> 
          
      </tbody>
    </table>

    </div>
    <hr>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
    <!-- Optional JavaScript; choose one of the two! -->
   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    
   
    <script>
      $(document).ready(function() {
      $('#example_info').DataTable();
    } );
    </script>
    <script>
      edits = document.getElementsByClassName('edit');
      Array.from(edits).forEach((element)=>{
        element.addEventListener("click",(e)=>{
          console.log("edit", );
          tr = e.target.parentNode.parentNode;
          title = tr.getElementsByTagName("td")[0].innerText;
          description = tr.getElementsByTagName("td")[1].innerText;
          console.log(title,description);
          titleedit.value = title;
          descriptionedit.value =description;
          snoedit.value = e.target.id;
          console.log(e.target.id);
          $("#editModal").modal("toggle");
          
      })
    })

    deletes = document.getElementsByClassName('delete');
      Array.from(deletes).forEach((element)=>{
        element.addEventListener("click",(e)=>{
          console.log("delete", );
         sno =e.target.id.substr(1, );
          if(confirm("Press a button!\nEither OK or Cancel.")){
            console.log("yes");
            window.location = `/2020 full php tranning/25_CURD.php?delete=${sno}`;
          }else{
            console.log("no");
          }
          
      })
    })
    </script>
  
   
</body>
</html>