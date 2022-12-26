class Car {
    #passenger;
    constructor(license, driver) {
        this.id;
        this.license = license;
        this.driver = driver;
        this.#passenger;
    }

    getPassenger() {
        return this.#passenger;
    }

    setPassenger(passenger) {
        if (passenger == 4) {
            this.#passenger = passenger;
        } else {
            console.log("Necesitas asignar 4 pasajeros");
        }
    }

    //Metodo
    printDataCar() {
        if (this.#passenger != null) {
            console.log(this.driver)
            console.log(this.driver.name)
            console.log(this.driver.document)
            console.log(this.getPassenger())
        }
    }
}

