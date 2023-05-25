import {Auth,LogIn} from "./config.js";

LogIn(Auth,"gg@gmail.com", "123456").then((userRecords) => {
    document.querySelector(".login a").innerHTML="Jaime";
    document.querySelector(".pedido").style.display="block";
  }).catch((error) => console.log(error));