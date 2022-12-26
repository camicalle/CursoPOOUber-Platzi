class User extends Account {
    public User(String name, String document) {
        super(name, document);
    }    

    void printDataAccount() {
        System.out.println("Name: " + name + " Document: " + document);
    }
}
