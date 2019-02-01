<section class="section__projects" aria-label="Jessica's Project portfolio">
    <div class="container">
        <div class="row">
            <div class="projects__content">

            <h2>Projects</h2>
            <p>For the past few years I’ve been focusing on WordPress Development. I developed an interest in PHP and have been enjoying the nuances of theme and plugin development. Most of my experience in WordPress Development is from my latest place of employment, PBHS Inc., where we were encouraged to write and deploy helper functions or templates to increase the efficiency of our team and personal workflows. I often enjoyed taking advantage of this and contributed dozens of code snippets that the team is still utilizing today.</p>
            <p><strong>Check out a selection of custom WordPress themes I built while at PBHS:</strong></p>

            </div>

        </div>
    </div>


        <?php
            echo do_shortcode('[projects_list]');
        ?>

</section>

<script>
    $('.project-list-all').flickity({
        // options
        cellAlign: 'center',
        cellSelector: '.project',
        contain: true,
        draggable: '>1',
        friction: .2,
        groupCells: 1,
        pageDots: false,
        percentPosition: false,
        prevNextButtons: true,
        wrapAround: true,
    });
</script>