var input = document.getElementById("word");
input.focus();

document.addEventListener("keydown", function(event) {
  console.log(event.code);
  if (event.key === "Enter") {
    event.preventDefault();
    document.getElementById("my").click();
  } else if (event.key === "Escape") {
    event.preventDefault();
    document.getElementById("space").click();
  }
});
    
document.getElementById('check').addEventListener('click', function() {



    
    // let value = document.querySelector('#word');
    // let de = document.querySelector('#de').getAttribute('value');
    // let en = document.querySelector('#en').getAttribute('value');
    // let result = document.querySelector('#result');
    // let res = document.querySelector('#res');

    // var xhr = new XMLHttpRequest();
    // var formData = new FormData();
    // formData.append('en', en);
    // xhr.open('POST', 'data.php');
    // xhr.responseType = 'json';
    // xhr.onload = function() {
    //    if (xhr.response['result']['en_name'] == value.value) {
    //         result.innerHTML = '<img src="images2.jpg" class=icon1>';
    //     } else {
    //         result.innerHTML = '<img src="123.jpg" class=icon>';
    //     }
    //     res.innerHTML = en;
    // };
    // xhr.send(formData);

});