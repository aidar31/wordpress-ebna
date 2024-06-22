<?php
/*
Template Name: Home Template
*/
get_header(); // Подключение header.php
?>

<section class="banner pt-56 pb-56">
        <div class="w-2/5 m-auto">
            <h1 class="text-slate-300 font-extrabold text-8xl">Home</h1>
        </div>
    </section>

    <section id="about" class="mt-20">
        <div class="w-4/5 m-auto flex justify-between">
            <div class="w-2/5 text-right flex flex-col justify-center">
                <h2 class="text-6xl">About us</h2>
            </div>
            <div class="w-2/5 text-3xl text-justify">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias dolorum eos facilis reiciendis vero sequi, voluptas modi voluptates et in, fuga officiis laborum fugiat eligendi aliquam, eaque totam architecto cumque. Facere rem totam aut sint autem harum incidunt distinctio amet doloremque accusamus natus, similique ad perferendis est vero hic quas!
                </p>
            </div>
        </div>
    </section>

    <section id="command" class="mt-20">
        <div class="w-4/5 m-auto flex items-center">
            <div>
                <h3 class="text-4xl">Numbers of projects: </h3>
            </div>
            <div>
                <p id="num" class="text-9xl">1</p>
            </div>
        </div>
    </section>

<?php get_footer(); // Подключение footer.php ?>
