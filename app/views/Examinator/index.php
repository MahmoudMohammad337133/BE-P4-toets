<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="p-2 h-screen">
    <h1 class="text-3xl font-bold underline">
        <?= $data['title']; ?>
    </h1>
    <?php $result = $data['result'];
    // var_dump($result); 
    ?>
    <a class="underline text-blue-500" href="<?= URLROOT; ?>">Home</a>
    <?php
    if (!is_null($result[0]->TypeVoertuig)) {

    ?>
        <h2 class="text-2xl">Naam: <?= $result[0]->full_name ?></h2>
        <h2 class="text-2xl">Datum in dienst: <?= $result[0]->DatumInDienst ?></h2>
        <h2 class="text-2xl">Datum in dienst: <?= $result[0]->AantalSterren ?></h2>
        <a href="#" class=" bg-black text-white p-1"> Auto toevoegen</a>
        <table class="min-w-full divide-y divide-gray-200 mt-6">
            <thead>
                <tr>
                    <!-- <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th> -->
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Voornaam</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tussenvoegsel</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Achternaam</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mobiel</th>
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
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>


    <?php } else { ?>
        <h2 class="text-2xl">Naam: <?= $result[0]->full_name ?></h2>

        <h1 class="text-2xl font-bold underline text-red-600 m-1">Er zijn op dit moment nog geen voertuigen toegewezen aan deze instructeur</h1>





    <?php echo 'Redirecting to "Instructeurs in dienst" screen...';
        header("refresh:3; url=" .  URLROOT . "/examen/index");
        exit;
    } ?>
</body>

</html>