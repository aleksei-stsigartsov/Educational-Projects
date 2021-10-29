<section id="hero_contacts2" class="d-flex align-items-center">
    <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="row">
            <div class="col-xl-5" style="margin-bottom:100px;">
              <form method="post" action="modules/actions/category_write.php">
                <h1>Category name</h1>
                <input class="input-get-started" type="text" name="category_name" placeholder="Category name" required>
                <input type="submit" class="btn-get-started" name="submit" value="Add">  
              </form>
            </div>
            <div class="col-md-12 mt-12 mt-md-0 layer" style="margin-bottom: 3%; margin-right: auto; margin-left: auto;">
              <table style="width: 94%; text-align: center; margin-top: 1%; margin-left: auto; margin-right: auto;">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                </tr>
                <?php
                require_once "modules/general/database.php";
                $connect = new Database();
                $result = $connect->get_data("category");

                foreach ($result as $row) {
                  echo "<tr>";
                    echo "<th>" . $row["id"] . "</th>";
                    echo "<th>" . $row["name"] . "</th>";
                  echo "</tr>";
                }
                ?>
            </table>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->