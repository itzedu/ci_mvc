$(document).ready(function(){
	$("#showAll").click(function(){
		$.get("/dojos/get_all", function(response) {
			var html = "";
			var name = "";
			var address = "";
			for(var i = 0; i < response.length; i++) {
				name = "<p>Name: " + response[i].name + "</p>";
				address = "<p>Address: " + response[i].address + "</p>";
				html += name + address;
			}
			$("#dojos").html(html);
		}, "json")
	})


	$("#addForm").submit(function(){
		$.post($(this).attr("action"), $(this).serialize(), function(response){
			if(response == true) {
				alert("Added to the DB!")
			}
		}, "json")
		return false;
	})
})