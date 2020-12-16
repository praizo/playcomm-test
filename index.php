<?php
    require("attend.php");

    $events = new Guest;

    $eventlists = $events->getEvent();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Guest List</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid p-0" style="background-image: url(bg.png);">


        <div class="jumbotron jumbotron-fluid bg-transparent">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 text-center text-white display-4">
                        <p id="title">GUEST LIST</p>
                    </div>
                    <div class="col-md-4">
                        <form class="bg-white p-3 shadow-sm border rounded" method="POST" action="attendflow.php">
                            <h3>Register for event</h3>
                            <hr>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="event">Select Event</label>
                                    <select class="form-control" id="event" name="event" required>
                                        <option>select event</option>
                                        <?php foreach ($eventlists as $list) { ?>
                                            <option value="<?php echo $list['id']; ?>"><?php echo $list['name']; ?></option>
                                        <?php } ?>
                                        
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                            </div>


                            <button type="submit" class="btn btn-dark">Attend</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>