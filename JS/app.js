$(function (){

    $('#btnSubmit').click(function () {

        $.ajax({
            url: 'JSON/database.json',
            dataType: 'json',
            success: function (data) {
                console.log("entre");
                //console.log(JSON.stringify(data));
                $.each(data, function (key, val) {
                    console.log(val.colorIdentity);
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState === 4 && this.status === 200) {
                            document.getElementById("txtHint").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET", "php/magic.php?artist=" + val.artist + "&cmc=" + val.cmc + "&colorIdentity=" + val.colorIdentity + "&colors=" + val.colors + "&edition=" + val.edition
                        + "&manaCost=" + val.manaCost + "&name=" + val.name + "&power=" + val.power + "&rarity=" + val.rarity + "&text=" + val.text + "&toughness=" + val.toughness + "&types=" + val.types, true);
                    xmlhttp.send();

                });
            },
            statusCode: {
                404: function () {
                    alert('There was a problem with the server.  Try again soon!');
                }
            }
        });
    });

    var name = document.getElementById('inputSearch');
    name.addEventListener('input', function () {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "php/search.php?name=" + name.value, true);
        xmlhttp.send();
    });
});
