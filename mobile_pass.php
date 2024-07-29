<?php
include("include/header.php");
require_once 'dbfiles/dbh.inc.php';

?>

<?php
                if (isset($_SESSION["username"])){
                    $user=$_SESSION['number'];
                    $query="SELECT a.name,a.age,a.clgname,a.clgid,pl.price,pl.trips,p.city,p.startdate,p.enddate FROM student a JOIN payment p on a.email=p.studentid JOIN plans pl on p.planid=pl.pid  where a.phoneno=".$user." ORDER by p.startdate DESC LIMIT 1;";
                    $result=mysqli_query($con,$query);
                    $row = mysqli_fetch_row($result);
                    ?>

 <div class="ticket">
     
 <div class="receipt">
    <h2>Your Pass</h2>
    <table>
        <tr>
            <th>Field</th>
            <th>Details</th>
        </tr>
        <tr>
            <td><span>Student Name</span></td>
            <td><?php echo $row[0]; ?></td>
        </tr>
        <tr>
            <td><span>Student Age</span></td>
            <td><?php echo $row[1]; ?></td>
        </tr>
        <tr>
            <td><span>College Name</span></td>
            <td><?php echo $row[2]; ?></td>
        </tr>
        <tr>
            <td><span>College ID</span></td>
            <td><?php echo $row[3]; ?></td>
        </tr>
        <tr>
            <td><span>City</span></td>
            <td><?php echo $row[6]; ?></td>
        </tr>
        <tr>
            <td><span>Current Plan</span></td>
            <td><?php echo $row[4]; ?></td>
        </tr>
        <tr>
            <td><span>Start Date</span></td>
            <td><?php echo $row[7]; ?></td>
        </tr>
        <tr>
            <td><span>Expiry Date</span></td>
            <td><?php echo $row[8]; ?></td>
        </tr>
    </table>
</div>
        <img src="Images/random.png" alt="">
    </div>
    <?php
                }
                else{
    ?>


     <section id="sec1">

        <div id="div1">
        
            <img src="Images\Chalo_card\mobile_pass1.png" id="img1" />
        </div>
        <div id="div2">
            <p id="p1">Experience The Convenience Of</p>
            <h2 id="h1">Mobile Bus Pass</h2>
            <p id="p2">
                Buy your mobile bus pass on the Chalo App, 
                and you will never have to visit the pass counter or wait in the queue ever again.
            </p>
            <p id="p2">
                What's more, travelling with a mobile bus pass is safer than paying cash in the bus.
                Just show your pass on your mobile and scan the QR code to travel.
            </p>
        </div>
    </section>

    <section id="sec1">
        <div id="div2">
            <p id="p1">Experience The Better</p>
            <h2 id="h1">Travelling</h2>
            <p id="p2">
                A safe and convinient way to travel by bus. 
                No need to worry about carrying change for your bus travel ever again
            </p>
        </div>
        <div id="div1">
            <img src="Images\Chalo_card\mobile_pass.png" id="img1" />
        </div>
    </section>
    

    <section id="sec2">
        <div id="div3">
            <div id="div4">
                <p id="p3">Why Buy A</p>
            </div>
            <h2 id="h2">Mobile Bus Pass</h2>
        </div>
        <div id="div5">
            <div id="div6">
                <div id="div8">
                    <img src="Images\Chalo_card\coins.webp" id="img3"></img>
                </div>
                <p id="p4">Don't exchange cash or worry about loose change again</p>
            </div>
            <div id="div7">
                <div id="div8">
                    <img src="Images\Chalo_card\upi.png" id="img2"></img>
                </div>
                <p id="p4">Pay with UPI, Netbanking or M-Wallet</p>
            </div>
            <div id="div9">
                <div id="div8">
                    <img src="Images\Chalo_card\right.jpg" id="img3"></img>
                </div>
                <p id="p4">Buy ticket at your convenience anywhere, any time</p>
            </div>
        </div>
    </section>

    <?php
                }
    include("include/footer.php");
?>