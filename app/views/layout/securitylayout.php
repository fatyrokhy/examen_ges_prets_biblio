<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Connexion</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
      body {
          font-family: 'Poppins', sans-serif;
      }
  </style>
</head>
<body class="bg-white flex items-center justify-center min-h-screen">
<div class="mx-auto rounded-lg shadow-lg mx-auto max-h-screen flex ">
    <div class="max-w-md h-full">
    <img src="./image/image.png"  class="w-full h-full object-cover" alt="">
</div>
<?= $contenu ?>
</div>
</body>
</html>
