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

const prices = [100, 200, 300];
console.log(prices);

// map -> change every item
const doubled = prices.map((p) => p * 2);
console.log(doubled);

// filter -> keep some item
const cheap = prices.filter((p) => p < 250);
console.log(cheap);

// original is never touched
console.log(prices);

const bills = [120, 80, 250];

// add everything together
const totals = bills.reduce((sum, item) => sum + item, 0); // start counting from 0
console.log("Total: ", totals);

const names = ["Rahim", "Ayesha", "Karim"];
console.log(names);

names.sort();
console.log(names);

names.reverse();
console.log(names);

console.log(names.join("-"));

console.log([30, 4, 100]);
console.log([30, 4, 100].sort((a, b) => a - b));

const phone = {
  brand: "Samsung",
  model: "A54",
  price: 45000,
};

console.log(phone);
console.log(phone.brand);
console.log(phone["brand"]);

console.log(phone.price);
console.log(phone["price"]);

phone.price = 42000;
phone.color = "Black";

console.log(phone);
console.log(phone.color);
console.log(phone["model"]);

const account = {
  owner: "Rahim",
  balance: 5000,
  deposit(amount) {
    this.balance += amount;
    console.log(this.owner, "now has", this.balance);
  },
};

account.deposit(2000);
account.deposit(500);
