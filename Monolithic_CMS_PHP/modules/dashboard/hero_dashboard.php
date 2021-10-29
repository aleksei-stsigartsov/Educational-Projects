<script>
function validate()
{
 var ddl = document.getElementById("categorytype");
 var selectedValue = ddl.options[ddl.selectedIndex].value;
    if (selectedValue == "option_placeholder")
   {
     alert('Choose the category!');
     return false;
   }
}
 </script>
<section id="hero_contacts2" class="d-flex align-items-center">
    <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="row">
            <div class="col-xl-5" style="margin-bottom: 100px;">
                <form method="post" onsubmit="return validate()" action="modules/actions/dashboard_write.php">
                <h1>Email address</h1>
                <input class="input-get-started" type="email" name="email" placeholder="name@example.com" required>
                <h1>Full name</h1>
                <input class="input-get-started" type="text" id="full_name" name="full_name" placeholder="John Doe" maxlength="40" pattern="^[a-zA-Z]+(?:\s[a-zA-Z]+)+$" title="Please enter your full name." required>
                <h1>Category</h1>
                <select class="input-get-started" name="options" id="categorytype" >
                <option value="option_placeholder" disabled selected hidden >Option</option>
                <?php
                        require_once "modules/general/database.php";
                        $connect = new Database();
                        $result = $connect->get_data("category");
                        foreach($result as $row){
                            echo "<option class='soption' value='". $row["name"] ."'>". $row["name"] ."</option>";
                        }
                  ?>
                </select>
                <h1>Note</h1>
                <input class="input-get-started" type="text" placeholder="Text note" name="note" maxlength="40" required><br><br>
                <input type="submit" class="btn-get-started" name="submit" value="Submit" >  
              </form>
            </div>
            <div class="col-md-12 mt-12 mt-md-0 layer" style="margin-bottom: 3%; margin-right: auto; margin-left: auto;">
              <table style="width: 94%; text-align: center; margin-top: 1%; margin-left: auto; margin-right: auto;">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Category</th>
                  <th>Note</th>
                </tr>
                <?php
                require_once "modules/general/database.php";
                $connect = new Database();
                $result = $connect->get_data("dashboard");

                foreach ($result as $row) {
                echo "<tr>";
                  echo "<th>" . $row["id"] . "</th>";
                  echo "<th>" . $row["name"] . "</th>";
                  echo "<th>" . $row["email"] . "</th>";
                  echo "<th>" . $row["category"] . "</th>";
                  echo "<th>" . $row["note"] . "</th>";
                echo "</tr>";
                }
                ?>
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->