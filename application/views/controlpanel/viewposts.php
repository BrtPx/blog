<div class="details">
    <div class="recent-posts">
        <div class="card-header">
            <h2> Recent Posts</h2>
            <!-- <?php print_r($result) ?> -->
        </div>
        <table class="table" id="blog_tbl">
            <thead class="thead-dark">
                <tr>
                    <th>#. </th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result) {
                    $counter = 1;
                    foreach ($result as $key => $value) {
                        echo "<tr>
                        <td>" . $counter . "</td>
                        <td>" . $value['title'] . " </td>
                        <td>" . $value['subtitle'] . " </td>
                        <td>" . $value['content'] . " </td>
                        <td><img src='" . base_url() . $value['img'] . "'class='img-fluid' width='200'> </td>
                        <td><a class=\"btn btn-info\" href='" . base_url() . 'patadash/fill_tbldata/' . $value['id'] . "'>Edit</a></td>
                        <td><a class=\"btn btn-danger\" href='" . base_url() . 'patadash/deletepost/' . $value['id'] . "'>Delete</a></td>
                
                        </tr>";
                        $counter++;
                    }
                } else {
                    echo "<tr><td colspan='6'>No records Found</td></tr>";
                }


                ?>


            </tbody>
        </table>

    </div>
</div>