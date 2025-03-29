document.addEventListener("DOMContentLoaded", function () {
  var themeModeButton = document.getElementById("themeModeButton");

  themeModeButton.addEventListener("click", function () {
    themeModeButton.classList.toggle("dark");
  });
});
