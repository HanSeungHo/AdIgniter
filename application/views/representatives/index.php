<h1>Active Representatives</h1>

<table class="table table-striped" id="dataTable">
        <thead>
          <tr>
            <th>Rep No.</th>
            <th>Name</th>
            <th>Email</th>
			<th>Actions</th>
			</tr>
        </thead>
        <tbody>		
		<?php foreach ($representatives as $representative): ?>
			<tr>
				<td><?php echo $representative['repNumber']; ?></td>
				<td><?php echo $representative['firstName']; ?> <?php echo $representative['lastName']; ?></td>
				<td><?php echo $representative['email']; ?></td>
				<td>
				<a href="#" title="View Ticket"><img src="<?php echo site_url('assets/img/famfamfam/eye.png'); ?>" alt="View Ticket" /></a>
				<a href="tickets/pdf/<?php echo $ticket['ticketID']; ?>" title="Export PDF Ticket"><img src="<?php echo site_url('assets/img/famfamfam/page_white_acrobat.png'); ?>" alt="Export PDF Ticket" /></a>
				<a href="#" title="Delete Ticket"><img src="<?php echo site_url('assets/img/famfamfam/delete.png'); ?>" alt="Delete Ticket" /></a>
				</td>
			</tr>
		<?php endforeach ?>
        </tbody>
      </table>
	  