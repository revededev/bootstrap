<?php require "../../include/init.php";?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Description de ma page">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">    
    <title>Unitech avec Bootstrap</title>
</head>
<body>
    <header class="site-header bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand m-0" href="#">
                    <img src="img/logo.png" alt="Logo Unitech" class="img-fluid logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#unitechNav" aria-controls="unitechNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    
                <div class="collapse navbar-collapse" id="unitechNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="<?php echo $_SESSION['pathRoot'].'/'; ?>">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Actualités</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Evenements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nous contacter</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>


    <section class="hero text-center text-white">
        <div class="container">
            <div class="row justify-content-center align-items-center py-5">
                <div class="col-12 col-lg-8">
                    <h1 class="display-4">La connaissance est le pouvoir</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda facere doloremque
                        reprehenderit sit itaque voluptates hic labore earum? Sed nihil magni deleniti eius incidunt
                        modi accusantium quae perferendis delectus vitae!</p>
                    <a href="#" class="btn btn-primary btn-lg">A propos de nous</a>
                </div>
            </div>
        </div>
    </section>
    <section class="why">
        <div class="container py-4">
            <div class="col-12">
                <h2>Pourquoi nous choisir</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, quibusdam!</p>
            </div>
            <ul class="row jusify-content-between p-0 reason-list">
                <li class="col-12 col-md-6 col-lg-3 reason-item">
                        <img src="img/why1.png" alt="Raison 1" class="img-fluid">
                        <h3>Certification</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor laudantium nemo sequi cum? Laborum, consequatur.</p>
                </li>
                <li class="col-12 col-md-6 col-lg-3 reason-item">
                        <img src="img/why2.png" alt="" class="img-fluid">
                        <h3>Certification</h3>
                        <p>Cum, perferendis officia alias adipisci voluptatem ipsam sit beatae totam nisi! Nulla aut eligendi quia.</p>
                </li>        
                <li class="col-12 col-md-6 col-lg-3 reason-item">
                        <img src="img/why3.png" alt="" class="img-fluid">
                        <h3>Certification</h3>
                        <p>Tempora, possimus. Vel, harum vero deleniti labore ipsa molestiae culpa nihil vitae non molestias placeat?</p>
                </li>
                <li class="col-12 col-md-6 col-lg-3 reason-item">
                        <img src="img/why4.png" alt="" class="img-fluid">
                        <h3>Certification</h3>
                        <p>Ut, non voluptatum quis facere quo minus velit sequi, debitis quod sapiente veritatis omnis eius!</p>
                </li>
            </ul>
        </div>
    </section>
    <section class="departments">
        <div class="container">
            <h2>Nos départements</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, dignissimos.</p>
            <ul class="reason-list p-1 department-list">
                <div class="row justify-content-around">
                    <li class="col-12 p-2 col-md-6 col-lg-3 department-item">
                        <div class="p-2 bg-info h-100">
                            <img src="img/department1.png" alt="" class="img-fluid">
                            <h3>SVT</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi maiores eius illo? Illum, aspernatur commodi.</p>
                        </div>
                    </li>
                    <li class="col-12 p-2 col-md-6 col-lg-3 department-item">
                        <div class="p-2 bg-info h-100">
                            <img src="img/department2.png" alt="" class="img-fluid">
                            <h3>Chimie</h3>
                            <p>Sapiente modi cumque voluptatum laudantium corporis laboriosam voluptatibus laborum quo. Quod inventore fugit vel dolores.</p>
                        <div>
                    </li>
                    <li class="col-12 p-2 col-md-6 col-lg-3 department-item">
                        <div class="p-2 bg-info h-100">
                            <img src="img/department3.png" alt="" class="img-fluid">
                             <h3>Informatique</h3>
                             <p>E    xplicabo molestias omnis, voluptates, similique doloremque aspernatur necessitatibus architecto non pariatur libero asperiores assumenda sed.</p>
                        </div>
                    </li>
                    <li class="col-12 p-2 col-md-6 col-lg-3 department-item">
                        <div class="p-2 bg-info h-100">
                            <img src="img/department4.png" alt="" class="img-fluid">
                            <h3>Droit & Gestion</h3>
                            <p>Itaque minima earum molestias vel dolorem veniam reprehenderit suscipit! Minus voluptatibus a dolores suscipit sed?</p>
                        </div>
                    </li>
                </div>
            </ul>
        </div>
    </section>

