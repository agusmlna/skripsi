<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c58078fd66.js" crossorigin="anonymous"></script>
</head>

<body>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nama Menu</th>
                <th scope="col">Quantity</th>
                <th scope="col">Harga / Produk</th>
                <th scope="col">Harga Total</th>
                <th scope="col">Tipe</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Bayar</th>
                <th scope="col">Kembalian</th>
            </tr>
        </thead>
        <tbody>
            <?php $totalSemua = 0; ?>
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
                    <?php $totalSemua += $o['total']; ?>
                    <td><?= $o['type_payment']; ?></td>
                    <td><?= date('d/m/Y', strtotime($o['order_date'])) ?></td>
                    <td><?= $o['bayar']; ?></td>
                    <td><?= $o['kembalian']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot class="table-dark">
            <td colspan="5">Jumlah</td>
            <td><?= $totalSemua; ?></td>
        </tfoot>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>