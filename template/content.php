<div class="content-wrapper">
    <section class="content-header">
        <h1>Blank page <small>it all starts here</small></h1>
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