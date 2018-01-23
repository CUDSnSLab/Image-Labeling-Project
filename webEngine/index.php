<!--
    @author
        Jeong Han
    @library
        bootstrap CDN
    @date
        2018.01.22
    @title
        Web for Image Classification
-->
<!-- bootstrap theme "Cyborg"-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0-beta.3/cyborg/bootstrap.min.css">
<style>
.title{
    font-size:3rem;
    font-weight:300;
    line-height:1.2
}
.subtitle{
    font-size:2rem;
    font-weight:200
}
</style>
<html>
    <head>
        <meta charset-"utf-8">
    </head>
    <body>
        <!-- Menu Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="./index.php">
                "Web for Image Classification EX"
            </a>
        </nav>
        <!-- Title Box -->
        <div class="jumbotron text-center">
            <h1 class="title"> title </h1>
            <p class="subtitle">
                "subtitle"
            </p>
        </div>
        <!-- Main Box -->
        <div class="container">
            <!-- ref : https://stackoverflow.com/questions/31106189/create-a-simple-10-second-countdown -->
            <p><span id="countdowntimer"> 60 </span> Seconds later</p>
            <script type="text/javascript">
                var timeleft = 60;
                var downloadTimer = setInterval(function(){
                    timeleft--;
                    document.getElementById("countdowntimer").textContent = timeleft;
                    if(timeleft <= 0)
                        clearInterval(downloadTimer);
                },1000);
            </script>
            <!-- Center -->
            <div class="row">
                <!-- Image Box -->
                <div class="col-12 col-md-9">
                </div>
                <!-- Tag Box -->
                <div class="col-12 col-md-3">
                </div>
            </div>
        </div>
        <!-- tail text -->
        <footer class="mt-5 py-4 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>