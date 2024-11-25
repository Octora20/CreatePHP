<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <!-- Main container -->
    <div class="flex">
        <!-- Sidebar -->
        <?php include 'includes/sidebar.php'; ?>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <!-- Placeholder Content -->
            <div class="bg-white p-8 rounded-lg shadow-lg mb-6">
                <h1 class="text-2xl font-semibold text-gray-800 mb-2 text-left">Home</h1>
                <!-- Dashboard / Dashboard My Application text -->
                <p class="text-gray-500 text-sm">Home / Home TAM Group</p>
            </div>

            <!-- Table with tabs for Pengumuman and Notifications -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Information</h2>
                
                <div class="border-b border-gray-300 mb-4">
                    <ul class="flex">
                        <li class="mr-4 cursor-pointer text-blue-600 hover:underline" onclick="showContent('pengumuman')">Pengumuman</li>
                        <li class="cursor-pointer text-blue-600 hover:underline" onclick="showContent('notifications')">Notifications</li>
                    </ul>
                </div>

                <!-- Content for Pengumuman and Notifications -->
                <div id="pengumuman" class="hidden transition-all duration-500 ease-in-out h-auto max-h-[500px] overflow-hidden">
                    <p class="text-gray-600">Website ini saat ini sedang dalam tahap pengembangan dan masih banyak fitur yang perlu disempurnakan. Kami sedang bekerja keras untuk meningkatkan kualitas dan memberikan pengalaman terbaik bagi pengguna. Oleh karena itu, beberapa bagian dari situs ini mungkin belum sepenuhnya berfungsi atau masih dalam proses penyempurnaan. Kami memohon pengertian dan kesabaran Anda selama masa pengembangan ini. Terima kasih atas perhatian dan dukungannya.</p>
                </div>
                <div id="notifications" class="hidden">
                    <p class="text-gray-600">No notifications.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Function to show content based on the tab clicked
        function showContent(tab) {
            // Hide both sections initially
            document.getElementById('pengumuman').classList.add('hidden');
            document.getElementById('notifications').classList.add('hidden');

            // Add expanded height to 'pengumuman' and not to 'notifications'
            if (tab === 'pengumuman') {
                const pengumuman = document.getElementById('pengumuman');
                pengumuman.classList.remove('hidden');
                pengumuman.classList.add('h-auto', 'max-h-[500px]');
                document.getElementById('notifications').classList.remove('h-auto', 'max-h-[500px]');
            } else {
                const notifications = document.getElementById('notifications');
                notifications.classList.remove('hidden');
                notifications.classList.add('h-auto');
                document.getElementById('pengumuman').classList.remove('h-auto', 'max-h-[500px]');
            }
        }
    </script>
</body>
</html>
