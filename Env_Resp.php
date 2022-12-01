<?php
include 'connect.php';
include 'header.php';
$arr = $_POST;

foreach ($arr as $item) {

    $letra = (substr($item, 0, 1));
    $id = (substr($item, 2, 5));

    $result = mysqli_query($conexao, "select * from questoes where id = {$id}");
    $result = mysqli_fetch_array($result);


?>


    <head>
        <link href="assets.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <div class="card border-dark mb-3" style="max-width: 500px;">
        <div class="card-header" style="width: 500px ;"> <b> <?= $result['pergunta'] ?></b> </div>
        <div class="card-body text-dark" style=" background: rgb(255,13,188);
background: linear-gradient(90deg, rgba(255,13,188,0.6250875350140056) 55%, rgba(255,126,219,1) 100%, rgba(255,255,255,1) 100%);">
            <div class="group">

            <label for="a"> A) </label>
                <input class="form-check-input mt-0" type="radio" disabled <?php if ($letra == 'A') { ?> checked <?php } ?> name="correta-<?= $result['id'] ?>" id="a" value="A"> <b> <?= $result['a'] ?>   </b>
             
                <br>

                <label for=" b"> B) </label>
                <input class="form-check-input mt-0" type="radio" disabled <?php if ($letra == 'B') {?> checked <?php } ?>name="correta-<?= $result['id'] ?>" id="b" value="B"> <b> <?= $result['b'] ?>   </b>
                
                <br>

                <label for="c"> C) </label>
                <input class="form-check-input mt-0" type="radio" disabled<?php if ($letra == 'C') { ?> checked <?php } ?>name="correta-<?= $result['id'] ?>" id="c" value="C"> <b> <?= $result['c'] ?>  </b>
               

                <br>
                <label for="d"> D) </label>
                <input class="form-check-input mt-0" type="radio" disabled <?php if ($letra == 'D') { ?> checked <?php } ?> name="correta-<?= $result['id'] ?>" id="d" value="D"> <b> <?= $result['d'] ?> </b>
                
                <br>

                <label for="e"> E) </label>
                <input class="form-check-input mt-0" type="radio" disabled <?php if ($letra == 'E') { ?> checked <?php } ?>name="correta-<?= $result['id'] ?>" id="e" value="E"> <b> <?= $result['e'] ?>  </b>
               

            </div>
            <?php if ($letra == $result['correta']) { ?>
              <hr>
                <div class="alert alert-success" style="background-color:chartreuse; color:white" role="alert">
                <b>   Acertou, que cagada em! </b>
                </div>
            <?php } else { ?>
                <hr>
                <div class="alert alert-danger"  style="background-color:red; color:white;" role="alert">
                    <b> BURRO BURRO, a resposta certa é a letra: <?php echo $result['correta'] ?> </b>
                </div>
            <?php } ?>
        </div>
    </div>






<?php     // if($correta === $letra){
    //     echo 'correta';
    // } else {
    //     echo 'errada';
    // }


}

?>