<?php
    /* Template Name: Registration Page */
    /* Template Post Type: post, page, event */
?>
<?php get_header()?>

<section class="content">
    <div class="grid post">
        <div class="unit whole">
            <h2 id="listeners-registration">Listeners registration</h2>

            <p>To take part in the conference as a listener you need to fill the <a
                    href="https://forms.gle/yxxenueXJX65SZEb6" target="_blank"><strong>REGISTRATION FORM</strong></a>.
            </p>

            <p>Filling this form you agree to <a href="<?php echo get_template_directory_uri();?>/media/micsecs_a_en.pdf" target="_blank">the personal data
                processing policy</a>.</p>

            <h2 id="registration-on-oral-and-poster-presentation">Registration on Oral and Poster presentation</h2>

            <p>To apply to the conference <strong>Research Tracks</strong> you need to send the abstract of your oral or
                poster presentation via Easy Chair: <a href="https://easychair.org/conferences/?conf=micsecs2019"
                                                       target="_blank">https://easychair.org/conferences/?conf=micsecs2019</a>.
            </p>

            <p>Your abstract:</p>

            <ul>
                <li>should be prepared using LNCS format (<a
                        href="https://ru.overleaf.com/latex/templates/springer-lecture-notes-in-computer-science/kzwwpvhwnvfj"
                        target="_blank"><strong>instructions</strong></a>)
                </li>
                <li>should content <strong>4-6 pages</strong>.</li>
                <li>language: english</li>
            </ul>

            <p>The authors should add the type of presentation (<strong>oral presentation</strong> or <strong>poster
                session</strong>) to the abstract.
                The type of the presentation should be put after <strong>Keywords</strong> in the abstract.</p>

            <p><strong>Instruction of the abstract submission</strong> (RUSSIAN version): <a
                    href="<?php echo get_template_directory_uri();?>/media/MICSECS2019_Easy_Chair_Reg_Manual_RUS.pdf"
                    target="_blank"><strong>download</strong></a></p>

            <p><strong>Instruction of the abstract submission</strong> (ENGLISH version): <a
                    href="<?php echo get_template_directory_uri();?>/media/MICSECS2019_Easy_Chair_Reg_Manual_EN.pdf" target="_blank"><strong>download</strong></a>
            </p>

            <h2 id="registration-on-demo-session">Registration on Demo session</h2>

            <p>To apply to the <strong>Demo session</strong> you should send the description of your project to the
                organization team by <a href="mailto:mr@itmo.ru">mr@itmo.ru</a>. The materials should content the main
                points of your results and the description of the obtained executable models, devices and etc. during
                your research.</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
</body>
</html>