<!---------------------------------------------------------------------------------> 
    <section class="join-us text-white py-5">
        <div class="container">
            <h2>Nous rejoindre ?</h2>
<!-- Button trigger modal -->
            <button type="button" class="btn m-2 btn-primary" data-toggle="modal" data-target="#exampleModal">S'inscrire
            </button>      
<!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                <div class="row flex-justify-left">
                                <h5 class="modal-title col-12" id="exampleModalLabel">
                                Formulaire d'inscription</h5>
                                <label for="name" class="col-6">Name
                                    <input type="text" id="name" name="name"   placeholder="Ex : Dupont" required>
                                </label>
                                <label for="prenom" class="col-6">Prenom
                                    <input type="text" id="prenom" name="prenom" required placeholder="Ex : gaelle">
                                </label>
                                <label for="adresse" class="col-12">Adresse<br>
                                    <input type="text" id="adresse" name="adresse" required placeholder="Ex : 13 rue magique" >
                                </label>
                                <label for="code" class="col-6">Code postal
                                    <input type="text" id="code" name="code" required placeholder="Ex : 37200" >
                                </label>
                                <label for="ville" class="col-6">Ville
                                    <input type="text" id="ville" name="ville" required placeholder="Ex : Amiens" >
                                </label>
                                <label for="tel"  class="col-12">telephone<br>
                                    <input type="tel" id="tel" name="tel" required placeholder="Ex : 0123456789" >
                                </label>

                            </form>
                            <button type="submit" class="col-3 offset-8 btn btn-primary">Envoyer
                            </button>
                </div>

                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="btn m-2 btn-primary">Nous contacter</a>
        </div>
    </section>
<!---------------------------------------------------------------------------------> 
    <section class="news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Les actualités</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, aspernatur.</p>
                </div>
            </div>
            <div class="row justify-content-center posts-container">
                    <article class="col-12 col-sm-6 col-md-4 post">
                        <img src="img/news1.jpg" alt="" class="img-fluid">
                        <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <a href="">Lire la suite</a>
                    </article>
                    <article class="col-12 col-sm-6 col-md-4 post">
                        <img src="img/news2.jpg" alt="" class="img-fluid">
                        <h3>Reiciendis cumque perferendis voluptatibus ex sint?</h3>
                        <a href="">Lire la suite</a>
                    </article>

                    <article class="col-12 col-sm-6 col-md-4 post">
                        <img src="img/news3.jpg" alt="" class="img-fluid">
                        <h3>Consectetur ad quis blanditiis deleniti quaerat.</h3>
                        <a href="">Lire la suite</a>
                    </article>
            </div>
        </div>
    </section>
    <footer class="site-footer bg-secondary border-top border-bottom border-dark">
        <div class="container">
            <div class="row justify-content-around">
                <div class="widget col-12 p-2 col-md-4 col-lg-4 col-xl-4 p-2 ">
                    <p class="widget-title">Contact</p>
                    <p>14 rue Victor Hugo<br>37000 Tours</p>
                    <p><a href="tel:0123456789">01 23 45 67 89</a></p>
                    <p><a href="mailto:contact@unitech.fr">contact@unitech.fr</a></p>
                </div>
                <div class="widget col-12 p-2 col-md-4 col-lg-4 col-xl-4 p-2 ">
                    <p class="widget-title">Suivez-nous</p>
                    <ul class="social-list px-0 py-1">
                        <div class="row justify-content-around px-5">
                            <li class="social-item"><a href="#"><img src="img/facebook.png" alt=""><span class="sr-only">Facebook</span></a></li>
                            <li class="social-item"><a href="#"><img src="img/twitter.png" alt=""><span class="sr-only">Twitter</span></a></li>
                            <li class="social-item"><a href="#"><img src="img/pinterest.png" alt=""><span class="sr-only">Pinterest</span></a></li>
                            <li class="social-item"><a href="#"><img src="img/instagram.png" alt=""><span class="sr-only">Instagram</span></a></li>
                        </div>
                    </ul>
                </div>
                <div class="widget col-12 p-2 col-md-4 col-lg-4 col-xl-4 p-2 ">
                    <p class="widget-title">A propos</p>
                    <p class="p-1 text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In fugiat aliquam quibusdam exercitationem accusamus officia cum nulla dolores, et blanditiis quo consequuntur a sint quaerat dicta debitis, quidem perspiciatis facere.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <p>&copy; CEFIM 2019 Lawniczak Benoist</p>
        </div>
    </footer>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>