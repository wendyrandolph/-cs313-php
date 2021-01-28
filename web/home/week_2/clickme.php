<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Click Me</title>
    <link rel="stylesheet" type="text/css" href="/web/home/week_2/styles.css" media="screen" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    
      </script> 



</head>

<body>

    <h1> TEST </h1>
    <div class="div_1" id="div_1">

       <p>Div_1 </p>
       <p class="not_bold"> Enter a color to change the background to:</p>

        <input type="text" id="color_input"> </input>
        <button type="button" onclick="changeColor()" id="color_button"> Change Color </button>
    </div>
    <div class="div_2" id="div_2">
       <p> Div_2 </p>
       <p class="not_bold"> Enter a color to change the background to:</p>

       <input type="text" id="color_input_2"> </input>
       <button type="button" onclick="newMethod()" id="color_button_2"> Change Color </button>
    </div>
    <div class="div_3" id="div_3">
       <p> Div_3</p>
       <p class="not_bold"> Click on this button to fade this box:</p>
       <button type="button" onclick="fadeButton()" id="fade">Fade Color</button> 
    </div>

    <button type="button" onclick="clickMe()" id="click"> Click Me </button>

</body>
<script type="text/javascript" src="js/clickme.js"> </script>

</html>