<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COJO's LIBRAIRIE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .book-card {
            transition: transform 0.3s ease;
        }
        .book-card:hover {
            transform: scale(1.05);
        }
    </style>
    
</head>
<body class="bg-gray-100 min-h-screen">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #7f2b18;">
  <style>
    .navbar-brand {
      color: rgb(8, 3, 3) !important;
    }
    .navbar-nav .nav-link:not(.active) {
      font-family: 'Arial', sans-serif;
      color: rgb(247, 246, 243) !important;
    }
  </style>
  <div class="container-fluid flex justify-center items-center relative">
    <h1 class="text-4xl font-bold text-white">COJO's LIBRAIRIE</h1>
    <a href="./admin/login.php" class="absolute right-4 bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded transition duration-300">
      Quitter
    </a>
    <button class="navbar-toggler absolute right-20" type="button" data-toggle="collapse" data-target="#navbarNav" 
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
    <div class="container mx-auto px-4 py-8">
       

       
        <section class="mb-12">
            <h2 class="text-3xl font-semibold mb-6 text-blue-600">Developement Personnel</h2>
            <div class="flex justify-between space-x-4">
                <div class="flex-1 bg-white rounded-lg shadow-lg p-4 text-center book-card">
                    <img src="./admin/uploads/csfda.jpg" alt="Livre 1" class="mx-auto  mb-4 rounded w-32">
                    <h3 class="font-medium">Comment de faire des amis</h3>
                    <button onclick="window.location.href='detail.php?book=1'" class="mt-2 bg-blue-700 text-white px-4 py-2 rounded shadow-md transition duration-300">
                    Voir les détails
                    </button>
                </div>
                <div class="flex-1 bg-white rounded-lg shadow-lg p-4 text-center book-card">
                    <img src="./admin/uploads/art.jpg" alt="Livre 2" class="mx-auto mb-4 rounded">
                    <h3 class="font-medium">L'art subtil de s'en foutre</h3>
                    <button onclick="window.location.href='detail.php?book=2'" class="mt-2 bg-blue-700 text-white px-4 py-2 rounded shadow-md transition duration-300">
                    Voir les détails
                    </button>
                </div>
                <div class="flex-1 bg-white rounded-lg shadow-lg p-4 text-center book-card">
                    <img src="./admin/uploads/loi.jpg" alt="Livre 3" class="mx-auto mb-4 rounded w-32">
                    <h3 class="font-medium">Les Lois de la Nature Humaine</h3>
                    <button onclick="window.location.href='detail.php?book=3'" class="mt-2 bg-blue-700 text-white px-4 py-2 rounded shadow-md transition duration-300">
                    Voir les détails
                    </button>
                </div>
                <div class="flex-1 bg-white rounded-lg shadow-lg p-4 text-center book-card">
                    <img src="./admin/uploads/rien.jpg" alt="Livre 4" class="mx-auto mb-4 rounded w-32">
                    <h3 class="font-medium">Un Rien Peut Tout Changer</h3>
                    <button onclick="window.location.href='detail.php?book=4'" class="mt-2 bg-blue-700 text-white px-4 py-2 rounded shadow-md transition duration-300">
                    Voir les détails
                    </button>
                </div>
            </div>
        </section>

       
        <section class="mb-12">
            <h2 class="text-3xl font-semibold mb-6 text-green-600">Entreprenariat</h2>
            <div class="flex justify-between space-x-4">
                <div class="flex-1 bg-white rounded-lg shadow-lg p-4 text-center book-card">
                    <img src="./admin/uploads/pereRiche.jpg" alt="Livre 1" class="mx-auto mb-4 rounded w-32">
                    <h3 class="font-medium">Rich Dad Poor Dad</h3>
                    <button onclick="window.location.href='detail.php?book=5'" class="mt-2 bg-blue-700 text-white px-4 py-2 rounded shadow-md transition duration-300">
                    Voir les détails
                    </button>
                </div>
                <div class="flex-1 bg-white rounded-lg shadow-lg p-4 text-center book-card">
                    <img src="./admin/uploads/malin.jpg" alt="Livre 2" class="mx-auto mb-4 rounded w-32">
                    <h3 class="font-medium">Plus Malin Que Le Diable</h3>
                    <button onclick="window.location.href='detail.php?book=6'" class="mt-2 bg-blue-700 text-white px-4 py-2 rounded shadow-md transition duration-300">
                    Voir les détails
                    </button>
                </div>
                <div class="flex-1 bg-white rounded-lg shadow-lg p-4 text-center book-card">
                    <img src="./admin/uploads/osez.jpg" alt="Livre 3" class="mx-auto mb-4 rounded w-32">
                    <h3 class="font-medium">Etudiant: Osez l'Entreprenariat</h3>
                    <button onclick="window.location.href='detail.php?book=7'" class="mt-2 bg-blue-700 text-white px-4 py-2 rounded shadow-md transition duration-300">
                    Voir les détails
                    </button>
                </div>
                <div class="flex-1 bg-white rounded-lg shadow-lg p-4 text-center book-card">
                    <img src="./admin/uploads/reflechissez.jpg" alt="Livre 4" class="mx-auto mb-4 rounded w-32">
                    <h3 class="font-medium">Reflechissez et devenez Riche</h3>
                    <button onclick="window.location.href='detail.php?book=8'" class="mt-2 bg-blue-700 text-white px-4 py-2 rounded shadow-md transition duration-300">
                    Voir les détails
                    </button>
                </div>
            </div>
        </section>

        <!-- Section Philosophie -->
        <section class="mb-12">
            <h2 class="text-3xl font-semibold mb-6 text-purple-600">Philosophie</h2>
            <div class="flex justify-between space-x-4">
                <div class="flex-1 bg-white rounded-lg shadow-lg p-4 text-center book-card">
                    <img src="./admin/uploads/fatou.jpg" alt="Livre 1" class="mx-auto mb-4 rounded w-32">
                    <h3 class="font-medium">Les veilleurs de Sangomar</h3>
                    <button onclick="window.location.href='detail.php?book=9'" class="mt-2 bg-blue-700 text-white px-4 py-2 rounded shadow-md transition duration-300">
                    Voir les détails
                    </button>
                </div>
                <div class="flex-1 bg-white rounded-lg shadow-lg p-4 text-center book-card">
                    <img src="./admin/uploads/ousmane.jpg" alt="Livre 2" class="mx-auto mb-4 rounded w-32">
                    <h3 class="font-medium">Camps de Thiaroye</h3>
                    <button onclick="window.location.href='detail.php?book=10'" class="mt-2 bg-blue-700 text-white px-4 py-2 rounded shadow-md transition duration-300">
                    Voir les détails
                    </button>
                </div>
                <div class="flex-1 bg-white rounded-lg shadow-lg p-4 text-center book-card">
                    <img src="./admin/uploads/platon.jpg" alt="Livre 3" class="mx-auto mb-4 rounded w-32">
                    <h3 class="font-medium">Le Banquet</h3>
                    <button onclick="window.location.href='detail.php?book=11'" class="mt-2 bg-blue-700 text-white px-4 py-2 rounded shadow-md transition duration-300">
                    Voir les détails
                    </button>
                </div>
                <div class="flex-1 bg-white rounded-lg shadow-lg p-4 text-center book-card">
                    <img src="./admin/uploads/aristode.jpg" alt="Livre 4" class="mx-auto mb-4 rounded w-32">
                    <h3 class="font-medium">Les 7 Oeuvres Completes</h3>
                    <button onclick="window.location.href='detail.php?book=12'" class="mt-2 bg-blue-700 text-white px-4 py-2 rounded shadow-md transition duration-300">
                    Voir les détails
                    </button>
                </div>
            </div>
        </section>


        <section>
            <h2 class="text-3xl font-semibold mb-6 text-red-600">Histoire</h2>
            <div class="flex justify-between space-x-4">
                <div class="flex-1 bg-white rounded-lg shadow-lg p-4 text-center book-card">
                    <img src="./admin/uploads/aimee.jpg" alt="Livre 1" class="mx-auto mb-4 rounded w-32">
                    <h3 class="font-medium">Cahier d'Un Retour Au Pays Natal</h3>
                    <button onclick="window.location.href='detail.php?book=13'" class="mt-2 bg-blue-700 text-white px-4 py-2 rounded shadow-md transition duration-300">
                    Voir les détails
                    </button>
                </div>
                <div class="flex-1 bg-white rounded-lg shadow-lg p-4 text-center book-card">
                    <img src="./admin/uploads/mariamaBa.jpg" alt="Livre 2" class="mx-auto mb-4 rounded w-32">
                    <h3 class="font-medium">Une si Longue Lettre</h3>
                    <button onclick="window.location.href='detail.php?book=14'" class="mt-2 bg-blue-700 text-white px-4 py-2 rounded shadow-md transition duration-300">
                    Voir les détails
                    </button>
                </div>
                <div class="flex-1 bg-white rounded-lg shadow-lg p-4 text-center book-card">
                    <img src="./admin/uploads/bamba.jpg" alt="Livre 3" class="mx-auto mb-4 rounded w-32">
                    <h3 class="font-medium">Cheikh Ahmadou Bamba Mbacke</h3>
                    <button onclick="window.location.href='detail.php?book=15'" class="mt-2 bg-blue-700 text-white px-4 py-2 rounded shadow-md transition duration-300">
                    Voir les détails
                    </button>
                </div>
                <div class="flex-1 bg-white rounded-lg shadow-lg p-4 text-center book-card">
                    <img src="./admin/uploads/Cad.jpg" alt="Livre 4" class="mx-auto mb-4 rounded w-32">
                    <h3 class="font-medium">Nations Negres Et Cultures </h3>
                    <button onclick="window.location.href='detail.php?book=16'" class="mt-2 bg-blue-700 text-white px-4 py-2 rounded shadow-md transition duration-300">
                    Voir les détails
                    </button>
                </div>
            </div>
        </section>
    </div>
</body>
</html>