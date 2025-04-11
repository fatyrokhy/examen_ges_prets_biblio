            <!-- Filter bar -->
            <div
                class="bg-white grid grid-cols-1 md:grid-cols-[30%_auto] mx-6 md:bg-white md:shadow p-4  flex items-center mb-6">
                <h2 class="text-lg font-semibold  ">liste des ouvrages</h2>
                <form action="">
                    <input type="hidden" name="controller" value="ouvrageController">
                    <input type="hidden" name="page" value="liste_ouvrage">
                    <div class=" flex items-center gap-2 place-self-end ">
                        <input type="text" placeholder="filtrer par statut ..."
                            class="border px-4 py-2 rounded-full w-full h-8  ">
                        <button class="bg-[#9E0E40] text-white px-6 py-2 rounded-full h-8">Filtrer</button>
                    </div>
                </form>
            </div>
            <!-- bouton ajout -->
            <div class="place-self-end mb-6 px-6">
                <button class="bg-[#9E0E40] text-white px-6 py-1 rounded-2xl h-8">
                    <a href="form_ouvrage.html">Ajouter un ouvrage</a>
                </button>
            </div>
            <!-- ouvrage -->
            <?php if ($ouvrage != null): ?>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-6">
                    <!--  Carte  -->
                    <?php foreach ($ouvrage as $value): ?>
                        <div class="bg-white shadow p-4 rounded-lg border flex flex-col gap-2 ">
                            <div class="flex gap-4 items-center">
                                <img src="<?= $value['image'] ?>" class="w-14 h-14 rounded-lg shadow-md " alt="">
                                <p class="font-bold text-[#9E0E40]"><?= $value['titre'] ?></p>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="text-sm">Code : <?= $value['code'] ?></p>
                                <p class="text-sm">Rayons: <span class="text-[#9E0E40] font-semibold"><?= $value['nom'] ?></span> </p>
                                <p class="text-sm">Date d'édition : <?= $value['date_edition'] ?></p>
                                <p class="text-sm">statut : <span class="text-[#9E0E40] font-semibold"><?= $value['statut'] ?></span></p>
                            </div>
                    </div>
                <?php endforeach ?>
                </div>
            <?php else: echo "Aucun ouvrage trouvé";
            endif ?>
            <!-- Pagination  -->
            <div class="flex justify-center mt-6">
                <nav class="inline-flex rounded-md shadow-sm isolate" aria-label="Pagination">
                    <a href="#"
                        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-[#9E0E40] bg-white border border-gray-300 rounded-l-md hover:bg-gray-100">Précédent</a>
                    <a href="#"
                        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-[#9E0E40] border border-gray-300 hover:bg-red-700">1</a>
                    <a href="#"
                        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-[#9E0E40] bg-white border border-gray-300 hover:bg-gray-100">2</a>
                    <a href="#"
                        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-[#9E0E40] bg-white border border-gray-300 rounded-r-md hover:bg-gray-100">Suivant</a>
                </nav>
            </div>