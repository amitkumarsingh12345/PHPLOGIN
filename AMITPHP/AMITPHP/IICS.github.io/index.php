<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php
        include('./Header.php');
        if(!$_COOKIE['user']) {
            header('location:Login.php');
        }
     ?>

     <style>
          .airo {
              display: flex;
              flex-direction: row;
              align-items: center;
              justify-content: space-around; 
              margin: 5% 0%;
              padding-right: 20px;
          }
          .author {
             text-align: right;
          }
     </style>

</head>
<body>
    <div class="airo">
        <div class="image">
           <img src="./air.png" class="imageairo" alt="">
        </div>
        <div class="info">
            <h1>About Project</h1>
            <p>We believe that society is based on communication, interaction, and exchange. People are customers to one another and exchange efforts, skills, goods, services, information, emotions and money. Perceived value serves as a unit of measurement in this exchange.</p>
             <br/>
            <h1>Summary</h1>
            <p>A project is defined as a sequence of tasks that must be completed to attain a certain outcome. According to the Project Management Institute (PMI), the term Project refers to ” to any temporary endeavor with a definite beginning and end”. Depending on its complexity, it can be managed by a single person or hundreds.</p>
            <br/><hr/><br/><hr/><br/><hr/><br/><hr/><br/><hr/>
            <br/><br/>
            <h1 class='author'>Author : iics college</h1>
        </div>
   </div>
   <?php
        include('./Footer.php');
     ?>
</body>
<script>
    const images = [
        "air.png",
        "https://img.freepik.com/premium-vector/realistic-airplane-aircraft-white-3d_208581-474.jpg?size=626&ext=jpg&ga=GA1.1.1085840350.1715771626&semt=ais_user_b' className='airoplane",    
    ];
    let i=0;
      window.setInterval(() => {
        document.querySelector('.imageairo').src = images[i++];
        if(i==2)
           i=0;
      }, 3000);
</script>
</html>