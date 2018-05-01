$(document).ready(function(){
	$.ajax({
		url : "/ChartTest/followersdata.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var userid = [];
			var Month1 = [];
			var Month2 = [];
			var Month3 = [];

			for(var i in data) {
				userid.push("UserID " + data[i].userid);
				Month1.push(data[i].Month1);
				Month2.push(data[i].Month2);
				Month3.push(data[i].Month3);
			}

			var chartdata = {
				labels: userid, Month1, Month2, Month3,
				datasets: [
				
				
					{
						label: "Month1",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: Month1
					},
					{
						label: "Month2",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(29, 202, 255, 0.75)",
						borderColor: "rgba(29, 202, 255, 1)",
						pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
						pointHoverBorderColor: "rgba(29, 202, 255, 1)",
						data: Month2
					},
					{
						label: "Month3",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(211, 72, 54, 0.75)",
						borderColor: "rgba(211, 72, 54, 1)",
						pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
						pointHoverBorderColor: "rgba(211, 72, 54, 1)",
						data: Month3
					}
				]
			};

			var ctx = $("#mycanvas");

			var LineGraph = new Chart(ctx, {
				type: 'line',
				data: chartdata
			});
		},
		error : function(data) {

		}
	});
});