<!-- Kontrollerar ifall sidebar har widgets och visar dom-->
<?php if(is_active_sidebar('sidebar-1')) : ?>
    <aside>
        <?php dynamic_sidebar('sidebar-1'); ?>
    </aside>
<?php endif; ?>