// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'red'; // TODO: change this to your favorite color from the list
var message;
if (color == 'red'){
    message = "This is red";
}else if (color == 'orange'){
    message = 'This is orange';
}else if (color == 'yellow'){
    message = 'This is yellow';
}else if (color == 'green'){
    message = 'This is green';
}else if (color == 'blue'){
    message = 'This is blue';
}else {
    message = "It was either indigo or violet.";
}
    console.log(message);
console.log((favorite == color) ? "This is my favorite color" : "This is not my favorite color");




// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.
