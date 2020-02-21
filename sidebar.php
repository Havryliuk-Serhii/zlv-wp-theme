<aside class="sidebar">
    <section class="search-form">
        <form class="form-inline">
            <input id="s" class="form-control" type="search" placeholder="Search" aria-label="Search" value="<?php echo get_search_query(); ?>">
            <button class="btn-submit" type="submit"><i class="fas fa-search"></i></button>
        </form> 
    </section>
    <section class="widget">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>       
    </section>
</aside>

