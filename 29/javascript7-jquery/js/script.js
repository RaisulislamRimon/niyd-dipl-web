var data = [
  10,
  20,
  30,
  "NIYD",
  "Hi",
  "Hello",
  "Good",
  "Morning",
  "Noon",
  "Afternoon",
  "Evening",
  true,
  10.3,
];

document.write(data);
document.write("<br>");
document.write(data[6]);
document.write("<br>");
document.write(data[10]);
document.write("<br>");
document.write(data[14]);
document.write("<br>");

for (key in data) {
  document.write(data[key] + " ");
}

document.write("<br>");

for (key in data) {
  document.write(key + " ");
}
