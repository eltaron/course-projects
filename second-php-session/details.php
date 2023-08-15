<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/Bootstrab/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card w-100 text-center mt-4" style="width: 18rem;">
                    <div class="card-body">
                        <h1><?= $_GET['id'] ?></h1>
                        <h5 class="card-title"><?= $_GET['title'] ?></h5>
                        <p class="card-text"><?= $_GET['description'] ?></p>
                        <table class="table table-border">
                            <tr>
                                <td>Price</td>
                                <td><?= $_GET['price'] ?></td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td><?= $_GET['quantity'] ?></td>
                            </tr>
                        </table>
                        <a href="m.php" class="btn btn-primary">Go Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/Bootstrab/js/bootstrap.bundle.min.js"></script>
</body>

</html>