<?php 
require('./database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
    <style>
   .content{
        height: 300px;
        border-color:#4376A3;
        border-style: solid;
        border-width: 1px  1px 1px 1px;
        box-shadow: 0px 5px 1px 2px lightslategray;
        border-radius: 20px 20px 20px 20px;
    
       }  .scroll{
        overflow-y: scroll;
        max-height:360px;
        
       }
    
    </style>
</head>
<body>
   <form action="./update.php " method="post">
   <div class=" row container-fluid  ms-2 mt-3 "  >
       <div class="ms-2 mb-3 col-7  content">
       <p class="mt-3 fw-normal" style="font-style: italic;font-size:larger;color:#4376A3">Numbers of Monthly User</p>
       <canvas> </canvas>
       </div>
       <div class="ms-4 mb-3 col-sm content" >
       <p class="mt-3 fw-normal" style="font-style: italic;font-size:larger;color:#4376A3">Pendings</p>
         <div class="scroll">

         </div>
       </div>
       
    <div class="row ms-2">
      <div class="ms-3 col-4 content">
      <p class="mt-3 fw-normal" style="font-style: italic;font-size:larger;color:#4376A3">Under Maintenance</p>
        <div class="scroll">
            
        </div>
       
      </div>
       <div class="ms-3 col-4 content">
       <p class="mt-3 fw-normal" style="font-style: italic;font-size:larger;color:#4376A3">Barrowed Units</p>
        <div class="scroll"></div>
       
       </div>
       <div class="ms-3 col-sm content">
       <p class="mt-3 fw-normal" style="font-style: italic;font-size:larger;color:#4376A3">Recent Activity</p>
        <div class="scroll">

        </div>
       </div>
    </div>
        
   </div>

 <?php 
   include('./footer.php')
   ?>
 

</form>

</body>
</html>