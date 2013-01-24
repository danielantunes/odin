<?php get_header(); ?>
<div id="primary">
    <section id="content" role="main">
        <?php if ( have_posts() ) : the_post(); ?>
            <header class="page-header">
                <h1 class="page-title author"><?php echo __( 'Arquivos do Autor: ', 'odin' ) . '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>'; ?></h1>
            </header>
            <?php rewind_posts(); ?>
            <?php if ( get_the_author_meta( 'description' ) ) : ?>
                <div class="author-info">
                    <h2><?php echo __( 'Sobre ', 'odin' ) . get_the_author(); ?></h2>
                    <span class="author-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?></span>
                    <span class="author-description"><?php the_author_meta( 'description' ); ?></span>
                </div><!-- .author-info -->
            <?php endif; ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php echo get_template_part( 'loop' ); ?>
            <?php endwhile; ?>
            <?php echo odin_pagination(); ?>
        <?php else : ?>
            <?php get_template_part( 'no-results' ); ?>
        <?php endif; ?>
    </section><!-- #content -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>