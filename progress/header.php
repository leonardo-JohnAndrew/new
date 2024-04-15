<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="styles.css">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <title>Document</title>
    <link  href="jquery.js">
    <style>
     
    </style>
</head>
    <header>
         <div1 class="postion-fixed"><img src="logo.png" alt="" height="40px"> <button class ="toggle-btn" type="button">
         <i class="fa-solid fa-bars"></i></button>
               

  <label style="color:white ;margin-left: 600px ;border:0px solid;font-size:13pt" class=" btn-lg btn dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
 Notifications
  </label>

  <ul class="dropdown-menu" id ="notify" style=" 
       border-style: solid;
        border-width: 1px  1px 1px 1px;
        border-radius: 0px 0px 20px 20px;
        /* max-height: 500px;
        overflow-y:scroll; */
        ">
    
  </ul>
  
  <label style="color:white ;margin-left:350px ;border:0px solid;font-size:13pt" class=" btn-lg btn dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">

  </label>

  <ul class="dropdown-menu  "style=" 
       border-style: solid;
        border-width: 1px  1px 1px 1px;
        border-radius: 0px 0px 20px 20px;
        border-color:#0e2238;
        ">
    <li><a class="dropdown-item" href="#">Profile</a></li>
    <li><a class="dropdown-item" href="#">Log out</a></li>
  </ul>
  
</div>
 

    </div1>

   </header>
   <body>
   <script src = "jquery.js"></script>
   <script>
    $(document).ready(function(){
      function load_unseen_function(view=''){
        $.ajax({
          url:"fetch.php",
          method:"Post",
          data:{view:view},
          dataType:"json",
          success:function(data)
          {
            $('#menu').html(data);
            // if(data.unseen_function >0){
            //   $('.count').html(data.unseen_function);
            // }
          }
        })
      }
    })
    load_unseen_function();

   </script>
   </body>
   <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
   </html>