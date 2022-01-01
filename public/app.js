
console.log('hi');
const el = document.getElementById("user_id");
el.addEventListener("change", function(event){
    console.log(event);
    console.log(event.target);
    console.log(event.target.value);
    if (event.target.value>0) {
        document.getElementById("hide_me").style.display = "none";
        document.getElementById("user_name").disabled = true;
        document.getElementById("cell").disabled = true;
        document.getElementById("email").disabled = true;
    }
    else{
        document.getElementById("hide_me").style.display="block";
        document.getElementById("user_name").disabled = false;
        document.getElementById("cell").disabled = false;
        document.getElementById("email").disabled = false;
    }
});
