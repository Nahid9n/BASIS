
<?php include 'Layout/header.php'?>


<section class="py-5 bg-secondary-subtle">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1><?php echo $message ?></h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach($students as $student){?>
                        <tr>
                            <td><?php echo $student['name'];?></td>
                            <td><?php echo $student['email'];?></td>
                            <td><?php echo $student['mobile'];?></td>
                        </tr>
                    <?php }?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>



<?php include 'Layout/footer.php'?>


