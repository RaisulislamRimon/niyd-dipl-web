function mrs(name) {
  console.log("Hello," + name + "!");
}

mrs("Rimon");
mrs("Vai");

const add = function (a, b) {
  return a + b;
};

console.log(add(5, 10));

const multiply = (a, b) => a * b;
console.log(multiply(5, 10));

const something = (n) => n * n;
console.log(something(5));

function total(price, qt) {
  return price * qt;
}

const bill = total(100, 5);
console.log("Your bill is: " + bill + " taka");

function makeTea(sugar = 1) {
  console.log(`make Tea With ${sugar} spoons`);
}

makeTea(1);
makeTea(2);

const something1 = [];
console.log(something1);

const nums = [10, 20, 30, 40];
console.log(nums);
console.log(nums.includes(20));
console.log(nums.includes(88));
console.log(nums.indexOf(20));

// find = first item matching a rule:
const found = nums.find((n) => n > 25);
console.log(found);
