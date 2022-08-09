<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Template"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body>

<!---------------------------------------------->

<nav class="navbar navbar-expand-sm navbar-dark bg-info sticky-top">
          <div class="container">
            <a class="navbar-brand" href="index.php">PHP & Bootstrap 5</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Main Menu (PHP)<span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href=""> 01 Hello World </a>
                    </li>
                </ul>
            </div>
      </div>
    </nav>

<!---------------------------------------------->
    
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php echo "<h1 class='text-center my-5'>Hello World</h1>"; ?>
                <hr>

                <?php
                    print('<p class="text-start text-muted lh-lg">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quo natus minima. Dolores non voluptate, vitae ipsam quo repellat quos tempora dignissimos dolor laborum mollitia natus, repellendus ut voluptatibus placeat.
                    Corporis quibusdam quasi omnis esse eius cupiditate fugit, earum voluptatem! Tempora sequi aperiam enim dolorem quibusdam a eius consequatur ut. Veniam qui delectus harum praesentium libero totam distinctio nihil cupiditate!
                    Ipsa incidunt perferendis alias sit optio laborum ad quia assumenda, suscipit odio amet ut temporibus. Quam nisi iure quis delectus fugit voluptas libero tempora, enim tempore quasi sint necessitatibus optio.
                    Dolores officia nesciunt laudantium asperiores sed ipsa similique excepturi maiores architecto, delectus consectetur, facilis aut cumque placeat adipisci amet! Ad provident dolorum beatae autem, minima natus illum expedita mollitia laborum!
                    Hic quod quisquam optio blanditiis praesentium mollitia temporibus quibusdam rem dolores? Nihil impedit quidem ut! Dolores, autem pariatur quasi ex ad aliquam ab? Sit laborum natus quod reiciendis nobis maxime?
                    Ullam laboriosam fugit dicta tempore laudantium quo iste, beatae consequuntur iure aliquam quas officiis itaque veritatis, impedit facilis nostrum autem iusto quae quibusdam unde quam nesciunt rerum numquam! Quis, consequatur!
                    Eveniet sed officiis facere natus, delectus, incidunt quae corrupti numquam corporis possimus maiores impedit vitae exercitationem nisi quibusdam ea itaque sint, atque molestias magni vel ducimus commodi! Fugiat, quia vel.
                    Recusandae placeat qui repellendus, praesentium vero corporis minima obcaecati voluptatem animi dolore dolores temporibus dolor assumenda autem libero provident eum, exercitationem ea. Culpa natus deleniti asperiores magni distinctio eius autem.
                    Vitae illo eius delectus error pariatur blanditiis odio autem voluptate vero? Aut quidem, blanditiis molestias explicabo voluptate doloribus nesciunt aliquid, vero sint porro quasi adipisci! Impedit quae officiis iste autem.
                </p> ')
                ?>
                
            </div>
        </div>
    </main>

    <!---------------------------------------------->

    <script src="js/bootstrap.min.js"></script>
</body>
</html>