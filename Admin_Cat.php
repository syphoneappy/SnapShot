<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
       .Container{
         position:absolute;
         border:2px solid #0d0d0d;
         top:30%;
         left:50%;
         transform:translate(-50%,-50%);
       }
       h1{
         margin:20px;
         text-align:center;
         font-size:32px;
         padding:20px;
       }
       .box{
         margin:20px;
         display:flex;
         justify-content:center;
         align-items:center;
         font-size:20px;
       }
       .Cat_Name{
         font-style:italic;
         margin:20px;
         display:flex;
         text-align:center;
       }
       .Inp_Box input{
         background:#333;
         color:#fff;
         margin:20px;
         text-align:center;
       }
       button{
         padding:10px;
         margin:20px;
       }
    </style>
  </head>
  <body>
    <div class="Container">
      <form  action="Add_Cat.php" method="post">
        <h1>Add Category</h1>
        <div class="Box">
          <div class="Cat_Name">
              Category Name
          </div>
         <div class="Inp_Box">
           <input type="text" name="Cat" value="">
         </div>
         <button type="submit" name="button">Submit</button>
        </div>
      </form>

    </div>
  </body>
</html>
