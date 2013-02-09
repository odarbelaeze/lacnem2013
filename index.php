<!doctype html>
<html lang="en">
<head>
    <?php require 'common/scripts.php'; ?>
    <?php require 'common/head.php'; ?>
    <title>LACNEM 2013 | Home</title>
    <?php require 'common/analytics.php'; ?>
</head>
<body>
    <header><?php require 'common/header.php'; ?></header>
    <div class="container">
        
        <section id="info" class="hero-unit">
            <!-- <div class="page-header"> -->
                <h1>LACNEM 2013 <small>Manizales, Colombia</small></h1>
            <!-- </div> -->
            <p class="lead">
                The <strong>5th Latin American Conference on Networked and Electronic Media</strong> (LACNEM-2013) 
                focuses on fostering close links between Latin-American and non Latin-American players 
                from academia and industry and intends to provide an ideal forum for researchers, 
                practitioners and educators to discuss results and advancements in the field of 
                Networked and Electronic Media (NEM), in a high quality and peer reviewed environment.
            </p>
            <a href="attendants.php" class="btn btn-large">Just attend &raquo;</a>
            <a href="authors.php" class="btn btn-primary btn-large">Show your work&raquo;</a>
        </section>

        <section id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
                <div class="active item">
                    <img src="img/emblematic/cathedral.png">
                    <div class="carousel-caption">
                        <h4>Cathedral of Manizales</h4>
                        <p>The third tallest in Latin America, at 113 meters, is one of the most 
                            emblematic places of the city.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/emblematic/campus.png">
                    <div class="carousel-caption">
                        <h4>La Nubia campus</h4>
                        <p>
                            A modern campus, located on the outskirts of the city, near the airport, 
                            with its large size and beauty is praised by locals and visitors alike.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/emblematic/working.png">
                    <div class="carousel-caption">
                        <h4>PCM Academic Workgroup</h4>
                        <p>
                            The PCM working group deals with the development of applied research for scientific 
                            computing applications.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/emblematic/group.png">
                    <div class="carousel-caption">
                        <h4>PCM Academic Workgroup</h4>
                        <p>
                            The academic workgroup PCM Computational applications will welcome you to the 5th
                            LACNEM to be held in 2013.
                        </p>
                    </div>
                </div>
            </div>
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </section>

        <section id="dates">
            <h2>Important dates</h2>
            <?php require 'common/dates-table.php'; ?>
        </section>
    </div>
    <footer><?php require 'common/footer.php'; ?></footer>
</body>
</html>