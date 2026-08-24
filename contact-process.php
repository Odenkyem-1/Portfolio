<?php
// contact-process.php - Handles contact form submissions and saves them to MySQL

session_start();
require_once __DIR__ . '/includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $errors = [];

    if ($name === '') {
        $errors[] = 'Name is required.';
    } elseif (mb_strlen($name) > 100) {
        $errors[] = 'Name must be 100 characters or fewer.';
    }

    if ($email === '') {
        $errors[] = 'Email address is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please provide a valid email address.';
    } elseif (mb_strlen($email) > 150) {
        $errors[] = 'Email must be 150 characters or fewer.';
    }

    if (mb_strlen($subject) > 200) {
        $errors[] = 'Subject must be 200 characters or fewer.';
    }

    if ($message === '') {
        $errors[] = 'Message cannot be empty.';
    }

    if (empty($errors)) {
        try {
            $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
            $stmt->execute([
                $name,
                $email,
                $subject !== '' ? $subject : null,
                $message
            ]);

            $_SESSION['success'] = 'Thank you! Your message has been sent successfully.';
            unset($_SESSION['old']);
        } catch (PDOException $e) {
            $_SESSION['errors'] = ['Could not save message due to a database error. Please try again later.'];
            $_SESSION['old'] = [
                'name'    => $name,
                'email'   => $email,
                'subject' => $subject,
                'message' => $message,
            ];
        }
    } else {
        $_SESSION['errors'] = $errors;
        $_SESSION['old'] = [
            'name'    => $name,
            'email'   => $email,
            'subject' => $subject,
            'message' => $message,
        ];
    }

    header('Location: index.php#contact');
    exit;
} else {
    header('Location: index.php');
    exit;
}
