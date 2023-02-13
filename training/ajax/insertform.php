<!DOCTYPE html>
<html lang="en">

<head>

    <script src='jquery-3.6.3.js'></script>
    <script src='insert.js'></script>

    <title></title>
</head>

<body>
    <center>

        <form method="POST" action="">

            <table border="1" style="border: ridge 5px;">
                <tr>
                    <th colspan="2">
                        <h3>ajax insert</h3>
                    </th>
                </tr>
                <tr>
                    <td> <label for="name">First Name :- </label></td>
                    <td> <input id="fname" name="fname" type="text"></td>
                </tr>

                <tr>
                    <td> <label for="name">Last Name :- </label></td>
                    <td> <input id="lname" name="lname" type="text"></td>
                </tr>

                <tr>
                    <td> <label for="email">E-Mail :- </label></td>
                    <td> <input id="email" type="email" name="email">

                    </td>
                </tr>


                <tr>
                    <td colspan="2">
                        <center><input id="submit" type="submit" value="Submit"></center>
                    </td>
                </tr>

            </table>

        </form>
    </center>

</body>

</html>