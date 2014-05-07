function einblendenVorgehen( down) {
    if(down == true ) {
 	document.getElementById('vorgehen').style.display='none';
	return false;
    } else {
 	document.getElementById('vorgehen').style.display='block';
	return true;
    }
}
