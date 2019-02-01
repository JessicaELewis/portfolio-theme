<section class="section__languages" aria-label="Programming Languages Jessica Knows">
    <div class="bg-img"><img src="<?= get_template_directory_uri(); ?>/_media/colored-pens.jpg" /></div>
    <div class="container">
        <div class="row">
            <div class="languages__content text-center">

                <h2>Languages</h2>
                <div class="orgs flex flex-wrap align-items-center justify-content-around">
                    <div class="org"><?= file_get_contents(get_template_directory_uri() . '/_media/logo-html5.svg'); ?></div>
                    <div class="org"><?= file_get_contents(get_template_directory_uri() . '/_media/logo-css3.svg'); ?></div>
                    <div class="org"><?= file_get_contents(get_template_directory_uri() . '/_media/logo-php.svg'); ?></div>
                    <div class="org"><?= file_get_contents(get_template_directory_uri() . '/_media/logo-jquery.svg'); ?></div>
                    <div class="org"><?= file_get_contents(get_template_directory_uri() . '/_media/logo-sass.svg'); ?></div>
                </div>
                <?php
                $skills = get_terms( 'skills', array( 'hide_empty' => false ) );
                if  ($skills) : ?>
                    <ul class="inline-list">
                        <?php
                        foreach ($skills as $skill) {
                            echo "<li>" . $skill->name . "</li>";
                        }
                        ?>

                    </ul>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>