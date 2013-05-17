<h1>Active Tickets</h1>

<table class="table table-striped" id="dataTable">
        <thead>
          <tr>
            <th>Ticket No.</th>
            <th>Type</th>
            <th>Entry Date</th>
            <th>Account</th>
            <th>Account Representative</th>
            <th>Section</th>
            <th>Ad No.</th>
            <th>Actions</th>
			</tr>
        </thead>
        <tbody>		
		<?php foreach ($tickets as $ticket): ?>
			<tr>
				<td><?php echo $ticket['ticketID']; ?></td>
				<td><?php echo $ticket['type']; ?></td>
				<td><?php echo $ticket['entryDate']; ?></td>
				<td><?php echo $ticket['accountName']; ?></td>
				<td><?php echo $ticket['firstName']; ?> <?php echo $ticket['lastName']; ?></td>
				<td><?php echo $ticket['section']; ?></td>
				<td>Ad No.</td>
				<td>
				<a href="#" title="View Ticket"><img src="<?php echo site_url('assets/img/famfamfam/eye.png'); ?>" alt="View Ticket" /></a>
				<a href="tickets/pdf/<?php echo $ticket['ticketID']; ?>" title="Export PDF Ticket"><img src="<?php echo site_url('assets/img/famfamfam/page_white_acrobat.png'); ?>" alt="Export PDF Ticket" /></a>
				<a href="#" title="Delete Ticket"><img src="<?php echo site_url('assets/img/famfamfam/delete.png'); ?>" alt="Delete Ticket" /></a>
				</td>
			</tr>
		<?php endforeach ?>
        </tbody>
      </table>
	  