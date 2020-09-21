<!DOCTYPE HTML>
<html>
<head>  

<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
<script>
window.onload = function () {

// Initialize Firebase
var config = {
        apiKey: "{{ config('services.firebase.api_key') }}",
        authDomain: "{{ config('services.firebase.auth_domain') }}",
        databaseURL: "{{ config('services.firebase.database_url') }}",
        storageBucket: "{{ config('services.firebase.storage_bucket') }}",
    };
    firebase.initializeApp(config);

    var database = firebase.database();

    var lastIndex = 0;

    function snapshotToArray(snapshot) {
        var returnArr = [];

        snapshot.forEach(function(childSnapshot) {
            var item = childSnapshot.val();
            item.key = childSnapshot.key;

            returnArr.push(item);
        });

        return returnArr;
    };
    firebase.database().ref('sensor/tembalang').on('value', function(snapshot) {
        console.log(snapshotToArray(snapshot));
    });


var chart = new CanvasJS.Chart("chartContainer", {
	theme:"light2",
	animationEnabled: true,
	title:{
		text: "Game of Thrones Viewers of the First Airing on HBO"
	},
	axisY :{
		includeZero: false,
		title: "Number of Viewers",
		suffix: "mn"
	},
	toolTip: {
		shared: "true"
	},
	legend:{
		cursor:"pointer",
		itemclick : toggleDataSeries
	},
	data: [{
		type: "spline",
		visible: true,
		showInLegend: true,
		yValueFormatString: "##.00mn",
		name: "Season 1",
		dataPoints: [
			firebase.database().ref('coba').on('value', function(snapshot) {
                console.log(snapshotToArray(snapshot));
            })
		]
	},
	{
		type: "spline", 
		showInLegend: true,
		visible: true,
		yValueFormatString: "##.00mn",
		name: "Season 2",
		dataPoints: [
			{ label: "Ep. 1", y: 3.86 },
			{ label: "Ep. 10", y: 4.20 }
		]
	}]
});
chart.render();

function toggleDataSeries(e) {
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible ){
		e.dataSeries.visible = false;
	} else {
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>