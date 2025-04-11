<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ouvrages - Bibliotech 221</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-gray-800">

    <div class="flex h-screen ">
        <!-- Sidebar -->
        <div class="bg-[#9E0E40] text-white flex flex-col px-4 py-6">
            <div class="text-2xl font-bold mb-10">BIBLIOTECH<br>221</div>

            <nav class="space-y-4">
                <a href="<?= PAGE ?>controller=ouvrageController&page=liste_ouvrage"
                    class="flex items-center gap-2 px-3 py-2 hover:text-white hover:bg-[#b3205a] rounded-full">
                    <i class="ri-dashboard-line text-lg"></i> Dashboard
                </a>
                <a href="<?= PAGE ?>controller=ouvrageController&page=liste_ouvrage"
                    class="flex items-center gap-2 px-3 py-2 bg-white text-[#9E0E40] rounded-full font-semibold ">
                    <i class="ri-book-2-line text-lg"></i> Ouvrages
                </a>
                <a href="#" class="flex items-center gap-2 px-3 py-2 hover:text-white hover:bg-[#b3205a] rounded-full">
                    <i class="ri-user-3-line text-lg"></i> Auteurs
                </a>
                <a href="../rayons/rayons.html" class="flex items-center gap-2 px-3 py-2 hover:text-white hover:bg-[#b3205a] rounded-full">
                    <i class="ri-layout-line text-lg"></i> Rayons
                </a>
                <a href="#" class="flex items-center gap-2 px-3 py-2 hover:text-white hover:bg-[#b3205a] rounded-full">
                    <i class="ri-book-open-line text-lg"></i> Exemplaires
                </a>
                <a href="#" class="flex items-center gap-2 px-3 py-2 hover:text-white hover:bg-[#b3205a] rounded-full">
                    <i class="ri-exchange-box-line text-lg"></i> Prêts
                </a>
            </nav>
        </div>

        <!--  contenu -->
        <div class="w-full flex flex-col gap-4">
            <!-- Top bar -->
            <div class="flex  justify-between items-center mb-6 bg-white shadow p-2 w-full">
                <div class="flex items-center gap-2 bg-gray-200 px-3 py-1 rounded-full w-1/2">
                    <input type="text" class="bg-transparent focus:outline-none flex-1 " placeholder="Rechercher..." />
                    <button class="bg-[#9E0E40] text-white px-4 py-1 rounded-full  text-sm">OK</button>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-[#9E0E40] font-semibold">Rokhaya Niass</span>
                    <img src="../image/Rectangle 43.png" class="w-10 h-10 rounded-full" alt="avatar" />
                </div>
            </div>
            <?= $contenu ?>

        </div>
    </div>

</body>

</html>