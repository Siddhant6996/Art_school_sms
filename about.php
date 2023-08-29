<?php
include('header.php')
?>
   </head>
   <!-- body -->
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/piano.png" alt="" /></div>
      </div>
      <!-- end loader -->
      <div class="about">
         <div class="container">
            <div class="row">
            <?php
               $sql = "SELECT * FROM `page` where Page_Type='About'";
               $result = mysqli_query($conn, $sql);
               while ($row = mysqli_fetch_assoc($result)){?>
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>About University</h2>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have </p>
                  </div>
               </div>
            </div>
         </div>
         
      
      </div>
      <?php
         }
         ?>
     
   </body>
   <?php 
     include('footer.php')
     ?>
</html>