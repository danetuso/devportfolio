<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dane Tuso</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <div id="mobile-menu-open" class="shadow-large">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <!-- End #mobile-menu-toggle -->
    <header>
        <div id="mobile-menu-close">
            <span>Close</span> <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <ul id="menu" class="shadow">
            <li>
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#experience">Experience</a>
            </li>
            <li>
                <a href="#projects">Projects</a>
            </li>
            <li>
                <a href="#education">Affiliations</a>
            </li>
            <li>
                <a href="#skills">Skills</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </header>
    <!-- End header -->

    <div id="lead">
        <div id="lead-content">
            <h1>Dane Tuso</h1>
            <h2>Backend Engineer</h2>
            <a href="dane-tuso-resume.pdf" download="dane-tuso.resume.pdf" class="btn-rounded-white">Download Resume</a>
        </div>
        <!-- End #lead-content -->

        <div id="lead-overlay"></div>

        <div id="lead-down">
            <span>
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </span>
        </div>
        <!-- End #lead-down -->
    </div>
    <!-- End #lead -->

    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="heading">About Me</h2>
                </div>
                <div class="col-md-8">
                    <p>
                        With six years of professional experience, I've worked in fast pace environments writing numerous applications including games, standalone applications, and development libraries; with an emphasis on automation and deployments. I primarily use PHP, Objective C, and Java, but I am always eager to expand my skills and get my hands dirty with innovative technologies.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End #about -->

    <div id="experience" class="background-alt">
        <h2 class="heading">Experience</h2>
        <div id="experience-timeline">
            <div data-date="2016 – May 2017">
                <h3>Vrazo</h3>
                <h4>Lead Engineer</h4>
                <p>
                    Architected global elastic cloud infrastructure to dynamically spin up resources across a disparate set of cloud providers using Digital Ocean, AWS, a number of other providers, KVM virtualization, Ansible, PHP, and Python. Implemented a global monitoring and metrics system to control the dynamic allocation and deallocation of cloud resources. Team management through Atlassian tools, ensuring best workflow and deployments. Built a database and API system to allow communication across the entire infrastructure using Cloudant, SQL, and Lumen. IOS/Android software development for the UI/ UX implementation of the consumer software in Swift/Objective C/Inline C/Java. Core library work to facilitate actual network and security communication services using C.
                </p>
            </div>

            <div data-date="2015 – August 2016">
                <h3>Staminus Communications / StackPath</h3>
                <h4>Senior Backend Engineer</h4>
                <span id='show-more-staminus'>
                    <p id='staminus-short'>
                    Staminus was a global provider of cyber security through hybrid DDoS mitigation service utilizing cloud and on-premises hardware appliances. I architected and engineered several aspects of the network, maintained and added to existing appliance softwares, provided enterprise customers with support, and built custom implementations for companies such as Advania, Huawei, and Neverfail. I regularly worked with PHP, and had a lot of time on Juniper and Cisco hardware. 
                    <br /><br />
                    Staminus was acquired in 2016 for 12x revenue by StackPath, a global cyber security firm with nearly $200M in funding.
                    </p>
                    <br />
                    <a onclick='document.getElementById("staminus-long").style.display = "block";document.getElementById("show-more-staminus").style.display = "none";'>Expand</a>
                </span> 
                
                <p id='staminus-long' style='display: none;'>
                    Staminus was a global provider of cyber security through hybrid DDoS mitigation service utilizing cloud and on-premises hardware appliances. I architected and engineered several aspects of the network, maintained and added to existing appliance softwares, provided enterprise customers with support, and built custom implementations for companies such as Advania, Huawei, and Neverfail. I regularly worked with PHP, and had a lot of time on Juniper and Cisco hardware. A lot of my experience involved making live fixes and security implementations while under high pressure.  
                    <br /><br />
                    Some things I used and performed from day to day were: Onboarding all enterprise level customers, managed a team of 2 operations support techs, worked on our proprietary security software in C/ HHVM, Traffic Monitoring application bug fixes and feature requests daily in HHVM/PHP5, Automation of all processes through Ansible, Live swings and nulls as appropriate for high value customers, Creation and design of the user panel flow and features (including the backend hooks to all of our on-premise and hosted appliances), rDNS/Proxy setup, AC/PDU/UPS/Generator maintenance and monitoring, Hands on maneuvering and troubleshooting with very expensive equipment (fiber and copper communications), Application and server development using PHP/Bash/Python/Scala/Go/Inline C/VTYSH, Setting up of BGP over GRE tunnels for most customers and internal operations, and handled internal operations such as printers, phones, etc.   
                    <br /><br />
                    I was also the main tech for trips to One Wilshire DataCenter for maintenance and emergency fixes at our PoP there. During the acquisition process, I was in meetings with all CTO's and CEO's for planning and technical discussion, commonly travelling to the MaxCDN office in LA, as well as attending/ representing at trade shows and events such as NANOG.  
                    <br /><br />
                    Intreppid was Staminus's child company designed for renting out unused dedicated machine space in our datacenter. The website and panel were run using WHMCS. The operations team I managed also handled tickets and support for Intreppid. I engineered backend software for automation and deployments. I also maintained and added features weekly to our in house ticketing system and staff portal. (Most technical operations were performed through the staff/admin panel, which was designed and operated in Smarty/PHP and hooked directly into the API I implemented to control the backend aspects of the network (PHP/C/Bash).  
                    <br /><br />
                    Staminus has developed and currently maintains its own global patented scrubbing technology, scrubbing centers, and network backbone across the world.  
                    <br /><br />
                    Staminus was acquired in 2016 for 12x revenue by StackPath, a global cyber security firm with nearly $200M in funding. After this, I worked with Atlassian tools and gained more experience working on networks designed for CDN, VPN, DNS, and application layer security.
                    <br /><br />
                    <a onclick='document.getElementById("staminus-short").style.display = "block";document.getElementById("staminus-long").style.display = "none";document.getElementById("show-more-staminus").style.display = "block";'>Show less</a>
                </p>
                
            </div>

            <div data-date="2013 – May 2015">
                <h3>Visualistic Studios</h3>
                <h4>Founder</h4>
                <p>
                    I founded this company while attending high school. It was personally funded. Ryan Hobbs and I grew our company from 3 to 14 employees within the first year. We worked on two indie titles. Here, I gained experience in leading a team, marketing, SEO, basic content creation and UI design, 3D Modeling, and Unreal Engine 4.
                </p>
            </div>
        </div>
    </div>
    

    <div id="projects" class="background-alt">
        <h2 class="heading">Projects</h2>
        <div class="container">
            <div class="row">
                <?php  
                $projects = include_once 'project_list.php';
                $first_project = $projects[0];
                $second_project = $projects[1];
                ?>
                <div class="project shadow-large">
                    <div class="project-image">
                        <img src="<?php echo $first_project['image']; ?>" width="300" height="300" />
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3><?php echo $first_project['name']; ?></h3>
                        <p>
                            <?php echo $first_project['description']; ?>
                        </p>
                        <a href="<?php echo $first_project['http']; ?>" target="_blank">View Project</a>
                    </div>
                    <!-- End .project-info -->
                </div>
                <!-- End .project -->

                <div class="project shadow-large">
                    <div class="project-image">
                        <img src="<?php echo $second_project['image']; ?>" width="300" height="300" />
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3><?php echo $second_project['name']; ?></h3>
                        <p>
                            <?php echo $second_project['description']; ?>
                        </p>
                        <a href="<?php echo $second_project['http']; ?>" target="_blank">View Project</a>
                    </div>
                    <!-- End .project-info -->
                </div>
                <!-- End .project -->

                <span id='show-more-projects'>
                    <a onclick='document.getElementById("hidden-projects").style.display = "block";document.getElementById("show-more-projects").style.display = "none";'>Show More</a>
                </span> 

                <span id='hidden-projects' style='display: none;'>
                <?php
                for ($i=2;$i<count($projects);$i++) {
                    $project = $projects[$i];
                    ?>
                    <div class="project shadow-large">
                        <div class="project-image">
                            <img src="<?php echo $project['image']; ?>" width="300" height="300" />
                        </div>
                        <!-- End .project-image -->
                        <div class="project-info">
                            <h3><?php echo $project['name']; ?></h3>
                            <p>
                                <?php echo $project['description']; ?>
                            </p>
                            <?php 
                            if($project['http'] != "#"){ 
                                echo "<a href='" . $project['http'] . "' target='_blank'>View Project</a>";
                            }
                            ?>
                            <!-- <a href="<?php echo $project['http']; ?>" target="_blank">View Project</a> -->
                        </div>
                        <!-- End .project-info -->
                    </div>
                    <!-- End .project -->
                    <?php
                }
                ?>
                <a onclick='document.getElementById("hidden-projects").style.display = "none";document.getElementById("show-more-projects").style.display = "block";document.getElementById("projects").scrollIntoView();'>Hide</a>
                </span>
            </div>
        </div>
    </div>
    <!-- End #projects -->

    <!-- End #experience -->
    <div id="education">
        <h2 class="heading">Affiliations</h2>
        <div class="education-block">
            <h3>IT Proactive</h3>
            <span class="education-date">2017</span>
            <h4>Network Architecture and Engineering</h4>
            <p>
                IT Proactive is a local Managed Services Provider that I lent a hand architecting and implementing Windows networks for large offices and production factories for the later part of 2017.
            </p>
        </div>
        <!-- End .education-block -->

        <div class="education-block">
            <h3>Team Special Forces / Fragged Nation</h3>
            <span class="education-date">2013 - 2018</span>
            <h4>Platform Manager and Head Tech</h4>
            <p>
                For many communities such as Fragged Nation, Team Special Forces, and GZGaming, I would volunteer my time to create backend web tools for maintenance and scheduling, as well as coordinate/implement events and tournaments. I've also created a few standalone applications to help administration of large online communities in the gaming environment.
            </p>
        </div>

        <!-- End .education-block -->

        <div class="education-block">
            <h3>The Sugar Shack / Professional Sponsorships</h3>
            <span class="education-date">2011 - 2016</span>
            <h4>Surf / Dirt BMX</h4>
            <p>
                I stopped being extremely active towards the end of 2015 and devoted my life to programming and teaching myself innovative technologies. Before that in 2011, I worked at and represented The Sugar Shack, a local famous breakfast/coffee shop, in surf competitions. From 2012-2015 I was professionally sponsored by Spy Sunglasses, Dragon Alliance Snowboarding, Globe Shoes, and a few others for dirt BMX riding through their grassroots initiatives.
            </p>
        </div>

        <!-- End .education-block -->
    </div>

    <!-- End #education -->

    <div id="skills">
        <h2 class="heading">Skills</h2>
        <ul>
            <li>Software Development</li>
            <li>Network Architecture</li>
            <li>Business Development</li>
            <li>Product Design</li>
            <li>Cloud Computing</li>
            <li>Juniper/Cisco</li>
            <li>Security</li>
            <li>DDoS</li>
            <li>VPN</li>
            <li>CDN</li>
            <li>DNS</li>
            <li>GIT/SVN</li>
            <li>Linux/Redhat/OSX/Windows</li>
            <li>Ansible</li>
            <li>Vagrant</li>
            <li>Docker</li>
            <li>PHP</li>
            <li>REST</li>
            <li>Laravel/Lumen</li>
            <li>Java</li>
            <li>SQL</li>
            <li>Bash/Shell</li>
            <li>Objective C</li>
            <li>Swift</li>
            <li>C</li>
            <li>C#</li>
            <li>C++</li>
            <li>VB.NET</li>
            <li>Datacenter</li>
            <li>Atlassian</li>
            <li>Unreal Engine 4</li>
            <li>Android Studio</li>
            <li>Project Management</li>
            <li>Public/Media Relations</li>
        </ul>
    </div>
    <!-- End #skills -->

    <div id="contact">
        <h2>Get in Touch</h2>
        <div id="contact-form">
            <form method="POST" action="https://formspree.io/dane@tuso.tech">
                <input type="hidden" name="_subject" value="Contact request from personal website" />
                <input type="email" name="_replyto" placeholder="Your email" required>
                <textarea name="message" placeholder="Your message" required></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
        <!-- End #contact-form -->
    </div>
    <!-- End #contact -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 copyright">
                    <p>
                        Copyright &copy; 2017 Dane Tuso
                    </p>
                </div>
                <div class="col-sm-2 top">
                    <span id="to-top">
                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="col-sm-5 social">
                    <ul>
                        <li>
                            <a href="https://github.com/danetuso/" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://linkedin.com/in/dane-tuso-962397101/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/scripts.min.js"></script>
</body>

</html>