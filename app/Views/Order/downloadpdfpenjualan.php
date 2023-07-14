<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <table class="table table-dark table-borderless">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pemesan</th>
                <th scope="col">Nama Menu</th>
                <th scope="col">Quantity</th>
                <th scope="col">Harga / Produk</th>
                <th scope="col">Harga Total</th>
                <th scope="col">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($orders as $o) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $o['customer_name']; ?></td>
                    <td>
                        <?php foreach (json_decode($o['order_menu']) as $m) : ?>
                            <?= $m->menu; ?>
                            <br>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <?php foreach (json_decode($o['order_menu']) as $m) : ?>
                            <?= $m->quantity; ?>
                            <br>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <?php foreach (json_decode($o['order_menu']) as $m) : ?>
                            <?= $m->price; ?>
                            <br>
                        <?php endforeach; ?>
                    </td>
                    <td><?= $o['total']; ?></td>
                    <td><?= date('d/m/Y', strtotime($o['order_date'])) ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>