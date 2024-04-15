<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          input{
            border: 0px solid;
            height: 20px;
            text-size-adjust: 3px;
         }
    </style>
    
</head>

<body>
<form action="#"  method="post">
   <div class="container-fluid">
    <div class="col mt-3  me-5 mb-5 text-secondary  " style="width: 100%; min-height:580px">
      <p class="fs-4 fw-lighter" style="font-style: italic ;">Units Reports
        <input  type="submit" name = "pending" value="PENDING" id="pending">
     </p>
       <table class="table table-responsive-sm "  >
         <thead  style="background-color:lightgray">
           <th  class=" fs-6 fw-medium"style="">NO.</th>
           <th  class=" head fs-6 fw-medium">Laboratory</th>
           <th  class=" head  fs-6 fw-medium">Date&Time
           </th>
           <th  class=" head  fs-6 fw-medium">Classification</th>
           <th  class=" head  fs-6 fw-medium">Code</th>
           <th  class=" head  fs-6 fw-medium">Transaction/Report</th>
           <th  class=" head  fs-6 fw-medium">Sender</th>
           <th  class=" head fs-6 fw-medium">Remarks</th>
         </thead>
         <div class="scroll">
         <tbody>
         <?php 
          //query 
          //condition
         ?>
           <tr>
             <td>1<?php ?></td>
             <td><input type="text" name="[]" value="<?php ?>" size="10px"></td>
             <td><input type="text" name="[]" value="<?php ?>" size="10px"></td>
             <td><input type="text" name="[]" value="<?php ?>" size="10px"></td>
             <td><input type="text" name="[]" value="<?php ?>" size="10px"></td>
             <td><input type="text" name="[]" value="<?php ?>" size="10px"></td>
             <td><input type="text" name="[]" value="<?php ?>" size="10px"></td>
             <td><input type="text" name="[]" value="<?php ?>" size="10px"></td>
           </tr>
            <?php ?>
         </tbody>
         </div>
      </table>
     
    </div>
  </div>
 <?php ;
   include('./footer.php')
   ?>
 

 </form>
</body>
</html>