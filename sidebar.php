<?php
/**
 * The sidebar containing the main widget area
 * @package Creative_Theme
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>
<aside class="sidebar">
                <section class="search-form">
                   <form class="form-inline">
                     <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn-submit" type="submit"><i class="fas fa-search"></i></button>
                </form> 
                </section>
                <section class="widget">
                    <h3 class="widget-title">Recent Posts</h3>
                    <ul>
                        <li class="widget-item"><a href="#">Название карточки2</a></li>
                        <li class="widget-item"><a href="blog-item.html" aria-current="page">Название карточки1!</a></li>
                    </ul>
                </section>
            </aside>