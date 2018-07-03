<?php
    include_once('layouts/header.php');
?>
    <!-- header section -->
    <section class="banner" role="banner">
        <?php
            include_once('layouts/nav.php');
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
                    <a href="contact" class="btn btn-larg">HIRE ME</a>
                </div>
            </div>
        </div>
    </section>
    <!-- header section -->
    <!-- description text section -->
    <section id="descripton" class="section descripton">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center">
                <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor
                    ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet avida at eget metus.</p>
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
                    <a href="images/work-1.jpg" class="work-box"> <img class="img-responsive" src="images/work-1.jpg" alt="Laravel">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <h5>Laravel</h5>
                                <p>PHP MVC Framework</p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 work">
                    <a href="images/work-2.jpg" class="work-box"> <img class="img-responsive" src="images/work-2.jpg" alt="CodeIgniter">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <h5>CodeIgniter</h5>
                                <p>PHP MVC Framework</p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 work">
                    <a href="images/work-3.jpg" class="work-box"> <img class="img-responsive" src="images/work-3.jpg" alt="JQuery">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <h5>JQuery</h5>
                                <p>Most used javascript library</p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 work">
                    <a href="images/work-4.jpg" class="work-box"> <img class="img-responsive" src="images/work-4.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <h5>Project Name</h5>
                                <p>Graphic Design</p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 work">
                    <a href="images/work-5.jpg" class="work-box"> <img class="img-responsive" src="images/work-5.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <h5>Project Name</h5>
                                <p>Website Design</p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 work">
                    <a href="images/work-6.jpg" class="work-box"> <img class="img-responsive" src="images/work-6.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <h5>Project Name</h5>
                                <p>Logo Design</p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 work">
                    <a href="images/work-7.jpg" class="work-box"> <img class="img-responsive" src="images/work-7.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <h5>Project Name</h5>
                                <p>Branding</p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 work">
                    <a href="images/work-8.jpg" class="work-box"> <img class="img-responsive" src="images/work-8.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <h5>Project Name</h5>
                                <p>Website Design</p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a>
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
                <a href="contact" class="btn btn-large">Hire me</a> </div>
        </div>
    </section>
    <!-- hire me section -->
    
<?php
    include_once('layouts/footer.php');
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