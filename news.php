
<?php

require ('connection.php');
$stmt = $con->prepare("SELECT * From news ");//WHERE Id_news= :Id
//$stmt->bindParam(":Id",$_POST['Id_news']);
$stmt->execute();

while ($row = $stmt->fetch()){
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>


<section>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-4 col-sm-8 col-md-6 m-auto">
                <div class="card">
                    <div class="card-body">
                        <h1><?php echo $row['title']?></h1>
                        <p><?php echo $row['news']?></p>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Scripts-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>
</html>
<?php }