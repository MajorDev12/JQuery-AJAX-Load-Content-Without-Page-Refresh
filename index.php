<?php require_once "header.php";?>
<nav class="sidenav">
    <ul>
        <li><a href="" data-target="home">Home</a></li>
        <li><a href="" data-target="services">Services</a></li>
        <li><a href="" data-target="settings">settings</a></li>
        <li><a href="" data-target="user">user management</a></li>
    </ul>
</nav>

<div class="content">
    <!-- set the default page -->
    <?php include "home.php"; ?>
</div>

<?php require_once "footer.php";?>