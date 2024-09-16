// const users = [
//     [
//         'full_name' => 'Mickaël Andrieu',
//         'email' => 'mickael.andrieu@exemple.com',
//         'age' => 34,
//     ],
//     [
//         'full_name' => 'Mathieu Nebra',
//         'email' => 'mathieu.nebra@exemple.com',
//         'age' => 34,
//     ],
//     [
//         'full_name' => 'Laurène Castor',
//         'email' => 'laurene.castor@exemple.com',
//         'age' => 28,
//     ],
// ];
console.log("c");

const usersObject = [
  (obj1 = {
    name: "prenom",
    age: "25",
  }),
  (obj2 = {
    name: "prenom",
    age: "25",
  }),
  (obj3 = {
    name: "prenom",
    age: "25",
  }),
];
for (let i = 0; i < 10; i++) {
  console.log(usersObject[i].age);
}
