// alert('hello');

//Type Coercion
let num1 = 12;
let num2 = '12';
let coercionA = num1 + num2;

console.log(coercionA);
console.log(typeof coercionA);

//Type
let numA = 12;
let numB = 11;
let coercionB = numA + numB;
console.log(typeof coercionB);

let numC = true + 1;
let numD = true + true;
console.log(numC);
console.log(numD);
console.log(typeof numC);
console.log(typeof numD);

let undef;
let n = null;
let nAn = undef + n;
console.log(typeof undef);
console.log(typeof n);
console.log(undef + n);
console.log(typeof nAn);

//Relational Operators - ==, !=, >, <, >=, <=

//Comparison Operators
//Equality Operator(==) - checks whether the operands are equal - REGARDLESS OF THE DATA TYPE
let varA = 12;
let varB = '12';
let varC = 13;

console.log(varA == varB);

//Strict Equality Operator(===) - checks whether the operands are equal and STRICTLY CHECKING THE DATA TYPE AS WELL
console.log(varA === varB);

//Inequality Operator(!=) - checks whether the operands are NOT EQUAL - REGARDLESS OF THE DATA TYPE
console.log(varA != varB);

//Strict Inequality Operator (!==)  checks whether the operands are NOT EQUAL and STRICTLY CHECKING THE DATA TYPE AS WELL
console.log(varA !== varB);

//Logical Operators
let isLegalAge = true;
let isRegistered = false;

//AND Operator - (&&) - strictly checks that both operands are TRUE
let allRequirements = isLegalAge && isRegistered;
console.log(allRequirements);

let x = 10 > 0; //true
let y = 8 < 9; //true
console.log(x && y);

//OR Operator - (||) - at least one of the operands are true, it will return TRUE
let isDebut = isRegistered || isLegalAge;
console.log(isDebut);

//NOT Operator - returns the opposite value
console.log(!isDebut);
console.log(!allRequirements);

let isTrue = true;
let isFalse = false;

let falses = isTrue && isFalse;

console.log(!falses);

//Decision Control Structures - IF-ELSE AND SWITCH STATEMENTS
/*
    IF-ELSE Statement

    if( condition ){
        statement
    } else {

    }
*/

/*
    IF-ELSE IF Statement

    if( condition ){
        statement
    } else if( condition){

    }
*/

/*
    IF-ELSE IF ELSE Statement

    if( condition ){
        statement
    } else if( condition){

    } else {

    }
*/

//Switch Statement
/*
switch(expression) {
    case 'male':
        //code block
        break;
    case 'female':
        //code block
        break;
    default:
        //code block
        break;
}

*/
