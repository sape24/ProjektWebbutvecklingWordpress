    </main>
    <footer>
        <!-- visar aktuellt årtal och webbplatsens namn-->
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p> 
    </footer>
    <!-- laddar in wordpress scripts och plugins-->
    <?php wp_footer(); ?>                                          
</body>
</html>