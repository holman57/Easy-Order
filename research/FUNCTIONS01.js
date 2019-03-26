var var_data = 0;
var numTiles = 0;

function doSomething() {
    var getBETA = document.createElement('div');
    getBETA.setAttribute('id', 'r' + numTiles);
    getBETA.className = "result";
    document.getElementById("t" + numTiles).appendChild(getBETA);
    document.getElementById("r" + numTiles).innerHTML = "numTiles: " + numTiles;
    $.ajax({
        url: 'BETA.php',
        data: {var_PHP_data: var_data},
        success: function (data) {
            var x = "#r" + ( numTiles - 1 );
            $(x).html(data);
        }
    });
}

function myFunction() {
    var myFunc = document.createElement('p');
    myFunc.setAttribute('id', 'demo');
    myFunc.className = "demo";
    document.body.appendChild(myFunc);
    document.getElementById("demo").innerHTML = "Execute";
}

function generateTile() {
    var tile = document.createElement('div');
    var winWidth;
    var winHeight;
    getSize(winWidth, winHeight);
    tile.style.width = winWidth;
    tile.style.height = "20%";
    //	tile.style.position = "fixed";
    //	tile.style.background = "#FFFFFF";
    tile.setAttribute('id', 't' + numTiles);
    tile.className = "tile";
    tile.style.border = "7px solid #000000";
    document.body.appendChild(tile);

    doSomething();
    numTiles++;
    var_data++;
}

function getSize(myWidth, myHeight) {
    var myWidth = 0, myHeight = 0;
    if (typeof( window.innerWidth ) == 'number') {
        //Non-IE
        myWidth = window.innerWidth;
        myHeight = window.innerHeight;
    } else if (document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight )) {
        //IE 6+ in 'standards compliant mode'
        myWidth = document.documentElement.clientWidth;
        myHeight = document.documentElement.clientHeight;
    } else if (document.body && ( document.body.clientWidth || document.body.clientHeight )) {
        //IE 4 compatible
        myWidth = document.body.clientWidth;
        myHeight = document.body.clientHeight;
    }
//	  window.alert( 'Width = ' + myWidth );
//	  window.alert( 'Height = ' + myHeight );
}

