<?php
    $number = $_POST["staff_number"]; 
    $name = $_POST["staff_name"];  
    $position = $_POST["staff_position"];  
    $overtime = $_POST["staff_ot"]; 
    $group = $_POST["staff_group"]; 

    if($position == 'Manager')
        $amount = ($overtime * 100);
    else if($position == 'Executive')
        $amount = ($overtime * 75);
    else if($position == 'Non-Executive')
        $amount = ($overtime * 50);
?>
<html>
    <head>
        <title>OT FORM CONFIRMATION</title>
    </head>
    <body>
        <form action="OTsaveClaim.php" method="POST">
            <table>
                <tr>
                    <td>Staff Number : </td>
                    <td>
                        <input type="text" name="s_number" value="<?php echo $number; ?>" readonly="readonly">
                    </td>
                </tr>
                <tr>
                    <td>Staff Name : </td>
                    <td>
                        <input type="text" name="s_name" value="<?php echo $name; ?>" readonly="readonly">
                    </td>
                </tr>
                <tr>
                    <td>Position : </td>
                    <td>
                        <input type="text" name="s_position" value="<?php echo $position; ?>" readonly="readonly">
                    </td>
                </tr>
                <tr>
                    <td>Group : </td>
                    <td>
                        <input type="text" name="s_group" value="<?php echo $group; ?>" readonly="readonly">
                    </td>
                </tr>
                <tr>
                    <td>Hours : </td>
                    <td>
                        <input type="text" name="s_hours" value="<?php echo $overtime; ?>" readonly="readonly">
                    </td>
                </tr>
                <tr>
                    <td>Amount (RM) : </td>
                    <td>
                        <input type="text" name="s_amount" value="<?php echo $amount; ?>" readonly="readonly">
                    </td>
                </tr>
            </table>
            <button type="submit">Submit</button>
            <button href="OTclaimForm.html">Recalculate</button>
        </form>
    </body>
</html>
