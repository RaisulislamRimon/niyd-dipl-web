class Student {
  constructor(name, dept) {
    this.name = name;
    this.dept = dept;
  }

  introduce() {
    console.log(`I am ${this.name} from ${this.dept}`);
  }
}

const s1 = new Student("Rahim", "CSE");
const s2 = new Student("Ayesha", "EEE");

s1.introduce();
s2.introduce();
