
$(document).ready(function(){
  $('.sidenav').sidenav();
  $('.modal').modal({
      startingTop: '90%',
      endingTop: '20%'
  });
  $('.materialboxed').materialbox();
  $('.parallax').parallax({
      responsiveThreshold: 0
  });
  $('.tabs').tabs({
      swipeable: true,
      draggable: false
  });
  $('.collapsible').collapsible();
  $('.datepicker').datepicker({
      disableWeekends: true
  });
  $('.slider').slider({
      indicators: false,
      height: 700,
      transition:500,
      interval:5000
  })
  $('.scrollspy').scrollSpy();
  $('.carousel').off('touchstart touchmove touchend');

})
$(window).scroll(function(){
  $('nav').toggleClass('scrolled', $(this).scrollTop()>50);
  $('top').toggleClass('active', $(this).scrollTop()>50);
  $('.sidenav').sidenav().close;
  $('.tooltipped').tooltip({
      position: 'left'
  }).close;
})
$('.tooltipped').tooltip({
  position: 'left'
});
$('.dropdown-trigger').dropdown({
  coverTrigger:  false,
  constrainWidth: false,
  hover:true
});

function home(){
  window.scrollTo(0, 0);
}
function about(){
  window.scrollTo(0, 565);
}
function services(){
  window.scrollTo(0, 1075);
}
function appointment(){
  window.scrollTo(0, 1650);
}
function contact(){
  window.scrollTo(0, 2200);
}

const selectBtn = document.querySelectorAll(".sel-btn")
const nextBtn = document.querySelector(".next-btn")
const tab1 = document.querySelector(".tab1")
const cat = document.querySelector(".category")
const tab2 = document.querySelector(".tab2")
const info = document.querySelector(".info")
const tab3 = document.querySelector(".tab2")
const time = document.querySelector(".time")
const tabContent = document.querySelector(".tabs-content")
const back = document.querySelector(".back");
const back2 = document.querySelector(".back2");
const navContent = document.querySelector(".nav-content");
const payBtn = document.querySelector(".pay-btn")
const money = document.getElementById("cash")

window.addEventListener('scroll', function(){
const scrollHeight = window.pageYOffset

if(scrollHeight > 500){
    navContent.classList.add('active')
}
else{
    navContent.classList.remove('active')
}
})

selectBtn.forEach(btn => {
  btn.addEventListener("click", () => {
      tab1.classList.remove('active')
      cat.classList.remove('active')
      cat.style.transform = "translateX(-75rem)";
      cat.style.transition = ".5s"
      tab2.classList.add('active')
      info.classList.add('active')
      back.style.visibility = "visible"
  })
})
back.addEventListener('click', function(){
tab1.classList.add('active')
cat.classList.add('active')
cat.style.transform = "translateX(0)";
cat.style.zIndex = "1";
info.style.zIndex = "-1"
info.style.transform = "translateX(75rem)";
info.style.transition = ".5s"
info.style.opacity = "0"
tab2.classList.remove('active')
info.classList.remove('active')
time.style.zIndex = "-1"
time.style.transform = "translateX(75rem)";
time.style.transition = ".5s"
time.style.opacity = "0"
tab3.classList.remove('active')
time.classList.remove('active')
back.style.visibility = "hidden"
})

nextBtn.addEventListener("click", function(){
var name1 = document.getElementById("username").value;
const mail = document.getElementById("email").value;
const contact1 = document.getElementById("phone").value;
const address = document.getElementById("address").value;
const desc = document.getElementById("description").value;

if (name1 == "" && contact1 == "" && address == "" && desc == ""){
  alert("Please input all the text fields");
  return;
}
else if (mail == ""){
  alert("Please input all the text fields");
  return;
}
else if (contact1 == ""){
  alert("Please input all the text fields");
  return;
}
else if (address == ""){
  alert("Please input all the text fields");
  return;
}
else if (desc == ""){
  alert("Please input all the text fields");
  return;
}
else if (isNaN(contact1)){
  alert("Please input appropriate phone number");
  return;
}
else{
  info.style.transform = "translateX(-75rem)";
  info.style.transition = ".5s"
  info.style.zIndex = "-1"
  tab2.classList.remove('active')
  info.classList.remove('active')
  tab3.classList.add('active')
  time.classList.add('active')
  time.style.transform = "translateX(0)";
  time.style.transition = ".7s"
  time.style.zIndex = "0"
  time.style.visibility = "visible"
  time.style.opacity = "1"
  back.style.visibility = "hidden"
  back2.style.visibility = "visible"
}

})
back2.addEventListener("click", function(){
info.style.transform = "translateX(0)";
info.style.transition = ".5s"
info.style.zIndex = "1"
tab2.classList.add('active')
info.classList.add('active')
tab3.classList.remove('active')
time.classList.remove('active')
time.style.transform = "translateX(75rem)";
time.style.transition = ".7s"
time.style.zIndex = "-1"
time.style.visibility = "hidden"
time.style.opacity = "0"
back.style.visibility = "visible"
back2.style.visibility = "hidden"
})

payBtn.addEventListener("click", function(event1){
event1.preventDefault();
var moneyValue = money.value;
if (moneyValue < 510){
  alert ("Please pay accordingly.")
  return;
}
else {
  // Inserting to MySQL //
  success()
  const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
        console.log(this.responseText); // Output the response from the PHP file
        response2.innerHTML = this.responseText;
        }
    };
    xhr.open('POST', 'insert.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send();
}
})
function success(){
M.toast({html: 'You have successfully secured your appointment.'})
}

// calendar event
const date = new Date();

const renderCalendar = () => {
date.setDate(1);

const monthDays = document.querySelector(".days");

const lastDay = new Date(
  date.getFullYear(),
  date.getMonth() + 1,
  0
).getDate();

const prevLastDay = new Date(
  date.getFullYear(),
  date.getMonth(),
  0
).getDate();

const firstDayIndex = date.getDay();

const lastDayIndex = new Date(
  date.getFullYear(),
  date.getMonth() + 1,
  0
).getDay();

const nextDays = 7 - lastDayIndex - 1;

const months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];

document.querySelector(".date h1").innerHTML = months[date.getMonth()];

document.querySelector(".date p").innerHTML = new Date().toDateString();

let days = "";

for (let x = firstDayIndex; x > 0; x--) {
  days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
}

for (let i = 1; i <= lastDay; i++) {
  if (
    i === new Date().getDate() &&
    date.getMonth() === new Date().getMonth()
  ) {
    days += `<div class="today">${i}</div>`;
  } else {
    days += `<div>${i}</div>`;
  }
}

for (let j = 1; j <= nextDays; j++) {
  days += `<div class="next-date">${j}</div>`;
}
monthDays.innerHTML = days;
};

document.querySelector(".prev").addEventListener("click", () => {
date.setMonth(date.getMonth() - 1);
renderCalendar();
});

document.querySelector(".next").addEventListener("click", () => {
date.setMonth(date.getMonth() + 1);
renderCalendar();
});

renderCalendar();


// <button class="datepicker-day-button" type="button" data-year="2023" data-month="4" data-day="22" fdprocessedid="wrzv">22</button>
