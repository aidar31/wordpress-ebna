<?php
/*
Template Name: Contact Template
*/
get_header(); // Подключение header.php
?>

<section class="banner pt-56 pb-56">
    <div class="w-2/5 m-auto">
        <h1 class="text-slate-300 font-extrabold text-8xl">Contacts</h1>
    </div>
</section>

<section id="contacts" class="mt-10">
    <div class="w-4/5 m-auto">
        <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" class="border-2 w-1/2 m-auto flex flex-col p-2">
            <h3 class="text-3xl mb-3">Contact form</h3>
            <div class="mb-3">
                <input class="border-2 rounded-lg" type="text" name="contact_name" id="contact_name" placeholder="Enter your name" required>
                <input class="border-2 rounded-lg" type="email" name="contact_email" id="contact_email" placeholder="Enter your e-mail" required>
            </div>
            <textarea class="border-2 rounded-lg mb-3 text-gray-400" rows="10" name="contact_message" id="contact_message" placeholder="Enter your message" required></textarea>
            <input type="hidden" name="action" value="process_contact_form">
            <input type="submit" value="Submit" class="btn w-1/3">
        </form>
    </div>
</section>

<?php get_footer(); // Подключение footer.php ?>
