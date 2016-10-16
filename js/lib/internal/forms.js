function formhash(e, t) {
	var n = document.createElement("input");
	e.appendChild(n);
	n.name = "p";
	n.type = "hidden";
	n.value = hex_sha512(t.value);
	t.value = "";
	e.submit()
}