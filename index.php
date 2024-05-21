<html lang="vi">
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Roboto', sans-serif;
                background: linear-gradient(180deg, #f8eff9 0%, #efa0d9 100%);
            }
            div.mt-8 {
                justify-content: center;
                align-items: center;
                display: flex;
            }
        </style>
    </head>
    <body class="flex flex-col items-center justify-center min-h-screen">
        <div class="text-center">
			<!-- get love days from day_count.php and hour, minute, second update automatic-->
            <?php include 'day_count.php'; ?>
            <h1 class="text-3xl font-semibold text-pink-600 mb-10">LOVE DAYS</h1>
            <div class="bg-pink-100 p-4 rounded-lg mb-8">
                <p class="text-pink-600 text-2xl mb-2"> <?php echo $count_days; ?> days </p>
                <p class="text-gray-800 text-3xl font-bold"> <?php echo $years; ?> years <?php echo $months; ?> months <?php echo $days; ?> days </p>
            </div>
            <div class="flex items-center justify-around">
                <div class="flex flex-col items-center">
                    <img class="rounded-full w-24 h-24 mb-4" src="images\Hai.jpg" alt="Profile picture of the first person" sizeof="100px">
                    <p class="text-gray-800">Đỗ Mạnh Hải</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fas fa-heart text-pink-600 text-xl mb-4"></i>
                    <p class="text-gray-800">20-10-2023</p>
                </div>
                <div class="flex flex-col items-center">
                    <img class="rounded-full w-24 h-24 mb-4" src="images\Ha.jpg" alt="Profile picture of the second person" sizeof="100px">
                    <p class="text-gray-800">Lê Hồng Hà</p>
                </div>
            </div>
            <div class="mt-8">
                <audio controls class="w-64">
                    <source src="images\Bumble Love.mp3" type="audio/mpeg">
                    Love song generate by AI - Bumble Love.
                </audio>
            </div>
        </div>
    </body>
</html>