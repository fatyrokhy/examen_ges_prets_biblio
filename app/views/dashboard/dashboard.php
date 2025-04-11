<h1 class="text-2xl font-bold mb-6 px-6">Dashboard</h1>
      <!-- statistique -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6 px-6">
        <div class="bg-white shadow p-4 rounded-lg flex items-center gap-4 border">
          <i class="ri-book-2-line text-3xl text-[#9E0E40]"></i>
          <div>
            <p class="text-gray-500">livres totaux</p>
            <p class="text-2xl font-bold"><?= $totallivres["total_livres"] ?></p>
          </div>
        </div>
        <div class="bg-white shadow p-4 rounded-lg flex items-center gap-4 border">
          <i class="ri-book-2-line text-3xl text-[#9E0E40]"></i>
          <div>
            <p class="text-gray-500">livres prétés</p>
            <p class="text-2xl font-bold"><?= $totalpret["total_prets"] ?></p>
          </div>
        </div>
        <div class="bg-white shadow p-4 rounded-lg flex items-center gap-4 border">
          <i class="ri-book-2-line text-3xl text-[#9E0E40]"></i>
          <div>
            <p class="text-gray-500">livres perdus</p>
            <p class="text-2xl font-bold"><?= $perdu["total_perdu"] ?></p>
          </div>
        </div>
      </div>

      <!-- Filter bar -->
      <div class="bg-white grid grid-cols-1 md:grid-cols-[30%_auto] mx-6 md:bg-white md:shadow p-4  flex items-center mb-6" >
        <h2 class="text-lg font-semibold  ">liste des emprunts</h2>
        <div class=" flex items-center gap-2 place-self-end ">
        <form method="get" class="grid grid-cols-[70%_auto] gap-4">
                    <input type="hidden" name="controller" value="ouvrageController">
                    <input type="hidden" name="page" value="dashboard">
                    <select name="statut" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                        <option value="En" <?= (isset($_GET['statut']) && $_GET['statut'] === 'jour') ? 'selected' : '' ?>>Aujourd'hui</option>
                        <option value="semaine" <?= (isset($_GET['statut']) && $_GET['statut'] === 'semaine') ? 'selected' : '' ?>>Cette semaine</option>
                        <option value="mois" <?= (isset($_GET['statut']) && $_GET['statut'] === 'mois') ? 'selected' : '' ?>>Ce mois</option>
                    </select>
                    <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-red-700">Valider</button>
                </form>
          </div>
       </div>

      <!-- Emprunts -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-6 ">
        <!-- Carte emprunt -->
        <div class="bg-white shadow p-4 rounded-lg border">
          <p class="font-bold text-[#9E0E40]">Fatima Niass</p>
          <p class="text-sm">livre : <strong>un petit mensonge</strong></p>
          <p class="text-sm">date : 2025-08-02</p>
          <p class="text-sm">statut : <span class="text-[#9E0E40] font-semibold">En_cours</span></p>
          <div class="flex gap-2 mt-3">
            <button class="bg-[#9E0E40] text-white px-4 py-1 rounded-full">Refuser</button>
            <button class="bg-[#9E0E40] text-white px-4 py-1 rounded-full">Valider</button>
          </div>
        </div>

        <!-- Copier la carte pour en ajouter d'autres si besoin -->
        <div class="bg-white shadow p-4 rounded-lg border">
          <p class="font-bold text-[#9E0E40]">Fatima Niass</p>
          <p class="text-sm">livre : <strong>un petit mensonge</strong></p>
          <p class="text-sm">date : 2025-08-02</p>
          <p class="text-sm">statut : <span class="text-[#9E0E40] font-semibold">En_cours</span></p>
          <div class="flex gap-2 mt-3">
            <button class="bg-[#9E0E40] text-white px-4 py-1 rounded-full">Refuser</button>
            <button class="bg-[#9E0E40] text-white px-4 py-1 rounded-full">Valider</button>
          </div>
        </div>

        <div class="bg-white shadow p-4 rounded-lg border">
          <p class="font-bold text-[#9E0E40]">Fatima Niass</p>
          <p class="text-sm">livre : <strong>un petit mensonge</strong></p>
          <p class="text-sm">date : 2025-08-02</p>
          <p class="text-sm">statut : <span class="text-[#9E0E40] font-semibold">En_cours</span></p>
          <div class="flex gap-2 mt-3">
            <button class="bg-[#9E0E40] text-white px-4 py-1 rounded-full">Refuser</button>
            <button class="bg-[#9E0E40] text-white px-4 py-1 rounded-full">Valider</button>
          </div>
        </div>
      </div>

