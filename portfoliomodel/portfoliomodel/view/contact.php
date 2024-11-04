
<title>My portfolio</title>
<link rel="stylesheet" href="css/style.css">
<!-- header sectie -->
<header>
    <nav class="navbar">
        <ul><a href="./login.php" class="logo"> B.<span> B</span></a></ul>
        <ul><a href="../index.view.php">Home</a></ul>
        <ul><a href="./about.view.php">About</a></ul>
        <ul><a href="./portfolio.php">Portfolio</a></ul>
        <ul><a href="./contact.php">Contact</a></ul>
    </nav>
</header>



<!-- contact sectie -->
<section class="contact" id="contact">
<form action="submit_contact.php" method="POST">

<!-- wrapper sectie -->
<div class="wrapper">
<h2>Contact Me</h2>
<form action="your-server-endpoint" method="POST">

<div class="input-box2">
<label for="name">Name:</label>
<input type="text" id="name" name="name" required>
</div>

<div class="input-box2">
<label for="email">Email:</label>
<input type="email" id="email" name="email" required>
</div>

<div class="input-box2">
<label for="subject">Subject:</label>
<input type="text" id="subject" name="subject" required>
</div>

<div class="input-box2">
<label for="message">Message:</label>
<textarea id="message" name="message" rows="3" required></textarea>
</div>

<button type="submit" class="btn">Send</button>
      </div>

    </form>
</div>

</section>

