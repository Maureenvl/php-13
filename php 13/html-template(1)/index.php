<?php include 'connection.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio Website - Overzichtspagina</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <main>
    <div class="container">
      <div class="d-flex justify-content-center align-items-center m-4">
        <nav aria-label="search and filter">
          <input type="search" class="form-control ds-input" id="search-input" placeholder="Search..."
            aria-label="Search for..." autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list"
            aria-expanded="false" aria-owns="algolia-autocomplete-listbox-0" dir="auto"
            style="position: relative; vertical-align: top;">
        </nav>
      </div>

      <!-- doei -->
      <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 g-1 projects">
        <!-- doei -->
        <?php

        //  $stmt = $conn->prepare("SELECT * FROM projects WHERE title LIKE':zoeken' ORDER BY id DESC");
        // $stmt->bindParam(':zoeken', $_GET["id"]);
        
        $stmt = $conn->prepare("SELECT * FROM projects ORDER BY id DESC");

        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach ($stmt->fetchAll() as $k => $v) { ?>

          <!-- <a href="detail.php?id=<?php echo $v["id"]; ?>">
            <div class="project">
              <h1>
                <?php echo $v["title"]; ?>
              </h1>
              <?php echo $v["korte_omschrijving"]; ?><br>
              <?php echo $v["jaar"]; ?><br>

            </div>
          </a> -->

          <div id="project1" class="project card shadow-sm card-body m-2">
            <div class="card-text">
              <h2>
                <?php echo $v["title"]; ?>
              </h2>
              <div>
                <?php echo $v["korte_omschrijving"]; ?>
              </div>
              <div>
                <?php echo $v["jaar"]; ?>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <div class="btn-group">
              <a href="detail.php?id=<?php echo $v["id"]; ?>"> <button type="button" class="btn btn-sm btn-outline-secondary"> 
                  View
                </button></a>
                <button type="button" class="btn btn-sm btn-outline-secondary">
                  Edit
                </button>
                <button type="button" class="btn btn-sm btn-outline-secondary">
                  Delete
                </button>
              </div>
            </div>
          </div>

        <?php }
        ;
        ?>





        <div id="project1" class="project card shadow-sm card-body m-2">
          <div class="card-text">
            <h2>Titel van project 1.</h2>
            <div>Hier komt een korte omschrijving van het project.</div>
          </div>
          <div class="d-flex justify-content-between align-items-center mt-3">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">
                View
              </button>
              <button type="button" class="btn btn-sm btn-outline-secondary">
                Edit
              </button>
              <button type="button" class="btn btn-sm btn-outline-secondary">
                Delete
              </button>
            </div>
          </div>
        </div>

        <div id="project1" class="project card shadow-sm card-body m-2">
          <div class="card-text">
            <h2>Titel van project 2.</h2>
            <div>Hier komt een korte omschrijving van het project.</div>
          </div>
          <div class="d-flex justify-content-between align-items-center mt-3">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">
                View
              </button>
              <button type="button" class="btn btn-sm btn-outline-secondary">
                Edit
              </button>
              <button type="button" class="btn btn-sm btn-outline-secondary">
                Delete
              </button>
            </div>
          </div>
        </div>

        <div id="project1" class="project card shadow-sm card-body m-2">
          <div class="card-text">
            <h2>Titel van project 3.</h2>
            <div>Hier komt een korte omschrijving van het project.</div>
          </div>
          <div class="d-flex justify-content-between align-items-center mt-3">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">
                View
              </button>
              <button type="button" class="btn btn-sm btn-outline-secondary">
                Edit
              </button>
              <button type="button" class="btn btn-sm btn-outline-secondary">
                Delete
              </button>
            </div>
          </div>
        </div>

        <div id="project1" class="project card shadow-sm card-body m-2">
          <div class="card-text">
            <h2>Titel van project 4.</h2>
            <div>Hier komt een korte omschrijving van het project.</div>
          </div>
          <div class="d-flex justify-content-between align-items-center mt-3">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">
                View
              </button>
              <button type="button" class="btn btn-sm btn-outline-secondary">
                Edit
              </button>
              <button type="button" class="btn btn-sm btn-outline-secondary">
                Delete
              </button>
            </div>
          </div>
        </div>

        <div id="project1" class="project card shadow-sm card-body m-2">
          <div class="card-text">
            <h2>Titel van project 5.</h2>
            <div>Hier komt een korte omschrijving van het project.</div>
          </div>
          <div class="d-flex justify-content-between align-items-center mt-3">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">
                View
              </button>
              <button type="button" class="btn btn-sm btn-outline-secondary">
                Edit
              </button>
              <button type="button" class="btn btn-sm btn-outline-secondary">
                Delete
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-center align-items-center m-4">
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>

    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>