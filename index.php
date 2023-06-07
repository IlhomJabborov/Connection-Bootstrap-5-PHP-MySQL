<?php 
     require "db.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ism=$_POST['ism'];
        $familiya=$_POST['familiya'];
        $yosh=$_POST['yosh'];
        $buyruq= $pdo->prepare("INSERT INTO form (ism,familiya,yosh) VALUES (?,?,?)");
        $buyruq->execute([$ism,$familiya,$yosh]);

        
        
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

    <div class="container mb-4" >

            <div class="row">

                <div class="col-md-9 mb-md-0 mb-5">
                    <form  method="post" action="">
                            <BR></BR>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" name="ism" class="form-control" placeholder="Ismingizni kiriting">
                        
                                </div>
                            </div>
                            <BR></BR>
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" name="familiya" class="form-control" placeholder="Familiyangizni kiriting">
                                    
                                </div>
                            </div>
                            
                            <BR></BR>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="tel"  name="yosh" placeholder="Yoshingizni kiriting" pattern="[0-9]{2}" class="form-control" >
                                    
                                </div>
                            </div>
                        </div>
                        <BR></BR>
                        <div class="text-center text-md-left">
                           <input class="btn btn-primary" type="submit">
                        </div>
                        <a href="index2.php" class="btn btn-primary" type="submit">2-form</a>
                        <div class="status"></div>
                    </form>
                </div>

            </div>
            <hr class="featurette-divider">
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>