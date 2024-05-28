
        <script type="text/javascript">              
     function computeBMI() {
          //Obtain user inputs
         var height = Number(document.getElementById("height").value);
         var heightunits = document.getElementById("heightunits").value;
         var weight = Number(document.getElementById("weight").value);
         var weightunits = document.getElementById("weightunits").value;


         //Convert all units to metric
         if (heightunits == "inches") height /= 39.3700787;
         if (weightunits == "lb") weight /= 2.20462;

         //Perform calculation
         var BMI = weight / Math.pow(height, 2);
         //Display result of calculation
    document.getElementById("output").innerHTML = Math.round(BMI * 100)/100;
         if (BMI < 18.5) document.getElementById("comment").innerHTML = "Underweight";
         if (BMI >= 18.5 && BMI <= 25) document.getElementById("comment").innerHTML = "Normal";
         if (BMI >= 25 && BMI <= 30) document.getElementById("comment").innerHTML = "Obese";
         if (BMI > 30) document.getElementById("comment").innerHTML = "Overweight";            
     }
       
        </script>
    </head>

    <?php include "header2.php";?>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center pt-70">
                                <h2>New Members</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Contact form Start -->
        <div class="contact-form-main mt-100 mb-100">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-7 col-lg-7">
                        <div class="form-wrapper">
                            <!--Section Tittle  -->
                            <div class="form-tittle">
                                <div class="row ">
                                    <div class="col-lg-11 col-md-10 col-sm-10">
                                        <div class="section-tittle">
                                            <span></span>
                                            <h2>Membership Form</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>


    
    <body>
         <h1>Body Mass Index Calculator</h1>
        <p>Enter your height:
            <input type="text" id="height" />
            <select type="multiple" id="heightunits">
                <option value="metres" selected="selected">metres</option>
                <option value="inches">inches</option>
            </select>
        </p>
        <p>Enter your weight:
            <input type="text" id="weight" />
            <select type="multiple" id="weightunits">
                <option value="kg" selected="selected">kilograms</option>
                <option value="lb">pounds</option>
            </select>
        </p>
        <input type="button" value="computeBMI" onclick="computeBMI()"/>
         <h1>Your BMI is: <span id="output">?</span></h1>

        <h2>This means you are: value = <span id='comment'></span> </h2> 
    </body>
</html>