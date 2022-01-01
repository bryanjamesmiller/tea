
console.log('hi');
const el = document.getElementById("user_id");
el.addEventListener("change", function(event){
    console.log(event);
    console.log(event.target);
    console.log(event.target.value);
    if (event.target.value>0) {
        document.getElementById("hide_me").style.display = "none";
    }
    else{
        document.getElementById("hide_me").style.display="block";
    }
});
