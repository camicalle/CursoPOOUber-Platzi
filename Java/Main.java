class Main {
    public static void main(String[] args) {
        System.out.println("Hello World");
        
        Car car = new Car("ASW123", new Account("Andrés Herrra", "12345"));
        car.setPassenger(3);
        car.printDataCar();

        UberX uberX = new UberX("SSA211", new Account("Andrea Ferre", "12222"), "Chevrolet", "Spark");
        uberX.setPassenger(4);
        uberX.printDataCar();

        UberVan uberVan = new UberVan("WDF123", new Account("Fabian Lora", "12333"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();

        User user = new User("Carlos", "123333");
        user.printDataAccount();
    }
}