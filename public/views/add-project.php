<!DOCTYPE html>
<head>

  <link rel="stylesheet" type="text/css" href="public/css/addproject.css" />
  <link rel="stylesheet" type="text/css" href="public/css/style_addproject.css" />


  <script
    src="https://kit.fontawesome.com/8287c1919e.js"
    crossorigin="anonymous"
  ></script>
  <title>ADD PROJECT</title>
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
          <form>
            <input placeholder="Search Book" />
          </form>
        </div>
            </header>
            <section class="project-form">
                <h1>UPLOAD</h1>
                <form action="addProject" method="POST" ENCTYPE="multipart/form-data">
                    <div class="messages">
                        <?php
                            if(isset($messages)){
                                foreach($messages as $message) {
                                    echo $message;
                                }
                            }
                        ?>
                    </div>
                    <input name="title" type="text" placeholder="title">
                    <textarea name="description" rows=5 placeholder="description"></textarea>

                    <input type="file" name="file"/><br/>
                    <button type="submit">send</button>
                </form>
      </section>
    </main>
  </div>
</body>
