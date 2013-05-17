<style>
table {
	font-size: 1.2em;
	font-family: Arial, Helvetica, sans-serif;
}
table.ads td{
	border: 1px solid #000;
}
tr.header td{
	text-align: center;
	font-weight: bold;
	text-transform: uppercase;
	font-size: .8em;
}
</style>

<table width="100%">
    <tr>
        <td>Date</td>
        <td style="text-transform:uppercase;font-size:1.5em;font-weight:bold;text-align:center;"><?php echo $ticket['type']; ?> Ticket</td>
        <td style="text-align:center;"><img src="<?php echo site_url('assets/img/logo.png'); ?>" /></td>
        <td style="color:red;text-align:right;">No. <?php echo $ticket['ticketID']; ?></td>
    </tr>
    <tr>
        <td>Account</td>
        <td>Acct Name</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>SLSM#</td>
        <td>Special Section</td>
        <td>SIZE: 5 col x 6 in = 30</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
<table class="ads" width="100%" style="border:1px solid #000;border-collapse:collapse;">
    <tr>
        <td colspan="9" style="text-align:center;background-color:#000;color:#fff;font-weight:bold;">INSERTION & REPEAT DATES</td>
    </tr>
    <tr class="header">
        <td>Day</td>
        <td>Month</td>
        <td>Date</td>
		<td>Keyword</td>
        <td>Position</td>
        <td>Color</td>
        <td>Discount</td>
        <td>Rate/Bookkeeping MSG</td>
        <td>Ad Number</td>
    </tr>
    <tr>
        <td colspan="9">Special Notes:</td>
    </tr>
</table>