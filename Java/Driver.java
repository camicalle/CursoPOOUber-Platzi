class Driver extends Account {
    public Driver(String name, String document) {
        super(name, document);
    }    

    void printDataAccount() {
        System.out.println("Name: " + name + " Document: " + document);
    }
}