<?php
    // In a real scenario, this name might come from a Database or Session
    $user_name = "Ali Hadeed";
    $title = "Mr.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Smart Silent</title>
    <!-- Tailwind CSS CDN for beautiful GUI -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center p-6">

    <div class="glass-card max-w-lg w-full rounded-3xl shadow-2xl overflow-hidden transform transition-all hover:scale-[1.01]">
        <!-- Top Accent Bar -->
        <div class="h-2 bg-gradient-to-r from-blue-600 to-indigo-600"></div>
        
        <div class="p-8 md:p-12 text-center">
            <!-- User Avatar Icon -->
            <div class="inline-flex items-center justify-center w-20 h-20 bg-blue-100 text-blue-600 rounded-full mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>

            <!-- Main Greeting -->
            <h1 class="text-3xl md:text-4xl font-bold text-slate-800 mb-2">
                Welcome, <span class="text-blue-600"><?php echo $title . " " . $user_name; ?></span>
            </h1>
            
            <p class="text-slate-500 text-lg mb-8">
                It's great to see you back. Your dashboard is ready for your next task.
            </p>

            <!-- Quick Action Buttons -->
            <div class="space-y-3">
                <a href="#" class="block w-full py-3 px-6 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl transition-colors shadow-lg shadow-blue-200">
                    Go to Dashboard
                </a>
                <a href="#" class="block w-full py-3 px-6 bg-white border border-slate-200 hover:bg-slate-50 text-slate-600 font-semibold rounded-xl transition-colors">
                    Account Settings
                </a>
            </div>

            <!-- Footer Info -->
            <div class="mt-8 pt-8 border-t border-slate-100">
                <p class="text-xs text-slate-400 uppercase tracking-widest font-medium">
                    System Version 1.2.0 • Last Login: <?php echo date("d M, Y"); ?>
                </p>
            </div>
        </div>
    </div>

</body>
</html>
