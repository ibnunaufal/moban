<!DOCTYPE HTML>
<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <!-- including FusionCharts core package JS files --> 
    <script src="path/to/fusioncharts.js"></script>
    <script src="path/to/fusioncharts.charts.js"></script>

</head>
<body>
<!-- including Firebase -->
<script src="https://www.gstatic.com/firebasejs/4.6.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.6.2/firebase-database.js"></script>
<script>
    var config = {
    apiKey: "AIzaSyCUGTrY5OD1uBupNIHvCRxEO1NKYVlPtDM",
    authDomain: "fusioncharts-demo.firebaseapp.com",
    databaseURL: "https://fusioncharts-demo.firebaseio.com",
    projectId: "fusioncharts-demo",
    storageBucket: "fusioncharts-demo.appspot.com",
    messagingSenderId: "728123238984"
    };

    firebase.initializeApp(config);
    function getData(callbackIN) {
    var ref = firebase.database().ref("data");
        ref.once('value').then(function (snapshot) {
        callbackIN(snapshot.val())
    });
    }
    window.addEventListener("load", getData(genFunction));

    function genFunction(data) {
        var cdata = [];
        var len = data.length;
        for(var i=1; i<len; i++) {
            cdata.push({
            label: data[i]['label'],
            value: data[i]['value']
        });
    }}
    var firebaseChart = new FusionCharts({
    type: 'area2d',
    renderAt: 'chart-container',
    width: '650',
    height: '400',
    dataFormat: 'json',
    dataSource: {
    "chart": {
        "caption": "Website Visitors Trend",
        "subCaption": "Last 7 Days{br}ACME Inc.",
        "subCaptionFontBold": "0",
        "captionFontSize": "20",
        "subCaptionFontSize": "17",
        "captionPadding": "15",
        "captionFontColor": "#8C8C8C",
        "baseFontSize": "14",
        "baseFont": "Barlow",
        "canvasBgAlpha": "0",
        "bgColor": "#FFFFFF",
        "bgAlpha": "100",
        "showBorder": "0",
        "showCanvasBorder": "0",
        "showPlotBorder": "0",
        "showAlternateHGridColor": "0",
        "usePlotGradientColor": "0",
        "paletteColors": "#6AC1A5",
        "showValues": "0",
        "divLineAlpha": "5",
        "showAxisLines": "1",
        "drawAnchors": "0",
        "xAxisLineColor": "#8C8C8C",
        "xAxisLineThickness": "0.7",
        "xAxisLineAlpha": "50",
        "yAxisLineColor": "#8C8C8C",
        "yAxisLineThickness": "0.7",
        "yAxisLineAlpha": "50",
        "baseFontColor": "#8C8C8C",
        "toolTipBgColor": "#FA8D67",
        "toolTipPadding": "10",
        "toolTipColor": "#FFFFFF",
        "toolTipBorderRadius": "3",
        "toolTipBorderAlpha": "0",
        "drawCrossLine": "1",
        "crossLineColor": "#8C8C8C",
        "crossLineAlpha": "60",
        "crossLineThickness": "0.7",
        "alignCaptionWithCanvas": "1"
    },

    "data": cdata
    }
    });

    firebaseChart.render();
</script>
<div id="chart-container"></div>


<!--<div id="chartContainer" style="height: 360px; width: 100%;"></div>
Dtae: <input id = "dateValue" type= "date"/>
Y: <input id = "yValue" type = "number">
<input id = "button" type = "button" value= "Add">
<script>
    var dateArray = [new Date(2016, 1, 1), new Date(2016, 1, 2), new Date(2016, 1, 3), new Date(2016, 1, 4), new Date(2016, 1, 5), new Date(2016, 1, 6), new Date(2016, 1, 7), new Date(2016, 1, 8), new Date(2016, 1, 9), new Date(2016, 1, 10), new Date(2016, 1, 11), new Date(2016, 1, 12), new Date(2016, 1, 13), new Date(2016, 1, 14), new Date(2016, 1, 15), new Date(2016, 1, 16), new Date(2016, 1, 17), new Date(2016, 1, 18)];

    var numberArray = [10, 13, 18, 20, 17, 10, 13, 18, 20, 17, 20, 17, 10, 13, 18, 10, 13, 18];

    var dps = []; //dataPoints. 

    var chart = new CanvasJS.Chart("chartContainer", {
    title: {
        text: "Data Plotted from Array"
    },
    axisX: {
        title: "Axis X Title"
    },
    axisY: {
        title: "Units"
    },
    data: [{
        type: "line",
        dataPoints: dps
    }]
    });


    function parseDataPoints() {
    for (var i = dps.length; i < dateArray.length; i++)
        dps.push({
        x: new Date(dateArray[i]),
        y: numberArray[i]
        });
    };

    function addDataPoints(){
    parseDataPoints();
    chart.options.data[0].dataPoints = dps;
    chart.render();
    }

    addDataPoints();


    //Taking user input and adding it to dataPoint
    document.getElementById("button").onclick = function(){
    dateArray.push(new Date(document.getElementById("dateValue").value));
    numberArray.push(Number(document.getElementById("yValue").value));
    //Call your algorithm here
    addDataPoints();
    }

</script>
-->
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>