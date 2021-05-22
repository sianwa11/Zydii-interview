/* const btn = document.querySelector(".btn");

btn.addEventListener("click", (e) => {
  e.preventDefault();
  const http = new XMLHttpRequest();
  const url = "http://127.0.0.1:80/Zydii/api/vuvuzela.php";
  http.open("GET", url, true);
  http.send();

  http.onreadystatechange = (e) => {
    console.log(http.responseText);
  };
});
 */

// Post request
$(document).ready(function () {
  $("#postMessage").click(function (e) {
    e.preventDefault();
    console.log("clicked");

    const url = $("form").serialize();

    //function to turn url to an object
    function getUrlVars(url) {
      let hash;
      let myJson = {};
      let hashes = url.slice(url.indexOf("?") + 1).split("&");
      for (let i = 0; i < hashes.length; i++) {
        hash = hashes[i].split("=");
        myJson[hash[0]] = hash[1];
      }
      return JSON.stringify(myJson);
    }

    //pass serialized data to function
    let test = getUrlVars(url);
    console.log(test);

    //post with ajax
    $.ajax({
      type: "POST",
      url: "http://127.0.0.1:80/Zydii/api/vuvuzela.php",
      data: test,
      ContentType: "application/json",

      success: function () {
        alert("successfully posted");
      },
      error: function () {
        alert("Could not be posted");
      },
    });
  });
});
