var eyes = document.getElementById('eyes');
var Inputs = document.getElementById('Inputs');
eye.addEventListener("click", function(){
if(Inputs.type == "password"){
    Inputs.type = "text"
    eyes.style.opacity=0.8
} else{
        Inputs.type ="password"
        eyes.style.opacity = 0.2
    }
})