<?php 
include_once "connect.php";
include_once "HelperQuestionario.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> questioneko </title>
    <link href="assets.css" rel="stylesheet" >
</head>

<?php include 'header.php' ?>

<body>



    <form action="./Env_Resp.php"  method="post">
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($HelperQuestionarioGetQuestoes)) {
           
            $i++;
          
               
            
        ?>

            <div class="card border-dark mb-3" style="max-width: 500px;">
                <div class="card-header"> <b> <?= $row['pergunta'] ?></b> </div>
                <div class="card-body text-dark" style=" background: rgb(255,13,188);
background: linear-gradient(90deg, rgba(255,13,188,0.6250875350140056) 55%, rgba(255,126,219,1) 100%, rgba(255,255,255,1) 100%);">
                    <div class="group">
                        <label for="a"> A) </label>

                        <input class="form-check-input mt-0" type="radio" name="correta-<?= $i?>" id="a" value="A-<?= $row['id']?>""> <?= $row['a'] ?>
                        <br>

                        <label for="b"> B) </label>
                        <input class="form-check-input mt-0" type="radio" name="correta-<?= $i?>" id="b" value="B-<?= $row['id']?>"> <?= $row['b'] ?>
                        <br>

                        <label for="c"> C) </label>
                        <input class="form-check-input mt-0" type="radio" name="correta-<?= $i?>" id="c" value="C-<?= $row['id']?>"> <?= $row['c'] ?>

                        <br>
                        <label for="d"> D) </label>
                        <input class="form-check-input mt-0" type="radio" name="correta-<?= $i?>" id="d" value="D-<?= $row['id']?>"> <?= $row['d'] ?>
                        <br>

                        <label for="e"> E) </label>
                        <input class="form-check-input mt-0" type="radio" name="correta-<?= $i?>" id="e" value="E-<?= $row['id']?>"> <?= $row['e'] ?>




                    </div>
                </div>
            </div>
            <?php //}
            }
       
?>
           <button type="submit" style="position:absolute; left: 605px; padding-left: 220px;  padding-right: 225px; "  class="btn btn-success"> Enviar </button>

    </form>
  
</body>




<script>
function verifica(){

}
</script>
</html>