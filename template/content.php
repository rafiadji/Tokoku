<div class="content-wrapper">
    <section class="content-header">
        <h1><?php echo $head;?></h1>
    </section>
    <section class="content">
        <?php
            if (isset($modul)) {
                $modul = "modul/".$modul.".php";
                include($modul);
            }
        ?>
    </section>
</div>