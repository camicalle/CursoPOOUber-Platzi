console.log("Hello World")

var car = new Car("ASD123", new Account("Red Kamo", "KAD23"));
car.setPassenger(4);
car.printDataCar()

var uberX = new UberX("QEE123", new Account("Andrea Farra", "12331"), "Chevrolet", "Spark");
uberX.setPassenger(3)
uberX.printDataCar()

var user = new User("Carlos", "123123");
user.printDataAccount()