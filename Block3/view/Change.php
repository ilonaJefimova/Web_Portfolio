<?php
    error_reporting (0);
    include ("../model/header.php");
    include ("../model/API.php");
?>

<div class="container my-5">
    <div class="row g-4">

        <!-- LED Controls -->
        <div class="col-md-6">
            <div class="card p-3">
                <h5 class="section-title">LED Control</h5>
                <?php
                $leds = json_decode (getDataCurrentLed ());
                if ($leds) 
                {
                    $ledData = json_decode ($leds[0]->message,true);

                    $green = $ledData [1] ['value'] ?? 0;
                    $red = $ledData [0] ['value'] ?? 0;

                    echo '<p>Green LED: <span class="'.($green?'led-on':'led-off').'">'.($green? 'On':'Off').'</span></p>';
                    echo '<a href="https://some.link.com/example123?pin=7&state='.($green ? 0 : 1).'" target="_blank" class="btn btn-success me-2">'.($green?'Switch Off':'Switch On').'</a>';

                    echo '<p class="mt-3">Red LED: <span class="'.($red?'led-on':'led-off').'">'.($red?'On':'Off').'</span></p>';
                    echo '<a href="https://some.link.com/example123?pin=5&state='.($red ? 0 : 1).'" target="_blank" class="btn btn-danger">'.($red?'Switch Off':'Switch On').'</a>';
                }
                ?>
            </div>
        </div>

        <!-- Current Temperature -->
        <div class="col-md-6">
            <div class="card p-3 bg-light">
                <h5 class="section-title">Current Temperature</h5>
                <?php
                $temps = json_decode (getDataCurrent());
                if ($temps) 
                {
                    $msg = json_decode ($temps [0]->message,true);
                    echo '<p>Internal: <b>'.($msg [0] ['value'] ?? 0).'°C</b></p>';
                    echo '<p>External: <b>'.($msg[ 1] ['value'] ?? 0).'°C</b></p>';
                }
                ?>
            </div>
        </div>

        <!-- Historical Table -->
        <div class="col-12">
            <div class="card p-3">
                <h5 class="section-title">Historical Data</h5>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th><th>Date & Time</th><th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $history = json_decode (getData ());
                        foreach ($history as $row) 
                        {
                            $m = json_decode ($row->message,true);
                            echo "<tr>
                                <td>{$row->id}</td>
                                <td>{$row->dttm}</td>
                                <td>
                                    Internal: <b>".($m [0] ['value'] ?? 0)."°C</b><br>
                                    External: <b>".($m [1] ['value'] ?? 0)."°C</b><br>
                                    Red LED: <b>".($m [2] ['value'] ?? 0)."</b><br>
                                    Green LED: <b>".($m [3] ['value'] ?? 0)."</b>
                                </td>
                            </tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Chart -->
        <div class="col-12">
            <div class="card p-3">
                <h5 class="section-title">Temperature Chart</h5>
                <canvas id="tempChart"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {

    const ctx = document.getElementById("tempChart").getContext("2d");

    <?php
    $graph = json_decode (getDataGraph ());
    $labels = []; 
    $internal = [];
    $external = [];

    foreach ($graph as $item) {
        $labels [] = $item->dttm;
        $msg = json_decode ($item->message, true);
        $internal [] = $msg [0] ["value"] ?? 0;
        $external [] = $msg [1] ["value"] ?? 0;
    }
    ?>

    new Chart(ctx, {
        type: "line",
        data: {
            labels: <?php echo json_encode (array_reverse ($labels)); ?>,
            datasets: [
                {
                    label: "Internal Temperature",
                    data: <?php echo json_encode (array_reverse ($internal)); ?>,
                    borderColor: "#e74c3c",
                    backgroundColor: "rgba(231, 76, 60, 0.1)",
                    borderWidth: 2,
                    pointRadius: 3,
                    pointHoverRadius: 6,
                    pointBackgroundColor: "#e74c3c",
                    fill: true,
                    tension: 0.4
                },
                {
                    label: "External Temperature",
                    data: <?php echo json_encode (array_reverse ($external)); ?>,
                    borderColor: "#3498db",
                    backgroundColor: "rgba(52, 152, 219, 0.1)",
                    borderWidth: 2,
                    pointRadius: 3,
                    pointHoverRadius: 6,
                    pointBackgroundColor: "#3498db",
                    fill: true,
                    tension: 0.4
                }
            ]
        },

        options: {
            responsive: true,
            maintainAspectRatio: false,

            animation: {
                duration: 900,
                easing: "easeInOutQuart"
            },

            legend: {
                position: "bottom",
                labels: {
                    fontSize: 12,
                    padding: 20
                }
            },

            scales: {
                yAxes: [
                    {
                        ticks: {
                            fontSize: 12,
                            beginAtZero: false,
                            padding: 10,
                        },
                        scaleLabel: {
                            display: true,
                            labelString: "Temperature (°C)",
                            fontSize: 14,
                            fontStyle: "bold"
                        },
                        gridLines: {
                            color: "rgba(0,0,0,0.05)"
                        }
                    }
                ],

                xAxes: [
                    {
                        ticks: {
                            fontSize: 11,
                            padding: 8,
                            maxRotation: 45,
                            minRotation: 45
                        },
                        scaleLabel: {
                            display: true,
                            labelString: "Timestamp",
                            fontSize: 14,
                        },
                        gridLines: {
                            display: false
                        }
                    }
                ]
            },

            tooltips: {
                backgroundColor: "#2c3e50",
                titleFontSize: 14,
                bodyFontSize: 13,
                cornerRadius: 6,
                xPadding: 12,
                yPadding: 12
            }
        }
    });
});
</script>


<?php include ("../model/footer.php"); ?>
