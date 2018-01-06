"use strict"

var $content = $("#content");
var entryTemplate = $("#entry_template").html();

$.get("read.php", function(data) {
	var jdata = JSON.parse(data);
	console.log(data);
	var html = "";
	for (var f in jdata) {
		var file = jdata[f];
		var entryContent = file.content.split("\n").join("<br>");
		html += entryTemplate.replace("{content}", entryContent);
	}
	$content.html(html);
});


