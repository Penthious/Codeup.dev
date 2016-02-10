"use strict"
var numberButtons = document.getElementsByClassName("buttonNumbers");
var buttonOperator = document.getElementsByClassName("buttonOperators")
var leftInput = document.getElementById("left-input");
var centerInput = document.getElementById("center-input");
var rightInput = document.getElementById("right-input");
var plusOperator = document.getElementById("buttonPlus")
var equalOperator = document.getElementById("buttonEqual")
var calculation = document.getElementById("finalOutCome")
var clearInputs = document.getElementById("clearInputs")
equalOperator.addEventListener("click",calculateNumbers)
clearInputs.addEventListener("click", clearAllInputs)


function addNumberToLeftScreen(event){
    if (centerInput.value == "" && rightInput.value == "") {
        leftInput.value += this.innerHTML;
    };
};

function addOperatorToCenterScreen(event){
    if(leftInput.value != '')
    centerInput.value  = this.innerHTML;
};

function addNumberToRightScreen(event){
    if (leftInput.value != "" && centerInput.value != "") {
        rightInput.value += this.innerHTML;
    };
};

function calculateNumbers(event){
    var firstNumber = Number(leftInput.value);
    var operator = centerInput.value;
    var secondNumber = Number(rightInput.value);
    if (leftInput.value != '' && centerInput != "" && rightInput != "") {
        if (operator == "+") {
            calculation.innerHTML = firstNumber + secondNumber;
        }else if (operator == "-") {
            calculation.innerHTML = firstNumber - secondNumber
        }else if (operator == "*") {
            calculation.innerHTML = firstNumber * secondNumber
        }else if (operator == "/") {
            calculation.innerHTML = firstNumber / secondNumber
        }
}}

function clearAllInputs(event){
    leftInput.value='';
    centerInput.value = "";
    rightInput.value = "";
}

for (var i = 0; i < numberButtons.length; i++) {
    numberButtons[i].addEventListener("click", addNumberToLeftScreen)
};
for (var i = 0; i < buttonOperator.length; i++) {
    buttonOperator[i].addEventListener("click",addOperatorToCenterScreen)
};
for (var i = 0; i < numberButtons.length; i++) {
        numberButtons[i].addEventListener("click",addNumberToRightScreen)
};
