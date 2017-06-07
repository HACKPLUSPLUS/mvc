function createNewPerson(name) {
    var obj = {};
    obj.name = name;
    obj.greeting = function () {
        alert('Hi I am ' + this.name + '.');
    }
    
    return obj;
}
var salva = createNewPerson('Salva');
salva.name;
salva.greeting();

function Person(first, last, age, gender, interests) {
    this.name = {
        first,
        last
    };
    this.age = age;
    this.gender = gender;
    this.interests = interests;
    this.greeting = function() {
        alert('Hi there ' + this.name.first + '.');
    };
}
Person.prototype.farewell = function() {
    console.log(this.name.first + ' has left the building.');
}

var user = new Person('James', 'Wilkinson', 32, 'Male', ['music', 'skiing']);
user.greeting();
user.farewell();

//Constructor with property definitions
function Test(a, b, c, d) {
    //property definitions
};

//First method definition
Test.prototype.x = function() {
    
}
//Second method definition
Test.prototype.y = function() {

}