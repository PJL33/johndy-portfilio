<?php

$useful = $_POST["useful"];
$rate = $_POST["rate"];
$comment = $_POST["why"];
$myfile = fopen("rate-csv/rate-hultprize.csv","ab+");
fwrite($myfile,"\n$useful,$rate,$comment");
fclose($myfile);
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Thank you for rating</title>
        <link rel="stylesheet" href="../mobile.css">
        <link rel="stylesheet" href="overcome-depression.css">
        <link rel="icon" href="../img/PHILISTIN.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <style>
        .d-flex{
            width: 80%;
            margin: auto;
            border-left: 5px green solid;
            top: 38vh;
            height :25vh;
        }
        </style>
    </head>
    <body>
        <section id="section-navbar" style="width: 101%;">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <a class="navbar-brand" href="../index.html" style="margin-right: -20%;"><img src="../img/pjl-logo.jpg" alt="logo of johndy" width="10%"></a>
                  <button class="navbar-toggler bg-danger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link text-danger fw-bold" aria-current="page" href="../index.html">Home</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-danger fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Experiences
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../works.html">Work Experiences</a></li>
                          <li><a class="dropdown-item" href="../competitions.html">Competitions Experiences</a></li>
                          <li><a class="dropdown-item" href="../stories.html">Stories of some Experiences</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-danger fw-bold" aria-current="page" href="../standpoints.html">Standpoints</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-danger fw-bold" aria-current="page" href="../aspirers.html">Aspirers</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-danger fw-bold" aria-current="page" href="../mantras.html">Mantras</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <div class="alert alert-success d-flex align-items-center justify-content-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </svg>
        <div>
            <p>Thank you for your comment. I'll consider it and improve the article. You will be redirected to the article in <span id="minutes">0</span>:<span id="seconds"></span></p>
        </div>
        </div>

    </body>
</html>
<script>
    var second = 15;
    setInterval( function(){ //repeat this code at every 1000 miliseconds
    document.getElementById("seconds").innerHTML=--second;
    }, 1000);
    setTimeout(() => { //set a timeout
        window.location = "hultprize-journey.html";
    }, 15000);
</script>