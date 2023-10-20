<!DOCTYPE html>
<head>

    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/projects.css">

  <script src="https://kit.fontawesome.com/8287c1919e.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <script type="text/javascript" src="./public/js/statistics.js" defer></script>

  <title>PROJECTS</title>
</head>
<body>
  <div class="base-container">
    <nav>
      <img src="public/img/logo.svg" />
      <ul>
        <li>
          <i class="fa-solid fa-folder"></i>
          <a href="#" class="button">book</a>
        </li>
        <li>
          <i class="fa-solid fa-money-bill-1"></i>
          <a href="#" class="button">payment</a>
        </li>
        <li>
          <i class="fa-solid fa-truck"></i>
          <a href="#" class="button">delivery</a>
        </li>
        <li>
          <i class="fa-solid fa-basket-shopping"></i>
          <a href="#" class="button">cart</a>
        </li>
        <li>
          <i class="fa-solid fa-arrow-right-from-bracket"></i>
          <a href="#" class="button">logout</a>
        </li>
      </ul>
    </nav>
    <main>
      <header>
        <div class="search-bar">
            <input placeholder="search project"/>
        </div>
      </header>
      <section class="projects">
          <?php foreach ($projects as $project): ?>
              <div id="<?= $project->getId(); ?>">
                  <img src="public/uploads/<?= $project->getImage(); ?>">
                <div>
                    <h2><?= $project->getTitle(); ?></h2>
                    <p><?= $project->getDescription(); ?></p>
                    <div class="social-section">
                        <i class="fas fa-heart"> <?= $project->getLike(); ?></i>
                  </div>
                </div>
            </div>
          <?php endforeach; ?>
         </div>
      </section>1
    </main>
  </div>
</body>

<template id="project-template">
    <div id="">
        <img src="">
        <div>
            <h2>title</h2>
            <p>des</p>
            <div class="social-section">
                <i class="fas fa-heart"> 0</i>
            </div>
        </div>
    </div></template>
