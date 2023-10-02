<div>
    <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
        <div class="col-span-6">
            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                <div class="pb-0 card-body">
                    <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Line with Data Labels</h6>
                </div>
                <div class="flex flex-wrap gap-3 card-body">
                    <div id="line_chart_datalabel" data-colors='["#5156be", "#2ab57d"]' class="w-full apex-charts"
                        dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script>
        // get colors array from the string
        function getChartColorsArray(chartId) {
            var colors = $(chartId).attr('data-colors');
            var colors = JSON.parse(colors);
            return colors.map(function(value) {
                var newValue = value.replace(' ', '');
                if (newValue.indexOf('--') != -1) {
                    var color = getComputedStyle(document.documentElement).getPropertyValue(newValue);
                    if (color) return color;
                } else {
                    return newValue;
                }
            })
        }

        //  line chart datalabel
        var lineDatalabelColors = getChartColorsArray("#line_chart_datalabel");
        var options = {
            chart: {
                height: 380,
                type: 'line',
                zoom: {
                    enabled: false
                },
                toolbar: {
                    show: false
                }
            },
            colors: lineDatalabelColors,
            dataLabels: {
                enabled: false,
            },
            stroke: {
                width: [3, 3],
                curve: 'straight'
            },
            series: [
                @json($series1),
                @json($series2)

            ],
            title: {
                text: 'Average High & Low Temperature',
                align: 'left',
                style: {
                    fontWeight: '500',
                },
            },
            grid: {
                row: {
                    colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.2
                },
                borderColor: '#f1f1f1'
            },
            markers: {
                style: 'inverted',
                size: 0
            },
            xaxis: {
                categories: @json($categories),
                title: {
                    text: 'Month'
                }
            },
            yaxis: {
                title: {
                    text: 'Temperature'
                },
                min: 5,
                max: 40
            },
            legend: {
                position: 'top',
                horizontalAlign: 'right',
                floating: true,
                offsetY: -25,
                offsetX: -5
            },
            responsive: [{
                breakpoint: 600,
                options: {
                    chart: {
                        toolbar: {
                            show: false
                        }
                    },
                    legend: {
                        show: false
                    },
                }
            }]
        }

        var chart = new ApexCharts(
            document.querySelector("#line_chart_datalabel"),
            options
        );

        chart.render();
    </script>
@endsection
