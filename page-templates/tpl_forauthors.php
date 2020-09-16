<?php
    /* Template Name: For Authors Page */
    /* Template Post Type: post, page, event */
?>
<?php get_header()?>

<section class="content">
    <div class="grid post">
        <div class="unit whole">
            <h2 id="paper-guidelines">Paper guidelines</h2>

            <p>The authors whose abstracts pass the review will be invited to the conference. Their abstracts will be
                printed in the proceedings indexed by RSCI (Russian Science Citation Index).</p>

            <p>The authors whose abstracts get the maximum marks during review and who present the work on the
                conference will be given the opportunity to publish full-format article (up to 12 pages in LNCS format
                on English) in <a href="http://ceur-ws.org/" target="_blank">CEUR-WS</a> indexed by DBLP and Scopus.
                Full-format article will be reviewed again.</p>

            <p><strong>Full-format article requirements for CEUR</strong>:</p>

            <ul>
                <li>should be prepared using LNCS format (<a
                        href="https://ru.overleaf.com/latex/templates/springer-lecture-notes-in-computer-science/kzwwpvhwnvfj"
                        target="_blank"><strong>instructions</strong></a>)
                </li>
                <li>should content <strong>6-12 pages</strong>.</li>
                <li>language: english</li>
            </ul>

            <p>The authors of <strong>the best full-format papers</strong> will be invited to submit revised and
                extended versions of their originally-accepted papers to <strong>Journal publication</strong> in
                <a href="https://www.mdpi.com/journal/computers/special_issues/Selected_Papers_MICSECS2019"
                   target="_blank"><strong>Special Issue of Computers</strong></a>.
                The detailed description of the <strong>Journal publication</strong> you can see in the next section.
            </p>

            <h2 id="publication-in-special-issue-of-computers-journal">Publication in Special Issue of «Computers»
                journal</h2>

            <p>The authors of the best papers will be invited after the conference to submit revised and
                extended versions of their originally-accepted conference papers to
                <a href="https://www.mdpi.com/journal/computers/special_issues/Selected_Papers_MICSECS2019"
                   target="_blank"><strong>Special Issue of Computers</strong></a>, published by MDPI, in open access.
            </p>

            <p>The selection of the best papers will be based on their ratings in
                the conference review process, the quality of presentation during the conference,
                and the expected impact on the research community.
                Each submission to this Special Issue should contain at least 50% of new material, e.g.,
                in the form of technical extensions; more in-depth evaluations; or additional use cases and a change of
                title, abstract, and keywords.
                These extended submissions will undergo a peer-review process according to the journal’s
                rules of action. At least two technical committees will act as reviewers for each extended article
                submitted to this Special Issue; if needed, additional external reviewers will be invited to
                guarantee a high-quality reviewing process.</p>

            <p>All selected papers will be <strong>FREE of charge</strong> for the conference participants whose papers
                were accepted after peer review.</p>

            <div>
                <img style="height:100px; margin-left:15%;" src="<?php echo get_template_directory_uri();?>/img/mdpi-logo.png">
                <img style="height:100px; margin-left:20px;" src="<?php echo get_template_directory_uri();?>/img/computers-logo.png">
            </div>

            <h2 id="poster-guidelines">Poster guidelines</h2>

            <ul>
                <li>The poster should be prepeared according to <strong>the poster template</strong> (<a
                        href="<?php echo get_template_directory_uri();?>/media/poster_template.pptx" target="_blank"><strong>download</strong></a>)
                </li>
                <li>Recommended size for your poster is a maximum of <strong>84cm width x 118 cm height</strong> (A0
                    paper format).
                </li>
                <li>The poster should content the paper title and all authors at the top of the poster</li>
                <li>The poster should content a brief introduction, goals, experimental detail, conclusions, and
                    references (make sure this information is presented in a logical and clear sequence)
                </li>
                <li>The poster should content explanations for graphs, pictures, and tables.</li>
            </ul>

            <p><strong>Poster example</strong>: <a href="<?php echo get_template_directory_uri();?>/media/poster_example.pdf"
                                                   target="_blank"><strong>download</strong></a></p>
        </div>
    </div>
</section>

<?php get_footer(); ?>