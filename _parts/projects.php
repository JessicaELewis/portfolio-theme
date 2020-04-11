<section class="section__projects" aria-label="Jessica's Project portfolio">
    <div class="container">
        <div class="row">
            <div class="projects__content">

            <h2>Projects</h2>
            <p>I’ve been focusing on WordPress Development for the past 5 years and have used various strategies for theme building. I enjoy writing clean code and often extrapolate frequently-used snippets into functions that can be used more globally. My workflow tends to change a little at a time between each project as I think of better ways to organize my code or want to try a new approach in running through a project timeline. Because of this drive to improve both my code and my time management, I have the flexibility to work with a wide variety of teams and workflows.</p>
            <p><strong>Check out a selection of custom WordPress themes I've built:</strong></p>

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