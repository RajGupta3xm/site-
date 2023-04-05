<?php
    include 'header.php';
?>
<section class= "my-2">
     
     <div class="py-2">
         <div>
             <h2 class="text-center">Contact</h2>
         </div>

         <div class="w-50 m-auto">
         <form action="userinfo.php" method="post">

             <div class="form-group">
                 <label>Username</label>
                 <input type="text" name="username" class="form-control">

             </div>
         
             <div class="form-group">
                 <label>Email Id</label>
                 <input type="text" name="email" class="form-control">

             </div>
         
             <div class="form-group">
             <label>Mobile </label>
             <input type="text" name="mobile" class="form-control">
             </div>

                 
             <div class="form-group">
             <label for="my-textarea">Comments</label>
             <textarea id="my-textarea" class="form-control" name="comment" rows="3"></textarea>
             </div>
             <button type="submit" class="btn btn-outline-primary" name="submit">submit</button>
             
             </div>
         
             
         </form>


     </div>
     
</section>
<?php
    include 'footer.php';
?>