var products = ["Senter", "Radio", "Antena", "Obeng"];

document.write("<h3>Daftar Produk:</h3>");
document.write("<ol>");
for(let i = 0; i < products.length; i++){
    document.write(`<li>${products[i]}</li>`);
}
document.write("</ol>");

document.write("<h3>Daftar Produk:</h3>");
document.write("<ol>");
products.forEach((data) => {
    document.write(`<li>${data}</li>`);
});
document.write("</ol>");

document.write("<h3>Objek Javascript</h3>");

/* function Person(firstname, lastname){
    this.firstName = firstName;
    this.lastName = lastName;

    this.fullname = function(){
        return `${this.firstName} ${this.lastName}`;
    }
    this.showName = function(){
        document.write(this.fullname());
    }
}

var person1 = new Person("Namaawal", "Namaakhir");
var person2 = new Person("awaldua", "akhirdua");

person1.showName();
document.write(<br></br>);
person2.showName(); */