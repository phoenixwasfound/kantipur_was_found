<?php
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "form_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (full_name, last_name, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $full_name, $last_name, $email);

    if ($stmt->execute()) {
        echo "<script>alert('Record added successfully');</script>";
    } else {
        echo "<script>alert('Error adding record: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FEATURES</title>
    <link rel="stylesheet" href="../style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
  </head>
  <body>
    <nav>
      <div class="title">KANTIPUR NEPAL ©</div>
      <ul>
        <li><a href="../indexs.html">Home</a></li>
        <li><a href="./features.html">Features</a></li>
        <li><a href="./events.html">Events</a></li>
        <li><a href="./sneak.html">Sneak-peek</a></li>
        <li><a href="./member.html">Members</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
    <div class="contact">
      <h1>CONTACT US</h1>
      <p>
        Looking to contact Kantipur? There's a few ways to do it based on your
        inquiry - check out all your option below.
      </p>
    </div>
    <div class="member-card-holder">
        <div class="box-insta">
            <a href="https://www.instagram.com/kantipurdiscord/" target="_blank"><img src="../instagram.png" /></a>
            <p class="black">INSTAGRAM</p>
            <p class="black">
              Stay connected with us on Instagram! Follow our official account to
              get the latest updates, behind-the-scenes content, and sneak peeks at
              new features. Join our community of gamers and creators, and share
              your own Discord moments using #DiscordApp. Don’t miss out on
              exclusive events, giveaways, and more. Follow us now and be part of
              the Discord family!
            </p>
          
        </div>
        <div class="box-insta">
            <a href="mailto:kantipur287@gmail.com" target="_blank"><img src="../mail.png" /></a>
            <p class="black">GMAIL</p>
            <p class="black">
                Got questions, feedback, or need support? Reach out to us via Gmail! 
                Our team is here to help you with any inquiries, troubleshoot issues, and listen to your suggestions. 
                Connect with us and we'll get back to you as soon as possible. Email us at  <strong>kantipur287@gmail.com</strong>  and let us know how we can assist you.
            </p>
          
        </div>
    </div>
  
      <div class="form-container">
        <h2>Send us your information</h2>
        <form action="submit.php" method="post">
            <input type="text" name="full_name" placeholder="Full Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="submit" value="Submit">
      </form>
    </div>
 
  </body>
</html>

