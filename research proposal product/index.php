<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational AI Portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 1em 0;
        }
        nav {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            background: #333;
        }
        nav a {
            color: white;
            padding: 1em;
            text-decoration: none;
            text-align: center;
            flex: 1 1 auto;
        }
        nav a:hover {
            background: #4CAF50;
        }
        .container {
            padding: 2em;
        }
        footer {
            text-align: center;
            padding: 1em;
            background: #333;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .section {
            margin-bottom: 2em;
        }
        .section h2 {
            color: #4CAF50;
        }
        .resources {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1em;
        }
        .resource-item {
            background: white;
            padding: 1em;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .resource-item:hover {
            transform: translateY(-5px);
        }
        .resource-item a {
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        form input, form textarea, form button {
            margin-bottom: 1em;
            padding: 0.5em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to the Educational AI Portal</h1>
        <p>Empowering Students with Ethical AI Practices</p>
    </header>
    <nav>
        <a href="#about">About</a>
        <a href="#resources">Resources</a>
        <a href="#ethics">AI Ethics</a>
        <a href="#contact">Contact</a>
    </nav>
    <div class="container">
        <section id="about" class="section">
            <h2>About Us</h2>
            <p>This portal is dedicated to helping students learn about Artificial Intelligence (AI) and its role in modern education. Our goal is to provide resources, promote ethical practices, and prepare students for a technology-driven world.</p>
        </section>
        <section id="resources" class="section">
            <h2>Resources</h2>
            <div class="resources">
                <div class="resource-item">
                    <a href="#">Guide to Using AI Tools for Academics</a>
                    <p>Discover how to integrate AI tools into your study routine effectively.</p>
                </div>
                <div class="resource-item">
                    <a href="#">Top 5 AI Apps Every Student Should Know</a>
                    <p>A curated list of AI-powered apps that enhance learning and productivity.</p>
                </div>
                <div class="resource-item">
                    <a href="#">Video: Balancing AI and Critical Thinking</a>
                    <p>Watch insights on maintaining critical thinking skills in an AI-driven world.</p>
                </div>
                <div class="resource-item">
                    <a href="#">Interactive AI Tutorials</a>
                    <p>Hands-on tutorials to help you master AI technologies.</p>
                </div>
                <div class="resource-item">
                    <a href="#">AI Literacy for Beginners</a>
                    <p>Start your journey with AI by understanding its basics and applications.</p>
                </div>
            </div>
        </section>
        <section id="ethics" class="section">
            <h2>AI Ethics</h2>
            <p>Using AI responsibly is crucial for maintaining academic integrity and developing essential skills like problem-solving and critical thinking. Here are some guidelines:</p>
            <ul>
                <li>Do not rely entirely on AI for assignments; use it as a learning aid.</li>
                <li>Avoid plagiarism by generating your original work.</li>
                <li>Understand the limits of AI tools to use them effectively.</li>
            </ul>
        </section>
        <section id="contact" class="section">
            <h2>Contact Us</h2>
            <p>If you have questions or feedback, please reach out to us:</p>
            <form action="process_form.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                <button type="submit">Submit</button>
            </form>
            
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Educational AI Portal. All rights reserved.</p>
    </footer>
</body>
</html>
