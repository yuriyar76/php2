<?php
//dump($arResult);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Статьи</title>
</head>
<body>
<div class="container">

<div class="row">
    <h2>Шаблон вывода статей</h2>
</div>

     <?php foreach($arResult as $item):?>

             <div class="row">
                 <div class="col-md-12">
                     <div class="alert alert-secondary" role="alert">
                         <a href="../index.php?id=<?=$item->id?>"><?=$item->title?></a>
                     </div>
                     <div class="card">
                         <div class="card-body">
                             <?=$item->content?>
                         </div>
                     </div>
                 </div>
             </div>

     <?php endforeach;?>
</div>
</body>
</html>