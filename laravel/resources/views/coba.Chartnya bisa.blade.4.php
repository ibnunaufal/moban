<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chart</title>

    <script src="https://www.gstatic.com/firebasejs/6.3.5/firebase.js"></script>

	<script type="text/javascript" src="{{ URL::asset('js/Chart.js') }}"></script>

    <script src="https://www.gstatic.com/firebasejs/6.3.5/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.3.5/firebase-database.js"></script>

</head>
<body>

<canvas id="myChart" width="200" height="200"></canvas>
<script>


    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['00.00', '01.00', '02.00', '03.00', '04.00', '05.00'],
            datasets: [{
                label: '# of Whatever',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    function addData(chart, label, data) {
        chart.data.labels.push(label);
        chart.data.datasets.forEach((dataset) => {
            dataset.data.push(data);
        });
        chart.update();
    }

    function removeData(chart) {
        chart.data.labels.pop();
        chart.data.datasets.forEach((dataset) => {
            dataset.data.pop();
        });
        chart.update();
    }

    //Firebase code
    //Config values to ba adapted!
    var config = {
        apiKey: "AIzaSyBrPMdssPaCUEl3mHZuHPpJ9UEubeVhK8M",
        authDomain: "bisa-b2497.firebaseapp.com",
        databaseURL: "https://bisa-b2497.firebaseio.com/",
        projectId: "bisa-b2497",
        storageBucket: "bisa-b2497.appspot.com"
    };

    firebase.initializeApp(config);

    var valueRef = firebase.database().ref('coba');
    valueRef.on('value', function(snapshot) {
      console.log(snapshot);
    });
	


</script>

</body>
</html>