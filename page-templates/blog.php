<?php
/*
Template Name: Blog Template
*/
get_header(); // Подключение header.php
?>

<section class="banner pt-56 pb-56">
    <div class="w-2/5 m-auto">
        <h1 class="text-slate-300 font-extrabold text-8xl">Blog</h1>
    </div>
</section>

<section id="blog" class="mt-20">
    <div class="w-4/5 m-auto">
        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5,
            'paged' => $paged, // Указываем номер текущей страницы для пагинации
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
        ?>

        <div class="post mt-7">
            <div>
                <h3 class="text-4xl"><?php the_title(); ?></h3>
                <div class="post-info flex">
                    <p class="text-gray-400 mr-4">Author: <?php the_author(); ?></p>
                    <p class="text-gray-400">Date: <?php echo get_the_date('d.m.Y'); ?></p>
                </div>
            </div>
            <div>
                <div class="post-img">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('large', array('class' => 'mix-blend-multiply bg-black'));
                    } else {
                        echo '<img class="mix-blend-multiply bg-black" src="' . get_template_directory_uri() . '/assets/img/800x800.png" alt="">';
                    }
                    ?>
                </div>
                <div>
                    <?php the_excerpt(); // Вывод краткого описания ?>
                </div>
            </div>
            <div class="flex justify-end mt-5">
                <a href="<?php the_permalink(); ?>" class="btn">Read</a>
            </div>
        </div>

        <?php
            endwhile;
            
            echo '<div class="pagination">';
            echo paginate_links(array(
                'total' => $query->max_num_pages,
                'prev_text' => '&laquo;',
                'next_text' => '&raquo;',
                'type' => 'list',
                'mid_size' => 2,
                'current_class' => 'current',
            ));
            echo '</div>';

            wp_reset_postdata(); // Сброс данных запроса
        else :
            echo '<p>No posts found</p>';
        endif;
        ?>
    </div>

</section>

<?php get_footer(); // Подключение footer.php ?>
