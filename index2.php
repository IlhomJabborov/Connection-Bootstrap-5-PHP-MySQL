<?php

    require "db.php";

    $buyruq=$pdo->prepare("SELECT * FROM form ORDER BY id DESC");
        $buyruq->execute();

        $olish=$buyruq->fetchAll();

        if($_SERVER['REQUEST_METHOD']=='POST' and isset($_POST['delete'])){
            $id=$_POST['post_id'];

            $buyruq=$pdo->prepare("DELETE FROM form WHERE id= ?");
            $buyruq->execute([$id]);

        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
            <div class="px-4 py-5 my-5 text-center">
                <h1 class="display-5 fw-bold">Malumotlar</h1>
            </div>
            <div class="row align-items-md-stretch">
                <?php foreach($olish as $malumot): ?>
                    <div class="col-md-6">
                        <div class="h-100 p-5 text-white bg-dark rounded-3">
                            <h6>Ism: <?php echo $malumot['ism'] ?></h6>
                            <h6>Familiya: <?php echo $malumot['familiya'] ?></h6>
                            <h6>Yosh: <?php echo $malumot['yosh'] ?></h6>
                            <form method="post" action="">
                                <input type="hidden" name="post_id" value="<?php echo $malumot['id'] ?>">
                                <input type="hidden" name="delete">
                                <button class="btn btn-outline-light" type="submit">O'chirish</button>
                            </form>
                        </div>
                    </div>
                    <BR></BR>
                <?php endforeach; ?>
            </div>
            <BR></BR>
            <a href="index.php" class="btn btn-primary" type="submit">1-form</a>
        </div> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>