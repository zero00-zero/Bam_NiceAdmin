 <?php
include "./includes/connection.php";

$sql = "SELECT * FROM lending_form";
$result = $conn->query($sql);

$conn->close();

 ?>
 
 <table class="table datatable">
                <thead>
                  <tr>
                    <th>Form ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>ZIP</th>
                    <th>Amount</th>
                    <th colspan="3">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    while($row = $result->fetch_assoc()) :
                    ?>
                  <tr>
                    <td><?php echo $row['lending_form_id']; ?></td>
                    <td><?php echo $row['full_name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['state']; ?></td>
                    <td><?php echo $row['zip']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td>
                        <button type="button" class="btn btn-primary">Edit</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-info">Show Details</button>
                    </td>
                  </tr>
                  <?php endwhile ; ?>
                  </tbody>
 </table>