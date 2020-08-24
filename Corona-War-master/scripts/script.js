// function display(){
// // var list=document.querySelector(".list-group-item").children;
// var list =
// list[0].classList.add("submenuappear")
// // console.log(document.querySelector(".list-group-item").nextElementSibling)
//
// }
// display();
const url="https://covid19.mathdro.id/api";
let recovery,death,total;

async function getData(){
  const response=await fetch(url);
  const data =await response.json();
  recovery=data.recovered.value;
  death=data.deaths.value;
  total=data.confirmed.value;
  document.querySelector("#recovered-cases").setAttribute("data-target",recovery);
  document.querySelector("#total-cases").setAttribute("data-target",total);
  document.querySelector("#death-cases").setAttribute("data-target",death);
  updateTime=new Date(data.lastUpdate).toDateString();
  let updates=document.querySelectorAll(".update");
updates.forEach((update)=>{
  update.innerText=" "+updateTime;
})



}




  getData();
var list=document.querySelectorAll(".list-group-item");
var down=document.querySelectorAll(".menu-down");
// console.log(down);

for(i=0;i<list.length;i++){
down[i].addEventListener("click",function(){
  this.nextElementSibling.classList.toggle("submenuappear");

})
  // list[i].addEventListener("mouseout", function () {
  //   this.children[0].classList.remove("submenuappear");
  //
  // })



}

function scrollAnimation(){

var aboutList=document.querySelector(".card-container").children;
var prevention=document.querySelector(".prevention");
var preventionPosition=prevention.getBoundingClientRect().top;

var screenPosition=window.innerHeight/1.3;
console.log(screenPosition);
var stat=document.querySelector(".stats");
var statPosition=stat.getBoundingClientRect().top;
if(statPosition<screenPosition){
  stat.classList.add("sub-menu-appear");
  const numbers = document.querySelectorAll(".num");
  const speed=1000;

  numbers.forEach(num=>{
  const updateCount=()=>{
    console.log(num);
    const target = parseInt(num.getAttribute("data-target"));

    const count = parseInt(num.innerText);
    console.log(target);
    const inc = parseInt(parseInt(target)/speed);
    if(count<target){
      num.innerText=count+inc;
      setTimeout(updateCount,1);

    }else{
      count.innerText=target;
    }
  }
updateCount();
});

}
if(preventionPosition<screenPosition/0.8){
prevention.classList.add("sub-menu-appear");

}





// console.log(aboutList);
  for(i=0;i<aboutList.length;i++){
    var contentPosition=aboutList[i].getBoundingClientRect().top;

    // console.log(screenPosition);
    // console.log(contentPosition);

    if(contentPosition<screenPosition){
  aboutList[i].classList.add("sub-menu-appear");}
}

}

document.addEventListener("scroll",scrollAnimation);
//submenu toggler
var menu=document.querySelectorAll(".menu");
for(i=0;i<menu.length;i++){
  menu[i].addEventListener("click",submenuToggler);
}
function submenuToggler(e){
  this.nextElementSibling.classList.toggle("sub-menu-visible");
}

// function slideAnimation(){
//   var left = document.querySelector(".door-left");
//   var right = document.querySelector(".door-right");
//   var prevention=document.querySelector(".prevention");
//   var preventionPosition=prevention.getBoundingClientRect().top;
//   var screenPosition=window.innerHeight/1.5;
//   if(preventionPosition<screenPosition/0.7){
//   // prevention.classList.add("sub-menu-appear");
//   prevention.children[0].classList.add("slide-left");
//   prevention.children[1].classList.add("slide-right");
//
// }
//
//
// }
// slideAnimation();


// API













// maps section
// mapboxgl.accessToken = 'pk.eyJ1Ijoic2hpdmFyYW0xMSIsImEiOiJja2ExOWJnMHYwanZvM2dwbW00ZGt4MjdwIn0.Q4rUduxp-vok-AD8fMASZw';
// var map = new mapboxgl.Map({
//   container: 'map',
//   style: "mapbox://styles/mapbox/light-v10",
//   center:[80.2707,13.0827],
//   zoom:10
// });

//locate the user

// var geolocate = new mapboxgl.GeolocateControl({
//  positionOptions: {
//    enableHighAccuracy: true
//  },
//  trackUserLocation: true
// });
//
// map.addControl(geolocate);
// map.on('load',function(){
//   geolocate.trigger();
// })
//
//
// addMarker([90.2707,13.0827]);
// addPopup([90.2707,13.0827])
// function addMarker(coords){
// var marker= new mapboxgl.Marker().setLngLat(coords).addTo(map);
// };
//
// function addPopup(coords){
//   var popup = new mapboxgl.Popup();
//     popup.setLngLat(coords);
//     popup.setHTML("<a href='www.google.com'>hey</a>");
//     popup.addTo(map);
//
// };
// google maps
var map;
     function initMap() {
       map = new google.maps.Map(document.getElementById('map'), {
         center: {lat: -34.397, lng: 150.644},
         zoom: 8
       });
     }
