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

    <h1 id="quiz" style="color:black;">Leaderboard</h1>

    <div class="content">
        <div>
            <!-- Tabs Container -->
            <ul class="tab-container">
                <li class="tab active-tab" onclick="openTab('tab1')">Total Games</li>
                <li class="tab" onclick="openTab('tab2')">Quiz</li>
                <li class="tab" onclick="openTab('tab3')">Math</li>
                <li class="tab" onclick="openTab('tab4')">Memory</li>

            </ul>


            <!-- Tab Content -->
            <div id="tab1" class="tab-content tab1">
                <h2>Total Score All Games</h2>
                <?php
                include "dbconnection.php";

                // Fetch data from the database
                $sql1 = "SELECT b.fullname, SUM(a.correct_answers) AS highest_correct_answers
            FROM score_quiz a
            JOIN users b ON a.user_id = b.id
            GROUP BY a.user_id";

                $sql2 = "SELECT b.fullname, COUNT(a.id) AS correct_count
            FROM score_math a
            JOIN users b ON a.user_id = b.id
            WHERE a.answer LIKE 'Correct%'
            GROUP BY a.user_id, b.fullname";

                $sql3 = "SELECT b.fullname, SUM(a.score) AS scoreCount
            FROM score_memory a
            JOIN users b ON a.user_id = b.id  
            GROUP BY a.user_id";

                $result1 = $conn->query($sql1);
                $result2 = $conn->query($sql2);
                $result3 = $conn->query($sql3);

                // Initialize variables to store data
                $data1 = [];
                $data2 = [];
                $data3 = [];

                // Fetch and store data for SQL1
                while ($row1 = $result1->fetch_assoc()) {
                    $data1[$row1["fullname"]] = $row1["highest_correct_answers"];
                }

                // Fetch and store data for SQL2
                while ($row2 = $result2->fetch_assoc()) {
                    $data2[$row2["fullname"]] = $row2["correct_count"];
                }

                // Fetch and store data for SQL3
                while ($row3 = $result3->fetch_assoc()) {
                    $data3[$row3["fullname"]] = $row3["scoreCount"];
                }

                // Combine the data and display table headers
                $allNames = array_unique(array_merge(array_keys($data1), array_keys($data2), array_keys($data3)));
                echo "<table>
            <tr>
                <th>Name</th>
                <th>Total Score</th>
            </tr>";

                // Output data for each name
                foreach ($allNames as $name) {
                    $total_score = (
                        (isset($data1[$name]) ? $data1[$name] : 0) +
                        (isset($data2[$name]) ? $data2[$name] : 0) +
                        (isset($data3[$name]) ? $data3[$name] : 0)
                    );

                    echo "<tr>
                <td>$name</td>
                <td>$total_score</td>
            </tr>";
                }

                echo "</table>";

                $conn->close();
                ?>
            </div>



            <!-- Tab Content -->
            <div id="tab2" class="tab-content tab2">
                <h2>Quiz Score</h2>
                <?php
                include "dbconnection.php";

                // Fetch data from the database
                // $sql = "SELECT * FROM score_quiz a JOIN users b WHERE a.user_id = b.id";
                $sql = "SELECT b.fullname, a.*, SUM(a.correct_answers) AS highest_correct_answers, SUM(a.wrong_answers) AS highest_wrong_answers
        FROM score_quiz a
        JOIN users b ON a.user_id = b.id
        GROUP BY a.user_id ORDER BY highest_correct_answers DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Display table headers
                    echo "<table>
                <tr>
                <th>Name</th>
                <th>Total Score</th>
                </tr>";

                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                    <td>" . $row["fullname"] . "</td>
                    <td>" . $row["highest_correct_answers"] . "</td>
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
                <h2>Math Score</h2>
                <?php
                include "dbconnection.php";

                // Fetch data from the database
                $sql = "SELECT b.*, a.*, COUNT(a.id) AS correct_count
                    FROM score_math a
                    JOIN users b ON a.user_id = b.id
                    WHERE a.answer LIKE 'Correct%'
                    GROUP BY a.user_id, b.fullname
                    ORDER BY correct_count DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Display table headers
                    echo "<table>
                <tr>
                <th>Name</th>
                <th>Correct Answer</th>
                </tr>";

                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                    <td>" . $row["fullname"] . "</td>
                    <td>" . $row["correct_count"] . "</td>
                    </tr>";
                    }

                    echo "</table>";
                } else {
                    echo "0 results";
                }

                $conn->close();
                ?>
            </div>
            <div id="tab4" class="tab-content tab4">
                <h2>Memory Score</h2>
                <?php
                include "dbconnection.php";

                // Fetch data from the database
                $sql = "SELECT b.*, a.*
                        FROM score_memory a
                        JOIN users b ON a.user_id = b.id ORDER BY a.tries ASC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Display table headers
                    echo "<table>
                <tr>
                <th>Name</th>
                <th>Score</th>
                <th>Lowest Tries</th>
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