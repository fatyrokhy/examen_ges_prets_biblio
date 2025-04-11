<nav class="bg-[#9E0E40] px-4 py-3 flex items-center justify-between">
    <!-- Logo -->
    <div class="bg-white text-[#9E0E40] font-bold px-3 py-1 rounded">
        BIBLIOTECH<br><span class="ml-1 text-sm">221</span>
    </div>

    <!-- Barre de recherche -->
    <form class="flex items-center w-full max-w-xl mx-4">
        <input type="text" placeholder="Rechercher..." class="w-full rounded-l-full px-4 py-2 text-sm focus:outline-none">
        <button class="bg-[#9E0E40] text-white px-4 py-1 rounded-r-full text-sm font-semibold">OK</button>
    </form>
    <!-- Boutons -->
    <div class="flex items-center gap-2">
        <a href="#" class="border border-white text-white px-4 py-1 rounded-full text-sm hover:bg-white hover:text-[#9E0E40]">se connecter</a>
        <a href="#" class="border border-white text-white px-4 py-1 rounded-full text-sm hover:bg-white hover:text-[#9E0E40]">s'inscrire</a>
    </div>
</nav>

<div class="p-4">
    <!-- Suggestion du jour -->
    <h2 class="text-[#9E0E40] text-lg font-semibold mb-2">Suggestion du jour</h2>
    <img src="./image/image.png" alt="Suggestion" class="w-full h-52 object-cover rounded-lg mb-6">

    <!-- Catalogue + filtre -->
    <div class="bg-[#9E0E40] text-white px-6 py-3 rounded-t-lg flex justify-between items-center">
        <h3 class="text-lg font-semibold">Catalogue</h3>
        <form class="flex items-center gap-2">
            <input type="text" placeholder="filtrer par statut..."
                class="rounded-full h-8 px-4 text-sm text-black focus:outline-none">
            <button type="submit" class="bg-white text-[#9E0E40] rounded-full px-4 h-8 text-sm font-semibold">Filtrer</button>
        </form>
    </div>

    <!-- Cartes ouvrages -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 bg-gray-50 p-6 rounded-b-lg">
        <!-- Ouvrage -->
        <?php if ($dispo != null): ?>
            <?php foreach ($dispo as $value): ?>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="<?php $value["image"]; 
                    var_dump($value["image"])?>" alt="Livre" class="w-full h-40 object-cover">
                    <div class="p-4 flex flex-col gap-2">
                        <h4 class="text-[#9E0E40] font-bold"><?php $value["titre"] ?></h4>
                        <p class="text-sm text-gray-600"><?php $value["description"] ?></p>
                        <div class="flex justify-between text-sm">
                            <span class="font-semibold"><?php $value["date_edition"] ?></span>
                            <span class="text-[#9E0E40]"><?php $value["nom"] ?></span>
                        </div>
                        <button class="mt-2 bg-[#9E0E40] text-white px-4 py-1 rounded-full text-sm w-fit">Emprunter</button>
                    </div>
                </div>
            <?php endforeach ?>
        <?php else: echo "Aucun ouvrage disponible";
        endif ?>
    </div>
</div>