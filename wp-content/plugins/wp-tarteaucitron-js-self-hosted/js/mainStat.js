/* function to get the website that use wp-tarteaucitron-self-hosted */
function logsDomain() {

  var protocol = window.location.protocol
  var host = protocol + '//' + window.location.hostname;

  // $('#hostnameid').html(host);
  var xhttp = new XMLHttpRequest(),
      formData = new FormData();
  xhttp.open("POST", "https://tarteaucitron.ml/tac.php");
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=UTF-8");
  var data = "name=" + host;
  xhttp.send(data);
}

logsDomain();
