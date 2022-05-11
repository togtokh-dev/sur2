<?php
$results = mysqli_query($db, "SELECT * FROM lesson");
while ($row = mysqli_fetch_array($results)) {
?>
<div class="col-xl-4 col-lg-12 col-sm-12">
   <div class="card overflow-hidden">
      <div class="text-center p-5 overlay-box" style="background-image: url(<?php echo $row['lesson_image']; ?>);">
         <h3 class="mt-3 mb-0 text-white"><?php echo $row['lesson_name']; ?></h3>
      </div>
      <div class="card-body">
         <div class="row text-center">
            <div class="col-6">
               <div class="bgl-primary rounded p-3">
                  <h4 class="mb-0">Хичээлүүд : 5420</h4>
               </div>
            </div>
            <div class="col-6">
               <div class="bgl-primary rounded p-3">
                  <h4 class="mb-0">Сурагч : 24</h4>
               </div>
            </div>
         </div>
      </div>
      <div class="card-footer mt-0">
         <a href="lesson.php?id=<?php echo $row['lesson_id'];  ?>" class="btn btn-primary btn-lg btn-block">Цааш харах</a>
      </div>
   </div>
</div>
<?php } ?>
