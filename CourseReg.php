<!DOCTYPE html>
<html>
<head>
    <title>Register course</title>
</head>
<link rel="stylesheet" href="css/reg.css">
<body>

    <script>
        var expanded = false;

            function showCheckboxes() {
            var checkboxes = document.getElementById("checkboxes");
            if (!expanded) {
                checkboxes.style.display = "block";
                expanded = true;
            } else {
                checkboxes.style.display = "none";
                expanded = false;
            }
        }
   </script>

    <center>
        <form action="CourseReg.php">
            <h2>Course Registration</h2>
            <table>
                <tr>
                    <td>
                        <div class="multiselect">
                          <div class="selectBox" onclick="showCheckboxes()">
                            <select>
                              <option>Select Course</option>
                            </select>
                            <div class="overSelect"></div>
                          </div>
                          <div id="checkboxes">
                            <label for="one">
                              <input type="checkbox" id="one" />Functional English 1</label>
                            <label for="two">
                              <input type="checkbox" id="two" />Functional English 2</label>
                            <label for="three">
                              <input type="checkbox" id="three" />Engineering Mathematics 1</label>
                              <label for="four">
                                <input type="checkbox" id="four" />Computational thinking</label>
                              <label for="five">
                                <input type="checkbox" id="five" />Functional French 1</label>
                              <label for="six">
                                <input type="checkbox" id="six" />Introduction to Computer Science</label>
                          </div>
                        </div></td>
                    
                </tr>

        </form>
      </table>
    <td><button name="Submit" value="Submit">Submit</button></td>
</form>
    </center>
</body>
</html>