function yourLocation() {
	var locale = prompt("Where are you from?", "Detroit");

	if (locale != null)	{
		document.getElementById('location').innerHTML = 
		locale + "? That's great! I hear it's nice there.";
	}
}