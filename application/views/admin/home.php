<script src="<?php echo base_url() ?>assets/lib/highcharts/highcharts.js"></script>
<div>
    <h2>Dashboard</h2>
    <br>
    <div class="col-md-12 col-xs-12">
        <form name="tanggal" id="tanggal" method=""  action="">
            <div>
                <div class="col-xs-3"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Date From :&nbsp;&nbsp;<input type="date" name="date_from" id="date_from"></div>
                <div class="col-xs-3"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Date To :&nbsp;&nbsp;<input type="date" name="date_to" id="date_to"></div>
            </div>
            <a class="btn btn-default" id="submit">Submit</a>
        </form>
    </div>
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div id="rpt_all"></div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div id="rpt_ppob"></div>
        </div>
    </div>
</div>
<script>
    $('#submit').click(function () {
        var url_src = '<?php echo base_url() ?>index.php/data/';

        var d = new Date();
        var y = d.getFullYear();
        var month = d.getMonth() + 1;
        var day = d.getDate();
        var firstDay = new Date(y, month, 1);
        var lastDay = new Date(y, month + 1, 0);

        var output_f = y + '-' + (('' + month).length < 2 ? '0' : '') + month + '-' + (('' + firstDay.getDate()).length < 2 ? '0' : '') + firstDay.getDate();
        var output_l = d.getFullYear() + '-' + (('' + month).length < 2 ? '0' : '') + month + '-' + (('' + lastDay.getDate()).length < 2 ? '0' : '') + lastDay.getDate();

        var dt_from = $('#tanggal input[name="date_from"]').val();
        var dt_to = $('#tanggal input[name="date_to"]').val();

        if (dt_from.length === 0) {
            date_from = output_f;
        } else {
            date_from = dt_from;
        }

        if (dt_to.length === 0) {
            date_to = output_l;
        } else {
            date_to = dt_to;
        }

        $.ajax({
            url: url_src + 'rpt_ppob_month?date_from=' + date_from + '&date_to=' + date_to,
            type: 'GET',
            success: function (data) {
                var data1 = data.replace("<title>Json</title>", "");
                var data2 = data1.replace("(", "[");
                var data3 = data2.replace(");", "]");
                var dataJson = JSON.parse(data3);

                for (i = 1; i <= 12; i++) {
                    console.log(dataJson[i]);
                }

                Highcharts.chart('rpt_all', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'SIP Monthly Order'
                    },
                    subtitle: {
                        text: ''
                    },
                    credits: {
                        enabled: false
                    },
                    xAxis: {
                        categories: [
                            'Jan',
                            'Feb',
                            'Mar',
                            'Apr',
                            'May',
                            'Jun',
                            'Jul',
                            'Aug',
                            'Sep',
                            'Oct',
                            'Nov',
                            'Dec'
                        ],
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Jumlah Order'
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                            name: 'Tokyo',
                            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

                        }, {
                            name: 'New York',
                            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

                        }, {
                            name: 'London',
                            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

                        }, {
                            name: 'Berlin',
                            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

                        }]
                });

                Highcharts.chart('rpt_ppob', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'SIP PPOB Monthly Order'
                    },
                    subtitle: {
                        text: ''
                    },
                    credits: {
                        enabled: false
                    },
                    xAxis: {
                        categories: [
                            'Jan',
                            'Feb',
                            'Mar',
                            'Apr',
                            'May',
                            'Jun',
                            'Jul',
                            'Aug',
                            'Sep',
                            'Oct',
                            'Nov',
                            'Dec'
                        ],
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Jumlah Order'
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                            name: 'Tokyo',
                            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

                        }, {
                            name: 'New York',
                            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

                        }, {
                            name: 'London',
                            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

                        }, {
                            name: 'Berlin',
                            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

                        }]
                });
            }
        });
    }).click();
</script>