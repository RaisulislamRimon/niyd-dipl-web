// ...numbers collects all inputs:

function sum(...numbers) {
  let total = 0;
  for (const n of numbers) total += n;
  return total;
}

console.log(sum(1, 2));
console.log(sum(1, 2, 3, 4, 5));

function intro(first, ...others) {
  console.log("First: ", first);
  console.log("Others: ", others);
}
