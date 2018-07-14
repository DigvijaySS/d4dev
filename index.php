<?php
    include_once(__DIR__.'/config/web.php');
    include_once(__DIR__.'/layouts/header.php');
?>
    <!-- header section -->
    <section class="banner" role="banner">
        <?php
            include_once(__DIR__.'/layouts/nav.php');
        ?>
        <!-- banner text -->
        <div class="container">
            <div class="col-md-10 col-md-offset-1 padding-bottom-3em">
                <div class="banner-text text-center">
                    <h1>Hey, I’m Digvijay</h1>
                    <p>Are you looking for a strategist and experienced web application developer?<br> Scroll down to see what I do.</p>
                    <!-- banner text -->
                </div>
                <div class="text-center">
                    <a href="<?php echo BASEURL; ?>contact" class="btn btn-larg">HIRE ME</a>
                </div>
            </div>
        </div>
    </section>
    <!-- header section -->
    <!-- description text section -->
    <section id="descripton" class="section descripton">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center">
                <p>I know, finding a right technical person for the challenging idea is not so easy, especially the person having the full stack specialization. Hopefully, I can be the right person who can design, develop and launch your challenging idea to the digital reality.</p>
            </div>
        </div>
    </section>
    <!-- description text section -->
    <section id="all-work" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center heading-h2">All I Work On</h2>
                    <div class="separator"></div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 col-md-offset-1 col-sm-5 text-center">
                    <canvas id="myChart" width="400px" height="400px"></canvas>
                </div>
                <div class="col-sm-6 col-sm-offset-1 canvas-desc">
                    <ul>
                        <br><br>
                        <li><h4><b>60% Backend</b></h4>The amount of work I do on Backend application implementation including creation of RESTful API's. </li>
                        <br>
                        <li><h4><b>25% Infrastructure</b></h4>The amount of time I spend on AWS infrastructure. Additionally I work with Source Control and CI automations.</li>
                        <br>
                        <li><h4><b>15% Frontend</b></h4>The amount of work I do on Frontend application development. I prefer using JQuery, Angular and Bootstrap library.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio section -->
    <section id="works" class="works section padding-bottom-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center heading-h2">Technologies I am Champ at</h2>
                    <div class="separator"></div>
                </div>
            </div>
            <div class="row no-gutter">
                <div class="col-sm-3 col-xs-6 work">
                    <a href="javascript:void();" class="work-box"> <img class="img-responsive" src="<?php echo BASEURL; ?>assets/images/work-1.jpg" alt="Laravel">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <h5>Laravel</h5>
                                    <p>Laravel is a free, open-source PHP MVC framework</p>
                                </div>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 work">
                    <a href="javascript:void();" class="work-box"> <img class="img-responsive" src="<?php echo BASEURL; ?>assets/images/work-2.jpg" alt="CodeIgniter">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <h5>CodeIgniter</h5>
                                    <p>CodeIgniter is an open-source software rapid development PHP MVC framework.</p>
                                </div>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 work">
                    <a href="javascript:void();" class="work-box"> <img class="img-responsive" src="<?php echo BASEURL; ?>assets/images/work-3.jpg" alt="JQuery">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <h5>JQuery</h5>
                                    <p>jQuery is a cross-platform JavaScript library helps to simplify the client-side scripting.</p>
                                </div>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 work">
                    <a href="javascript:void();" class="work-box"> <img class="img-responsive" src="<?php echo BASEURL; ?>assets/images/work-4.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <h5>PHP</h5>
                                    <p>Server-side scripting language designed for Web development.</p>
                                </div>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 work">
                    <a href="javascript:void();" class="work-box"> <img class="img-responsive" src="<?php echo BASEURL; ?>assets/images/work-5.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <h5>GIT</h5>
                                    <p>VCS for tracking changes in files and coordinating work on those files among multiple people.</p>
                                </div>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 work">
                    <a href="javascript:void();" class="work-box"> <img class="img-responsive" src="<?php echo BASEURL; ?>assets/images/work-6.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <h5>MySQL</h5>
                                    <p>The most robust open-source relational database management system.</p>
                                </div>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 work">
                    <a href="javascript:void();" class="work-box"> <img class="img-responsive" src="<?php echo BASEURL; ?>assets/images/work-7.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <h5>AWS Infrastructure</h5>
                                    <p>The world's most leading cloud platform by Amazon. It provides on-demand cloud computing platforms.</p>
                                </div>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 work">
                    <a href="javascript:void();" class="work-box"> <img class="img-responsive" src="<?php echo BASEURL; ?>assets/images/work-8.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <h5>Node JS</h5>
                                    <p>Open-source, cross-platform JavaScript run-time environment that executes code outside the browser.</p>
                                </div>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <button type="button" class="many-more-button"> And many more... </button>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio section -->

    <!-- hire me section -->
    <section id="hireme" class="section hireme">
        <div class="container">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h3>Need something specific?</h3>
                <p>I am into enhancing my technical and domain limits so would love to hear from you.</p>
                <a href="<?php echo BASEURL; ?>contact" class="btn btn-large">Hire me</a> </div>
        </div>
    </section>
    <!-- hire me section -->
    
<?php
    include_once(__DIR__.'/layouts/footer.php');
?>

<script>
    var inView = false;

    $(document).ready(function() {

        $(window).scroll(function() {
            if (isScrolledIntoView('#myChart')) {
                if (inView) { return; }
                inView = true;
                
                var ctx = document.getElementById("myChart").getContext('2d');
                var myPieChart = new Chart(ctx,{
                    type: 'pie',
                    data: {
                        labels: ["Backend", "Infrastructure", "Frontend"],
                        datasets: [{
                            data: [60, 25, 15],
                            backgroundColor: [
                                '#00b7e1',
                                '#E85452',
                                '#94D293'
                            ]
                        }],  
                    },
                });

            } else {
                inView = false;  
            }
        });
        
    });
    
    function isScrolledIntoView(elem)
    {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemTop <= docViewBottom) && (elemBottom >= docViewTop));
    }
</script>