var slider = document.getElementsByClassName("slider");
var output = document.getElementsByClassName("demo");

for(const i in slider){
    output[i].innerHTML = slider[i].value; // Display the default slider value

    // Update the current slider value (each time you drag the slider handle)
    slider[i].oninput = function() {
        output[i].innerHTML = this.value;
    }
}

var timeleft = 2; //20
var downloadTimer = setInterval(function(){
    if(timeleft <= 0){
        clearInterval(downloadTimer);
        document.getElementById("count").innerHTML = "Submit";
        document.getElementById("count").disabled = false;
        document.getElementById("count").style.opacity = "1";
        document.getElementById("count").style.cursor = "pointer";
    } else {
        document.getElementById("count").innerHTML = "Submit (" +timeleft + "s)";
        document.getElementById("count").disabled = true;
        document.getElementById("count").style.opacity = "0.5";
        document.getElementById("count").style.cursor = "wait";
    }
    timeleft -= 1;
}, 1000);


