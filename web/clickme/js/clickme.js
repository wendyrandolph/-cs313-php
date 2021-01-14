function changeColor(){ 
    var userInput = document.getElementById("color_input").value;  
      document.getElementById("div_1").style.background = userInput; 
    
}

function clickMe(){ 
    alert ("Clicked"); 
}

function newMethod() { 
    $userInput = document.getElementById("color_input_2").value; 
   console.log($userInput); 
    $("#div_2").on("click", "button", function(event){
    $(event.delegateTarget).css("background-color", $userInput)
  });

} 

function fadeButton(){ 
    
        $("#div_3").fadeOut(1000); 
        $("#div_3").fadeIn(1000);
        
    } 

        
   
