<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .header {
        padding: 10px;
        background-color: #2a12f1;
        color: white;
        text-align: center;
    }
    .sidebar {
        margin-top: 1px;
        background-color: #0d35ab;
        color: white;
        height: 450px;
        text-align: center;
        margin-left: 15px;
    }
        .footer {
        padding: 10px;
        background-color: #0d35ab;
        color: white;
        text-align: center;
        margin-right: 15px;
    }
        img {
        width: 200px;
    }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="card">
            <div class="card-body mt-10">
                <div class="header">
                    <h3>3:00 pm -4:30 pm</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="sidebar">
                        <h4 class="about">To become a successful expert in the field of Computer Science Engineering by
                            channelizing my technical knowledge and skillsto ensure personal and
                            professional growth and to contribute to the prosperity of the organization.</h4>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="loop-image">
                        <img src="{{ $posts->image }}" alt="">
                        <p>{{ $posts->title }}</p>
                        <p>{{ $posts->description }}</p>
                    </div>
                    <div class="footer">
                        <h3>https://github.com/Ashikur41/internship-test</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
