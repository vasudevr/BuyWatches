<html>
<head>
<script language="JavaScript" type="text/javascript">
			function ajax_post(){
				// Create our XMLHttpRequest object
				var hr = new XMLHttpRequest();
				// Create some variables we need to send to our PHP file
				var url = "wait.php";
				var vars = "";
				hr.open("POST", url, true);
				// Set content type header information for sending url encoded variables in the request
				hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				// Access the onreadystatechange event for the XMLHttpRequest object
				hr.onreadystatechange = function() {
					if(hr.readyState == 4 && hr.status == 200) {
						var return_data = hr.responseText;
						window.location.href="transaction.html";
					}
				}
				// Send the data to PHP now... and wait for response to update the status div
				hr.send(vars); // Actually execute the request
				document.getElementById("status").innerHTML = "<img src='images/bar2.gif'>";
				
			}
</script>
</head>
<body onload="ajax_post()">
<h3>The payment is being processed. Please don't close the tab...</h3>
<p id="status"></p>
</body>
</html>
	