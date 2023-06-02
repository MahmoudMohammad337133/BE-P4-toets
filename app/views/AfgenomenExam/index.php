<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahmoud</title>
</head>

<body>
    <h1>
        <?= $data['title']; ?>
    </h1>
    <?php $result = $data['result'] ?>

    <table>
        <thead>
            <tr>
                <th>Naam Examinator</th>
                <th>Datum Examen</th>
                <th>RijbewijsCategorie</th>
                <th>Rijschool</th>
                <th>Stad</th>
                <th>Uitslag Examen</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $row) { ?>
                <tr>
                    <td><?= $row->Naam ?></td>
                    <td><?= $row->Datum ?></td>
                    <td><?= $row->Rijbewijscategorie ?></td>
                    <td><?= $row->Rijschool ?></td>
                    <td><?= $row->Stad ?></td>
                    <td><?= $row->Uitslag ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>






</body>

</html>