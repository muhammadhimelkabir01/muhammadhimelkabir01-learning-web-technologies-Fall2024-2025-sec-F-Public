<!DOCTYPE html>
<html>
<head>
    <title>Verify Prescription</title>
    <link rel="stylesheet" href="../style.css">
    <script>
        function fetchPrescription() {
            let pid = document.getElementById('pid').value;
            if(pid === "") { alert("Enter ID!"); return; }

            let xhttp = new XMLHttpRequest();
            xhttp.open("POST", "../Controller/PharmacistController.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let response = JSON.parse(this.responseText);
                    let displayDiv = document.getElementById('resultArea');
                    if(response.success) {
                        displayDiv.innerHTML = "<b style='color:green'>Status: " + response.data.status + "</b><br>" +
                            "Patient: " + response.data.patient + "<br>Drug: " + response.data.drug;
                    } else {
                        displayDiv.innerHTML = "<b style='color:red'>" + response.message + "</b>";
                    }
                }
            };
            xhttp.send("action=verify_prescription&prescription_id=" + pid);
        }
    </script>
</head>
<body>
<h1 class="dotted" align="center">Verify Prescription</h1>
<div align="center">
    <fieldset style="width: 50%;">
        <legend style="color:red;">Check Validity</legend>
        <input type="text" id="pid" placeholder="Enter Prescription Code">
        <button type="button" onclick="fetchPrescription()">Check</button>
        <div id="resultArea" style="margin-top: 20px;"></div>
        <br><a href="pharmacistdashboard.php">Back</a>
    </fieldset>
</div>
</body>
</html>