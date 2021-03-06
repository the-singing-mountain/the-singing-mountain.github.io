<html>
    <head>
        <title>Christ (Deemed to be University) Portal</title>
        <style>
            body{
                background-image: linear-gradient(rgba(255,255,255,.7), rgba(255,255,255,.7)), url("background.png");
            }
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            }

            .header {
                overflow: hidden;
                background-color: black;
                padding: 20px 10px;
            }

            .header a {
                float: left;
                color: white;
                text-align: center;
                padding: 12px;
                text-decoration: none;
                font-size: 18px;
                line-height: 25px;
                border-radius: 4px;
            }

            .header button {
                float: left;
                color: white;
                text-align: center;
                padding: 12px;
                text-decoration: none;
                font-size: 18px;
                line-height: 25px;
                border-radius: 4px;
            }

            .header a:hover {
                background-color: #ddd;
                color: black;
            }

            .header button:hover {
                background-color: #ddd;
                color: black;
            }

            .header a.active {
                background-color: dodgerblue;
                color: white;
            }

            .header button.active {
                background-color: dodgerblue;
                color: white;
            }

            .header-right {
                float: right;
                background-color: black;
            }

            @media screen and (max-width: 500px) {
                .header a {
                float: none;
                display: block;
                text-align: left;
                }
                
                .header-left {
                    float: none;
                }
                
                .header-right {
                float: none;
                }
            }

            input[type = submit] {
                width: 256px;
                padding: 12px 20px;
                margin: 8px 0;;
                box-sizing: border-box;
            }

            ::placeholder{
                text-align:center;
            }

            div {
            border-radius: 5px;
            background-color: #f2f2f2;
            background-size: contain;
            padding: 20px;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <img src = "logo.jpg" style="margin-top: 20px; margin-left: 15px;" class = "logo" width="10%" height = "10%">
            <script src = "login.js"></script>
            <div class="header-right">
            <a href = "index.php" id = "home">Home</a>
            </div>
        </div>

        <center>
            <h1>Christ (Deemed to be University) Online Test</h1><br>
            <h1>Class: 3MCS</h1>
        <form action="welcome_get.php" method="get">
            <input type = "hidden" id="stud-id" name="stud-id" value = "2047116">
            <table>
                <tr>
                    <th>Question</th>
                    <th>Response</th>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                <tr>
                <tr>
                    <td>E-mail</td>
                    <td><input type="text" name="email"></td>
                <tr>
                <tr>
                    <td>Gender</td>
                    <td><input type = "radio" id="gender" name="gender" value="male">
                        <label for="gender">Male</label>
                        <input type = "radio" id="gender" name="gender" value="female">
                        <label for="gender">Female</label><br>
                    </td>
                <tr>
                <tr>
                    <td>Expansion of PHP</td>
                    <td><textarea id="phpexpansion" name = "phpexpansion" rows = "3" cols = "50"></textarea></td>
                </tr>
                <tr>
                    <td>What is PHP?</td>
                    <td><textarea id="phpmeaning" name = "phpmeaning" rows = "4" cols = "50"></textarea></td>
                <tr>
                <tr>
                    <td>Which of these does PHP support?</td>
                    <td>
                        <input type="checkbox" id="php1" name="php1" value="HTML">
                        <label for="php1"> HTML </label>
                        <input type="checkbox" id="php2" name="php2" value="NoSQL">
                        <label for="php2"> NoSQL </label>
                        <input type="checkbox" id="php3" name="php3" value="JavaScript">
                        <label for="php3"> JavaScript </label>
                    </td>
                </tr>
            </table><br>
            <input type="submit">
        </form>
        </center>
    </body>
</html>