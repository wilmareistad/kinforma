<?php
if (isset($_POST['email']) && $_POST['E-post']) {
    $name = $_POST['title'];
    echo "Your email address is $name and your password is $password";
}
?>

<h3>Din inbjudan</h3>
<p>Bli en del av Kinformas community och ta del av rabatter, aktiviteter och mycket annat.</p>
<p>E-post</p>

<form action="newsletter.php" method="post">
    <label>E-post</label>
    <input type="email" name="title" placeholder="john.smith@gmail.com">
    <button type="submit">Gå med</button>
</form>