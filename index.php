<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Kim</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css"/>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css"/></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-file-code"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Kim</h1>
								<p>avid reader, international traveler, software engineering student</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">Intro</a></li>
								<li><a href="#work">Work</a></li>
								<li><a href="#projects">Projects</a></li>
								<li><a href="#contact">Contact</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Intro</h2>
								<span class="image main"><img src="images/self.jpeg" alt="Kim at Chengdu's Wuhou Memorial Temple"/></span>
								<h4>The short:</h4>
                                <p>I'm learning to program because I want to equip myself with the necessary skills to succeed in this day and age. I'm attracted to programming's broad application as well as the reasoning and problem solving it requires.</p>
                                <h4>The long:</h4>
                                <p>My life has been a circuitous journey full of new experiences and passport stamps. While still in high school, I took classes at University of Wisconsin-Madison and completed biological research through a biotech youth apprenticeship program. Upon graduating high school, I enrolled at University of Minnesota-Twin Cities. My involvement in Mock Trial prompted me to consider a career in patent litigation, so I found work as a paralegal. However, I'm not studying biology, nor am I studying law. Rather, I'm studying software engineering at Arizona State University and trying to figure out how to make my mark on the world!<br>Education is a passion of mine; both my own learning and that of others. For six months, I traveled throughout Southeastern Asia where I was struck by children's lack of access to education. In addition to volunteering while traveling, I taught English online for a year. I believe education is the key to changing the world. Although I'm new to programming, I'm always looking to learn something new and a firm believer that the only way to improve is through practice!</p>
							</article>

						<!-- Work -->
							<article id="work">
								<h2 class="major">Work</h2>
                                <h4>Research Assistant</h4>
								<p>Designed experiments to modify the genome of Bacillus subtilis; converted the resulting data into representative graphs. Regularly completed PCR, gel electrophoresis, molecular cloning, and mass spectrometry with statistical analysis of results.</p>
                                
                                <h4>Paralegal Support</h4>
								<p>Cross-referencing patents obtained within the US to those filed in other countries in order to appropriately supplement a new patent application.</p>
                                
                                <h4>English Tutor</h4>
                                <p>English tutor to Chinese students in kindergarten through high school.</p>
							</article>

						<!-- Projects -->
							<article id="projects">
								<h2 class="major">Projects</h2>
								<p>Coming soon...<br>In the meantime, check out my <a href= "https://github.com/kmgehrma">GitHub</a>!</p>
							</article>
                        
                        <!-- PHP -->
                        <!-- https://blog.shivamtrivedi.com/how-to-add-email-functionality-to-contact-forms-in-html5up/ -->
                        <?php
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $subject = $_POST['subject'];
                            $message = $_POST['message'];
                            $from = $email;
                            $to = 'kim.schmim@gmail.com';
                            $email_subject = 'New Contact Form Submission!';

                            $body = "Name: $name\nE-mail: $email\nSubject: $subject\n\nThe message is below:\n$message";;
                        ?>
                        
                        <?php
                            if (isset($_POST['submitbtn']))
                            {
                                if (mail($to, $email_subject, $body, $from))
                                {
                                    echo "<font color=\"green\"><p>Your message has been sent!</p></font>";
                                }
                                else
                                {
                                echo "<font color=\"red\"><p>Your message sending has failed! Please manually email kim.schmim@gmail.com!</p></font>";
                                }
                            }
                        ?>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" action="index.php">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="4"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" name="submitbtn"/></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="https://www.linkedin.com/in/kimberlygehrmann" class="icon brands fa-linkedin"><span class="label">LinkedIn</span></a></li>
									<li><a href="https://github.com/kmgehrma" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; 2020 Design: <a href="https://html5up.net">HTML5 UP</a></p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
