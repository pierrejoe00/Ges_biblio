<?php
$bookId = isset($_GET['book']) ? (int)$_GET['book'] : 0;
if (!$bookId) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Réservation de livre</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #7f2b18;">
        <div class="container-fluid flex justify-center items-center relative">
            <h1 class="text-4xl font-bold text-white">COJO's LIBRAIRIE</h1>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8">
        <a href="detail.php?book=<?php echo $bookId; ?>" class="text-blue-600 mb-4 inline-block">&larr; Retour</a>
        
        <div class="bg-white rounded-lg shadow-lg p-6 mt-4 max-w-2xl mx-auto">
            <h2 class="text-2xl font-bold mb-6">Formulaire de réservation</h2>
            <form action="process_reservation.php" method="POST">
                <input type="hidden" name="book_id" value="<?php echo $bookId; ?>">
                
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="name">Nom complet</label>
                    <input type="text" id="name" name="name" required
                           class="w-full p-2 border rounded-lg">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="email">Email</label>
                    <input type="email" id="email" name="email" required
                           class="w-full p-2 border rounded-lg">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="phone">Téléphone</label>
                    <input type="tel" id="phone" name="phone" required
                           class="w-full p-2 border rounded-lg">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="date">Date de réservation</label>
                    <input type="date" id="date" name="date" required
                           class="w-full p-2 border rounded-lg">
                </div>

                <button type="submit" 
                        class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                    Confirmer la réservation
                </button>
            </form>
        </div>
    </div>
</body>
</html>
