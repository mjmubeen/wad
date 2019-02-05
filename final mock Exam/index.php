<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MOCK</title>
    <link rel="stylesheet" href="css.css">
    <script>
        function check()
        {
            var str = document.getElementById("t1").value;
            var errormsg4 = document.getElementById("d1");
            if (str.length === 0) {
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState === 4 && this.status === 200) {
                        //errormsg4.innerHTML += "<tr>"+ "<td>" + 2 + "</td>" +"<td>"+this.response+"</td>" + "<td align='center'>" + "More Info" + "</td>" + "</tr>";
                        /*errormsg4.innerHTML = this.responseText;*/
                        errormsg4.innerHTML += this.response;
                    }
                };
                xmlhttp.open("GET", "function.php?btn=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>
<body>
<h1 align="center"><b>Extract Domain</b></h1>
<form action="function.php" method="post">
    <div>
        <textarea id="t1" name="checkURL" style="width:100%;height:250px;" placeholder="Enter URLs. One per line. Up to 1000 URLs"></textarea>
    </div>
    <div align="center">
        <input type="Button" class="myclass1"  name="btn" value="Button" onclick="check()">
    </div>
</form>
<table id="d1" class="sortable" border="1" width="100%" id="tblresult" bgcolor="#FFFFFF" style="table-layout: auto;">
    <tr>
        <td>#</td>
        <td>Domain</td>
        <td align="center"></td>
    </tr>
</table>
</body>
</html>