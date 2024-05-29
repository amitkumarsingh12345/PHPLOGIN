<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Header.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php
        include('./Header.php');
     ?>
    
   <style>
      .row-head {
         background-color: darkgoldenrod;
         color: white;
      }
      .all-data {
         border: none;
      }
      .row-head div {
         border: none;
      }
      .row-body div {
         border: none;
      }
      .row-body {
         border: none;
         background-color: wheat;
         box-shadow:20px 0px 10px white;
      }
      .editbtn,.deletebtn {
         background: none;
         border: none;
      }
   </style>

</head>
<body>
    <?php
       include('./conn.php');
       $id=0;
       $result = $conn->query("SELECT *FROM registration")->fetch_all();
       
       echo "<form action='Delete.php' method='get'><div class='all-data'>
              <div class='row-head'>
                <div>ID</div>
                <div>NAME</div>
                <div>PASSWORD</div>
                <div>EMAIL</div>
                <div>EDIT</div>
                <div>DELETE</div>
             </div>";
       foreach($result as $data) {
           Global $id;
           $id++;
            echo "<div class='row-body'><div>$id</div>
               <div>$data[1]</div>
               <div>$data[2]</div>
               <div>$data[3]</div>
               <div><button type='submit' class='deletebtn' name='delet' value='$data[0]'><a href=''><i class='fa-solid fa-trash-can'></i></a></button`></div>
               <div><button type='submit' class='editbtn' name='edit' value='$data[0]'><a href=''><i class='fa-solid fa-pen-to-square'></i></a></button`></div>
               </div>";
       }  
       echo "</div></form>"; 
       include('./Footer.php');   
    ?>
</body>
</html>