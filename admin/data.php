
<?php include "functions.php"; ?>
<?php include "../db.php"; ?>

<!-- <div id="wrapper"> -->




    <!-- Navigation -->





    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">



                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php findAllCategories(); ?>

                            <?php deleteCategories(); ?>

                        </tbody>
                    </table>



                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->
<!-- </div> -->

