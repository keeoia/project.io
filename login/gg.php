<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drag and Drop</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="./Style/game.css">
    <link rel="stylesheet" href="./Style/sty2.css">
    <script src="./Style/game.js" defer></script>
</head>
<body>
    
<section class="draggable-elements">
    <i class="fas fa-cat draggable" draggable="true" style="color: #ff6384;" id="cat"></i>
    <i class="fas fa-dog draggable" draggable="true" style="color: #36a2eb;" id="dog"></i>
    <i class="fas fa-dove draggable" draggable="true" style="color: #ffce56;" id="dove"></i>
    <i class="fas fa-fish draggable" draggable="true" style="color: #9966ff;" id="fish"></i>
    <i class="fas fa-frog draggable" draggable="true" style="color: #4bc0c0;" id="frog"></i>
    <!-- <i class="fas fa-horse draggable" draggable="true" style="color: #333333;" id="horse"></i>
    <i class="fas fa-hippo draggable" draggable="true" style="color: #ff9f40;" id="hippo"></i>
    <i class="fas fa-spider draggable" draggable="true" style="color: #ff99cc;" id="spider"></i> -->
  </section>
  <section class="droppable-elements">
    <div class="droppable" data-draggable-id="frog"><span>Frog</span></div>
    <div class="droppable" data-draggable-id="dove"><span>Bird</span></div>
    <div class="droppable" data-draggable-id="cat"><span>Cat</span></div>
    <div class="droppable" data-draggable-id="fish"><span>Fish</span></div>
    <div class="droppable" data-draggable-id="dog"><span>Dog</span></div>
    <!-- <div class="droppable" data-draggable-id="spider"><span>Spider</span></div>
    <div class="droppable" data-draggable-id="horse"><span>Horse</span></div>
    <div class="droppable" data-draggable-id="hippo"><span>Hippo</span></div> -->
  </section>

</body>
</html>