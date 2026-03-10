<?php
$pageTitle = 'Contact';
$success = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $valid = true;
    if (empty($name)) {
        $error = 'Please enter your name.';
        $valid = false;
    } elseif (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
        $valid = false;
    } elseif (empty($message)) {
        $error = 'Please enter your message.';
        $valid = false;
    }

    if ($valid) {
        try {
            require_once __DIR__ . '/../db.php';
            $pdo = getDb();
            $stmt = $pdo->prepare('INSERT INTO contact_submissions (name, email, message) VALUES (?, ?, ?)');
            $stmt->execute([$name, $email, $message]);
            $success = true;
        } catch (PDOException $e) {
            $error = 'Sorry, we could not send your message. Please try again or contact us directly.';
        }
    }
}

require_once __DIR__ . '/../includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <h1 class="scroll-reveal">Contact us</h1>
        <p class="lead scroll-reveal">Get in touch for a quote or consultation</p>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-form-wrapper scroll-reveal">
                <?php if ($success): ?>
                    <div class="alert alert-success">
                        <p>Thank you. Your message has been sent. We will get back to you within 24–48 hours.</p>
                    </div>
                <?php else: ?>
                    <?php if ($error): ?>
                        <div class="alert alert-error"><?= htmlspecialchars($error) ?></div>
                    <?php endif; ?>
                    <form method="POST" action="contact.php" class="contact-form">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" placeholder="Tell us about your project—surface type, area, location, and timeline." required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send message</button>
                    </form>
                <?php endif; ?>
            </div>
            <div class="contact-info scroll-reveal" data-delay="0">
                <h3>Get in touch</h3>
                <p><strong>Phone</strong><br>+44 000 000 0000</p>
                <p><strong>Email</strong><br>info@scotlasesolutions.co.uk</p>
                <p><strong>Address</strong><br>Scotland, UK</p>
                <p><strong>Service area</strong><br>Scotland and across the UK. We travel to site for marine, commercial, and social projects.</p>
                <p><strong>Response time</strong><br>We aim to respond within 24–48 hours.</p>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
