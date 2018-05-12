<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="src/main.js"></script>
</head>
<style>
    .panel-transparent .panel-body{
    background: rgba(46, 51, 56, 0.2)!important;
}
</style>

<body background="bg.jpg">
<div class="container">
    <center><h1>File Upload </center></h1>
</div>
<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <br>
                    <div class="col-md-6"> <br><p  class="alert alert-success"> <?php echo $this->session->flashdata('success_msg'); ?></p> </div>
                    <div class="col-md-6"> <br><p  class="alert alert-danger"><?php echo $this->session->flashdata('error_msg'); ?></p> </div>
                        <form role="form" method="post" enctype="multipart/form-data">
                            <div class="panel-transparent">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Picture</label>
                                        <input class="form-control" type="file" name="picture" />
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" type="text" name="name" />
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="text" name="email" />
                                    </div>
                                    <br>
                                    <div class="form-group text-center">
                                        <input type="submit" class="btn btn-primary" name="userSubmit" value="ADD FILE">
                                    </div>
                                </div>
                            </div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>