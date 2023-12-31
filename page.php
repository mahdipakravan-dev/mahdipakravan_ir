<?php
    get_header();
    $comments = get_comments(array(
        'post_id' => get_the_ID(),
        'status' => 'approve',
    ));
?>

<body class="font-shabnam text-base text-black dark:text-white dark:bg-slate-900">

<?php
get_template_part("inc/partials/navbar");
?>

<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="service">
    <div class="container-page">
        <h1 class="mb-6 md:text-2xl text-xl md:leading-normal leading-normal font-semibold"><?php the_title() ?></h1>

        <div class="rounded-md">
            <div class="w-full flex justify-center items-center">
                <?php the_post_thumbnail("full-thumbnail", array(
                        'class' => 'rounded-md w-full',
                )); ?>
            </div>
            <div class="mt-6">
                <div class="mb-6 p-2">
                    <div class="bg-slate-900 rounded-md border border-dashed border-slate-200 p-4 font-xs">
                        <?php
                        $summary = get_post_meta(get_the_ID(), 'summary', true);
                        if (!empty($summary)) {
                            echo '<div class="summary">' . wpautop($summary) . '</div>';
                        }
                        ?>
                    </div>
                </div>
                <?php the_content(); ?>
            </div>

            <div class="bg-gray-100 mt-22" style="margin-top: 80px;">
                <hr>

                <div class="space-y-4 mt-4">
                    <div class="bg-gray-100">
                        <div class="mt-8 mb-4">
                            <h2 class="text-xl font-semibold">خوشحال میشم نظرتون رو در مورد این مقاله بدونم :)</h2>
                            <form action="<?php echo esc_url( site_url( '/wp-comments-post.php' ) ); ?>" method="post" class="mt-4">
                                <div class="mb-1">
                                    <textarea name="comment" id="comment" placeholder="نظرتون چی بود؟" class="w-full px-4 py-2 rounded border focus:outline-none focus:border-blue-400 bg-slate-900 p-2" required></textarea>
                                </div>
                                <div class="flex justify-between space-x-2">
                                    <input type="text" name="author" id="author" placeholder="نام شما" class="w-full px-4 py-2 rounded border focus:outline-none focus:border-blue-400 bg-slate-900 p-2 ml-2" required>
                                    <input type="email" name="email" id="email" placeholder="ایمیل شما" class="w-full px-4 py-2 rounded border focus:outline-none focus:border-blue-400 bg-slate-900 p-2" required>
                                </div>

                                <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>" id="comment_post_ID">
                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">

                                <button type="submit" class="mt-2 btn bg-amber-500/10 hover:bg-amber-500 border-amber-500/10 hover:border-amber-500 text-amber-500 hover:text-white rounded-md">ثبت نظر</button>
                                <?php comment_id_fields(); ?>
                            </form>
                        </div>

                        <h2 class="text-xl font-semibold mt-6">نظرات شما : (<?php echo count($comments) ?>)</h2>
                        <div class="space-y-4 mt-4">
                            <?php
                            global $post; // Get the current post or page object

                            $comments_args = array(
                                'post_id' => $post->ID,
                                'style' => 'ul',
                                'type' => 'comment',
                                'avatar_size' => 48,
                                'per_page' => -1,
                                'max_depth' => 5, // Specify the maximum depth for nested comments
                            );

                            $comments = get_comments($comments_args);

                            echo '<ul class="comment-list">';
                            display_comments($comments);
                            echo '</ul>';

                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<style>
    @media screen and (max-width: 500px){
        .container-page {
            padding: 0 10% 0 10%;
        }
    }
    @media screen and (min-width: 500px) {
        .container-page {
            padding: 0 20% 0 20%;
        }
    }
</style>
<?php get_footer(); ?>

</body>
</html>
