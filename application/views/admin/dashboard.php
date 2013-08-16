<h1>				<h1>
						Dashboard
					</h1>
					<div class="well summary">
						<ul>
							<li>
								<a href="#"><span class="count">3</span> Projects</a>
							</li>
							<li>
								<a href="#"><span class="count">27</span> Tasks</a>
							</li>
							<li>
								<a href="#"><span class="count">7</span> Messages</a>
							</li>
							<li class="last">
								<a href="#"><span class="count">5</span> Files</a>
							</li>
						</ul>
					</div>
					<h2>
						Recent Activity
					</h2>
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Project</th>
								<th>Client</th>
								<th>Phone</th>
								<th>Date</th>
								<th>Order Code</th>
								<th>status</th>
							</tr>
						</thead>
						
						<?php foreach ($recent as $item): ?>
						<?php echo form_open('admin/home/update_order') ?>
						<tbody>
							<tr><?php
								echo form_hidden('id', $item['id']); ?>
								<td><?php echo $item['name']; ?></td>
								<td><?php echo $item['full_name']; ?></td>
								<td><?php echo $item['phone']; ?></td>
								<td><?php echo $item['time']; ?></td>
								<td><?php echo $item['order_code']; ?></td>
								<td><select class="span2" name="status" onchange="this.form.submit();">
  										<option value="1" <?php if($item['status']==1){ print 'selected'; }?>>pending</option>
  										<option value="2" <?php if($item['status']==2){ print 'selected'; }?>>sending</option>
 										<option value="3" <?php if($item['status']==3){ print 'selected'; }?>>success</option>
									</select>

								</td>
							</tr>
						</tbody>
						<?php echo form_close(); ?>
						<?php endforeach; ?>
						
					</table>
					<ul class="pager">
						<li class="next">
							<a href="activity.htm">More &rarr;</a>
						</li>
					</ul>