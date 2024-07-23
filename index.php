<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RRR Group</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your custom CSS file -->
    <style>
        body {
            background-image: url('hero-image.jpeg'); /* Ensure the image URL is also HTTPS */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #ffffff;
        }
        .hero-video {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }
        .hero-video iframe {
            width: 100%;
            height: 100%;
            pointer-events: none;
        }
        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.8);
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 10;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }
        .menu-button {
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            z-index: 20;
        }
        .menu-content {
            display: none;
            position: fixed;
            top: 50px;
            left: 20px;
            background: rgba(0, 0, 0, 0.9);
            color: white;
            padding: 10px;
            border-radius: 10px;
            z-index: 20;
        }
        .menu-content a {
            display: block;
            margin: 5px 0;
            text-align: left;
            cursor: pointer;
        }
        .feedback-form {
            position: fixed;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            z-index: 100;
            width: 90%;
            max-width: 350px;
            height: 500px;
        }
        .feedback-form h3 {
            color: #333;
        }
        .feedback-form iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        .company-logos img {
            max-height: 50px;
            margin: 10px;
        }
        @media (max-width: 768px) {
            .hero-text h1 {
                font-size: 4xl;
            }
            .hero-text p {
                font-size: xl;
            }
            .feedback-form {
                width: 80%;
            }
            .company-logos img {
                max-height: 30px;
            }
        }
    </style>
    <script src="script.js"></script> <!-- Link to your custom JS file -->
    <script>
        function toggleMenu() {
            const menuContent = document.getElementById('menu-content');
            menuContent.style.display = menuContent.style.display === 'none' ? 'block' : 'none';
        }
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            section.scrollIntoView({ behavior: 'smooth' });
            toggleMenu();
        }
    </script>
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="header">
        <div class="menu-button" onclick="toggleMenu()">☰ Menu</div>
        <img src="logo.png" alt="Company Logo" class="h-16 w-16 rounded-full"> <!-- Ensure the logo URL is also HTTPS -->
    </header>

    <!-- Menu Content -->
    <div id="menu-content" class="menu-content">
        <a onclick="scrollToSection('overview')">Overview</a>
        <a onclick="scrollToSection('banking')">Banking Services</a>
        <a onclick="scrollToSection('health')">Health Insurance</a>
        <a onclick="scrollToSection('liability')">Liability Insurance</a>
        <a onclick="scrollToSection('study')">Study Opportunities</a>
        <a onclick="scrollToSection('learning-german')">Learning German</a>
        <a onclick="scrollToSection('comparison')">Comparison</a>
        <a onclick="scrollToSection('video')">Video</a>
    </div>

    <!-- Feedback Form -->
    <div class="feedback-form">
        <h3 class="text-2xl font-bold mb-4">Connect with Us</h3>
        <p class="mb-4">Fill out the form to get in touch!</p>
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc3d4w8y3A4__75-SBAhCxHnBHwmWkXGswgzch_YTeFjSh_uw/viewform"></iframe>
    </div>

    <!-- Hero Section with Video -->
    <section class="relative">
        <div class="hero-video">
            <iframe src="https://www.youtube.com/embed/6RSV3JY9j0Q?autoplay=1&mute=1&loop=1&playlist=6RSV3JY9j0Q" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="hero-text animate__animated animate__fadeIn">
            <h1 class="text-6xl font-bold mb-4">Get the Best Services with RRR Group</h1>
            <p class="text-2xl mb-6">Your guide to the best banking, health insurance, and liability insurance services in Germany.</p>
            <p class="text-xl mb-4">Call us at: <span class="font-bold">+4915219739709</span></p>
            <a onclick="scrollToSection('overview')" class="bg-yellow-400 text-gray-800 px-6 py-3 rounded-lg hover:bg-yellow-500 transition duration-300 cursor-pointer">Learn More</a>
        </div>
    </section>

    <!-- Image Section -->
    <section class="image-bg"></section>

    <!-- Overview Section -->
    <section id="overview" class="container mx-auto py-12">
        <h2 class="text-4xl font-bold mb-6 text-center">Overview of Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg animate__animated animate__fadeInLeft">
                <h3 class="text-3xl font-bold mb-4">Webinar Overview</h3>
                <ul class="list-disc list-inside">
                    <li>Visa Opportunities</li>
                    <li>Job Market Insights</li>
                    <li>Study in Germany</li>
                    <li>Expert Advice</li>
                    <li>Exclusive Offers</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg animate__animated animate__fadeInRight">
                <h3 class="text-3xl font-bold mb-4">Why You Should Attend</h3>
                <ul class="list-disc list-inside">
                    <li>Discover visa opportunities for Indian nationals</li>
                    <li>Gain insights into the German job market</li>
                    <li>Get guidance on studying in Germany</li>
                    <li>Hear from industry experts</li>
                    <li>Receive exclusive offers on courses</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="container mx-auto py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg text-center animate__animated animate__fadeInLeft">
                <h2 class="text-2xl font-bold mb-4">Banking Services</h2>
                <p>Free checking accounts, low fees, and convenient online banking features.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center animate__animated animate__fadeInUp">
                <h2 class="text-2xl font-bold mb-4">Health Insurance</h2>
                <p>Comprehensive coverage, wide network of providers, and preventive care services.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center animate__animated animate__fadeInRight">
                <h2 class="text-2xl font-bold mb-4">Liability Insurance</h2>
                <p>Protection against personal liability claims and coverage for damages and legal costs.</p>
            </div>
        </div>
    </section>

    <!-- Detailed Sections -->
    <main class="container mx-auto">
        <!-- Banking Services Section -->
        <section id="banking" class="py-12">
            <h2 class="text-4xl font-bold mb-6">Banking Services for Students and Employees</h2>
            <ul class="list-disc list-inside">
                <li>Free checking accounts with no monthly maintenance fees</li>
                <li>Low or no fees for transactions such as ATM withdrawals and payments</li>
                <li>Convenient online banking features including mobile apps and digital statements</li>
                <li>Special student offers and discounts on loans and credit cards</li>
            </ul>
        </section>

        <!-- Health Insurance Section -->
        <section id="health" class="py-12">
            <h2 class="text-4xl font-bold mb-6">Health Insurance Benefits</h2>
            <ul class="list-disc list-inside">
                <li>Comprehensive coverage including hospital stays, outpatient care, and prescription medications</li>
                <li>Access to a wide network of healthcare providers</li>
                <li>Preventive care services such as vaccinations and routine screenings</li>
                <li>Discounted rates and special packages for students</li>
            </ul>
            <h3 class="text-3xl font-bold mt-8 mb-4">Why Barmer is the Best for Health Insurance</h3>
            <ul class="list-disc list-inside">
                <li>Extensive coverage options from basic to premium plans</li>
                <li>Excellent customer service with 24/7 support and multilingual services</li>
                <li>High satisfaction rate among users</li>
                <li>Affordable premiums with discounts for students and young professionals</li>
                <li>Additional benefits such as wellness programs and fitness discounts</li>
            </ul>
        </section>

        <!-- Liability Insurance Section -->
        <section id="liability" class="py-12">
            <h2 class="text-4xl font-bold mb-6">Liability Insurance Benefits</h2>
            <ul class="list-disc list-inside">
                <li>Protection against personal liability claims</li>
                <li>Coverage for damages and legal costs</li>
                <li>Special packages for students and employees</li>
                <li>Essential for international students and employees</li>
            </ul>
            <h3 class="text-3xl font-bold mt-8 mb-4">Why Feather Insurance is the Best for Liability and Legal Insurance</h3>
            <ul class="list-disc list-inside">
                <li>Comprehensive liability and legal coverage</li>
                <li>Easy online application process</li>
                <li>Affordable rates for students and employees</li>
                <li>Excellent customer reviews and high satisfaction</li>
            </ul>
        </section>

        <!-- Study Opportunities in Germany -->
        <section id="study" class="py-12">
            <h2 class="text-4xl font-bold mb-6">Study Opportunities in Germany</h2>
            <ul class="list-disc list-inside">
                <li>World-class education system with top-ranked universities</li>
                <li>Affordable tuition fees at public universities</li>
                <li>Strong emphasis on research and innovation</li>
                <li>Internship opportunities with leading companies</li>
                <li>Pathways to stay and work after graduation</li>
            </ul>
        </section>

        <!-- Learning German -->
        <section id="learning-german" class="py-12">
            <h2 class="text-4xl font-bold mb-6">Learning German</h2>
            <ul class="list-disc list-inside">
                <li>Enhance career opportunities by learning German</li>
                <li>Ease of integration into German society and culture</li>
                <li>Access to quality education in German universities</li>
                <li>Improved travel experiences in German-speaking countries</li>
            </ul>
            <h3 class="text-3xl font-bold mt-8 mb-4">Basic German Phrases</h3>
            <ul class="list-disc list-inside">
                <li>Guten Morgen (Good morning)</li>
                <li>Wie geht's? (How are you?)</li>
                <li>Danke (Thank you)</li>
                <li>Entschuldigung (Excuse me)</li>
                <li>Wo ist...? (Where is...?)</li>
            </ul>
        </section>

        <!-- Comparison Section -->
        <section id="comparison" class="py-12">
            <h2 class="text-4xl font-bold mb-6">Comparison: Barmer vs. Feather Insurance</h2>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 bg-blue-900 text-white">Feature</th>
                        <th class="py-2 px-4 bg-blue-900 text-white">Barmer (Health Insurance)</th>
                        <th class="py-2 px-4 bg-blue-900 text-white">Feather (Liability and Legal Insurance)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">Coverage Options</td>
                        <td class="border px-4 py-2">Extensive</td>
                        <td class="border px-4 py-2">Comprehensive</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Customer Service</td>
                        <td class="border px-4 py-2">24/7 Support, Multilingual</td>
                        <td class="border px-4 py-2">Excellent, Highly Rated</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Premiums</td>
                        <td class="border px-4 py-2">Affordable with Discounts</td>
                        <td class="border px-4 py-2">Affordable Rates</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Additional Benefits</td>
                        <td class="border px-4 py-2">Wellness Programs, Fitness Discounts</td>
                        <td class="border px-4 py-2">Easy Online Application, High Satisfaction</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Video Section -->
        <section id="video" class="py-12">
            <h2 class="text-4xl font-bold mb-6 text-center">Watch Our Introduction Video</h2>
            <div class="flex justify-center">
                <iframe class="w-full md:w-2/3 h-64 md:h-96" src="https://www.youtube.com/embed/6RSV3JY9j0Q" frameborder="0" allowfullscreen></iframe>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 RRR Group. All rights reserved.</p>
            <p>Contact us at <a href="mailto:info@rrrgroup.me" class="text-yellow-300 hover:text-yellow-400">info@rrrgroup.me</a></p>
            <p>Call us at <span class="text-yellow-300">+4915219739709</span></p>
            <div class="company-logos flex justify-center flex-wrap mt-4">
                <a href="https://www.barmer.de/en" target="_blank"><img src="https://www.barmer.de/resource/image/33362/portrait_ratio1x1/800/800/f4eab8cd94e6fa35c8721600cb94a317/Qn/barmer-logo.png" alt="Barmer"></a>
                <a href="https://www.tk.de/en" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Techniker_Krankenkasse_Logo.svg/1024px-Techniker_Krankenkasse_Logo.svg.png" alt="TK"></a>
                <a href="https://www.aok.de/en" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/AOK2008.svg/2048px-AOK2008.svg.png" alt="AOK"></a>
                <a href="https://www.dak.de/dak/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/DAK-Gesundheit_logo.svg/2560px-DAK-Gesundheit_logo.svg.png" alt="DAK"></a>
                <a href="https://feather-insurance.com/" target="_blank"><img src="https://uploads-ssl.webflow.com/5fc24e9a8218434b5f199d08/5ff88c26dcbd429c1ecf5eb9_logo_feather.svg" alt="Feather"></a>
                <a href="https://www.amnesty.org/en" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Amnesty_International_logo.svg/1024px-Amnesty_International_logo.svg.png" alt="Amnesty International"></a>
                <a href="https://www.deutsche-bank.de/pk.html" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Deutsche_Bank_logo_without_wordmark.svg/1024px-Deutsche_Bank_logo_without_wordmark.svg.png" alt="Deutsche Bank"></a>
                <a href="https://n26.com/en-eu" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/N26_logo.svg/1024px-N26_logo.svg.png" alt="N26"></a>
            </div>
        </div>
    </footer>
</body>
</html>

