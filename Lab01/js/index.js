const popupAlertButton = document.getElementById("popupAlertButton");
const changeBGButton = document.getElementById("changeBGButton");

popupAlertButton.addEventListener("click", function() {
  alert("This is an alert pop up message.");
});

changeBGButton.addEventListener("click", function() {
  document.body.style.backgroundColor = "rgb(5, 151, 219)";
  document.body.style.color = "white";
});
