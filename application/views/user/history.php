 <div class="span12">
    <h1>Order History</h1>
 <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Order Code</th>
                                <th>Product Name</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Total Order</th>
                                <th>time Order</th>
                                <th>Status</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        
                        <?php foreach ($history as $item): ?>	  			 
                            <tr>
                                <td><?php echo $item['order_code']?></td>
                                <td><?php echo $item['name']?></td>
                                <td><?php echo $item['size']?></td>
                                <td><?php echo $item['qty']?></td>
                                <td><?php echo $item['total_order']?></td>
                                <td><?php echo $item['time']?></td>
                                <td>
                                    <?php
                                        if($item['status'] == 1){
                                            echo '<span class="label label-important">pending</span>';
                                        }else if($item['status'] == 2){
                                            echo '<span class="label label-warning">sending</span>';
                                        }else if($item['status'] == 3){
                                            echo '<span class="label label-success">success</span>';
                                        }
                                    ?>
                                </td>
                            <?php endforeach; ?>
                            </tr>		  
                        </tbody>
                    </table>
