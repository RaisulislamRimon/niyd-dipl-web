// Spread

const a = [1, 2, 3];

const b = [4, 5];

// Join two lists:
const joined = [...a, ...b];
console.log(joined);

// Safe copy (original untouched)
const copy = [...a];
copy.push(99);

console.log(copy);

const c = [10, 20];
const copied = c;

console.log(`${c} 
    ${copied}`);

c.push(30);

console.log(`${c} 
    ${copied}`);
