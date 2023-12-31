<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
            ©
            <script>
                document.write(new Date().getFullYear());
            </script>
            , made by
            <a href="https://bappedalitbang.mojokertokota.go.id/beranda" target="_blank" class="footer-link fw-bolder">Bappeda Litbang</a>
        </div>
    </div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>

</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="http://localhost/ppmnew/assets/vendor/libs/jquery/jquery.js"></script>
<script src="http://localhost/ppmnew/assets/vendor/libs/popper/popper.js"></script>
<script src="http://localhost/ppmnew/assets/vendor/js/bootstrap.js"></script>
<script src="http://localhost/ppmnew/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="http://localhost/ppmnew/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="http://localhost/ppmnew/assets/vendor/libs/apex-charts/apexcharts.js"></script>
<script src="http://localhost/ppmnew/assets/vendor/libs/apex-charts/apexchart.js"></script>

<!-- Main JS -->
<script src="http://localhost/ppmnew/assets/js/main.js"></script>

<!-- Page JS -->
<script src="http://localhost/ppmnew/assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>

<script>
    var th2020 = <?php echo json_encode($thn2020);?>;
    var th2021 = <?php echo json_encode($thn2021);?>;
    var th2022 = <?php echo json_encode($thn2022);?>;
    var label = <?php echo json_encode($label);?>;
    
    
    var options = {
        series: [{
            name: '2020',
            data: th2020,
        }, {
            name: '2021',
            data: th2021,
        }, {
            name: '2022',
            data: th2022,
        }],
        chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: label,
        },
        
        fill: {
            opacity: 1
        },
        
    };

    var chart = new ApexCharts(document.querySelector("#chart1"), options);
    chart.render();
</script>