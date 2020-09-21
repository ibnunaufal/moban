<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
</head>
<body>
	<script>
		var config = {
        apiKey: "{{ config('services.firebase.api_key') }}",
        authDomain: "{{ config('services.firebase.auth_domain') }}",
        databaseURL: "{{ config('services.firebase.database_url') }}",
        storageBucket: "{{ config('services.firebase.storage_bucket') }}",
    	};
		firebase.initializeApp(config);
		var dbRef0 = firebase.database().ref().child("");
		var dbRef1 = firebase.database().ref().child("Meter2");
		var dataSetFirebaseTotalActivePower1 = [];

		dbRef1.limitToLast(20).on('child_added',function(snap) {
			var TotalActivePower1 = snap.val().totalActivePower;
			var Time1 = snap.val().time;
			dataSetFirebaseTotalActivePower1.push({x: Time1 ,y: TotalActivePower1});
			console.log(dataSetFirebaseTotalActivePower1);
		});

		Highcharts.chart('container', {
			chart: {
				type: 'areaspline'
			},
			title: {
				text: 'Total Active Power Graph'
			},
			legend: {
				layout: 'vertical',
				align: 'left',
				verticalAlign: 'top',
				x: 150,
				y: 100,
				floating: true,
				borderWidth: 1,
				backgroundColor: (Highcharts.theme && 
					Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
			},
			xAxis: {
				type: 'datetime',
				title: {
					text: 'Time'
				},
				plotBands: [{ 
					from: 4.5,
					to: 6.5,
					color: 'rgba(68, 170, 213, .2)'
				}]
			},
			yAxis: {
				title: {
					text: 'Total Active Power, kWh'
				}
			},
			tooltip: {
				shared: true,
				valueSuffix: ' units'
			},
			credits: {
				enabled: false
			},
			plotOptions: {
				areaspline: {
					fillOpacity: 0.5
				}
			},
			series: [{
				data: [dataSetFirebaseTotalActivePower1]
			}]
		});
	</script>
	
</body>
</html>