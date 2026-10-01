<link href="index.css" rel="stylesheet" />
<header>
    <div class="brand">
    <?php
        generate_bandname();
        $bandname = generate_bandname();
        echo $bandname;

        generate_bandlogo();
        $bandlogo = generate_bandlogo();
    ?>
    <img class="logo" src="<?= $bandlogo ?>" alt="Band Logo">
    </div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="band.php">Band</a></li>
        <li>Setlist</li>
        <li>Contact</li>
    </ul>
</header>   