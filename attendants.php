<!doctype html>
<html lang="en">
<head>
    <?php require 'common/head.php'; ?>
    <?php require 'common/scripts.php'; ?>
    <title>LACNEM 2013 | Attendats</title>
    <?php require 'common/analytics.php'; ?>
</head>
<body>
    <header><?php require 'common/header.php'; ?></header>
    <div class="container">
        <div class="page-header"><h1>Conference Attendance &amp; Registration</h1></div>
        <div class="alert alert-info">
            <p>
                All the registration procedure will be internet based through the LACNEM's website 
                (to be available later).
                For any issues/assistance with registration, please contact LACNEM's 
                <a href="mailto:info@lacnem.org">secretariat</a>.
            </p>
        </div>
        <section id="registrationFees">
            <h2>Registration Fees</h2>
            <p>
                This is a volunteer-run event with significant logistic support from its supporters.
                We have aimed to keep the conference fees as low as possible.
                The conference fee structure is as follows (prices in US Dollars), are all inclusive 
                of delegate packs, proceedings, printed abstracts and refreshments:
            </p>
            <?php require 'common/fees-table.php'; ?>
        </section>
        <section id="importantDates">
            <h2>Important dates</h2>
            <?php require 'common/dates-table.php'; ?>
        </section>
    </div>
    <footer><?php require 'common/footer.php'; ?></footer>
</body>
</html>