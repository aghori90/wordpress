<?php
/*
Template Name: Feedback Form
*/
get_header();

// Database connection
$conn = new mysqli('localhost', 'aghori', 'Ranchi@123', 'wordpress');
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
	$name = sanitize_text_field($_POST['name']);
	$email = sanitize_email($_POST['email']);
	$message = sanitize_textarea_field($_POST['message']);

	$wpdb->insert(
		'feedback',
		array(
			'name' => $name,
			'email' => $email,
			'message' => $message
		)
	);

	if ($wpdb->insert_id) {
		echo "Feedback submitted successfully!";
	} else {
		echo "Error: Could not submit feedback.";
	}
}
?>

    <h1>Feedback Form</h1>
    <form method="post" action="">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

<?php
get_footer();
?>