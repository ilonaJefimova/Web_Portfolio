    
 <?php
    error_reporting (0);
    include ("../controller/location.php");

    $curl = curl_init ($location);
    curl_setopt ($curl, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt ($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec ($curl);

    if (!$response) 
    {
        echo "<script>
            Swal.fire({
                title: 'Data Response',
                text: 'Problem receiving data',
                icon: 'error',
                confirmButtonText: 'Back'
            }).then(function() {
                window.location.href = '../view/admin.php';
            });
        </script>";
        exit;
    }

    curl_close ($curl);

    $xml = simplexml_load_string ($response);

    if ($xml === false) 
    {
        echo "<script>
            Swal.fire({
                title: 'Data Response',
                text: 'Invalid XML received from API',
                icon: 'error',
                confirmButtonText: 'Back'
            }).then(() => window.location.href='../view/admin.php');
        </script>";
        exit;
    }
    $items = $xml -> news;
 ?>   
    <div class="card shadow p-3">
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Link</th>
                    <th width="150">Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($items as $i): ?>
                <tr>
                    <td><?= $i->id ?></td>
                    <td><img src="../image/<?= $i->image ?>" style="height:60px;" class="rounded"></td>
                    <td class="fw-semibold"><?= $i->title ?></td>
                    <td><?= $i->description ?></td>
                    <td><a href="<?= $i->link ?>" target="_blank">Open</a></td>

                    <td>
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#updateModal<?= $i->id ?>">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteNews(<?= $i->id ?>)">Delete</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>
