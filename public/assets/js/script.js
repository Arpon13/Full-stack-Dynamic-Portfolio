menu = document.querySelector(".navbar").children
for (let i = 0; i < menu.length; i++) {
    menu[i].addEventListener('click', function(event) {
           console.log(event.target.innerText); 
    }
);
}

btn = document.getElementById("btn");
btn.addEventListener('click', function(event) {
    username = document.getElementById("username");
    username.innerText = "Changed Name";
    username.style.color = "LightBlue";
    username.style.fontSize = "40px";
    username.style.fontWeight = "bold";

    // username.classlist.add("text-center");

avatar = document.querySelector(".profile-img");
avatar.src = "https://static.vecteezy.com/system/resources/thumbnails/032/176/191/small_2x/business-avatar-profile-black-icon-man-of-user-symbol-in-trendy-flat-style-isolated-on-male-profile-people-diverse-face-for-social-network-or-web-vector.jpg";

}
);


