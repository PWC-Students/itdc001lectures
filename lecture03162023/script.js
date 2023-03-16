// alert('Hello');

// ----------- Exponent Operator
//Before ES6
// const firstNum = Math.pow(8, 3);
// console.log(firstNum);

//After ES6
// const secondNum = 8 ** 3;
// console.log(secondNum);

// ----------- Template Literals

//Pre-Template Literals
// console.log('The firstnum and secondnum are ' + firstNum + ' ' + secondNum);

//After ES6
// console.log(`The firstnum is ${firstNum} and secondnum is ${secondNum}`);
// let result = `Firstnum : ${firstNum} and SecondNum: ${secondNum}`;

// console.log(result);

// const anotherMessage = `
// Firstnum: ${firstNum}
// SecondNum: ${secondNum}
// `;

// console.log(anotherMessage);

// ----------- Array Destructing

// const arr = ['Juan', 'Dela', 'Cruz'];

//Pre-Array Destructing
// console.log(arr[0]);
// console.log(arr[1]);
// console.log(arr[2]);

//After ES6
// const [firstName, middleName, lastName, age] = arr;

// console.log(firstName);
// console.log(middleName);
// console.log(lastName);

// ----------- Object Destructing

//Pre Object Desctructing
// const person = {
//   givenName: 'Juan',
//   maidenName: 'Dela',
//   familyName: 'Cruz',
// };

// console.log(person.givenName);
// console.log(person.maidenName);
// console.log(person.familyName);

//After ES6
// const { familyName, maidenName, givenName } = person;

// console.log(givenName);
// console.log(maidenName);
// console.log(familyName);

// let printThis = 'Hello';

// function sampleFunc2(printThis) {
//   console.log(`${printThis} World`);
// }

// sampleFunc2(printThis);

//After ES6
// const sampleFunc = (printThis) => console.log(`${printThis} Earth`);

// sampleFunc(printThis);
// sampleFunc2(printThis);

// Spread Operator

// let hello = ['h', 'e', 'l', 'l', 'o'];

// let arr2 = [...hello];
// console.log(arr2);

// let hi = ['h', 'i', ...hello];
// console.log(hi);

// let sentence = ['Ako', 'Si', 'Juan', 'Dela', 'Cruz'];
// concat(...sentence);

function sum(num) {
  return num;
}

let numbers = [1, 2, 3, 4, 5, 10, 11, 7];
console.log(sum(...numbers));
console.log(numbers);
