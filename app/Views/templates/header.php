<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/style.css'); ?>">

    <title>Руска-беларускі слоўнік харчовых адзінак</title>
</head>

<body>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-grip-horizontal"></i>
                </button>
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="/">Главная</a>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">О проекте</a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Hero -->
        <div class="container-fluid p-5 text-center bg-light">
            <h1 class="mb-3 display-3">Руска-беларускі слоўнік харчовых адзінак</h1>
            <div class="row justify-content-center">
                <div class="col-6">
                    <input class="form-control" type="search" name="search" id="ajax-search" placeholder="Search" aria-label="Search" autocomplete="off" style="width: 50rem; text-align: center;">
                    <div class="list-group position-absolute" style="width: 50rem;"></div>
                </div>
            </div>
        </div>
        <!-- Hero -->
        <script>
            $(document).ready(function() {
                $('#ajax-search').on("keyup", function() {
                    var result = '';
                    var inputVal = $(this).val();
                    $('.list-group').css('display', 'block');
                    if (inputVal) {
                        $.ajax({
                            url: '<?= base_url('ajax-search'); ?>',
                            type: "get",
                            data: {
                                term: inputVal,
                            },
                            dataType: "JSON",
                            success: function(data) {
                                if (data != null) {
                                    data.forEach(function(word) {
                                        result += '<a class="list-group-item list-group-item-action" href="/browse/' + word.letter + '/' + word.alias + '">' + word.word + '</a>';
                                    });
                                    $('.list-group').html(result);
                                }
                            }
                        });
                    } else {
                        $('.list-group').empty();
                    }
                });
            });
            $(document).ready(
                function keyPress(e) {
                if (e.key === "Escape") {
                    $('.list-group').empty();
                }
            }
            )
            
        </script>

    </header>