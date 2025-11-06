<link rel="stylesheet" href="newsletter.css">
<?php
if (isset($_POST['email']) && $_POST['email']) {
    $email = $_POST['email'];
}
?>

<div class="invite-box">
    <h3>Din inbjudan</h3>
    <p>Bli en del av Kinformas community och ta del av rabatter, aktiviteter och mycket annat.</p>

    <form action="newsletter.php" method="post">
        <label for="email">E-post</label>
        <input type="email" id="email" name="email" placeholder="john.smith@gmail.com">
        <button type="submit">Gå med</button>
    </form>
</div>