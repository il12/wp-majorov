<?php
    /* Template Name: Program Page */
    /* Template Post Type: post, page, event */
?>
<?php get_header()?>

<section class="content">
    <div class="grid post">
        <div class="unit whole">
            <h1 id="program">Program</h1>

            <p>The detailed program is available by this link: <a href="<?php echo get_template_directory_uri();?>/media/MICSECS-2018_program.pdf"
                                                                  target="_blank"><strong>download program</strong></a>.
            </p>

            <ul>
                <li><strong>Dates of the conference:</strong> 20-21 December, 2018.</li>
                <li><strong>Dates of the hackathon:</strong> 21-23 December, 2018.</li>
                <li><strong>City:</strong> Saint Petersburg, Russia.</li>
                <li><strong>Place:</strong> ITMO University, Kronverkskiy pr., 49.</li>
                <li><strong>Rooms:</strong> 285, 365, 371, 372, 375, 466.</li>
            </ul>

            <p><strong>The language of the participant presentations:</strong> Russian.</p>

            <h2 id="thursday-201218">Thursday, 20.12.18</h2>

            <table class="prog_tb">
                <tbody>
                <tr>
                    <th class="pt_first_col">Time</th>
                    <th>Location</th>
                    <th>Program</th>
                </tr>
                <tr>
                    <td>09:30 – 10:00</td>
                    <td>285</td>
                    <td class="pt_mark2">Conference Registration</td>
                </tr>
                <tr>
                    <td>10:00 – 10:30</td>
                    <td>285</td>
                    <td class="pt_mark1">Opening of the Xth Majorov International Conference</td>
                </tr>
                <tr>
                    <td>10:30 – 11:20</td>
                    <td>285</td>
                    <td class="pt_mark2"><b>Keynote talk</b>: «Self-Driving Cars: Difficulties vs Opportunities?», by
                        Boris Ivanov, <a href="http://www.starline.ru/" target="_blank">StarLine</a></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td class="pt_div">Sessions (a)</td>
                </tr>
                <tr>
                    <td>11:40 – 13:40</td>
                    <td>375</td>
                    <td>Software Engineering (1a)</td>
                </tr>
                <tr>
                    <td>11:40 – 13:00</td>
                    <td>371</td>
                    <td>Computer Systems and Networks (2a)</td>
                </tr>
                <tr>
                    <td>11:40 – 13:00</td>
                    <td>372</td>
                    <td>Computer Security (3)</td>
                </tr>
                <tr>
                    <td>13:00 - 14:10</td>
                    <td>365</td>
                    <td class="pt_mark1">Coffee talks, Poster &amp; Demo session</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td class="pt_div">Sessions (b)</td>
                </tr>
                <tr>
                    <td>14:10 – 16:25</td>
                    <td>375</td>
                    <td>Software Engineering (1b)</td>
                </tr>
                <tr>
                    <td>13:30 – 14:40</td>
                    <td>371</td>
                    <td>Computer Systems and Networks (2b)</td>
                </tr>
                </tbody>
            </table>

            <h2 id="friday-211218">Friday, 21.12.18</h2>

            <table class="prog_tb">
                <tbody>
                <tr>
                    <th class="pt_first_col">Time</th>
                    <th>Location</th>
                    <th>Program</th>
                </tr>
                <tr>
                    <td>10:00 – 10:40</td>
                    <td>285</td>
                    <td class="pt_mark2"><b>Keynote talk</b>: <a href="https://www.tra.ai/" target="_blank">TRA
                        Robotics</a> projects presentation.
                    </td>
                </tr>
                <tr>
                    <td>10:45 – 11:30</td>
                    <td>285</td>
                    <td class="pt_mark2"><b>Keynote talk</b>: «Self Sovereign Identity: on DIDs and more», by Dirk
                        Thatmann, <a href="https://laboratories.telekom.com" target="_blank">Telekom Innovation
                            Laboratories (T- Labs)</a></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td class="pt_div">Sessions (a)</td>
                </tr>
                <tr>
                    <td>11:40 – 13:25</td>
                    <td>371</td>
                    <td>Cyber-Physical Systems (4a)</td>
                </tr>
                <tr>
                    <td>11:40 – 14:05</td>
                    <td>372</td>
                    <td>Multimedia Technologies and Computer Vision (5a)</td>
                </tr>
                <tr>
                    <td colspan="2">13:25 - 14:35</td>
                    <td class="pt_mark2">Break</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td class="pt_div">Sessions (b)</td>
                </tr>
                <tr>
                    <td>14:00 – 15:35</td>
                    <td>371</td>
                    <td>Cyber-Physical Systems (4b)</td>
                </tr>
                <tr>
                    <td>14:35 – 17:00</td>
                    <td>372</td>
                    <td>Multimedia Technologies and Computer Vision (5b)</td>
                </tr>
                <tr>
                    <td>17:10 – 17:30</td>
                    <td>466</td>
                    <td class="pt_mark1"><b>Official closing of the Xth Majorov International Conference</b></td>
                </tr>
                <tr>
                    <td>17:30</td>
                    <td>365</td>
                    <td style="background-color: black"><a href="/hackathon.html">BLACK DAY HACK</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php get_footer(); ?>