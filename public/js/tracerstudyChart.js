// Data PHP dikonversi ke format JSON agar dapat digunakan di JavaScript
var statusCounts = @json($statusCounts);

// Siapkan data untuk chart
var seriesData = Object.keys(statusCounts).map(function (key) {
    return {
        name: key,
        value: statusCounts[key]
    };
});

// Inisialisasi ECharts
var statusChart = echarts.init(document.getElementById('statusChart'));

var option = {
    tooltip: {
        trigger: 'item'
    },
    legend: {
        top: '1%',
        left: 'center'
    },
    series: [
        {
            name: 'Status Pekerjaan Alumni',
            type: 'pie',
            radius: ['40%', '70%'],
            avoidLabelOverlap: false,
            itemStyle: {
                borderRadius: 10
            },
            label: {
                show: true,
                position: 'outside',
                formatter: '{b}: {c}'
            },
            emphasis: {
                label: {
                    show: true,
                    fontSize: 20,
                    fontWeight: 'bold'
                }
            },
            labelLine: {
                show: true
            },
            data: seriesData
        }
    ]
};

statusChart.setOption(option);