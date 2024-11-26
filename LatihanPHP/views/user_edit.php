<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input User</title>
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
            <!-- Formulir Input Role -->
            <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Update User</h2>
                <form action="index.php?modul=user&action=edit&id=<?php echo $user->user_id ?>" method="POST">
                    <!-- Nama Role -->
                    <div class="mb-4">
                        <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username:</label>
                        <input type="text" id="username" name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Nama Role" required
                        value="<?php echo htmlspecialchars($user->username)?>">
                    </div>

                    <!-- Role Deskripsi -->
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                        <input id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Deskripsi Role" rows="3" required
                        value="<?php echo htmlspecialchars($user->password)?>">
                    </div>

                    <div class="mb-4">
                        <label for="role_id" class="block text-gray-700 text-sm font-bold mb-2">Role Name:</label>
                        <select id="role_id" name="role_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            <option value="">Pilih Status</option>
                            <option value="1" <?php echo (!empty($user) && isset($user->role) && $user->role->role_id == 1) ? 'selected' : ''; ?>>Admin</option>
                            <option value="2" <?php echo (!empty($user) && isset($user->role) && $user->role->role_id == 2) ? 'selected' : ''; ?>>User</option>
                            <option value="3" <?php echo (!empty($user) && isset($user->role) && $user->role->role_id == 3) ? 'selected' : ''; ?>>Kasir</option>
                            <option value="4" <?php echo (!empty($user) && isset($user->role) && $user->role->role_id == 4) ? 'selected' : ''; ?>>Developer</option>
                            <option value="5" <?php echo (!empty($user) && isset($user->role) && $user->role->role_id == 5) ? 'selected' : ''; ?>>Delivery Man</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Submit
                        </button>
                        <button>
                            <a href="index.php?modul=user" 
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-md">Close</a>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>