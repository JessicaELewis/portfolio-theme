<section class="section__tools" aria-label="Tools Jessica has used">
    <div class="bg-img"><img src="<?= get_template_directory_uri(); ?>/_media/legos.jpg" /></div>
    <div class="container">
        <div class="row">
            <div class="tools__content text-center">

                <h2>Tools</h2>
                <div class="orgs flex flex-wrap align-items-center justify-content-around">
                    <div class="org"><?= file_get_contents(get_template_directory_uri() . '/_media/logo-wordpress.svg'); ?></div>
                    <div class="org"><?= file_get_contents(get_template_directory_uri() . '/_media/logo-phpstorm.svg'); ?></div>
                    <div class="org"><?= file_get_contents(get_template_directory_uri() . '/_media/logo-photoshop.svg'); ?></div>
                    <div class="org"><?= file_get_contents(get_template_directory_uri() . '/_media/logo-chrome.svg'); ?></div>
                    <div class="org"><?= file_get_contents(get_template_directory_uri() . '/_media/logo-github.svg'); ?></div>
                    <div class="org"><?= file_get_contents(get_template_directory_uri() . '/_media/logo-firefox.svg'); ?></div>
                </div>

                <?php
                $tools = get_terms( 'tools', array( 'hide_empty' => false ) );
                if  ($tools) : ?>
                    <ul class="inline-list">
                        <?php
                        foreach ($tools as $tool) {
                            echo "<li>" . $tool->name . "</li>";
                        }
                        ?>

                    </ul>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>