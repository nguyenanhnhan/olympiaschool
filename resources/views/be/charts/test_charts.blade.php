<!DOCTYPE HTML>
<html>

<head>
    <script type="text/javascript">
        window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
        
		animationEnabled: true, 
		animationDuration: 2000, 
        backgroundColor: "#F5DEB3",
        axisX:{
            title: "labels at 45 deg",
            labelAngle: 45
        },
        title:{
        text: "Coal Reserves of Countries"
        },
            data: [
        {
        type: "stackedColumn",
        dataPoints: [
        {  y: 111338 , label: "a2"},
        {  y: 49088, label: "Russia" },
        {  y: 62200, label: "China" },
        {  y: 90085, label: "India" },
        {  y: 38600, label: "Australia"},
        {  y: 48750, label: "SA"}

        ]
        },  {
            type: "stackedColumn",
            dataPoints: [
            {  y: 135305 , label: "a3", name: 'oklah'},
            {  y: 107922, label: "Russia" },
            {  y: 52300, label: "China" },
            {  y: 3360, label: "India" },
            {  y: 39900, label: "Australia"},
            {  y: 0, label: "SA"}

            ]
        }
        ]
    });

    
    var chart2 = new CanvasJS.Chart("chartContainer2",
    {
        title:{
        text: "Coal Reserves of Countries"
        },
            data: [
        {
        type: "stackedColumn",
        dataPoints: [
        {  x: 1, y: 111338 , label: "USA"},
        {  x: 2, y: 49088, label: "Russia" },
        {  x: 3, y: 62200, label: "China" },
        {  x: 4, y: 90085, label: "India" },
        {  x: 5, y: 38600, label: "Australia"},
        {  x: 6, y: 48750, label: "SA"}

        ]
        },
        ]
    });

        chart.render();
        chart2.render();
    }     
    </script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>

<body>
    <div id="chartContainer" style="height: 300px; width: 100%;">
    </div>
    <div id="chartContainer2" style="height: 300px; width: 100%;">
    </div>
</body>

</html>