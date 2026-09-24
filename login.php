```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EarnHub | Turn Your Skills Into Income</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#6366f1",
                        secondary: "#8b5cf6"
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-slate-950 text-white">

    <!-- ================= NAVBAR ================= -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-slate-950/90 backdrop-blur-md border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <!-- Logo -->
            <a href="#" class="text-2xl font-bold">
                <span class="text-indigo-400">Earn</span>Hub
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8 text-sm">
                <a href="#home" class="hover:text-indigo-400 transition">Home</a>
                <a href="#features" class="hover:text-indigo-400 transition">Features</a>
                <a href="#how" class="hover:text-indigo-400 transition">How It Works</a>
                <a href="#about" class="hover:text-indigo-400 transition">About</a>
            </div>

            <!-- Buttons -->
            <div class="hidden md:flex items-center gap-3">
                <button
                    onclick="openLogin()"
                    class="px-5 py-2 rounded-lg hover:bg-white/10 transition">
                    Login
                </button>

                <button
                    onclick="openRegister()"
                    class="px-5 py-2 rounded-lg bg-indigo-600 hover:bg-indigo-500 transition">
                    Get Started
                </button>
            </div>

            <!-- Mobile Button -->
            <button
                onclick="toggleMenu()"
                class="md:hidden text-2xl">
                ☰
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden px-6 pb-5 border-t border-white/10">
            <div class="flex flex-col gap-4 pt-5">
                <a href="#home" onclick="toggleMenu()">Home</a>
                <a href="#features" onclick="toggleMenu()">Features</a>
                <a href="#how" onclick="toggleMenu()">How It Works</a>
                <a href="#about" onclick="toggleMenu()">About</a>

                <button
                    onclick="openLogin()"
                    class="text-left">
                    Login
                </button>

                <button
                    onclick="openRegister()"
                    class="bg-indigo-600 px-5 py-3 rounded-lg text-center">
                    Get Started
                </button>
            </div>
        </div>
    </nav>


    <!-- ================= HERO ================= -->
    <section id="home" class="min-h-screen flex items-center pt-24">

        <div class="max-w-7xl mx-auto px-6 w-full">

            <div class="grid lg:grid-cols-2 gap-12 items-center">

                <!-- Left -->
                <div>

                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 text-sm mb-6">
                        <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                        Build. Create. Earn.
                    </div>

                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight">
                        Turn Your
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500">
                            Skills
                        </span>
                        Into Income.
                    </h1>

                    <p class="mt-6 text-lg text-slate-400 max-w-xl leading-relaxed">
                        EarnHub is a modern platform designed to help creators,
                        freelancers, and digital entrepreneurs showcase their
                        skills and discover new earning opportunities.
                    </p>

                    <div class="mt-8 flex flex-col sm:flex-row gap-4">

                        <button
                            onclick="openRegister()"
                            class="px-7 py-4 rounded-xl bg-indigo-600 hover:bg-indigo-500 font-semibold transition shadow-lg shadow-indigo-600/20">
                            Start Earning →
                        </button>

                        <a
                            href="#how"
                            class="px-7 py-4 rounded-xl border border-white/10 hover:bg-white/5 font-semibold text-center transition">
                            Learn More
                        </a>

                    </div>

                    <!-- Small Stats -->
                    <div class="mt-10 flex flex-wrap gap-8">

                        <div>
                            <h3 class="text-2xl font-bold">10K+</h3>
                            <p class="text-sm text-slate-500">Creators</p>
                        </div>

                        <div>
                            <h3 class="text-2xl font-bold">$500K+</h3>
                            <p class="text-sm text-slate-500">Earned</p>
                        </div>

                        <div>
                            <h3 class="text-2xl font-bold">24/7</h3>
                            <p class="text-sm text-slate-500">Platform</p>
                        </div>

                    </div>

                </div>


                <!-- Right -->
                <div class="relative">

                    <!-- Glow -->
                    <div class="absolute -inset-10 bg-indigo-600/20 blur-3xl rounded-full"></div>

                    <!-- Dashboard Card -->
                    <div class="relative bg-slate-900 border border-white/10 rounded-3xl p-6 shadow-2xl">

                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <p class="text-sm text-slate-500">
                                    Total Earnings
                                </p>

                                <h2 class="text-4xl font-bold mt-1">
                                    $8,420.50
                                </h2>
                            </div>

                            <div class="bg-green-500/10 text-green-400 px-3 py-2 rounded-lg text-sm">
                                +24.8%
                            </div>
                        </div>

                        <!-- Fake Chart -->
                        <div class="h-48 flex items-end gap-3">

                            <div class="w-full bg-indigo-500/20 rounded-t-lg h-[30%]"></div>
                            <div class="w-full bg-indigo-500/30 rounded-t-lg h-[42%]"></div>
                            <div class="w-full bg-indigo-500/40 rounded-t-lg h-[35%]"></div>
                            <div class="w-full bg-indigo-500/50 rounded-t-lg h-[58%]"></div>
                            <div class="w-full bg-indigo-500/60 rounded-t-lg h-[50%]"></div>
                            <div class="w-full bg-indigo-500/70 rounded-t-lg h-[72%]"></div>
                            <div class="w-full bg-indigo-500 rounded-t-lg h-[90%]"></div>

                        </div>

                        <div class="border-t border-white/10 mt-6 pt-5 flex justify-between text-sm">

                            <span class="text-slate-500">
                                This Month
                            </span>

                            <span class="text-green-400">
                                +$2,840.20
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- ================= FEATURES ================= -->
    <section id="features" class="py-24 bg-slate-900/50">

        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center max-w-2xl mx-auto">

                <p class="text-indigo-400 font-semibold">
                    FEATURES
                </p>

                <h2 class="text-4xl font-bold mt-3">
                    Everything You Need To Grow
                </h2>

                <p class="text-slate-400 mt-4">
                    Simple tools designed to help you create,
                    promote, and earn online.
                </p>

            </div>


            <div class="grid md:grid-cols-3 gap-6 mt-12">

                <!-- Feature 1 -->
                <div class="p-7 rounded-2xl bg-slate-900 border border-white/10 hover:border-indigo-500/50 transition">

                    <div class="w-12 h-12 rounded-xl bg-indigo-500/10 flex items-center justify-center text-2xl">
                        💰
                    </div>

                    <h3 class="text-xl font-bold mt-5">
                        Earn Money
                    </h3>

                    <p class="text-slate-400 mt-3 leading-relaxed">
                        Discover opportunities and turn your
                        skills into real income.
                    </p>

                </div>


                <!-- Feature 2 -->
                <div class="p-7 rounded-2xl bg-slate-900 border border-white/10 hover:border-indigo-500/50 transition">

                    <div class="w-12 h-12 rounded-xl bg-purple-500/10 flex items-center justify-center text-2xl">
                        🚀
                    </div>

                    <h3 class="text-xl font-bold mt-5">
                        Grow Faster
                    </h3>

                    <p class="text-slate-400 mt-3 leading-relaxed">
                        Build your online presence and reach
                        more potential customers.
                    </p>

                </div>


                <!-- Feature 3 -->
                <div class="p-7 rounded-2xl bg-slate-900 border border-white/10 hover:border-indigo-500/50 transition">

                    <div class="w-12 h-12 rounded-xl bg-blue-500/10 flex items-center justify-center text-2xl">
                        📊
                    </div>

                    <h3 class="text-xl font-bold mt-5">
                        Track Progress
                    </h3>

                    <p class="text-slate-400 mt-3 leading-relaxed">
                        Monitor your earnings, activity,
                        and performance from one dashboard.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- ================= HOW IT WORKS ================= -->
    <section id="how" class="py-24">

        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center">

                <p class="text-indigo-400 font-semibold">
                    HOW IT WORKS
                </p>

                <h2 class="text-4xl font-bold mt-3">
                    Start In 3 Simple Steps
                </h2>

            </div>


            <div class="grid md:grid-cols-3 gap-8 mt-14">

                <div class="text-center">

                    <div class="mx-auto w-16 h-16 rounded-full bg-indigo-600 flex items-center justify-center text-2xl font-bold">
                        1
                    </div>

                    <h3 class="text-xl font-bold mt-5">
                        Create Account
                    </h3>

                    <p class="text-slate-400 mt-3">
                        Sign up and create your personal profile.
                    </p>

                </div>


                <div class="text-center">

                    <div class="mx-auto w-16 h-16 rounded-full bg-purple-600 flex items-center justify-center text-2xl font-bold">
                        2
                    </div>

                    <h3 class="text-xl font-bold mt-5">
                        Showcase Skills
                    </h3>

                    <p class="text-slate-400 mt-3">
                        Add your skills, services, and portfolio.
                    </p>

                </div>


                <div class="text-center">

                    <div class="mx-auto w-16 h-16 rounded-full bg-pink-600 flex items-center justify-center text-2xl font-bold">
                        3
                    </div>

                    <h3 class="text-xl font-bold mt-5">
                        Start Earning
                    </h3>

                    <p class="text-slate-400 mt-3">
                        Connect with opportunities and grow your income.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- ================= CTA ================= -->
    <section id="about" class="py-24">

        <div class="max-w-5xl mx-auto px-6">

            <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-indigo-600 to-purple-600 p-10 md:p-16 text-center">

                <div class="relative z-10">

                    <h2 class="text-4xl md:text-5xl font-bold">
                        Ready To Start?
                    </h2>

                    <p class="mt-5 text-indigo-100 max-w-xl mx-auto">
                        Create your account today and start building
                        your digital income journey.
                    </p>

                    <button
                        onclick="openRegister()"
                        class="mt-8 bg-white text-indigo-700 px-8 py-4 rounded-xl font-bold hover:bg-slate-100 transition">
                        Create Free Account
                    </button>

                </div>

            </div>

        </div>

    </section>


    <!-- ================= FOOTER ================= -->
    <footer class="border-t border-white/10 py-8">

        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col md:flex-row items-center justify-between gap-4">

                <div class="text-xl font-bold">
                    <span class="text-indigo-400">Earn</span>Hub
                </div>

                <p class="text-sm text-slate-500">
                    © 2026 EarnHub. All rights reserved.
                </p>

                <div class="flex gap-5 text-sm text-slate-400">
                    <a href="#" class="hover:text-white">Privacy</a>
                    <a href="#" class="hover:text-white">Terms</a>
                    <a href="#" class="hover:text-white">Contact</a>
                </div>

            </div>

        </div>

    </footer>


    <!-- ================= LOGIN MODAL ================= -->
    <div
        id="loginModal"
        class="hidden fixed inset-0 z-[100] bg-black/70 backdrop-blur-sm flex items-center justify-center px-6">

        <div class="bg-slate-900 border border-white/10 rounded-2xl p-7 w-full max-w-md">

            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-bold">
                    Welcome Back
                </h2>

                <button
                    onclick="closeModals()"
                    class="text-slate-400 hover:text-white text-xl">
                    ✕
                </button>
            </div>

            <form class="mt-6">

                <input
                    type="email"
                    placeholder="Email Address"
                    class="w-full bg-slate-800 border border-white/10 rounded-lg px-4 py-3 outline-none focus:border-indigo-500">

                <input
                    type="password"
                    placeholder="Password"
                    class="w-full bg-slate-800 border border-white/10 rounded-lg px-4 py-3 mt-4 outline-none focus:border-indigo-500">

                <button
                    type="button"
                    class="w-full bg-indigo-600 hover:bg-indigo-500 py-3 rounded-lg mt-5 font-semibold">
                    Login
                </button>

            </form>

        </div>

    </div>


    <!-- ================= REGISTER MODAL ================= -->
    <div
        id="registerModal"
        class="hidden fixed inset-0 z-[100] bg-black/70 backdrop-blur-sm flex items-center justify-center px-6">

        <div class="bg-slate-900 border border-white/10 rounded-2xl p-7 w-full max-w-md">

            <div class="flex justify-between items-center">

                <h2 class="text-2xl font-bold">
                    Create Account
                </h2>

                <button
                    onclick="closeModals()"
                    class="text-slate-400 hover:text-white text-xl">
                    ✕
                </button>

            </div>

            <form class="mt-6">

                <input
                    type="text"
                    placeholder="Full Name"
                    class="w-full bg-slate-800 border border-white/10 rounded-lg px-4 py-3 outline-none focus:border-indigo-500">

                <input
                    type="email"
                    placeholder="Email Address"
                    class="w-full bg-slate-800 border border-white/10 rounded-lg px-4 py-3 mt-4 outline-none focus:border-indigo-500">

                <input
                    type="password"
                    placeholder="Password"
                    class="w-full bg-slate-800 border border-white/10 rounded-lg px-4 py-3 mt-4 outline-none focus:border-indigo-500">

                <button
                    type="button"
                    class="w-full bg-indigo-600 hover:bg-indigo-500 py-3 rounded-lg mt-5 font-semibold">
                    Create Account
                </button>

            </form>

        </div>

    </div>


    <!-- ================= JAVASCRIPT ================= -->
    <script>

        function toggleMenu() {
            const menu = document.getElementById("mobileMenu");

            menu.classList.toggle("hidden");
        }


        function openLogin() {
            document.getElementById("loginModal").classList.remove("hidden");
            document.getElementById("registerModal").classList.add("hidden");
        }


        function openRegister() {
            document.getElementById("registerModal").classList.remove("hidden");
            document.getElementById("loginModal").classList.add("hidden");
        }


        function closeModals() {
            document.getElementById("loginModal").classList.add("hidden");
            document.getElementById("registerModal").classList.add("hidden");
        }


        // Close modal when clicking outside
        window.addEventListener("click", function(event) {

            const loginModal = document.getElementById("loginModal");
            const registerModal = document.getElementById("registerModal");

            if (event.target === loginModal) {
                closeModals();
            }

            if (event.target === registerModal) {
                closeModals();
            }

        });

    </script>

</body>
</html>
```
