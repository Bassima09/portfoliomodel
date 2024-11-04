
<title>My portfolio</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"/>

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

<!-- login sectie -->
<form action="login.php" method="post">
<section class="login">

<div class="wrapper">
<form action="">
<h1>Login</h1>

<div class="input-box">
<input type="text" placeholder="Username" required>
<i class='bx bxs-user'></i>
</div>

<div class="input-box">
<input type="password" placeholder="Password" required>
<i class='bx bxs-lock-alt'></i>
</div>

<div class="remember-forgot">
<label><input type="checkbox"> Remember me</label>

</div>

<button type="submit" class="btn">Login</button>
<div class="register.">
<p>Don't have an account? <a href="/view/register.php"</a>Register here</p>
<!--    de register knop heb ik dmv een hyperlink doorlaten verwijzen naar een andere pagina zodat ze zich daar kunnen aanmelden -->

            </div>
        </form>
    </div>
</section>
</form>