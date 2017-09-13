$(function (){

    $('#btnSubmit').click(function () {

        $.ajax({
            url: 'JSON/database.json',
            dataType: 'json',
            success: function (data) {

                $.each(data, function (key, val) {
                    if (typeof val.artist === "undefined") { val.artist = "empty"; console.log(val.artist); }
                    if (typeof val.cmc === "undefined") { val.cmc = "empty"; console.log(val.cmc);}
                    if (typeof val.colorIdentity === "undefined") { val.colorIdentity = "empty"; console.log(val.colorIdentity);}
                    if (typeof val.color === "undefined") { val.colors = "empty"; console.log(val.color);}
                    if (typeof val.edition === "undefined") { val.edition = "empty"; console.log(val.edition);}
                    if (typeof val.manaCost === "undefined") { val.manaCost = "empty"; console.log(val.manaCost);}
                    if (typeof val.name === "undefined") { val.name = "empty"; console.log(val.name);}
                    if (typeof val.power === "undefined") { val.power = "empty"; console.log(val.power);}
                    if (typeof val.rarity === "undefined") { val.rarity = "empty"; console.log(val.rarity);}
                    if (typeof val.text === "undefined") { val.text = "empty"; console.log(val.text);}
                    if (typeof val.toughness === "undefined") { val.toughness = "empty"; console.log(val.toughness);}
                    if (typeof val.types === "undefined") { val.types = "empty"; console.log(val.types);}


                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState === 4 && this.status === 200) {
                            document.getElementById("txtHint").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET", "php/magic.php?artist=" + val.artist + "&cmc=" + val.cmc + "&colorIdentity=" + val.colorIdentity + "&colors=" + val.color + "&edition=" + val.edition
                        + "&manaCost=" + val.manaCost + "&name=" + val.name + "&power=" + val.power + "&rarity=" + val.rarity + "&text=" + val.text + "&toughness=" + val.toughness
                        + "&types=" + val.types, true);
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

    var wrapper = document.getElementById('wrapper');
    var name = document.getElementById('nameSearch');
    var edition = document.getElementById('editionSearch');

    wrapper.addEventListener('input', function () {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "php/search.php?name=" + name.value + "&edition=" + edition.value, true);
        xmlhttp.send();
    });

    $('#btnDelete').click(function () {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "php/delete.php", true);
        xmlhttp.send();
    });


    $.ajax({
        url: "JS/test.js",
        dataType: "script",
        success: function () {
            test();
        }
    });
});
