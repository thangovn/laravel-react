window.onload = function () {
    var totalVisitors = 883000;
    var visitorsData = {
        "New vs Returning Visitors": [
            {
                cursor: "pointer",
                explodeOnClick: false,
                innerRadius: "75%",
                legendMarkerType: "square",
                name: "New vs Returning Visitors",
                radius: "100%",
                showInLegend: true,
                startAngle: 90,
                type: "doughnut",
                dataPoints: [
                    {
                        y: 50,
                        name: "USDT",
                        color: "#1BA27A",
                    },
                    {
                        y: 50,
                        name: "DOGE",
                        color: "#F0C234",
                    },
                    {
                        y: 50,
                        name: "BTC",
                        color: "#F7931A",
                    },
                    {
                        y: 50,
                        name: "BNB",
                        color: "#FFDA41",
                    },
                ],
            },
        ],
    };

    var newVSReturningVisitorsOptions = {
        animationEnabled: true,
        theme: "light2",
        subtitles: [
            {
                backgroundColor: "#2eacd1",
                fontSize: 16,
                fontColor: "white",
                padding: 5,
            },
        ],
        legend: {
            display: true,
            position: "right",
            fontFamily: "calibri",
            fontSize: 14,
            // itemTextFormatter: function (e) {
            //     return (
            //         e.dataPoint.name +
            //         ": " +
            //         Math.round((e.dataPoint.y / totalVisitors) * 100) +
            //         "%"
            //     );
            // },
        },
        data: [],
        plugins: {
            legend: {
                width: 900,
                display: true,
                position: "right",
            },
        },
    };

    var visitorsDrilldownedChartOptions = {
        animationEnabled: true,
        theme: "light2",
        axisX: {
            labelFontColor: "#717171",
            lineColor: "#a2a2a2",
            tickColor: "#a2a2a2",
        },
        axisY: {
            gridThickness: 0,
            includeZero: false,
            labelFontColor: "#717171",
            lineColor: "#a2a2a2",
            tickColor: "#a2a2a2",
            lineThickness: 1,
        },
        data: [],
    };

    newVSReturningVisitorsOptions.data =
        visitorsData["New vs Returning Visitors"];
    $("#chartContainer").CanvasJSChart(newVSReturningVisitorsOptions);

    function visitorsChartDrilldownHandler(e) {
        e.chart.options = visitorsDrilldownedChartOptions;
        e.chart.options.data = visitorsData[e.dataPoint.name];
        // e.chart.options.title = {
        //     text: e.dataPoint.name
        // }
        // e.chart.render();
        // $("#backButton").toggleClass("invisible");
    }

    //Hidden Balance Profile
    document.addEventListener(
        "DOMContentLoaded",
        (hiddenBalance = () => {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        })
    );

    hiddenBalance();

    //Copy Referral Link
    document.addEventListener(
        "DOMContentLoaded",
        function copyToClipboard(elementId) {
            // Create a "hidden" input
            var aux = document.createElement("input");
            var element = document.getElementById(elementId);
            // Assign it the value of the specified element
            aux.setAttribute("value", element.innerHTML);

            // Append it to the body
            document.body.appendChild(aux);

            // Highlight its content
            aux.select();

            // Copy the highlighted text
            document.execCommand("copy");

            // Remove it from the body
            document.body.removeChild(aux);
        }
    );

    //show more detail
    $("#show-more-content").hide();

    $("#show-more").click(function () {
        $("#show-more-content").show(300);
        $("#show-less").show();
        $("#show-more").hide();
    });

    $("#show-less").click(function () {
        $("#show-more-content").hide(150);
        $("#show-more").show();
        $(this).hide();
    });
};

function myFunction() {
    // var x = document.getElementsByName("animal").value;
    var num = document.getElementsByName("animal").value;
    alert(num);
    // var x = document.getElementById("mySelect").value;
    $("a").attr("href", x);
}
var num = document.getElementsByName("animal").innerHTML.value;
alert(num);
// let num = document.getElementsByName("animal-test").value;
// alert(num);
