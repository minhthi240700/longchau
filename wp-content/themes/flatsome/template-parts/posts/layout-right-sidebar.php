<?php
/**
 * Posts layout right sidebar.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

do_action('flatsome_before_blog');
?>
<div class="shop-page-title category-page-title page-title custom-breadcrumb<?php flatsome_header_title_classes() ?>">
    <div class="page-title-inner flex-row  medium-flex-wrap container">
        <div class="flex-col flex-grow medium-text-center">
            <?php do_action('flatsome_category_title') ;?>
        </div>
        <div class="flex-col medium-text-center">
            <?php do_action('flatsome_category_title_alt') ;?>
        </div>
    </div>
</div>
<?php if(!is_single() && flatsome_option('blog_featured') == 'top'){ get_template_part('template-parts/posts/featured-posts'); } ?>

<div class="row row-small <?php if(flatsome_option('blog_layout_divider')) echo 'row-divided ';?>">

    <div class="large-9 col">
        <?php if(!is_single() && flatsome_option('blog_featured') == 'content'){ get_template_part('template-parts/posts/featured-posts'); } ?>
        <?php
		if(is_single()){
			get_template_part( 'template-parts/posts/single');
			comments_template();
		} elseif(flatsome_option('blog_style_archive') && (is_archive() || is_search())){
			get_template_part( 'template-parts/posts/archive', flatsome_option('blog_style_archive') );
		} else {
			get_template_part( 'template-parts/posts/archive', flatsome_option('blog_style') );
		}
	?>
    </div>
    <div class="post-sidebar large-3 col">
        <?php flatsome_sticky_column_open( 'blog_sticky_sidebar' ); ?>
        <?php get_sidebar(); ?>
        <?php flatsome_sticky_column_close( 'blog_sticky_sidebar' ); ?>
    </div>
</div>

<?php
	do_action('flatsome_after_blog');
?>