function getHint(text) {
	var xmlHttp;
	//alert('keyup event');
	
	if (text.length == 0) {
		document.getElementById('comment').innerHTML = '';
		return;
	}
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlHttp = new window.XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	xmlHttp.onreadystatechange = function() {
		if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			console.log('Hint : ' + xmlHttp.responseText);
			console.log('Input text : ' + document.getElementById('comment').value);
			document.getElementById('comment-hint').innerHTML = xmlHttp.responseText;

		}
	};
	xmlHttp.open('GET', 'get_hint.php?text=' + text, true);
	xmlHttp.send();
}
