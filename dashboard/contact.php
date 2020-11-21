<!DOCTYPE html>
<html lang="en">
<?php
  include 'includes/head.php';
?>
<body>
<?php
  $active = 'contact';
  include 'includes/nav-bar.php';
?>
  <!-- HEADER -->
  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fa fa-address-book"></i> Contact</h1>
        </div>
      </div>
    </div>
  </header>

  <section class="mt-5 bg-light mb-5">
	<div class="container">
	<table id="table1" class="table table-striped table-bordered" width="100%">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Message</th>
				</tr>
			</thead>
			<tbody>
<?php

include 'includes/connection.php';

$sql = "select * from contact";

	if ($result = $conn->query($sql)) {
		while ($row = $result->fetch_assoc()) 
		{
			echo "<tr><td>".$row['fname']."</td>";
			echo "<td>".$row['lname']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['phone']."</td>";
			echo "<td>".$row['message']."</td></tr>";
		}
	}
?>
			</tbody>
		</table>
	</div>
	</section>
<?php
  include 'includes/footer.php';
?>
</body>

</html>
