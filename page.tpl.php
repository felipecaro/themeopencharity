<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<header>
    <div class="wrapper">
        <a class="logo" href="#">Open Charity</a>
        <div class="submenu">
            <ul>
                <li><a href="#" class="nav-link">About Open Charity</a></li>
                <li><a href="#" class="nav-link">The Blog</a></li>
                <li><a href="#" class="btn hollow">Join US</a></li>
            </ul>
        </div>
    </div>
</header>

<section class="hero">
    <div class="wrapper">
        <h1>Sharing Ideas For Charities</h1>
        <p>Many charities’ goals are similar, as is the functionality we require, but little shared working takes place.</p>
        <p>By working together, driving shared areas of interest and influencing open source developments we can bring efficiencies, improve the digital experience for our users, and have great impact.</p>
        <p>Together we can make a bigger diference.</p>
    </div>
</section>

<section class="next_event">
    <div class="wrapper">
        <div>
            <h3><strong>Next Event:</strong> June 23<sup>rd</sup> 2016  18:30 - 21:00</h3>
            <p>Cancer Research UK, Angel Building, 407 St John Street, London EC1V 4AD</p>
        </div>
        <div>
            <a href="#" class="btn">Register</a>
        </div>
    </div>
</section>

<section class="involved">
    <div class="wrapper">
        <h2>Get Involved</h2>
        <div>
            <span class="icons meetup"></span> 
            <h3>We do meetings</h3>
            <p>We organise our meetings through the OpenCharity MeetUp group</p>
            <a href="#" class="btn hollow">Meetup Group</a>
        </div>
        <div>
            <span class="icons slack"></span> 
            <h3>We Collaborate</h3>
            <p>OpenCharity have a slack group for daily collaboration</p>
            <a href="#" class="btn hollow">Slack Group</a>
        </div>
        <div>
            <span class="icons googlegroup"></span> 
            <h3>We Share</h3>
            <p>We have a Wiki group set up to share tools and documents</p>
            <a href="#" class="btn hollow">Wiki Group</a>
        </div>
    </div>
</section>

<section class="mission">
    <div class="wrapper">
        <h2>Our Mission</h2>
        <p>Charities and Partners collaborating and sharing open solutions and ideas to create value in the digital space.</p>
        <h5>If you are a charity or a supplier, we are ready to welcome you.</h5>
        <div>
            <span class="icons charities"></span> 
            <h3>We help charities</h3>
            <p>share knowledge and working practice to make the best technology choices.</p>
        </div>
        <div>
            <span class="icons together"></span>  
            <h3>We bring together</h3>
            <p>charities and suppliers to the charity sector to share best practices.</p>
        </div>
        <div>
            <span class="icons encourage"></span>  
            <h3>We encourage</h3>
            <p>collaboration and innovation for the good of the charity sector.</p>
        </div>
        <hr />
        <h2>Our Members</h2>
        <ul class="icons_list">
            <li><img src="themes/opencharity/assets/images/cancer_logo.png" alt="image" /></li>
            <li><img src="themes/opencharity/assets/images/compucorp_logo.png" alt="image" /></li>
            <li><img src="themes/opencharity/assets/images/kop_logo.png" alt="image" /></li>
            <li><img src="themes/opencharity/assets/images/zing_logo.png" alt="image" /></li>
            <li><img src="themes/opencharity/assets/images/comic_logo.png" alt="image" /></li>
        </ul>
    </div>
</section>

<section class="blog">
    <div class="wrapper">
        <h2>Blog</h2>
        <div>
            <h3>Online Donations Special</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <span class="date">14 Nov 2014</span>
        </div>
        <div>
            <h3>Online Donations Special</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <span class="date">14 Nov 2014</span>
        </div>
        <div>
            <h3>Online Donations Special</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <span class="date">14 Nov 2014</span>
        </div>
        <div>
            <h3>Online Donations Special</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <span class="date">14 Nov 2014</span>
        </div>
    </div>
</section>

<?php if ($page['footer']): ?>
    <footer>
        <div class="wrapper">
            <ul class="social-share">
                <li><a class="icons facebook-icon" href="#">facebook</a></li>
                <li><a class="icons twitter-icon" href="#">twitter</a></li>
                <li><a class="icons google-icon" href="#">google +</a></li>
            </ul>
            <hr />
            <div>
                <p>This site was built as a collaboration between <a href="#" target="_blank">Manifesto Digital</a> and <a href="#" target="_blank">Compucorp</a></p>
                <?php print render($page['footer']); ?>
            </div>
        </div>
    </footer>
<?php endif; ?>

