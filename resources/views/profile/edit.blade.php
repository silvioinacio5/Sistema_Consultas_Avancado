<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js for interactivity -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.3/dist/cdn.min.js" defer></script>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
    <!-- Header -->
    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl font-bold leading-tight">Profile Page</h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Update Profile Information Section -->
            <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <h2 class="text-lg font-semibold">Update Profile Information</h2>
                <form method="POST" action="/profile/update">
                    @csrf
                    <!-- Name -->
                    <div class="mt-4">
                        <label for="name" class="block font-medium">Name</label>
                        <input id="name" name="name" type="text" value="{{ old('name', auth()->user()->name) }}" 
                            class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                    </div>
                    <!-- Email -->
                    <div class="mt-4">
                        <label for="email" class="block font-medium">Email</label>
                        <input id="email" name="email" type="email" value="{{ old('email', auth()->user()->email) }}" 
                            class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                    </div>
                    <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Save</button>
                </form>
            </div>

            <!-- Update Password Section -->
            <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <h2 class="text-lg font-semibold">Update Password</h2>
                <form method="POST" action="/password/update">
                    @csrf
                    <!-- Current Password -->
                    <div class="mt-4">
                        <label for="current_password" class="block font-medium">Current Password</label>
                        <input id="current_password" name="current_password" type="password" 
                            class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                    </div>
                    <!-- New Password -->
                    <div class="mt-4">
                        <label for="password" class="block font-medium">New Password</label>
                        <input id="password" name="password" type="password" 
                            class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                    </div>
                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label for="password_confirmation" class="block font-medium">Confirm Password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" 
                            class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                    </div>
                    <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Save</button>
                </form>
            </div>

            <!-- Delete Account Section -->
            <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <h2 class="text-lg font-semibold text-red-500">Delete Account</h2>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">
                    Deleting your account will permanently remove all your data. Please confirm your password to proceed.
                </p>
                <form method="POST" action="/profile/destroy">
                    @csrf
                    <!-- Password -->
                    <div class="mt-4">
                        <label for="delete_password" class="block font-medium">Password</label>
                        <input id="delete_password" name="password" type="password" 
                            class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500" required>
                    </div>
                    <button type="submit" class="mt-4 bg-red-500 text-white px-4 py-2 rounded">Delete Account</button>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white dark:bg-gray-800 shadow mt-12">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-sm text-gray-600 dark:text-gray-400">© 2024 Profile Page. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
