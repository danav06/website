<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 8.4 Website</title>
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #4cc9f0;
            --light: #f8f9fa;
            --dark: #212529;
            --success: #4bb543;
            --danger: #dc3545;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --radius: 8px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: var(--dark);
            line-height: 1.6;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header & Navigation */
        header {
            background: white;
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i {
            color: var(--accent);
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: var(--radius);
            transition: all 0.3s ease;
        }

        .nav-link:hover, .nav-link.active {
            background-color: var(--primary);
            color: white;
        }

        /* Hero Section */
        .hero {
            padding: 5rem 0;
            text-align: center;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border-radius: 0 0 var(--radius) var(--radius);
            margin-bottom: 3rem;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto 2rem;
        }

        .btn {
            display: inline-block;
            background: var(--accent);
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: var(--radius);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        /* Content Sections */
        .section {
            padding: 3rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 2.2rem;
            color: var(--secondary);
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .card {
            background: white;
            border-radius: var(--radius);
            padding: 2rem;
            box-shadow: var(--shadow);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            color: var(--primary);
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .card i {
            font-size: 2rem;
            color: var(--accent);
            margin-bottom: 1rem;
        }

        /* Features */
        .features {
            background: white;
            border-radius: var(--radius);
            padding: 3rem;
            box-shadow: var(--shadow);
            margin-bottom: 3rem;
        }

        .feature-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }

        .feature-icon {
            background: var(--light);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            flex-shrink: 0;
        }

        /* Contact Form */
        .contact-form {
            background: white;
            padding: 3rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: var(--radius);
            font-size: 1rem;
            transition: border 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary);
            outline: none;
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 3rem 0;
            margin-top: 3rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1.5rem;
            color: var(--accent);
        }

        .footer-bottom {
            text-align: center;
            margin-top: 3rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 1rem;
            }
            
            .nav-menu {
                gap: 1rem;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
        }

        /* PHP Info Box */
        .php-info {
            background: white;
            border-radius: var(--radius);
            padding: 2rem;
            box-shadow: var(--shadow);
            margin: 2rem 0;
            border-left: 4px solid var(--primary);
        }

        .php-info h3 {
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .php-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-top: 1rem;
        }

        .php-detail-item {
            padding: 1rem;
            background: var(--light);
            border-radius: var(--radius);
        }

        .php-detail-item strong {
            color: var(--secondary);
        }
    </style>
</head>
<body>
    <?php
    // PHP 8.4 Features Demonstration
    $siteTitle = "PHP 8.4 Demo";
    $currentPage = $_GET['page'] ?? 'home';
    
    // Using PHP 8.4's new array functions (hypothetical examples)
    $features = [
        'Improved Performance' => 'Faster execution and lower memory usage',
        'New Functions' => 'Enhanced standard library with new utilities',
        'Better Typing' => 'Enhanced type system with more precise type hints',
        'Security Updates' => 'Latest security patches and improvements'
    ];
    
    // Navigation items
    $navItems = [
        'home' => 'Home',
        'features' => 'Features',
        'about' => 'About',
        'contact' => 'Contact'
    ];
    
    // Form handling
    $formSubmitted = false;
    $formErrors = [];
    $formData = [
        'name' => '',
        'email' => '',
        'message' => ''
    ];
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_form'])) {
        $formData['name'] = trim($_POST['name'] ?? '');
        $formData['email'] = trim($_POST['email'] ?? '');
        $formData['message'] = trim($_POST['message'] ?? '');
        
        // Validation
        if (empty($formData['name'])) {
            $formErrors[] = "Name is required";
        }
        
        if (empty($formData['email']) || !filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
            $formErrors[] = "Valid email is required";
        }
        
        if (empty($formData['message'])) {
            $formErrors[] = "Message is required";
        }
        
        if (empty($formErrors)) {
            $formSubmitted = true;
        }
    }
    ?>

    <header>
        <div class="container">
            <nav class="navbar">
                <a href="?page=home" class="logo">
                    <i>🚀</i> <?php echo htmlspecialchars($siteTitle); ?>
                </a>
                <ul class="nav-menu">
                    <?php foreach ($navItems as $key => $title): ?>
                        <li>
                            <a href="?page=<?php echo $key; ?>" 
                               class="nav-link <?php echo $currentPage === $key ? 'active' : ''; ?>">
                                <?php echo htmlspecialchars($title); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <?php if ($currentPage === 'home'): ?>
            <section class="hero">
                <h1>Welcome to PHP 8.4</h1>
                <p>Experience the latest features and improvements in PHP 8.4 with this demo website</p>
                <a href="?page=features" class="btn">Explore Features</a>
            </section>

            <section class="section">
                <h2 class="section-title">Why PHP 8.4?</h2>
                <div class="cards">
                    <div class="card">
                        <i>⚡</i>
                        <h3>Performance</h3>
                        <p>PHP 8.4 brings significant performance improvements and optimizations for faster execution.</p>
                    </div>
                    <div class="card">
                        <i>🔧</i>
                        <h3>New Features</h3>
                        <p>Discover new functions, improved type system, and enhanced language capabilities.</p>
                    </div>
                    <div class="card">
                        <i>🛡️</i>
                        <h3>Security</h3>
                        <p>Benefit from the latest security updates and best practices for web development.</p>
                    </div>
                </div>
            </section>

            <div class="php-info">
                <h3>PHP Information</h3>
                <p>This website is running on PHP <?php echo PHP_VERSION; ?> with the following details:</p>
                <div class="php-details">
                    <div class="php-detail-item">
                        <strong>PHP Version:</strong> <?php echo PHP_VERSION; ?>
                    </div>
                    <div class="php-detail-item">
                        <strong>Server Software:</strong> <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown'; ?>
                    </div>
                    <div class="php-detail-item">
                        <strong>Request Time:</strong> <?php echo date('Y-m-d H:i:s'); ?>
                    </div>
                </div>
            </div>

        <?php elseif ($currentPage === 'features'): ?>
            <section class="section">
                <h2 class="section-title">PHP 8.4 Features</h2>
                
                <div class="features">
                    <div class="feature-list">
                        <?php foreach ($features as $feature => $description): ?>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i>✓</i>
                                </div>
                                <div>
                                    <h4><?php echo htmlspecialchars($feature); ?></h4>
                                    <p><?php echo htmlspecialchars($description); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="php-info">
                    <h3>PHP Configuration</h3>
                    <div class="php-details">
                        <div class="php-detail-item">
                            <strong>Memory Limit:</strong> <?php echo ini_get('memory_limit'); ?>
                        </div>
                        <div class="php-detail-item">
                            <strong>Max Execution Time:</strong> <?php echo ini_get('max_execution_time'); ?>s
                        </div>
                        <div class="php-detail-item">
                            <strong>Upload Max Filesize:</strong> <?php echo ini_get('upload_max_filesize'); ?>
                        </div>
                        <div class="php-detail-item">
                            <strong>Post Max Size:</strong> <?php echo ini_get('post_max_size'); ?>
                        </div>
                    </div>
                </div>
            </section>

        <?php elseif ($currentPage === 'about'): ?>
            <section class="section">
                <h2 class="section-title">About This Website</h2>
                
                <div class="cards">
                    <div class="card">
                        <h3>Built with PHP 8.4</h3>
                        <p>This website demonstrates modern PHP development practices using the latest PHP 8.4 features.</p>
                    </div>
                    <div class="card">
                        <h3>Single File Architecture</h3>
                        <p>All functionality is contained within a single PHP file for simplicity and portability.</p>
                    </div>
                    <div class="card">
                        <h3>Responsive Design</h3>
                        <p>Fully responsive layout that works on all devices from mobile to desktop.</p>
                    </div>
                </div>

                <div class="php-info">
                    <h3>Server Environment</h3>
                    <div class="php-details">
                        <div class="php-detail-item">
                            <strong>Operating System:</strong> <?php echo PHP_OS; ?>
                        </div>
                        <div class="php-detail-item">
                            <strong>Server API:</strong> <?php echo PHP_SAPI; ?>
                        </div>
                        <div class="php-detail-item">
                            <strong>Loaded Extensions:</strong> <?php echo count(get_loaded_extensions()); ?>
                        </div>
                    </div>
                </div>
            </section>

        <?php elseif ($currentPage === 'contact'): ?>
            <section class="section">
                <h2 class="section-title">Contact Us</h2>
                
                <?php if ($formSubmitted): ?>
                    <div class="php-info" style="border-left-color: var(--success);">
                        <h3>Thank You!</h3>
                        <p>Your message has been received. We'll get back to you soon.</p>
                        <p><strong>Name:</strong> <?php echo htmlspecialchars($formData['name']); ?></p>
                        <p><strong>Email:</strong> <?php echo htmlspecialchars($formData['email']); ?></p>
                        <a href="?page=contact" class="btn">Send Another Message</a>
                    </div>
                <?php else: ?>
                    <?php if (!empty($formErrors)): ?>
                        <div class="php-info" style="border-left-color: var(--danger);">
                            <h3>Please fix the following errors:</h3>
                            <ul>
                                <?php foreach ($formErrors as $error): ?>
                                    <li><?php echo htmlspecialchars($error); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <div class="contact-form">
                        <form method="POST">
                            <input type="hidden" name="contact_form" value="1">
                            
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" id="name" name="name" class="form-control" 
                                       value="<?php echo htmlspecialchars($formData['name']); ?>" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control" 
                                       value="<?php echo htmlspecialchars($formData['email']); ?>" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Your Message</label>
                                <textarea id="message" name="message" class="form-control" required><?php echo htmlspecialchars($formData['message']); ?></textarea>
                            </div>
                            
                            <button type="submit" class="btn">Send Message</button>
                        </form>
                    </div>
                <?php endif; ?>
            </section>
        <?php endif; ?>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>PHP 8.4 Website</h3>
                    <p>A demonstration of modern PHP development with the latest features and best practices.</p>
                </div>
                
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <?php foreach ($navItems as $key => $title): ?>
                            <li><a href="?page=<?php echo $key; ?>" style="color: #ccc; text-decoration: none;"><?php echo htmlspecialchars($title); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Technical Info</h3>
                    <p>PHP Version: <?php echo PHP_VERSION; ?></p>
                    <p>Server: <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown'; ?></p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> PHP 8.4 Demo. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
