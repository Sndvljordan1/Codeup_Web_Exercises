// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'indigo'; // TODO: change this to your favorite color from the list

if (favorite == 'red') {
	console.log('RED? My, you sure are a sly one')
} else {
	console.log('Nope')
}

if (favorite == 'orange') {
	console.log('Go UT! ORANGE and white')
} else {
	console.log('Nein')
}

if (favorite == 'yellow') {
	console.log('Let the YELLOW sunshine in')
} else {
	console.log('No')
}

if (favorite == 'green') {
	console.log ('Go Mean GREEN')
} else {
	console.log('Nil')
}

if (favorite == 'blue') {
	console.log ("Sink or swim, I'm diving into the deep BLUE")
} else{
	console.log('Nada')
}

if (favorite == 'indigo') {
	console.log('INDIGO? You are correct')
} else {
	console.log('I do not know anything by that color...')
}

if (favorite == 'violet') {
	console.log('VIOLET you are turning VIOLET')
} else {
	console.log('Violet? I do not know anything by that color...')
}

var message = ('favorite') ? "INDIGO? You are correct": "I do not know anything by that color...";

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.
