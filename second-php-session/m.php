<?php
$books = [
    [
        'title' => 'book1',
        'description' => 'this is book1',
        'price'       => 10,
        'quantity'    => 1
    ],
    [
        'title' => 'book2',
        'description' => 'this is book2',
        'price'       => 30,
        'quantity'    => 8
    ],
    [
        'title' => 'book3',
        'description' => 'this is book3',
        'price'       => 20,
        'quantity'    => 9
    ],
    [
        'title' => 'book4',
        'description' => 'this is book4',
        'price'       => 30,
        'quantity'    => 0
    ],
    [
        'title' => 'book5',
        'description' => 'this is book5',
        'price'       => 40,
        'quantity'    => 0
    ],
    [
        'title' => 'book6',
        'description' => 'this is book6',
        'price'       => 390,
        'quantity'    => 6
    ],
    [
        'title' => 'book7',
        'description' => 'this is book7',
        'price'       => 50,
        'quantity'    => 4
    ]
]
?>
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
            <?php foreach ($books as $k => $book) { ?>
                <div class="col-md-4">
                    <div class="card w-100 text-center mt-4" style="width: 18rem;">
                        <div class="card-body">
                            <h1 class="text-primary"><?= $k + 1 ?></h1>
                            <h5 class="card-title"><?= $book['title'] ?></h5>
                            <p class="card-text"><?= $book['description'] ?></p>
                            <table class="table table-border">
                                <tr>
                                    <td>Price</td>
                                    <td><?= $book['price'] ?></td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td><?= $book['quantity'] ?></td>
                                </tr>
                            </table>
                            <a href="details.php?
                            id=<?= $k + 1 ?>&title=<?= $book['title'] ?>
                            &description=<?= $book['description'] ?>&price=<?= $book['price'] ?>&quantity=<?= $book['quantity'] ?>" class="btn btn-primary">Book Details</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="assets/Bootstrab/js/bootstrap.bundle.min.js"></script>
</body>

</html>