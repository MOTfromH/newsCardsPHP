

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php
    require ('connection.php');

    if(isset($_POST["submit"])){
        $stmt = $con->prepare("INSERT INTO news (title, news, created_at) VALUES (:title, :news, CURRENT_DATE)");
        $stmt->bindParam(":title", $_POST['title']);
        $stmt->bindParam(":news", $_POST['news']);
        $stmt->execute();
        echo "News erfolgreich Erstellt.";


}
?>

<section>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="index.php" method="POST">
                            <div class="text-center mt-3">
                                <h1>News Erstellen</h1>
                            </div>
                            <input type="text" class="form-control my-3 py-2" placeholder="Titel" name="title"
                                   autocomplete="off">
                            <textarea rows="10" cols="30" class="form-control my-3 py-2" placeholder="News" name="news"
                                   autocomplete="off"></textarea>
                            <div class="text-center mt-3">
                                <button name="submit" class="btn btn-primary">Erstellen</button>
                                <a href="#" class="nav-link mt-1">Bereits registriert?</a>
                            </div>
                        </form>
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
