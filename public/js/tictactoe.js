var buttonOperator = "x"
var arrayRow1 = [];
var arrayRow2 = [];
var arrayRow3 = [];
var arrayRow4 = [];
var arrayRow5 = [];
var arrayRow6 = [];
var arrayRow7 = [];
var arrayRow8 = [];
var arrayAll = [];
var threeX = ["x", "x", "x"];
var threeO = ["o", "o", "o"];
var countForX = 0;
var countForO = 0;
var tieCount = 0;

$(".btn").on("click",buttonEvent);
$(".arrayRow1").on("click",arrayRow1Push);
$(".arrayRow2").on("click",arrayRow2Push);
$(".arrayRow3").on("click",arrayRow3Push);
$(".arrayRow4").on("click",arrayRow4Push);
$(".arrayRow5").on("click",arrayRow5Push);
$(".arrayRow6").on("click",arrayRow6Push);
$(".arrayRow7").on("click",arrayRow7Push);
$(".arrayRow8").on("click",arrayRow8Push);


function buttonEvent(event){
    if (buttonOperator == "o") {
        $(this).html("x");
        $(this).attr('disabled','disabled');
        buttonOperator = "x";
        $(".turn").html("Turn: O");
    }else if (buttonOperator == "x") {
        $(this).html("o");
        $(this).attr('disabled','disabled');
        buttonOperator = "o";
        $(".turn").html("Turn: X");
    }
};

function arrayRow1Push(event){
    arrayRow1.push(this.innerHTML);
    arrayAll.push(this.innerHTML);
    winTicTacToe(event);
    clearAllForTie(event);
}

function arrayRow2Push(event){
    arrayRow2.push(this.innerHTML);
    arrayAll.push(this.innerHTML);
    winTicTacToe(event);
    clearAllForTie(event);
}

function arrayRow3Push(event){
    arrayRow3.push(this.innerHTML);
    arrayAll.push(this.innerHTML);
    winTicTacToe(event);
    clearAllForTie(event);
}

function arrayRow4Push(event){
    arrayRow4.push(this.innerHTML);
    arrayAll.push(this.innerHTML);
    winTicTacToe(event);
    clearAllForTie(event);
}

function arrayRow5Push(event){
    arrayRow5.push(this.innerHTML);
    arrayAll.push(this.innerHTML);
    winTicTacToe(event);
    clearAllForTie(event);
}

function arrayRow6Push(event){
    arrayRow6.push(this.innerHTML);
    arrayAll.push(this.innerHTML);
    winTicTacToe(event);
    clearAllForTie(event);
}

function arrayRow7Push(event){
    arrayRow7.push(this.innerHTML);
    arrayAll.push(this.innerHTML);
    winTicTacToe(event);
    clearAllForTie(event);

}

function arrayRow8Push(event){
    arrayRow8.push(this.innerHTML);
    arrayAll.push(this.innerHTML);
    winTicTacToe(event);
    clearAllForTie(event);
}

function winTicTacToe(event){
    if (arrayRow1.join() == threeX.join() || arrayRow2.join() == threeX.join() || arrayRow3.join() == threeX.join() || arrayRow4.join() == threeX.join() || arrayRow5.join() == threeX.join() || arrayRow6.join() == threeX.join() || arrayRow7.join() == threeX.join() || arrayRow8.join() == threeX.join()) {
        $(".btn").html("&nbsp;");
        $(".btn").removeAttr('disabled');
        countForX++;
        $(".player1Count").html("Player X score: " + countForX)
        buttonOperator = "x";
        arrayRow1 = [];
        arrayRow2 = [];
        arrayRow3 = [];
        arrayRow4 = [];
        arrayRow5 = [];
        arrayRow6 = [];
        arrayRow7 = [];
        arrayRow8 = [];
        arrayAll = [];
    }

    if (arrayRow1.join() == threeO.join() || arrayRow2.join() == threeO.join() || arrayRow3.join() == threeO.join() || arrayRow4.join() == threeO.join() || arrayRow5.join() == threeO.join() || arrayRow6.join() == threeO.join() || arrayRow7.join() == threeO.join() || arrayRow8.join() == threeO.join()) {
        $(".btn").html("&nbsp;");
        $(".btn").removeAttr('disabled');
        buttonOperator = "o";
        countForO++;
        $(".player2Count").html("Player O score: " + countForO)
        arrayRow1 = [];
        arrayRow2 = [];
        arrayRow3 = [];
        arrayRow4 = [];
        arrayRow5 = [];
        arrayRow6 = [];
        arrayRow7 = [];
        arrayRow8 = [];
        arrayAll = [];
    }
}

function clearAllForTie(event){
    var arrayTieArray = ["x", "x", "x", "o", "o", "x", "x", "x", "o", "o", "o", "o", "x", "x", "o", "o", "x", "x", "o", "o", "o", "x", "x", "x"]
    if (arrayAll.join().length == arrayTieArray.join().length) {
        $(".btn").html("&nbsp;");
        $(".btn").removeAttr('disabled');
        buttonOperator = "o";
        tieCount++;
        $(".tieCount").html("tie: " + tieCount)
        arrayRow1 = [];
        arrayRow2 = [];
        arrayRow3 = [];
        arrayRow4 = [];
        arrayRow5 = [];
        arrayRow6 = [];
        arrayRow7 = [];
        arrayRow8 = [];
        arrayAll = [];
    }
}
