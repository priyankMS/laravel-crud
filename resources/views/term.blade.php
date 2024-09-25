<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 30px;
            color: #007bff;
        }
        footer {
            margin-top: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1 class="text-center">Terms of Service</h1>
        </header>

        <main>
            <section id="introduction">
                <h2>1. Introduction</h2>
                <p>Welcome to <strong>[Your Company Name]</strong>. By accessing our services, you agree to comply with and be bound by these terms.</p>
            </section>

            <section id="acceptance">
                <h2>2. Acceptance of Terms</h2>
                <p>By using our website and services, you affirm that you are at least [age] years old and are capable of entering into a binding agreement.</p>
            </section>

            <section id="user-accounts">
                <h2>3. User Accounts</h2>
                <p>You may need to create an account to access certain features. You are responsible for maintaining the confidentiality of your account information.</p>
            </section>

            <section id="usage-rules">
                <h2>4. Usage Rules</h2>
                <p>You agree not to engage in any prohibited activities, including but not limited to:</p>
                <ul>
                    <li>Using the service for illegal purposes</li>
                    <li>Interfering with the security of the service</li>
                    <li>Transmitting any harmful or offensive content</li>
                </ul>
            </section>

            <section id="intellectual-property">
                <h2>5. Intellectual Property</h2>
                <p>All content provided on our website is the property of <strong>[Your Company Name]</strong> and is protected by intellectual property laws.</p>
            </section>

            <section id="disclaimer">
                <h2>6. Disclaimer</h2>
                <p>Our services are provided on an "as is" basis without warranties of any kind. We do not guarantee the accuracy of information provided.</p>
            </section>

            <section id="limitation-of-liability">
                <h2>7. Limitation of Liability</h2>
                <p>In no event shall <strong>[Your Company Name]</strong> be liable for any indirect, incidental, or consequential damages arising from your use of our services.</p>
            </section>

            <section id="modifications">
                <h2>8. Modifications to Terms</h2>
                <p>We reserve the right to change these terms at any time. Changes will be effective upon posting on this page.</p>
            </section>

            <section id="contact">
                <h2>9. Contact Us</h2>
                <p>If you have any questions about these terms, please contact us at <a href="mailto:[your-email@example.com]">[your-email@example.com]</a>.</p>
            </section>
        </main>

        <footer>
            <p>&copy; <span id="year"></span> <strong>Shiroya Ltd.</strong>. All rights reserved.</p>
        </footer>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Set current year in the footer
        document.getElementById("year").innerText = new Date().getFullYear();
    </script>
</body>
</html>
