var eye = document.getElementById('eye');
var Input = document.getElementById('Input');
eye.addEventListener("click", function(){
if(Input.type == "password"){
    Input.type = "text"
    eye.style.opacity=0.8
} else{
        Input.type ="password"
        eye.style.opacity = 0.2
    }
})