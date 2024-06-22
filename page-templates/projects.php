<?php
/**
 * Template Name: Projects Template
 *
 * This template is used to display archive of projects.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Your_Theme_Name
 */

get_header();

?>

<section class="banner pt-56 pb-56">
    <div class="w-2/5 m-auto">
        <h1 class="text-slate-300 font-extrabold text-8xl">Projects</h1>
    </div>
</section>

<section id="projects" class="mt-10">
    <div class="w-2/5 m-auto flex flex-wrap justify-between">
        <?php
        $args = array(
            'post_type' => 'project', // Указываем тип записи "project"
            'posts_per_page' => -1, // Количество записей на странице (-1 для всех)
        );

        $projects = new WP_Query( $args );

        if ( $projects->have_posts() ) :
            while ( $projects->have_posts() ) :
                $projects->the_post();
                ?>
                <div class="project">
                    <div class="cover">
                        <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'large' ); // Выводим миниатюру записи
                        } else {
                            echo '<img src="' . get_template_directory_uri() . '/assets/img/800x800.png" alt="">'; // Если нет миниатюры, выводим заглушку
                        }
                        ?>
                    </div>
                    <div class="project-info">
                        <p><?php the_title(); ?></p>
                        <a class="btn flex justify-around" href="<?php the_permalink(); ?>">Read</a>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata(); // Сбрасываем данные запроса
        else :
            echo '<p>No projects found.</p>'; // Если проекты не найдены
        endif;
        ?>
    </div>

    <div class="w-4/5 m-auto mt-10">
        <?php
        $big = 999999999;
        $pagination = paginate_links(array(
            'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format'    => '?paged=%#%',
            'current'   => max(1, get_query_var('paged')),
            'total'     => $projects->max_num_pages,
            'type'      => 'array',
            'prev_text' => '<-',
            'next_text' => '->',
        ));

        if (!empty($pagination)) {
            echo '<div class="flex w-1/3 m-auto mt-10">';
            foreach ($pagination as $page) {
                echo '<div class="border-2 w-1/5 text-center"><a href="#" class="text-xl">' . $page . '</a></div>';
            }
            echo '</div>';
        }
        ?>
    </div>
</section>

<?php
get_footer();
