<?php echo form_open(base_url().'shopping/update'); ?>
<?php $this->load->view('partials/customers') ?>
<body>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- CART TABLE -->
<div class="col-md-6 col-md-offset-6">
	<table class="table table-bordered" cellpadding="6" cellspacing="1" style="width:100%" border="0">
	<tr class="info">
	  <th>QTY</th>
	  <th>Item</th>
	  <th style="text-align:right">Price</th>
	  <th style="text-align:right">Sub-Total</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach ($this->cart->contents() as $items): ?>
		<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
		<tr>
		  <td align="center"><?= anchor('shopping/delete/'.$items['rowid'], "<i class='fa fa-times'></i>"); ?></td>
		  <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
		  <td>
			<?php echo $items['name']; ?>
				<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
					<p>
						<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
							<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
						<?php endforeach; ?>
					</p>
				<?php endif; ?>
		  </td>
		  <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
		  <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
		</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	<tr>
	  <td colspan="2"> </td>
	  <td class="right info"><strong>Total <i class="fa fa-usd"></i> (usd)</strong></td>
	  <td class="right info">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
	</tr>
	</table>
	<p ><?php echo form_submit('', 'Update your Cart'); ?></p>
	</form>
	<a href="/" class="btn btn-success" role="button">Continue Shopping</a>
</div>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- SHIPPING INFO BEGIN -->
<div class="container">
  	<h2>Shipping Information</h2>
  	<form action="" methop="post" class="form-horizontal" role="form">
	    <div class="form-group">
	      	<label class="control-label col-sm-2">First Name:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Last Name:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Street Address:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="street" name="street" placeholder="Address...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">City:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="city" name="city" placeholder="City...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">State:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="state" name="state" maxlength="2" placeholder="State...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Zipcode:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="zipcode"  name="zipcode" maxlength="5" placeholder="Zipcode...">
	      	</div>
	    </div>
	</form>
</div>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- BILLING INFO BEGIN -->
<div class="container">
  	<h2>Billing Information</h2>
  	<form action="" methop="post" class="form-horizontal" role="form">
		<div class="form-group"> 
		    <div class="col-sm-offset-2 col-sm-10">
		      	<div class="checkbox">
		        	<label><input type="checkbox" name="same_shipping"> Same as Shipping</label>
		      	</div>
		    </div>
		</div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">First Name:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Last Name:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Street Address:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="street" name="street" placeholder="Address...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">City:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="city" name="city" placeholder="City...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">State:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="state" name="state" maxlength="2" placeholder="State...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Zipcode:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="zipcode" name="zipcode" maxlength="5" placeholder="Zipcode...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2"><i class="fa fa-credit-card"></i> Card#:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="card_number" name="card_number" placeholder="Card#...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">CVC (security code):</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="cvc" name="cvc" maxlength="3" placeholder="CVC...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Card Expiration:</label>
	      	<div class="col-sm-3">
	        	<input type="month" class="form-control" name="expiration" id="expiration"  maxlength="5">
	      	</div>
	    </div>		
	    <div class="form-group">
	      	<label class="control-label col-sm-2"></label>
	      	<div class="col-sm-1">
	        	<input type="submit" class="form-control btn btn-primary" id="submit"  name="billing" value="Pay">
	      	</div>
	    </div>	    
	</form>
</div>
</body>
</html>