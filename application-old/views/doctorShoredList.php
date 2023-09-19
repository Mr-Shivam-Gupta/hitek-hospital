<option value="" selected disabled>--Select Doctor--</option>

<?php if(isset($list))
        {
        	foreach($list->result_array() as $dList)
        	{
        	?>
            <option value="<?php echo $dList['id']; ?>"><?php echo $dList['doctor_name']; ?></option>
       <?php
       }
} ?>
