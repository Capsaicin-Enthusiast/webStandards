<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test - Legal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <header class="bg-white">
    <?php
    include 'nav.php';
    ?>
    </header>

    <main class="container mx-auto py-5">
        <section id="privacy-policy" class="bg-gray-100 text-center py-8">
            <div class="container mx-auto">
                <h1 class="text-4xl font-bold text-gray-1000 mb-8">Privacy Policy</h1>
                <div class="text-left text-lg text-gray-800">
                    <p class="mb-4"><strong>Introduction</strong></p>
                    <p class="mb-4">This Privacy Policy describes how we collect, use, and share information when you use our website or services. By accessing or using our website or services, you agree to this Privacy Policy.</p>
                    <p class="mb-4"><strong>Information We Collect</strong></p>
                    <p class="mb-4">We may collect personal information that you provide to us when you use our website or services. This may include your name, email address, and any other information you choose to provide.</p>
                    <p class="mb-4">We may also automatically collect certain information when you visit our website, such as your IP address, browser type, and operating system.</p>
                    <p class="mb-4"><strong>How We Use Your Information</strong></p>
                    <p class="mb-4">We may use the information we collect to:</p>
                    <ul class="list-disc ml-8 mb-4">
                        <li>Provide and maintain our website and services</li>
                        <li>Communicate with you about your account or our services</li>
                        <li>Personalize your experience</li>
                        <li>Analyze usage of our website and services</li>
                        <li>Protect against illegal activities, fraud, or other wrongdoing</li>
                    </ul>
                    <p class="mb-4"><strong>Information Sharing</strong></p>
                    <p class="mb-4">We may share your information with third parties for the purposes described in this Privacy Policy. This may include service providers, business partners, or other third parties as required by law.</p>
                    <p class="mb-4"><strong>Your Choices</strong></p>
                    <p class="mb-4">You may choose not to provide certain information, but this may limit your ability to use certain features of our website or services.</p>
                    <p class="mb-4"><strong>Security</strong></p>
                    <p class="mb-4">We take reasonable measures to protect your information from unauthorized access, use, or disclosure.</p>
                    <p class="mb-4"><strong>Changes to This Privacy Policy</strong></p>
                    <p class="mb-4">We may update this Privacy Policy from time to time. Any changes will be posted on this page, so please check back periodically for updates.</p>
                    <p class="mb-4"><strong>Contact Us</strong></p>
                    <p>If you have any questions or concerns about this Privacy Policy, please contact us at 071010009@dwc-legazpi.edu.</p>
                </div>
            </div>
        </section>
        
        <section id="terms-of-service" class="bg-gray-100 text-center py-8">
            <div class="container mx-auto">
                <h1 class="text-4xl font-bold text-gray-1000 mb-8">Terms of Service</h1>
                <div class="text-left text-lg text-gray-800">
                    <p class="mb-4"><strong>Introduction</strong></p>
                    <p class="mb-4">These Terms of Service ("Terms") govern your use of Test's website and services. By accessing or using our website or services, you agree to be bound by these Terms.</p>
                    <p class="mb-4"><strong>Use of Our Website and Services</strong></p>
                    <p class="mb-4">You may use our website and services for lawful purposes only. You agree not to engage in any activity that violates these Terms or any applicable laws or regulations.</p>
                    <p class="mb-4"><strong>Intellectual Property</strong></p>
                    <p class="mb-4">All content on our website, including text, graphics, logos, and images, is the property of [Your Company Name] and is protected by copyright and other intellectual property laws. You may not use or reproduce any content without our prior written consent.</p>
                    <p class="mb-4"><strong>Limitation of Liability</strong></p>
                    <p class="mb-4">We are not liable for any damages arising out of or in connection with your use of our website or services. This includes any direct, indirect, incidental, consequential, or punitive damages.</p>
                    <p class="mb-4"><strong>Indemnification</strong></p>
                    <p class="mb-4">You agree to indemnify and hold us harmless from any claims, damages, or losses arising out of your use of our website or services or your violation of these Terms.</p>
                    <p class="mb-4"><strong>Governing Law</strong></p>
                    <p class="mb-4">These Terms are governed by and construed in accordance with the laws of The Philippines. Any disputes arising out of these Terms will be resolved exclusively in the courts of Philippines.</p>
                    <p class="mb-4"><strong>Changes to These Terms</strong></p>
                    <p class="mb-4">We may update these Terms from time to time. Any changes will be posted on this page, so please check back periodically for updates.</p>
                    <p class="mb-4"><strong>Contact Us</strong></p>
                    <p>If you have any questions or concerns about these Terms, please contact us at 071010009@dwc-legazpi.edu.</p>
                </div>
            </div>
        </section>        
    </main>

    <footer class="bg-gray-900 text-white text-center py-4">
        <p>&copy; <span id="currentYear" class="text-gray-400"></span> Test Website</p>
    </footer>

    <script>
        document.getElementById("currentYear").innerHTML = new Date().getFullYear();
    </script>
</body>
</html>
