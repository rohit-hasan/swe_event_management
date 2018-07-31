<div style="margin-top:100px;margin-left: 100px ">
	 <table border="3" cellspacing="10">
    <tr><th>Program Name</th><th>Date</th><th>View Application</th><th>First Approval</th><th>Second Approval</th></tr>
    <?php 
    include 'connection.php';
    global $con;
    $select_form="select * from form ORDER by form_id desc";
    $run_select_form= mysqli_query($con, $select_form);
    while($row= mysqli_fetch_array($run_select_form)){
        
        $programName=$row['programName'];
        $date=$row['date'];
        $form_id=$row['form_id'];
        $status1=$row['firstApproval'];
        $status2=$row['secondApproval'];
        if($status1==0){
            $status1='Pending';
        }else if($status1==1){
            $status1='Approved';
        }
        if($status2==0){
            $status2='Pending';
        }else if($status2==1){
            $status2='Approved';
        }
    ?>
    <tr><td><?php echo $programName; ?></td><td><?php echo $date; ?></td><td><a href="view_app.php?form_id=<?php echo $form_id; ?>">click here</a></td><td><?php echo $status1; ?></td><td><?php echo $status2; ?></td></tr>
    <?php 
    }
    ?>
   </table>

</div>