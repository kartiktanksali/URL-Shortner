
$(document).ready(function(){
	$.ajax({
		url: "http://localhost/urlshort/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var link = [];
			var count = [];
			var newData = JSON.parse(data);
			console.log(newData);
			for(var i in newData) {
				link.push("Link " + newData[i].link);
				count.push(newData[i].count);
			}

			var chartdata = {
				labels: link,
				datasets: [
							{
								label: "My First dataset",
								backgroundColor: "rgba(255,99,132,0.2)",
								borderColor: "rgba(255,99,132,1)",
								borderWidth: 1,
								hoverBackgroundColor: "rgba(255,99,132,0.4)",
								hoverBorderColor: "rgba(255,99,132,1)",
								data: count,
							}
						]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(newData) {
			console.log(newData);
		}
	});
});