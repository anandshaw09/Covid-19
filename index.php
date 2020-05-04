<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'links/links.php'; ?>
    <?php include 'styles/styles.php';?>
</head>
<body onload="fetch()">

<!-- navbar section -->
<nav class="navbar navbar-expand-lg navbar-light bg-light p-3" id="nav">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptoms">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#prevention">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      
    
    </ul>
    
  </div>
</nav>

<div class="main-header pt-5 pb-5">
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-sm-12 order-lg-1 order-2">
            <div class="leftside w-100 h-100 d-flex justify-content-center">
                <img src="images/unity.jpg" width="300" height="300" class="img-fluid">
            </div>
        </div>

        <div class="col-lg-7 col-md-7 col-sm-12 order-lg-1 order-1">
            <div class="rightside  w-100 h-100 d-flex justify-content-center pt-4 pl-3"><br><br>
                <h1 style="font-size:220%;">
                    <i>Let's Stay Safe & Fight Together Against<br> COR<span class="corona-ani"> <img src="images/virus1.png" width="60" height="60" class="img-responsive"></span>NA VIRUS. </i>
                </h1>
                
            </div>
        </div>
    </div>
      
</div>

<!-- Covid updates -->
<section class="container-fluid corona-updates pt-5 ">
    <div class="mb-3 pt-2">
        <h3 class="text-center" style="color: red;"> CORONA VIRUS UPDATES</h3>
    </div>
    <div class="table-reponsive">
        <table class="fillapidata table-bordered table-striped text-center pl-2">
            <tr>
                <th>Country</th>
                <th>Total Confirmed</th>
                <th>Total Recovered</th>
                <th>Total Deaths</th>
                <th>New Recovered</th>
                <th>New Confirmed</th>
                <th>New Deaths</th>
            </tr>
        </table>
    </div>


</section>

<div class="container-fluid pt-5 pb-5" id="about">
    <div class="header-section text-center mb-5 pb-5">
        <h1 class="text-center">
            About COVID-19
        </h1>
        <div class="row pt-5">
            <div class="col-lg-6 col-md-6 col-12 pr-3">
                <img src="images/corona.jpg" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-12 pl-3">
                <h2 style="text-align: left; ">What is COVID-19(Corona-Virus)</h2>
                <p style="text-align: left; font-size: 1rem;">COVID-19 is the infectious disease caused by the most recently discoverd corona-virus. This new virus were began from Wuhan, China, in December 2019. </p>
                <p style="text-align: left; font-size: 1rem;">Corona Virues are a large family of virus that causes illness in humans. This virues mostly affect the Hmans causing respiratory problems which may leads to dead in certain cases. The disease caused by this virus are called COVID-19.</p>
                
                
            </div>
           
        </div>
    </div>
    
</div>

<!-- Symptoms -->
<div class="container-fluid section pt-5 pb-5" id="symptoms">
    <div class="header-section text-center pt-5 pb-5">
        <h1>
            Covid-19 Symptoms
        </h1>
        <p class="text-center" style="font-size: 1.5rem;">The symptoms of COVID-19 </p>
        <p class="text-center" style="font-size: 1.5rem;">If you are suferring from anyone of these then please kindly visit the Doctor. </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="images/cough.png" class="img-fluid" width="150" height="150" id="sym">
                    <figcaption>Cough</figcaption>
                </figure>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="images/cold.jpg" class="img-fluid" width="150" height="150" id="sym">
                    <figcaption>Cold</figcaption>
                </figure>
            </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="images/runnynose2.jpg" class="img-fluid" width="150" height="150" id="sym">
                    <figcaption>Runny Nose</figcaption>
                </figure>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="images/tired.jpg" class="img-fluid" width="150" height="150" id="sym">
                    <figcaption>Tiredness</figcaption>
                </figure>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="images/fever.jpg" class="img-fluid" width="150" height="150" id="sym">
                    <figcaption>Fever</figcaption>
                </figure>
            </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                    <img src="images/breathing.jpg" class="img-fluid" width="150" height="150" id="sym">
                    <figcaption>Breathing Problem</figcaption>
                </figure>
            </div>

            
        </div>
    </div>

</div>

<!-- prevention-->
<div class="container" id="prevention">
    <h1 class="text-center">Prevention Against COVID-19</h1>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-5 pb-5">
           <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                        <img src="images/hand.jpg" class="img-fluid" width="100" height="100" id="sym">
                    </figure>
                </div>
               
                <div class="col-lg-8 col-md-8 col-12">
                    <p>Clean your hands often. Use soap and water, or an alcohol-based hand rub</p>
                    
                </div>
           </div>
            
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
           <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                        <img src="images/social.jpg" class="img-fluid" width="100" height="110" id="sym">
                    </figure>
                </div>
               
                <div class="col-lg-8 col-md-8 col-12">
                    <p>Maintain a safe distance of atleast 1-meter from anyone who is coughing or sneezing, </p>
                    
                </div>
           </div>
            
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
           <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                        <img src="images/stayhome.jpg" class="img-fluid" width="100" height="120" id="sym">
                    </figure>
                </div>
               
                <div class="col-lg-8 col-md-8 col-12">
                    <p>Stay home if you feel unwell.</p>
                    
                </div>
           </div>
            
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
           <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                        <img src="images/cover.jpg" class="img-fluid" width="100" height="110" id="sym">
                    </figure>
                </div>
               
                <div class="col-lg-8 col-md-8 col-12">
                    <p>Cover your face with mask. Avoid unnecessary touching of eyes, nose and mouth.  </p>
                    
                </div>
           </div>
            
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
           <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                        <img src="images/covercough.jpg" class="img-fluid" width="100" height="100" id="sym">
                    </figure>
                </div>
               
                <div class="col-lg-8 col-md-8 col-12">
                    <p>Always use tissue paper or your elbow while sneezing or coughing.</p>
                    
                </div>
           </div>
            
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
           <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                        <img src="images/fevr.jpg" class="img-fluid" width="100" height="100" id="sym">
                    </figure>
                </div>
               
                <div class="col-lg-8 col-md-8 col-12">
                    <p>Incase of fever, seek medical checkup soon.</p>
                    
                </div>
           </div>
            
        </div>
        
    </div>
    
</div>
<br><br>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script>
     $(window).on("load", function () {
        $.get(
          "https://api.covid19api.com/summary"
        ).done(function (data1) {
            let data = data1;
            for(var i = 0; i < data.Countries.length ; i++){
                $("table.fillapidata").append(`<tr><td>${data.Countries[i].Country}</td><td>${data.Countries[i].TotalConfirmed}</td><td>${data.Countries[i].TotalRecovered}</td><td>${data.Countries[i].TotalDeaths}</td><td>${data.Countries[i].NewRecovered}</td><td>${data.Countries[i].NewConfirmed}</td><td>${data.Countries[i].NewDeaths}</td></tr>`)
            }
            // $("table.fillapidata").append(`<tr><td>${data.Countries.length}</td><td>${data.Global.NewDeaths}</td><td>${data.Global.NewRecovered}</td><td>${data.Global.TotalConfirmed}</td><td>${data.Global.TotalDeaths}</td><td>${data.Global.TotalRecovered}</td><td>${data.Global.TotalRecovered}</td></tr>`)
            localStorage.setItem("data" , JSON.stringify(data));
        })
     })
 </script>

<script>
   

</script>


</body>
</html>