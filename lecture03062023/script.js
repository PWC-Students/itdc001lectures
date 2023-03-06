// Arithmetic Operators +, -, *, /, %
// Addition
let x = 15;
let y = 25;

let sum = x + y;
console.log(sum);

// Subtraction
let difference = x - y;
console.log(difference);

// Multiplication
let product = x * y;
console.log(product);

// Division
let quotient = x / y;
console.log(quotient);

// Modulo
let i = 29;
let getModulo = 5;

let modulo = i % getModulo; //29 / 5
console.log(modulo);

// Assignment Operators =, +=, -=,,*=, /=, %=

let assignmentNumber = 8; //8

// Addition Assignment Operator
// assignmentNumber = assignmentNumber + 2;
// console.log(assignmentNumber);
assignmentNumber += 2; // 8 + 2 = 10
console.log(assignmentNumber);
assignmentNumber -= 2; // 10 - 2 = 8
console.log(assignmentNumber);
assignmentNumber *= 2; // 8 * 2 = 16
console.log(assignmentNumber);
assignmentNumber /= 2; // 16 / 2 = 8
console.log(assignmentNumber);
assignmentNumber %= 2; // 8 % 2 = 0
console.log(assignmentNumber);

// MDAS - Order of Precedence
let mdas = 1 + 2 - (3 * 4) / 5; // 0
console.log(mdas);

//PEMDAS (Parenthesis, Exponents, Multiplication, Division, Addition and Subtraction)

let pemdas = 1 + (2 - 3) * (4 / 5);
console.log(pemdas); //0.2 //

// Increment and Decrement
let z = 1;

// Pre Increment - add 1 to the value BEFORE
// console.log('The value of z = ' + ++z);

// Post Increment - add 1 to the value AFTER
// console.log('The value of z = ' + z++);
// console.log(z);

// Pre Decrement - minus 1 to the value BEFORE
// console.log('The value of z = ' + --z);

// Post Decrement - minus 1 to the value AFTER
console.log('The value of z = ' + z--);
console.log(z);
