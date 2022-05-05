<?php

//connection

$servername = "localhost";
$username = "root";
$password = "";
$database = "note2";
$conn = mysqli_connect($servername, $username, $password, $database);

if($conn){
    echo "succsessfully connected";
}else{
    echo "failed to connect to the database";
}

//server request--

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $title = $_POST['title'];
    $description = $_POST['description'];

    //insert quarry--

    $sql = "INSERT INTO `note2` (`title`, `description`) VALUES ('$title', '$description');";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo " succsessfully add your note";
    }else{
        echo "failed to insert";
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
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" class="herf">
    <title>Hello, world!</title>
  </head>
  <body>
   

   <div class="container my-4">
    <form action="/2020 full php tranning/25_CURD2.php" method="post">
            <div class="mb-3">
            <label for="title" class="form-label">Note title</label>
                <input type="text"name="title" class="form-control" id="title" aria-describedby="emailHelp">
    
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Describ your notes!!</label>
                <textarea class="form-control" name = "description" id="description" rows="3"></textarea>
            </div>
    
            <button type="submit" class="btn btn-primary">Add Note</button>
        </form>
   </div>

   </div>

      <div class="container my-4">
            <table class="table" id="table" >
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
                        $sql = "select * from note2;";
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
      $('#table').DataTable();
    } );
    </script>
  </body>
</html>