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

document.write("<br>");

var student = ["Patuari", "patuari@gmail.com", "123123123"];
document.write(student);

document.write("<br>");
document.write("<br>");

var studentObject = {
  name: "Patuari",
  email: "patuari@gmail.com",
  phone: "123123123",
};

document.write(studentObject);
document.write("<br>");
document.write(studentObject.name);
document.write("<br>");
document.write(studentObject.email);
document.write("<br>");
document.write(studentObject.phone);
document.write("<br>");

document.write("<br>");

var students = [
  { name: "Anwar", email: "anwar@gmail.com", phone: "456456456" },
  { name: "Patuari", email: "patuari@gmail.com", phone: "123123123" },
  { name: "Heater", email: "heater@gmail.com", phone: "789789789" },
];

document.write(students[0]);
document.write("<br>");
document.write(students[0].name);
document.write("<br>");
document.write(students[0].email);
document.write("<br>");
document.write(students[0].phone);
document.write("<br>");

document.write("<br>");

document.write(students[1]);
document.write("<br>");
document.write(students[1].name);
document.write("<br>");
document.write(students[1].email);
document.write("<br>");
document.write(students[1].phone);
document.write("<br>");

document.write("<br>");

document.write(
  students[0].name + " " + students[0].email + " " + students[0].phone,
);

document.write("<br>");
