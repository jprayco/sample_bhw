    const xValues = [2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022, 2023];

    new Chart("myChart_multi_lines", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                label: "0-14 years old",
                data: [51, 100, 150, 160, 300, 350, 200, 500, 450, 600],
                borderColor: "#00aba9",
                fill: true
            }, {
                label: "15-64 years old",
                data: [60, 300, 300, 450, 300, 500, 550, 600, 700, 850],
                borderColor: "#2b5797",
                fill: true
            }, {
                label: "65 years and longer",
                data: [30, 50, 50, 55, 65, 50, 75, 60, 70, 80],
                borderColor: "#b91d47",
                fill: true
            }]
        },
        options: {
            legend: {
                display: true
            }
        }
    });

    const pie_xValues = ["0-14 years old", "15-64 years old", "65 years and longer"];
    const pie_yValues = [30, 65, 5];
    const pie_barColors = [
        "#b91d47",
        "#00aba9",
        "#2b5797"
    ];

    new Chart("myChart_pie", {
        type: "pie",
        data: {
            labels: pie_xValues,
            datasets: [{
                backgroundColor: pie_barColors,
                data: pie_yValues
            }]
        },
        options: {
            title: {
                display: true,
                text: "2023 population"
            }
        }
    });

