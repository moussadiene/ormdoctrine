// function ajaxClient() {

//     var requete = new XMLHttpRequest();
//     //var url = "http://localhost/tp3namespace/C_search/index";


//     var url = "http://localhost/projets/simplon/tpORMDoctrine/C_Client/getAll";

//     requete.open("POST",url,true);

//     //requete.setRequestHeader("Content-type","application/x-www-form-urlencoded");
//     requete.setRequestHeader('Content-Type', 'application/json');
//     //requete.setRequestHeader('Content-Type', 'application/json');
//     //setRequestHeader('Content-type','application/json; charset=utf-8');
//     //request.responseType = 'json';

//     requete.onreadystatechange = function(){
//         if(requete.readyState == 4 && requete.status == 200){
//             console.log(requete.response);
//         }
//     }
//     requete.send();
//     document.getElementById("contain").innerHTML = "processing..";

// }






function vueClient() {
    $('.dash').removeClass('active');
    $('.compte').removeClass('active');
    $('.client').addClass('active');
    let contain = document.getElementById("contain")
    contain.innerHTML = '<iframe src="http://localhost/projets/simplon/tpORMDoctrine/C_Client/getAll" title="IFRAME" width=100%" height="136%" style="border : none"></iframe>';

}

function vueCompte() {
    $('.dash').removeClass('active');
    $('.client').removeClass('active');
    $('.compte').addClass('active');
    let contain = document.getElementById("contain")
    contain.innerHTML = '<iframe src="http://localhost/projets/simplon/tpORMDoctrine/C_Compte/getAll" title="IFRAME" width=100%" height="136%" style="border : none"></iframe>';
}