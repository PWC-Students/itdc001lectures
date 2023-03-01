// console.log('Hello world!');

let age = parseInt(prompt('Provide your age')); //Number
let name = prompt('Provide your name'); //String

// we pass arguments as values

function printProfile(name, age) {
  //the paremeters will accept the values
  console.log('My name is ' + name);
  console.log('My age is ' + age);
}

printProfile(name, age);

let isBooleanExample = true; //Boolean

let sampleUndefined; //Undefined
let sampleNull = null; //

const arraySample = ['array1', 'array2', 'array3']; //Array

const profile = {
  firstname: 'Jane',
  lastName: 'Doe',
  age: 30,
  address: 'Davao City',
}; //Object

// Selection Control Structures
let firstNum = parseInt(prompt('Provide your first number'));
let secondNum = parseInt(prompt('Provide your second number'));

// Pascal Case example - SamplePascalCase
// Camel Case example - camelCaseExample

let totalNum = firstNum + secondNum;

// If-Else Statement

if (totalNum >= 30) {
  // you can console log
  // you can call a function
  // you can do arithmetic operations
  // you can use another if-else statement
  // you can use loops here
  printProfile(name, age);
} else if (totalNum <= 29 && totalNum >= 10) {
  console.log(
    'I am printed from else if with condition (totalNum <= 29 && totalNum >= 10)- The totalNum is equal to ' +
      totalNum
  );
} else if (totalNum <= 9 && totalNum >= 0) {
  console.log(
    'I am printed from else if with conditon (totalNum <= 9 && totalNum >= 0) - The totalNum is equal to ' +
      totalNum
  );
} else {
  console.log('I am a negative number ' + totalNum);
}

// Ternary Operation

// const isTotal =
//   totalNum >= 30
//     ? 'The total num is greater than 30'
//     : 'The total is not equal or greater than 30 :(';

// console.log('The total is ' + totalNum);
// console.log(isTotal);
