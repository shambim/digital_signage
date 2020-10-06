<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="row mt-3 ml-2">
        <div class="col-2">
            <div id="vidbutton">Play</div>
            <button type="button " class="btn btn-primary" id="incident_btn">incident</button>
        </div>
    </div>
    <div style="text-align:center">

        <div class="row mt-3">
            <?php
            for($i=0;$i<3;$i++){ 
            ?>
            <div class="col mr-1 ml-1" style="border: 3px solid rgb(158, 144, 138);">
                <video controls autoplay muted class="myvid" width="420">
                    <source src="dubai-mall.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
                <p class="incident">
                </p>
            </div>
            <?php
            }
            ?>
        </div>



    </div>
    <script src="script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script type="text/javascript">

    </script>
</body>

</html>