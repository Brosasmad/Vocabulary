var input = document.getElementById("word");
input.focus();
    // Execute a function when the user presses a key on the keyboard
    document.addEventListener("keydown", function(event) {
      console.log(event.code);
      // If the user presses the "Enter" key on the keyboard
      if (event.key === "Enter") {
        // Cancel the default action, if needed
        event.preventDefault();
        // Trigger the button element with a click
        document.getElementById("my").click();
      }
      else if (event.key === "Escape") {
        // Cancel the default action, if needed
        event.preventDefault();
        // Trigger the button element with a click
        document.getElementById("space").click();
      }
    });
    

document.querySelector('.button').addEventListener('click', function() {
    let value = document.querySelector('#word');

    let de = document.querySelector('#de').getAttribute('value');
    let en = document.querySelector('#en').getAttribute('value');

    let result = document.querySelector('#result');
    let res = document.querySelector('#res');

    var xhr = new XMLHttpRequest();
    var formData = new FormData();
    formData.append('en', en);
    xhr.open('POST', 'data.php');
    xhr.responseType = 'json';
    xhr.onload = function() {


       if (xhr.response['result']['en_name'] == value.value) {

            result.innerHTML = '<img src="images2.jpg" class=icon1>';
        } else {

            result.innerHTML = '<img src="123.jpg" class=icon>';
        }
        res.innerHTML = en;
    };
    xhr.send(formData);

});