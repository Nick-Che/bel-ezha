<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

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
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
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
                    <div class="dropdown">
                        <form class="d-flex" role="search" method="get">
                            <input class="form-control me-2" type="search" name="search" id="ajax-search" placeholder="Search" aria-label="Search" data-toggle="dropdown" autocomplete="off">
                            <!--<button class="btn btn-outline-secondary" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>-->
                        </form>
                        <span id="search_result"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero -->
        <script>
            $(document).ready(function() {
                $('#ajax-search').on("keyup", function() {
                    var inputVal = $(this).val();
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
                                    var result = '<ul class="list-group" id="search-result">';
                                    data.forEach(function(word) {
                                        result += '<li><a class="list-group-item list-group-item-action" href="/browse/' + word.letter + '/' + word.alias + '">' + word.word + '</a></li>';
                                    });
                                    result += '</ul>';
                                    $('#search_result').html(result);
                                }
                            }
                        });
                    } else {
                        $('#search_result').html('');
                    }
                });
            });
        </script>

    </header>