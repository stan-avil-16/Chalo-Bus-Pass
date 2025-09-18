<?php
include("include/header.php");
?>
    
    <label for="" class="title">Chalo Super saver</label><br>
    <section id="sec1">
        <div class="plans">
           <font size=+1> <label for="">select your <b>super saver</b> from the given below:</label></font>
       <?php                
include_once 'dbfiles/dbh.inc.php';
$sql='select * from plans;';
$result= mysqli_query($con,$sql);
                    while($row=mysqli_fetch_assoc($result)){
                        // echo $row['price'];
                    ?>
        <div class="select">
            <div class="details">
                <input type="radio" name="radio" id="radio" value="<?php echo $row['pid']?>" onclick="window.location.href='payment.php?id=<?php echo $row['pid']?>';">
                Super Saver <?php echo $row['price']?> <br>
                <font color='grey'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;valid for <?php echo $row['duration'] ?> days and <?php echo $row['trips']?> trips a day..</font>
            </div>
            <div>
            <font size=+2 ><strong>  <label for=""> &#8377;<?php echo $row['price']?></label> </strong></font>
            </div>
        </div>
        <?php
        }
        ?>
       </div>
    </section>

   
    
    <?php
    include("include/footer.php");
?>