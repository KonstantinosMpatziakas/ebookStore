var xmlhttp;


function show_customers() {
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = show_customers_json;
    xmlhttp.open("POST", "internal/customers.php", true);
    xmlhttp.send();
}


function show_customers_json() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("maincon").innerHTML = xmlhttp.responseText;
    }
}

function show_orders() {
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = show_orders_response;
    xmlhttp.open("GET", "ajax/show_orders.php", true);
    xmlhttp.send();
}

function show_orders_response() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("maincon").innerHTML = xmlhttp.responseText;
    }
}

function add2cart() {
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = add_response;
    xmlhttp.open("POST", "ajax/add2cart.php", true);
    var var1 = document.getElementById("prodID").value;
    var var2 = document.getElementById("prodQuant").value;
    xmlHttp.send("id=" + var1 + "&quantity=" + var2);
}

function add_response() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("maincon").innerHTML = xmlhttp.responseText;
    }
}


function show_customers_j() {
    $.ajax('ajax/show_users().php', { success: show_customers_jsn });
}


function show_customers_jsn(x, y, z) {
    var o = JSON.parse(x);
    $('#maincontent').html('<table class="table" id="custtable"><thead><tr><th>ID</th><th>Fname</th><th>Lname</th></tr></thead><tbody></tbody></table>');
    for (var i = 0; i < o.length; i++) {
        var t = '<tr><td>' + o[i].ID + '</td><td>' + o[i].Fname + '</td><td>' + o[i].Lname + '</td></tr>';
        $('#custtable TBODY').append(t);

    }

    $.each(o, function(i, x) {
        $('#custtable TBODY').append('<tr><td>' + x.ID + '</td><td>' + x.Fname + '</td><td>' + x.Lname + '</td></tr>');
    });
}