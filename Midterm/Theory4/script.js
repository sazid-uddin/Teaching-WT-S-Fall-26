// console.log("Hello from external JS");

let x = 5;
let x2 = 5.5;
let y = "ABC";
let z = true;

let a;
// null needs to be manually set, 
// undefined is automatically set at variable declaration (both type and value)
// a = null;

let arr = [1,2,3];
let person = {
	name: "Rahim",
	age: 15
};

let myfunc = () => {
	console.log("I am a function");
}

console.log(typeof(x));
console.log(typeof(x2));
console.log(typeof(y));
console.log(typeof(z));
console.log(typeof(a));
console.log(a);
console.log(typeof(arr));

console.log(typeof(person));
console.log(typeof(myfunc));

let str0 = 'My name is John';
let str1 = "The person's name is John";
let str2 = 'My name is "John"';
let str3 = 'The person\'s name is "John"';
let str4 = "The person's name is \"John\"";

document.addEventListener("DOMContentLoaded")
