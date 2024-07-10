// Set new default font family and font color to mimic Bootstrap's default styling
(Chart.defaults.global.defaultFontFamily = "Nunito"),
    '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#858796";

// Pie Chart Example
fetch("/api/getDataIssues.php")
    .then((response) => response.json())
    .then((data) => {
        var ctx = document.getElementById("myPieChartIssues");
        var myPieChart = new Chart(ctx, {
            type: "doughnut",
            data: {
                labels: ["Open", "In Progress", "Pending", "Closed"],
                datasets: [
                    {
                        data: [
                            data.totalOpen,
                            data.totalInProgress,
                            data.totalPending,
                            data.totalClosed,
                        ],
                        backgroundColor: [
                            "#17a2b8",
                            "#ffc107",
                            "#dc3545",
                            "#28a745",
                        ],
                        hoverBackgroundColor: [
                            "#17a2b8",
                            "#ffc107",
                            "#dc3545",
                            "#28a745",
                        ],
                        hoverBorderColor: "rgba(234, 236, 244, 1)",
                    },
                ],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: "#dddfeb",
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
                legend: {
                    display: false,
                },
                cutoutPercentage: 80,
            },
        });
    });
