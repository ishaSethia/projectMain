<?php
session_start();

?>


<?php   
 
 $connect = mysqli_connect("localhost", "root", "", "php_tutorial");  
 if(isset($_POST["add_to_cart"]))  
 {  
  echo '<script>alert("Scroll down to see results")</script>';  
                echo '<script>window.location="book.php"</script>';  

      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
                
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="book.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="book.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
<?php

     include("menu.php");
   ?>
   <div style="float: right;">
<a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="table.php" >BACK</a>
</div>

 <!DOCTYPE html>  
 <html>  
      <head> 
      <style type="text/css">
  .bu
{
  border:1px solid #00000;
          border-right: none;
      font-size: 16px;
      padding: 10px;
      background: #f1d829;
      font-weight: bold;
      cursor: pointer;
      outline: none;
         -webkit-border-top-right-radius:10px;
            -webkit-border-bottom-right-radius:10px;
            -moz-border-radius-toprighht:10px;
             -moz-border-radius-bottomright:10px;
            border-top-right-radius:10px;
            border-bottom-right-radius: 10px;
}

   
</style> 
           <title></title> 
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
               <center> <h2 style="font-weight: bold;">LET'S PLAN.</h2></center> 
                <?php  
                $query = "SELECT * FROM book ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="book.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="book/<?php echo $row["image"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["place"]; ?></h4>  
                               <h4 class="text-danger">Rs. <?php echo $row["price"]; ?></h4> 
                               <label>Members</label> 
                               <input type="text" name="quantity" class="form-control" value="" placeholder="Enter members" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["place"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="bu" value="Plan" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <h3>LET'S PLAN.</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Place Name</th>  
                               <th width="10%">Members</th>  
                               <th width="20%">Fare</th>  
                               <th width="15%">Total-Fare</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>Rs. <?php echo $values["item_price"]; ?></td>  
                               <td>Rs. <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="book.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">Rs <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table> 

                </div>  
           </div>  
           
           <br />  
      </body>  
 </html>
   