<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h1 class="font-bold text-3xl underline"><?= $data['title']; ?></h1>

    <a class="underline text-blue-500" href="<?= URLROOT; ?>">Home</a>
    <?php $result = $data['result'] ?>

    <h1 class="text-2xl mt-4">Aantal Instructeurs : <?= $result[0]->row_count?></h1>

    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <!-- <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th> -->
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Voornaam</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tussenvoegsel</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Achternaam</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mobiel</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">DatumInDienst</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">AantalSterren</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Voortuig</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <?php foreach ($result as $row) : ?>
                <tr>
                    <!-- <td class="px-6 py-4 whitespace-nowrap"><?= $row->Id ?></td> -->
                    <td class="px-6 py-4 whitespace-nowrap"><?= $row->Voornaam ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?= $row->Tussenvoegsel ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?= $row->Achternaam ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?= $row->Mobiel ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?= $row->DatumInDienst ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?= $row->AantalSterren ?></td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="<?= URLROOT; ?>/instructeurGebruiktAuto/index?id=<?= $row->Id ?>">
                            <img src="/public/car-icon" alt="car-icon">
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>






</body>

</html>