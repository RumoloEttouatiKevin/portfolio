            <footer id="footer">
                <div>
                    <a href="https://github.com/RumoloEttouatiKevin" target="_blank" title="Github"><i class="devicon-github-plain"></i></a>
                    <a href="https://www.linkedin.com/in/rumoloettouatikevin/" target="_blank" title="Linkedin"><i class="devicon-linkedin-plain"></i></a>
                    <a href="https://twitter.com/doulouvre" target="_blank" title="Twitter"><i class="devicon-twitter-original"></i></a>
                </div>
                <?php $userFirst = get_user_meta(1) ?>
                <p>Copyright © <?= $userFirst['first_name'][0] . ' ' . $userFirst['last_name'][0] ?></p>
            </footer>
        </div>
        <?php wp_footer() ?>
    </body>
</html>