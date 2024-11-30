<!DOCTYPE html>
<html lang="en">


<style>
    /* Style the tabs container */
    .tab-container {
        display: flex;
        list-style-type: none;
        padding: 0;
    }

    /* Style each tab */
    .tab {
        flex: 1;
        text-align: center;
        padding: 10px;
        background-color: #000;
        cursor: pointer;
        transition: background-color 0.3s;
        /* Add transition for a smooth effect */
    }


    .active-tab {
        background-color: #4CAF50;
        color: white;
    }

    .tab-content {
        display: none;
        color: #000;
    }

    .tab1 {
        display: block;
    }

    .tab2 {
        display: none;
    }

    .tab3 {
        display: none;
    }

    .tab4 {
        display: none;
    }




    /* Hover effect */
    .tab:hover {
        background-color: #FF7E00;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>
<?php include "head.php" ?>

<body class="bgr3">

    <?php include "header.php" ?>

    <h1 id="quiz" style="color:black;">My Scores</h1>
    <div class="content">

        <div>
            <!-- Tabs Container -->
            <ul class="tab-container">
                <li class="tab active-tab" onclick="openTab('tab1')">Quiz</li>
                <li class="tab" onclick="openTab('tab2')">Math</li>
                <li class="tab" onclick="openTab('tab3')">Memory</li>
            </ul>

            <!-- Tab Content -->
            <div id="tab1" class="tab-content tab1">
                <h2>Quiz Score</h2>
                <?php
                include "dbconnection.php";

                // Fetch data from the database
                $sql = "SELECT * FROM score_quiz a JOIN users b WHERE a.user_id = b.id AND a.user_id='" . $_SESSION['user_id'] . "' ORDER BY a.id DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Display table headers
                    echo "<table>
                <tr>
                <th>Name</th>
                <th>Correct Answer</th>
                <th>Wrong Answer</th>
                <th>Total Score</th>
                </tr>";

                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                    <td>" . $row["fullname"] . "</td>
                    <td>" . $row["correct_answers"] . "</td>
                    <td>" . $row["wrong_answers"] . "</td>
                    <td>" . $row["correct_answers"] . "</td>
                    </tr>";
                    }

                    echo "</table>";
                } else {
                    echo "0 results";
                }

                $conn->close();
                ?>
            </div>
            <div id="tab2" class="tab-content tab2">
                <h2>Math Score</h2>
                <?php
                include "dbconnection.php";

                // Fetch data from the database
                $sql = "SELECT * FROM score_math a JOIN users b WHERE a.user_id = b.id AND a.user_id='" . $_SESSION['user_id'] . "' ORDER BY a.id DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Display table headers
                    echo "<table>
                <tr>
                <th>Name</th>
                <th>Question</th>
                <th>Answer</th>
                </tr>";

                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                    <td>" . $row["fullname"] . "</td>
                    <td>" . $row["question"] . "</td>
                    <td>" . $row["answer"] . "</td>
                    </tr>";
                    }

                    echo "</table>";
                } else {
                    echo "0 results";
                }

                $conn->close();
                ?>
            </div>
            <div id="tab3" class="tab-content tab3">
                <h2>Memory Score</h2>
                <?php
                include "dbconnection.php";

                // Fetch data from the database
                $sql = "SELECT * FROM score_memory a JOIN users b WHERE a.user_id = b.id AND a.user_id='" . $_SESSION['user_id'] . "' ORDER BY a.id DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Display table headers
                    echo "<table>
                <tr>
                <th>Name</th>
                <th>Score</th>
                <th>Tries</th>
                </tr>";

                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                    <td>" . $row["fullname"] . "</td>
                    <td>" . $row["score"] . "</td>
                    <td>" . $row["tries"] . "</td>
                    </tr>";
                    }

                    echo "</table>";
                } else {
                    echo "0 results";
                }

                $conn->close();
                ?>
            </div>
        </div>
    </div>

    <script>
        // Set the default active tab
        document.getElementById('tab1').style.display = 'block';

        function openTab(tabName) {
            // Hide all tabs
            var tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(function(tabContent) {
                tabContent.style.display = 'none';
            });

            // Remove 'active-tab' class from all tabs
            var tabs = document.querySelectorAll('.tab');
            tabs.forEach(function(tab) {
                tab.classList.remove('active-tab');
            });

            // Show the selected tab and add 'active-tab' class to it
            document.getElementById(tabName).style.display = 'block';
            event.currentTarget.classList.add('active-tab');
        }
    </script>

</body>

</html>